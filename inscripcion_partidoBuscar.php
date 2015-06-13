<?php include './clases/Coneccion.php';?>
<pre>
<?php  
$sql ="SELECT * FROM inscripcion_partido WHERE id ='".$_REQUEST['id']."';";
        $datos= consultaD($con, $sql,3)
       ?>
      
       </pre>
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
    

    <title>Inscripcion De partidos</title>
    <br>


<br>
    <!-- Bootstrap core CSS -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet">


        <link href="css/css/bootstrap.minm.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/css/dashboard.css" rel="stylesheet">

   
  <style id="holderjs-style" type="text/css"></style></head>
    <body>
    <li><a href="apertura.php "> Apertura De Elecciones</a></li>
     <li><a href="inscripcionPartido.php">Inscripcion De Partidos</a></li>
     <li><a href="inscripcion_cand.php">Inscripcion de candidatos</a></li>
     <li><a href="dui.php ">Votar y Resultados Preliminares</a></li>
     <li><a href="registro_votante.php">Registro De Votante</a></li> 
      <li><a href="cerrar.php" class="label label-primary">Cerrar Sesion</a></li>

        <form action="modificarPartido.php" method="post" id="partido">
            <input type="hidden" name="id" 
                    value='<?php print $datos[0][0]?>'>
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <h1>Inscripcion de Partido</h1>
            Nombre:<input type="text" name="Nombre" required autocomplete="on" placeholder="Introdusca Nombre de Partido" class="form-control"
                    value='<?php print $datos[0][1]?>'
                    class="required digits form-control"/>
            <br>
            Seleccionar Bandera <input type="file" name="bandera" size="26" required autocomplete="on" value='<?php print $datos[0][2]?>'
                    class="required digits form-control">
            <br>
            DUI <input type="text" name="dui" maxlength="10" required autocomplete="on" placeholder="Introdusca Numero De Dui" class="form-control" required="on"value='<?php print $datos[0][3]?>'
                    class="required digits form-control"/><br>
            Representante:<input type="text" name="representante"required autocomplete="on" placeholder="Introdusca Nombre Del Responsable" class="form-control"
            value='<?php print utf8_decode($datos[0][4])?>'/>
            <br>
            <br>
            <input type="submit" name="bot" class="btn btn-primary"/>
            <input type="submit" value="Cancelar" name="btn" class="btn btn-primary"/>
        </form>
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
