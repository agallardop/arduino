<?php 

$temperatura = $_GET['temp'];
$humedad = $_GET['hum'];

echo 'La temperatura es: '.$temperatura.'<br> La humedad es: '.$humedad;

//Se realiza la conexion de base de datos a continuacion

$usuario ="root"; 
$contraseña = ""; 
$servidor = "localhost"; 
$basededatos = "esp8266"; 

//Abrir una conexión al Servidor de MySQL 

$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos"); 

$db = mysqli_select_db($conexion, $basededatos ) or die ("No se ha podido seleccionar la Base de datos"); 

//Fecha actual en formato UNIX 
$fecha = time(); 

//Consulta y valores que vamos a enviar 
$consulta = "INSERT INTO datos (fecha, temperatura, humedad) VALUES (".$fecha.", ".$temperatura.", ".$humedad.")"; 

//Ejectutar la consulta
$resultado = mysqli_query( $conexion, $consulta ); 

 ?>