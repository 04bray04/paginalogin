<?php
if(isset($_GET['error'])){
	$error=$_GET['error'];
}else{
	$error="";
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ingreso</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	
</head>
<body>
	<div class="caja login">

		<form action="javascript:login()" id="login">
			<div><label for="email"> Escriba su correo:<br>
				<input type="email" name="email" id="email">	
			</label></div>
			<div><label for="pwd"> Escriba contraseña:<br>
				<input type="password" name="password" id="pwd">	
			</label></div>
			<input type="hidden" name="error" id="error" value="<?=$error?>">
			<button id="boton">Ingresar</button>
			<div id="mensaje"></div>
	</form>
</div>

</body>
<script type="text/javascript" src="js/iniciarsesion.js"></script>
</html>