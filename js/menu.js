 var cerrar=document.getElementById("cerrar");
 var home=document.getElementById("home");
 var insertar=document.getElementById("insertar");
 
 cerrar.addEventListener('click',function (){
 	console.log('click');
    window.location.replace('/Login/src/cerrarsesion.php'); 
 });

 home.addEventListener('click',function (){
 	console.log('click');
    window.location.replace('/Login/home.php'); 
 });
  insertar.addEventListener('click',function (){
 	console.log('click');
    window.location.replace('/Login/insertarusuario.php'); 
 });
  