 <?php
session_start();

    $inactividad = 5;
    // Comprobar si $_SESSION["timeout"] está establecida
    if(isset($_SESSION["timeout"])){
        // Calcular el tiempo de vida de la sesión (TTL = Time To Live)
        $sessionTTL = time() - $_SESSION["timeout"];
        if($sessionTTL > $inactividad){
            session_destroy();
            header("/Login/logout.php");
        }
    }
    // El siguiente key se crea cuando se inicia sesión
    $_SESSION["timeout"] = time();

if(isset($_SESSION['id'])) 
{ 
  
    $id= $_SESSION['id'];

}else
{
    header("Location: /login?index=is");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <script >

      function setCookie(cname,cvalue,exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
      function checkCookie() {
  var user=getCookie("username");
  if (user != "") {
    alert("Bienvenido de nuevo  " + user);
  } else {
     user = prompt("Por favor ingrese su nombre: ","");
     if (user != "" && user != null) {
       setCookie("username", user, 30);
     }
  }
}
    </script>
    </head>
    <title>Catalogo de peliculas</title>
  


  <body onload="checkCookie()" style="background-color:#F9F8F6;">

     <input type="hidden" id="idusuario" name="idusuario" value="<?=$id?>">

	<?php
		include 'src/menu.php';
	?>
	<div class="contenido">
		
	</div>
      

  <!-- Carousel -->
<div><center>

    <div id="carouselExampleControls" class="carousel slide col-xl-10 col-md-7 col-sm-6 col-lg-8" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/s4.jpg" alt="1 slide">
     </div>
    <div class="carousel-item">
        <img class="d-block w-100"src="img/s12.jpeg" alt="2 slide">
       </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="img/s13.jpg" alt="3 slide">
    </div>
  <div class="carousel-item">
      <img  class="d-block w-100" src="img/s9.jpg" alt="4 slide">

  </div>
<div class="carousel-item">
    <img class="d-block w-100" src="img/s8.jpg" alt="5 slide">
</div>

<div class="carousel-item">
        <img class="d-block w-100" src="img/s7.jpg" alt="3 slide">
    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="img/s10.jpg" alt="3 slide">
    </div>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div></center><br>
  <!-- Contenido -->
    <div class="row p-3">
        <div class="card bg-light mb-3 p-2 col-7 col-md-4 col-sm-4">
            <img src="img/s1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Iron Man</h5>
            <p class="card-text">Tony Stark, que ha heredado la empresa de armamento Industrias Stark de su padre, está en una Afganistán devastada por la guerra con su amigo y enlace militar, el teniente coronel James Rhodes, para demostrar del nuevo misil «Jericó». Luego de la demostración, el convoy sufre una emboscada y Stark es herido de gravedad por un misil que usan sus atacantes: uno propio de su compañía. Un grupo terrorista llamado los Diez Anillos lo captura y encarcela en una cueva2​. Yinsen, un doctor cautivo con él, implanta un electroimán en el pecho de Stark para evitar que la metralla que lo hirió llegue a su corazón y lo mate ya que es médicamente imposible de retirar. Raza, líder de los Diez Anillos, le ofrece la libertad a Stark a cambio de la construcción de un misil Jericó para el grupo, pero él y Yinsen saben que no cumplirá su palabra.</p>
            <a href="#" class="btn btn-primary">Ver más</a>
            </div>
        </div>
        <div class="card bg-light mb-3 p-2 col-7 col-md-4 col-sm-4">
            <img src="img/s2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Monsters, Inc.</h5>
            <p class="card-text">La ciudad de Monstruópolis es una realidad en la que los monstruos viven ajenos al mundo de los humanos. Excepto en Monsters Inc., una empresa dedicada a asustar a los niños para obtener la energía que abastece la ciudad a partir de sus gritos. Sin embargo, es una tarea muy difícil, ya que cualquier objeto que haya mantenido contacto con un niño es potencialmente tóxico para los monstruos. Por ello, deben ser extremadamente cuidadosos cada vez que los monstruos entran al mundo de los humanos a asustar niños, utilizando las puertas de sus armarios, para no llevar a Monstruópolis nada procedente del mundo humano.

            James P. Sullivan "Sulley", un monstruo de pelo azul de más de 2 metros, posee el récord nunca superado como Asustador de Niños. Michael Wazowski "Mike", un monstruo verde de un solo ojo, es su Ayudante Asustador y mejor amigo. Randall Boggs, un monstruo morado, con forma de lagartija y cualidades camaleónicas, es su némesis al no poder alcanzar a Sulley en la cantidad de sustos.</p>
            <a href="#" class="btn btn-primary">Ver más</a>
            </div>
        </div>
        
        <div class="card bg-light mb-3 p-2 col-7 col-md-4 col-sm-4">
            <img src="img/s14.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Harry Potter</h5>
            <p class="card-text">La historia comienza con la celebración del mundo mágico. Durante muchos años, había sido aterrorizado por el malvado mago Lord Voldemort. La noche del 31 de octubre, mató a Lily y James Potter. Sin embargo, cuando intenta matar a su hijo de 1 año, Harry, la maldición asesina Avada Kedavra se vuelve sobre sí mismo. El cuerpo de Voldemort resulta destruido, pero él sobrevive: no está muerto ni vivo. Por su parte, a Harry solo le queda una cicatriz con forma de rayo en la frente que es el único remanente físico de la maldición de Voldemort. Harry es el único sobreviviente de la maldición asesina, y a raíz de la misteriosa derrota de Voldemort, el mundo mágico empieza a llamarlo como «el niño que sobrevivió».</p>
            <a href="#" class="btn btn-primary">Ver más</a>
            </div>
        </div>
    </div>
     <!-- Footer --> 
   <div class="card-group">
        <div class="card card text-white bg-dark mb-3 col-7 col-md-4 col-sm-4">
            <div class="card-body">
            <h5 class="card-title">Contactenos</h5>
            <p class="card-text">Telefono: 3278944.</p>
            <p class="card-text">Telefono: 247379291</p>
            <p class="card-text">Telefono: 483901847.</p>
        </div>
            
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
    </div>
        <div class="card card text-white bg-dark mb-3 col-7 col-md-4 col-sm-4">
        <div class="card-body">
        <h5 class="card-title">Ubicacion</h5>
        <p class="card-text">Direccion: Calle 100 #13-21</p>
        <p class="card-text">Direccion: Calle 100 #15-19</p>
        </div>
    
            <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
        </div>
  </div>
    <div class="card card text-white bg-dark mb-3 col-7 col-md-4 col-sm-4">
    <div class="card-body">
      <h5 class="card-title">Follow US</h5>
      <img src="img/redes.jpg" class="card-img-top" alt="...">
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
    </div>

</div>
<p align="center">Todos Los Derechos Reservados © 2020 Jessica Carranza- Brayan Daza- Victor Mican </p>  </div>


    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html> 