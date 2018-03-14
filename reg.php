<?php
//COnectando a base de datos
 $db = mysqli_connect('localhost','root','','pe')
 or die('Error connecting to MySQL server.');

//definiendo variables
$id = $_POST["numeroEmpleado"];
$name = $_POST["nombre"];
$adress = $_POST["direccion"];
$phone = $_POST["telefono"];
$email = $_POST["correo"];
$dateI = $_POST["fechaIngreso"];
$deparment =$_POST["nombreDepartamento"];
$boss= $_POST["jefe"];



//obteniendo tipo de empleado
if (isset($_POST['radio1'])){

	$tipo = 0;
}else{

	$tipo = 1;
}




$fecha_actual=date("Y-m-d");
$intervalo = $fecha_actual-$dateI;


if($tipo==0){

	$dias = $intervalo;
}

if ($tipo==1) {
	$dias = $intervalo * 2;
}

$diasOcupados = 0;



$query = "INSERT INTO empleado (numero,nombre,direccion,telefono,correo,fechaIngreso,departamento,jefe,dias,diasDisponibles,diasOcupados) VALUES('$id','$name','$adress','$phone','$email','$dateI','$deparment','$boss','$dias','$dias',$diasOcupados)";
mysqli_query($db, $query) or die('Error querying database.');

if ($query) {
	
	echo '<html>
			<head>
			<meta http-equiv="Refresh" content="3;url=http://localhost/web/index.html">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			</head>

			<body>
			<h1>Registro Insertado exitosamente</h1>
			</body>
		  </html>';
}
?>
