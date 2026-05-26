<?php

class Producto {
    // Atributos
    private $nombre;
    private $categoria;
    private $precio;
    private $stock;

    // Constructor
    public function __construct($nombre, $categoria, $precio, $stock) {
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    //Metodo getinfo()
    public function getInfo() {
        return "Nombre: " . $this->nombre . ", Categoría: " . $this->categoria . ", Precio: " . $this->precio . ", Stock: " . $this->stock;
    }

    //Arreglo indexado con 5 objetos producto

    //Metodo guardar en archivo($ruta)
    public function guardarEnArchivo($ruta) {
        $archivo = "producto.txt";
try {
    if (!file_exists($archivo)) {
        // Si el archivo no existe, se crea automáticamente al abrirlo en modo "w"
        $archivo = fopen($archivo, "w");
        fclose($archivo); // Cerrar el archivo después de crearlo
    }
    
    // Abrir el archivo para escritura (modo "a" para agregar al final del archivo)
    $archivo = fopen($archivo, "a");
    
    // Si no se pudo abrir el archivo, lanzar una excepción
    if (!$archivo) {
        throw new Exception("No se pudo abrir el archivo.");
    }
    //Verificar que si tengan valores los campos
    if (empty($this->nombre) || empty($this->categoria) || !is_numeric($this->precio) || !is_numeric($this->stock)) {
        throw new Exception("Datos inválidos: Todos los campos deben tener valores válidos.");
    } else {
    // Escribir el nuevo nombre en el archivo
    fwrite($archivo, $this->getInfo() . PHP_EOL); // PHP_EOL inserta un salto de línea compatible con el sistema operativo
    }
    // Cerrar el archivo después de escribir
    fclose($archivo);
    
    echo "Nombre registrado correctamente en el archivo.";
    }catch (Exception $e) {
    echo "Ocurrió un error: " . $e->getMessage();
}
}

public static function leerProductosDesdeArchivo($ruta) {
    $productos = [];
    try {
        if (!file_exists($ruta)) {
            throw new Exception("El archivo no existe.");
        }
        
        // file() ya abre, lee y cierra el archivo, devolviendo un array de líneas
        $lineas = file($ruta, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); 
        
        if ($lineas === false) {
            throw new Exception("No se pudo leer el archivo.");
        }

        foreach ($lineas as $linea) {
            $datos = explode(", ", $linea); // Separar los datos por coma y espacio
            if (count($datos) == 4) { // Verificar que haya exactamente 4 elementos
                $nombre    = str_replace("Nombre: ", "", $datos[0]);
                $categoria = str_replace("Categoría: ", "", $datos[1]);
                $precio    = str_replace("Precio: ", "", $datos[2]);
                $stock     = str_replace("Stock: ", "", $datos[3]);
                
                // Crear el objeto y agregarlo al arreglo
                if (empty($nombre) || empty($categoria) || !is_numeric($precio) || !is_numeric($stock)) {
                    throw new Exception("Datos inválidos en el archivo: " . $linea);
                }else {
                $productos[] = new Producto($nombre, $categoria, $precio, $stock);
                }
            }
        }
        
    } catch (Exception $e) {
        echo "Ocurrió un error: " . $e->getMessage() . "<br>";
    }
    // Retornamos el arreglo FUERA del try-catch para que index.php 
    // siempre reciba un array (aunque esté vacío) y no falle el foreach.
        return $productos;
}


}


