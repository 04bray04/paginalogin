<<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title> Formulario de Registro </title>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body style="background-color:#333">
<div id="envoltura">
<h1 align="center" style="color:#FFFFFF";> Registro de usuario </h1>
</div>
<form id= formulario action="enviar.php" method="POST" method="GET" onsubmit="return validar()" >
<div  class="redondeado">
<label> ID
<input type="number"  name="id" id="id" required="" >
</label><br>
<label> Nombre
<input type="text" name="nombre" id="nombre" required="true">
</label><br>
<label> Email
<input type="email" name="email" id="email" required="true">
</label><br>
<label> Password
<input type="text" name="password" id="Password" required="true">
</label><br>
<label> Fecha Creacion
<input type="date" name="created">
</label><br>
<label> Fecha Modificacion
<input type="date" name="modified">
</label><br><br>
<button type="submit">ENVIAR </button>
</div>
</form>
<div id="mensaje"> </div>
</label>
</body>
</html>

