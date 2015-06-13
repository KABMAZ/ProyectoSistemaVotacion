<?php include './clases/Coneccion.php';?>
<?php session_start(); ?>
<?php 
    if (isset($_SESSION['usuario'])) {
        
    

 ?>

<!DOCTYPE html>

<html>
     <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
<center><img src="imagenes/img1.png" width=400 height=150 border=1></center>
    <title>Inicio</title>


<br>
 <!-- Bootstrap core CSS -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/css/dashboard.css" rel="stylesheet">

  </head>
<body class="inicio">

<header>
<li><a href="apertura.php "> Apertura De Elecciones</a></li>
     <li><a href="inscripcionPartido.php">Inscripcion De Partidos</a></li>
     <li><a href="inscripcion_cand.php">Inscripcion de candidatos</a></li>
     <li><a href="dui.php ">Votar y Resultados Preliminares</a></li>
     <li><a href="registro_votante.php">Registro De Votante</a></li> 
      <li><a href="cerrar.php" class="label label-primary">Cerrar Sesion</a></li>
<img src=""><br>
<center><p>Tipo de Candidatura</p></center>
</header>
 

        <form action="validarOpciones.php"  id="opciones" method="post" >
        <center>
                <input class="checkbox-inline"  type="checkbox" name="checkbox[]" id="checkbox" value="Presidentes"> Presidencial <br>
                <input class="checkbox-inline"  type="checkbox" name="checkbox[]" id="checkbox" value="Diputados"> Diputados <br>
                <input class="checkbox-inline"  type="checkbox" name="checkbox[]" id="checkbox" value="Alcaldes"> Alcaldes 
        </center>
<br>
<br>
<br>





<center>
    <h5>Año A Efectuar </h5>
      
      <input type="text" name="year" class="form-control" style="width:200px;border:solid 2px black" class="required form-control" maxlength="4" required="true" placeholder="Ingrese año de apertura">
      


<br>
<br>
<br>

<center>
        <input type="submit" value="Aperturar" name="bot" class="btn btn-primary"/>
</center>        
        </form>
       <div class="col-md-4">
                
            </div>
           
        
        </div>
    </body>
</html>
<?php }else{
    header("Location:inicio_sesion.php");
 } ?>