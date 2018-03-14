<?php


$iden = mysql_connect("localhost", "root", "")

if(!($iden)) die("Error: No se pudo conectar");
	
  // Selecciona la base de datos 
  if(!mysql_select_db("proyectoempleados", $iden)) 
    die("Error: No existe la base de datos");


if($iden){

	echo "conexion exitosa";
}



$id = $_POST["numeroEmpleado"];
$name = $_POST["nombre"];
$adress = $_POST["direccion"];


$sentencia = "INSERT INTO empleado VALUES ($id,$name,$adress)";

 $resultado = mysql_query($sentencia, $iden); 
  if(!$resultado) 
    die("Error: no se pudo realizar la consulta");



?>