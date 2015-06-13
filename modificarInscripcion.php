<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sistema de votación</title>

<link href="./css/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
<script src="./libs/jquery-2.10.js"></script>
<link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<script src="./libs/validacion/jquery.validate.min.js"></script>
<script src="./libs/validacion/jquery.messages.min.js"></script>
<script src="./libs/jquery-ui/js/jquery.js"></script>
<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="./libs/validacion/validacion_text_y_num.js"></script>

</head>
<body class="inicio">

<?php
include './clases/Conexion.php';
include './clases/inscripcion_cand.php';
include './clases/manejadorcand.php';

$inscripcionA = new modificarIns();


if(isset($_REQUEST['bot'])){
          $inscripcionA->setId_candidato('NULL');
          $inscripcionA->setDui('Dui');
          $inscripcionA->setApellido($_REQUEST['Apellido']);
          $inscripcionA->setNombre($_REQUEST['Nombre']);
          $inscripcionA->setDepartamento($_REQUEST['Departamento']);
          $inscripcionA->setDepartamento($_REQUEST['Municipio']);
          $inscripcionA=array($inscripcionA->getInscripcion_cand(),
                           $inscripcionA->getDui(),
                           $inscripcionA->getApellido(),
                           $inscripcionA->getNombre(),
                           $inscripcionA->getDepartamento(),
                           $inscripcionA->getMunicipio()
                           );
            print "<div id='dialogo' title='Exito' style='display: none;'>";
            print '<p>Mensaje: ';
            print $inscripcionA->modificarDatos($con,$datosObj);
            print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            print '<a href=\'manejadorcand.php?accion=con\'>Ver datos</a>';
            print "</div>";
            

        }
 ?><script>
$(document).ready(function(){
   $("#dialogo").dialog();
});
</script>
      </body>
</html>

