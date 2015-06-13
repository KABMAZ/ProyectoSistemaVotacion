<?php include './clases/Coneccion.php';?>
<?php session_start(); ?>
<?php 
    if (isset($_SESSION['usuario'])) {
        
    

 ?>
<!DOCTYPE html>
  <html>
     <header>
          <title>Menu </title>
            <meta charset="iso-8859-9">
            </header>
 
             <body background="" text="skyblue" >
             <center><h1>Bienvenid@s <h1></center><br>
       
             <center><img src="imagenes/img1.png" width=400 height=150 border=1></center>
             <br>

           

<br>
<br>



<style>

nav ul li{
display: inline-block;
margin:9px
}

nav ul li:hover {
	-webkit-transform: rotate(deg);
}

nav a {
	padding: 4px;
	border: 1px dotted black;
	border-radius:50px;
	background: pink;
	color: white;
	text-decoration: none;

}

nav a:hover {
	border: 1px solid blue;
	border-radius: 20px; 
	background: white;
	color: pink;
	text-decoration: none;

}

</style>

<center>

<nav>
	 <ul>
     <h4>
     <li><a href="apertura.php "> Apertura De Elecciones</a>
      <br>
     <li><a href="inscripcionPartido.php">Inscripcion De Partidos</a>
      <br>
     <li><a href="incripcion_cand.php">Inscripcion de candidatos</a>
      <br>
     <li><a href="dui.php">Votar Y Resultados Preliminares</a> 
      <br>
     <li><a href="registro_votante.php">Registro De Votante</a> 
       <br>
          
 </h4>
 
	</ul>
</center>
</style>


     
            <article>
               <hr></hr> 
                 <hr></hr> 
          </article>
  
       </body>
   </html>     
   <?php }else{
    header("Location:inicio_sesion.php");
 } ?>