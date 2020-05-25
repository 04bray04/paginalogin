 var cerrar=document.getElementById("cerrar");
 var home=document.getElementById("home");
 
 cerrar.addEventListener('click',function (){
 	console.log('click');
    window.location.replace('/Login/src/cerrarsesion.php'); 
 });

 home.addEventListener('click',function (){
 	console.log('click');
    window.location.replace('/Login/home.php'); 
 });