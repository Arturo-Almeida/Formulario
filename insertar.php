<?php
	//conexion con la base de datos y el servidor
	$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("formulario",$link) or die("<h2>Error de Conexion</h2>");

	//obtenemos los valores del formulario
	$nombres = $_POST['nombreuser'];
	$apellidos = $_POST['apellidosuser'];
	$email = $_POST['emailuser'];
	$pass = $_POST['pass'];
	$rpass = $_POST['rpass'];

	//Obtiene la longitus de un string
	$req = (strlen($nombres)*strlen($apellidos)*strlen($email)*strlen($pass)*strlen($rpass)) or die("No se han llenado todos los campos");

	//se confirma la contraseña
	if ($pass != $rpass){
		die('Las contraseñas no coinciden, Verifique <br /> <a href="insertar.html">Volver</a>');
	}

	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO datos VALUES('','$nombres','$apellidos','$email','$pass')",$link) or die("<h2>Error al Insertar los datos</h2>");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="insertar.html";
		</script>
	'
?>