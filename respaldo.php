<?php
//Step1
 $db = mysqli_connect('localhost','root','','pe')
 or die('Error connecting to MySQL server.');


$id = $_POST["numeroEmpleado"];
$name = $_POST["nombre"];
$adress = $_POST["direccion"];
$phone = $_POST["telefono"];
$email = $_POST["correo"];
$dateI = $_POST["fechaIngreso"];
$deparment =$_POST["nombreDepartamento"];
$boss= $_POST["jefe"];

$query = "INSERT INTO empleado (numero,nombre,direccion,telefono,correo,fechaIngreso,departamento,jefe) VALUES('$id','$name','$adress','$phone','$email','$dateI','$deparment','$boss')";
mysqli_query($db, $query) or die('Error querying database.');
?>
