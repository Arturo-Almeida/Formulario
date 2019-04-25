<?php
	//conexion con la base de datos y el servidor
	$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("formulario",$link) or die("<h2>Error de Conexion</h2>");

	//obtenemos los valores del formulario
	$email = $_POST['emailuser'];
     
	//Obtiene la longitus de un string
	$req = (strlen($email)) or die("No se han llenado todos los campos");

	//ingresamos la informacion a la base de datos
	mysql_query("DELETE from datos where email='$email'",$link) or die("<h2>Error al Eliminar Usuario</h2>");
	echo'
		<script>
			alert("Eliminacion Exitoso");
			location.href="borrar.html";
		</script>
	'
?> 