<?php

$db = mysqli_connect('localhost','root','','pe') or die('Error de conexion');


$id = $_POST["id"];
$dia = $_POST["dia"];



$result = mysqli_query($db, "SELECT diasDisponibles FROM empleado WHERE numero = $id"); 
$extraido= mysqli_fetch_array($result);


if ($extraido['diasDisponibles']>0) {
	$query = "INSERT INTO dias (folio,id_empleado,dia) VALUES('','$id','$dia')";
	mysqli_query($db, $query) or die('Error agregando dia ');
	mysqli_query($db,"UPDATE empleado SET diasDisponibles = (diasDisponibles-1), diasOcupados = (diasOcupados+1) WHERE numero = $id") or die('Error cambiando valores de dia ');
}

else{

	echo '<h1>Error: Todos los dias disponibles han sido ocupados</h1>';
}






if ($query) {
	
	echo '<html>
			<head>
			<meta http-equiv="Refresh" content="13;url=http://localhost/web/index.html">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			</head>

			<body>
			<h1>Registro Insertado exitosamente en dias</h1>
			</body>
		  </html>';
}
?>
