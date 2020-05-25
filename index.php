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
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
			<!-- vinculo a bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Temas-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	
</head>
<body>
		 

	<div class="caja">
		<div class="Icon">
                    <!--Icono de usuario-->
                   <span class="glyphicon glyphicon-user"></span>
                 </div>
		<form action="javascript:login()" id="login">
			<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
				  <input type="email" class="form-control" name="email" placeholder="Ingrese su correo" id="email" aria-describedby="sizing-addon1" required>

			<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
			<input type="password" name="password" class="form-control" placeholder="******"  id="pwd" aria-describedby="sizing-addon1" required>
			<input type="hidden" name="error" id="error" value="<?=$error?>">
			<button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit">Entrar</button>
				<div class="opcioncontra"><a href="">Olvidaste tu contraseña?</a></div>
			<div id="mensaje"></div>
	</form>
</div>

</body>
<script type="text/javascript" src="js/iniciarsesion.js"></script>
</html>