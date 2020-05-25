<?php 
require_once "global.php";


		function insertar($str){		
            $respuesta="";
			$conn = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
			if (mysqli_query($conn, $str)) {
				$respuesta="Registro Exitoso";
			} else {
				$respuesta= "Error: ". mysqli_error($conn);
			}
		mysqli_close($conn);
		return $respuesta;
	}

	function consulta($str){		
            $respuesta="";
			$conn = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
			$result=mysqli_query($conn,$str);
			
			if ($result) {
				$respuesta=mysqli_fetch_array($result);
			} else {
				$respuesta= "Error: ". mysqli_error($conn);
			}
		mysqli_close($conn);
		return $respuesta;
	}	
 
	function login($email,$password){
		$arreglo= consulta("SELECT count(*) cuenta FROM `users` WHERE `email`='".$email."' and `password`='".$password."'");
		if (($arreglo)['cuenta']!=0){
			return "exito";
		}else{
			return "<div class='error'>el usuario y contraseÃ±a no corresponden a ninguno registrado en a base de datos</div>";
		}




	}

   function insertarusuario($id,$nom,$email,$encrypted_mypassword,$cre,$mod){
        return insertar("INSERT INTO users(id,nombre,email,password,created,modified) VALUES ('".$id."', '".$nom."', '".$email."', '".$encrypted_mypassword."', '".$cre."','".$mod."')");
    }

?>