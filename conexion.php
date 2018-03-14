<?php
	$servidor = "localhost";
	$usuario = "root";
	$clave = "";
	$base = "proyectoempleados";

	mysql_connect($servidor,$usuario,$clave)or die("<h2>NO se encuentra els ervidor </h2>");
	mysql_select_db($base);


	$id = $_POST["numeroEmpleado"];
	$name = $_POST["nombre"];
	$adress = $_POST["direccion"];
	$phone = $_POST["telefono"];
	$email = $_POST["correo"];
	$dateI = $_POST["fechaIngreso"];
	$deparment =$_POST["nombreDepartamento"];
	$boss= $_POST["jefe"];

	if (isset($_POST['radio'])){
echo '1 ativado';
}

	$sql = "INSERT INTO empleado VALUES('','$name','$adress','$phone','$email','$dateI','$deparment','$boss')";
	$ejecutar = mysql_query($sql);

	if (!($ejecutar)) {
		echo "Hubo un error";
	}

	else{
		echo "Datos Agregados";
	}

?>