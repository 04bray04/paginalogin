<<?php 
session_start();
$ tiempo de espera = 60; // Número de segundos hasta que se agota el tiempo de espera.
 
// Comprueba si el campo de tiempo de espera existe.
if (isset ($ _ SESSION ['timeout'])) {
    // Ver si el número de segundos desde el último
    // visita es mayor que el tiempo de espera.
    $ duración = tiempo () - (int) $ _ SESIÓN ['tiempo de espera'];
    if ($ duración> $ tiempo de espera) {
        // Destruye la sesión y reiníciala.
        session_destroy ();
        session_start ();
    }
}
 
// Actualiza el campo de tiempo de espera con la hora actual.
$ _SESSION ['timeout'] = time ()
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>	Formulario</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body style="background-color:#EAF4F6">
	<h1>	Registro de usuario </h1>
	<form action="enviar.php" method="POST" method="GET" onsubmit="return validar()">	
		<div  class="redondeado">


		<label>	ID
			<input type="number"  name="id" id="id" required="" >
			</label><br>
			<label>	Nombre
			<input type="text" name="nombre" id="nombre" required="true">
			</label><br>
			<label>	Email
			<input type="email" name="email" id="email" required="true">
			</label><br>
			<label>	Password
			<input type="text" name="password" id="Password" required="true">
			</label><br>
			<label>	Fecha Creacion
			<input type="date" name="created">
			<label>	Fecha Modificacion
			<input type="date" name="modified">
			
			</label><br>
			<button type="submit" >Enviar</button>	
		</div>
	</form>
<div id="mensaje">	</div>
</body>
</html>
