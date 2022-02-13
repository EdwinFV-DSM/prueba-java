<?php 

// Conexión
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'panaderia2';
$conexion = mysqli_connect($server, $username, $password, $database)or die ("<center><h1>No se puede conectar con la base de datos\n</h1></center>\n");

mysqli_query($conexion, "SET NAMES 'utf8'");

try {
    //code...
    $pdo = new PDO('mysql:host=localhost; dbname=panaderia2','root', '');
} catch (PDOException $e) {
    //throw $th;
    print "¡Error!: ". $e->getMessage() . "<br>";
    die();
}
