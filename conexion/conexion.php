<?php
//Definimos las variables

$host="localhost";
$user="root";
$pass="";
$dbname="prueba";
//Abrimos la conexion
$mysqli=new mysqli($host, $user, $pass,$dbname);
if($mysqli->connect_errno){
	echo "<b>Fallo al conectar a la BD: </b>" . $mysqli->connect_errno . "---" . $mysqli->connect_error;
}
//$mysqli->set_charset("utf8");
return $mysqli;
//$conexion=mysql_connect($host, $user, $pass);
//mysql_select_db($dbname, $conexion) or die("Error de Conexion con la Base de datos.");
//mysql_query("SET NAMES 'utf8'");

?>
