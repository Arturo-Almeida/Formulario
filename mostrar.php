<html>
<head>
</head>
<body background="tu_imagen.png">
<?php
	//conexion con la base de datos y el servidor
	$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("formulario",$link) or die("<h2>Error de Conexion</h2>");
    
	//ingresamos la informacion a la base de datos
	$consulta = mysql_query("SELECT * from datos",$link) or die("<h2>Error al Mostrar Los Registros</h2>");

    echo '<table border="3" style="margin: 0 auto;">';
    echo '<tr>';
    echo '<th id="id">ID</th>';
    echo '<th id="nombre">NOMBRE(S)</th>';
    echo '<th id="apellido">APELLIDO</th>';
    echo '<th id="email">EMAIL</th>';
    echo '<th id="pass">CONTRASENA</th>';
    echo '</tr>';

    while ($extraido = mysql_fetch_array($consulta)){
     echo '<tr>';
     echo '<td>'.$extraido['id'].'</td>';
     echo '<td>'.$extraido['nombres'].'</td>';
     echo '<td>'.$extraido['apellidos'].'</td>';
     echo '<td>'.$extraido['email'].'</td>';
     echo '<td>'.$extraido['password'].'</td>';
     echo '</tr>';
    }
    echo '</table>';
?> 
</body>
</html>