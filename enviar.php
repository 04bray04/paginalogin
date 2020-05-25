<?php
require "conf/conexion.php";
$id=$_POST["id"];
$nom=$_POST["nombre"];
$email=$_POST["email"];
$pass=$_POST["password"];
$cre=$_POST["created"];
$mod=$_POST["modified"];
$encrypted_mypassword=md5($pass);
$respuesta=insertarusuario($id,$nom,$email,$encrypted_mypassword,$cre,$mod);
echo ($respuesta);

?>