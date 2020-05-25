 <?php
session_start();
if(isset($_SESSION['id'])) 
{ 
  
    $id= $_SESSION['id'];

}else
{
    header("Location: /login?error=is");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<input type="hidden" id="idusuario" name="idusuario" value="<?=$id?>">
	<?php
		include 'src/menu.php';
	?>
	<div class="contenido">
		
	</div>
</body>

</html> 