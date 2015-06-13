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
    
<center><img src="imagenes/img1.png" width=400 height=150 border=1></center>
    <title>Inscripcion De partidos</title>
 

    <!-- Bootstrap core CSS -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet">
     <script src="./libs/validacion/validacion_text_y_num.js"></script>


        <link href="css/css/bootstrap.minm.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/css/dashboard.css" rel="stylesheet">

    
   
  <style id="holderjs-style" type="text/css"></style></head>

  <nav>
     <li><a href="apertura.php "> Apertura De Elecciones</a></li>
     <li><a href="inscripcionPartido.php">Inscripcion De Partidos</a></li>
     <li><a href="inscripcion_cand.php">Inscripcion de candidatos</a></li>
     <li><a href="dui.php ">Votar y Resultados Preliminares</a></li>
     <li><a href="registro_votante.php">Registro De Votante</a></li> 
      <li><a href="cerrar.php" class="label label-primary">Cerrar Sesion</a></li>
    <body>
        <form name="Partido" action="manejadorPartido.php?accion=save" method="post" id="registro" enctype="multipart/form-data">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <h1>Inscripcion de Partido</h1>
            Nombre:<input type="text" name="nombre" required autocomplete="on" placeholder="Introdusca Nombre de Partido" class="form-control" required="on"/>
            <br>
            Seleccionar Bandera <input type="file" name="bandera" size="26" required autocomplete="on">
            <br>
            DUI <input type="text" name="dui" value="" class="form-control" name="textfield" id="textfield" onkeydown="return validarNumeros(event)"
                       placeholder="00000000-0"  required="on" maxlength="10"/><br>

            Representante:<input type="text" name="representante" required autocomplete="on" placeholder="Introdusca Nombre Del Responsable" class="form-control" required=""/><br>
            <br>
            <br>
            
            <input type="submit" value="Guardar" name="bot" class="btn btn-primary"/>
            <input type="reset" value="Limpiar" name="entrar" class="btn btn-primary"/>
            <input type="submit" value="Cancelar" name="bot" class="btn btn-primary"/>
          
            <br>
            <br>

        </form>
        <br>
            </div>
            <div class="col-md-3"></div>
        </div>

        <br>
        <br>

<br>
<script type="text/javascript">
        $().ready(function () {
            $("#registro").validate({});
        });
        $(document).ready(
            function(){
                $("#fechac").datepicker(    
                    {
                        changeMonth: true,
                        changeYear: true,
                        dateFormat: 'yy-mm-dd',
                        showAnim:'slide'
                    }
                    
                 );
            }
           
       )
    </script>
    </body>
</html>
<?php }else{
    header("Location:inicio_sesion.php");
 } ?>