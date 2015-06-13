<?php include './clases/Coneccion.php';?>
<?php session_start(); ?>
<?php 
    if (isset($_SESSION['usuario'])) {
        
    

 ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
     <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <center><img src="imagenes/Simg1.png" width=400 height=150 border=1></center>

    <title>Inicio</title>

    <!-- Bootstrap core CSS -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   
  <style id="holderjs-style" type="text/css"></style></head>
     <header>
         <div class="row">
            <div class="col-md-2">
                <img src="img/TRIBUNAL.png" width="150" height="100" alt="TRIBUNAL"/>

            </div>
            <div class="col-md-10">
                
            </div>
        </div>
     </header>
    <body>
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
        <h1>Bienvenido</h1>
        <form name="form" action="buscar.php">
         Seleccione:<select name="votar" class="form-control">
             <option value="presidente">Presidente</option>
            <option value="Alcaldes">Alcalde</option>
            <option value="Diputados">Diputados</option>
        </select>
        <br>
        <input type="submit" value="Entrar" name="entrar" class="btn btn-primary"/>
        
        </form>
       <div class="col-md-4">
                
            </div>
           
        
        </div>
    </body>
</html>
<?php }else{
    header("Location:inicio_sesion.php");
 } ?>