<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar Inventario</title>
    <link rel="stylesheet" href="procesar.css">
</head>
<body>
    <h1>Procesar Inventario</h1>
    <div class="container">
 <?php
// Verificamos si los datos llegaron por POST
session_start(); 

// 1. Si la lista de precios no existe en la memoria, la creamos vacía
if (!isset($_SESSION['lista_precios'])) {
    $_SESSION['lista_precios'] = [];
}

if (!isset($_SESSION['Producto'])) {
    $_SESSION['Producto'] = [];
    
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accion = $_POST['accion'];

    if ($accion == "agregar") {
       $nombre = trim($_POST['nombre']); // trim elimina espacios vacíos al inicio/final
    $precio = $_POST['precio'];

    // --- VALIDACIÓN BÁSICA ---
    if (empty($nombre) || !is_numeric($precio) || $precio <= 0) {
        echo "<div style='color:red; border:1px solid red; padding:10px;'>";
        echo "❌ Error: El nombre no puede estar vacío y el precio debe ser mayor a 0.";
        echo "</div>";
        echo '<a href="index.php">Intentar de nuevo</a>';
    } else {
        // Si todo está bien, guardamos
        $precioFinal = (float)$precio;
        $_SESSION['lista_precios'][] = $precioFinal;
        $_SESSION['Producto'][] = $nombre;

        echo "✅ Producto '$nombre' agregado correctamente.";
        echo '<br><a href="index.php">Volver</a>';
        
    } }
    elseif ($accion == "procesar") {
        echo "Generando reporte final del inventario..." . "<br>";
        $precio = array_sum($_SESSION['lista_precios']);
        echo "Total del inventario: $$precio" . "<br>";
        $promedio=$precio/count($_SESSION['lista_precios']);
        echo "Precio promedio: $$promedio" . "<br>";
        $maximo=max($_SESSION['lista_precios']);
        echo "Producto más caro: $$maximo" . "<br>";
        $minimo=min($_SESSION['lista_precios']);
        echo "Producto más barato: $$minimo" . "<br>";
        echo "Inventario";
        foreach ($_SESSION['lista_precios'] as $index => $precio) {
                // Usamos el índice para emparejar nombre y precio
                echo "🔹 Producto: " . $_SESSION['Producto'][$index] . " — Precio: $$precio<br>";
            }
        echo '<br><form method="POST"> <button name="accion" value="limpiar">Vaciar Inventario</button></form>';

    } 
        elseif ($accion == "limpiar") {
        // 1. Vaciamos las variables locales de la sesión
        $_SESSION = array(); 

        // 2. Si se desea destruir la sesión completamente (incluyendo la cookie)
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        // 3. Destruimos la sesión en el servidor
        session_destroy();

        // 4. ¡CRUCIAL! Redirigir al index para que el navegador "limpie" la vista
        header("Location: index.php");
        exit(); // Detenemos la ejecución aquí
    }
    }
    
?>
</div>
</body>
</html>