<?php
require_once 'src/Calculo/IntegradorNumerico.php';
use App\Calculo\IntegradorNumerico;
$resultado = null;
$error = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

 try {

 $integrador = new IntegradorNumerico(
 (float)$_POST['t_inicio'],
 (float)$_POST['t_fin'],
 (int) $_POST['precision'],
 (int) $_POST['tipo_carga']
 );

 $resultado = $integrador->calcularEnergiaTotal();
 } catch (Exception $e) {

 $error = $e->getMessage();
 }
}
?>

<!DOCTYPE html>
<html>

<head>
 <title>Cloud Energy Monitor</title>
 <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <div class="container">
 <h1>Monitor de Energía (DataCenter)</h1>
 <form method="POST">
 <label>Tiempo Inicial (s):</label>
 <input type="number" name="t_inicio" step="0.1" required>

 <label>Tiempo Final (s):</label>
 <input type="number" name="t_fin" step="0.1" required>

 <label>Precisión (n subintervalos):</label>
 <input type="number" name="precision" value="1000">

 <label>Tipo de Carga:</label>
    <select name="tipo_carga">
        <option value= 1 name="Normal">t= 2t + 5</option>
        <option value= 2 name="Constante">t= 5</option>
        <option value= 3 name="Fuerte">t^2</option>
    </select>
 <button type="submit">Calcular Joules Consumidos</button>
 </form>
 <?php if ($resultado !== null): ?>
 <div class="result">
 <h3>Consumo Total: <?php echo number_format($resultado,
4); ?> Joules</h3>
 <p>Cálculo basado en la integral definida de la carga del
servidor.</p>
 </div>
 <?php endif; ?>
 <?php if ($error): ?>
 <div class="error"> Error: <?php echo $error; ?></div>
 <?php endif; ?>
 </div>
</body>
</html>