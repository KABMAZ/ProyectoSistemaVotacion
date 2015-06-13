
<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    </head>
    <body>
<?php
include './clases/Coneccion.php';
include './clases/Votante.php';
include './clases/VotanteControlador.php';

$votanteA = new VotanteControlador();

 if(isset($_REQUEST['bot'])){
           $votanteA->setId('id');
           $votanteA->setDui($_REQUEST['dui']);
           $votanteA->setNombre($_REQUEST['nombre']);
           $votanteA->setApellido($_REQUEST['apellido']);
           $votanteA->setFoto($_REQUEST['Foto']);
           $votanteA->setGenero($_REQUEST['Genero']);
           $votanteA->setFecha_vencimiento($_REQUEST['fecha_vencimiento']);
           $votanteA->setDireccion($_REQUEST['direccion']);
           $votanteA->setId_depa($_REQUEST['departamento']);
           $votanteA->setId_muni($_REQUEST['municipio']);
           $datosObj=array($votanteA->getId(),
                           $votanteA->getDui(),
                           $votanteA->getNombre(),
                           $votanteA->getApellido(),
                           $votanteA->getFoto(),
                           $votanteA->getGenero(),
                           $votanteA->getFecha_vencimiento(),
                           $votanteA->getDireccion(),
                           $votanteA->getId_depa(),
                           $votanteA->getId_muni());      
           print "<div id='dialogo' title='Exito' style='display: none;'>";
           print '<p>Mensaje: ';
           print $votanteA->modificarDatos($con,$datosObj);
           print '<span class="badge glyphicon glyphicon-ok"></span></p>';
           print '<a href=\'manejadorvotante.php?accion=con\'>Ver datos</a>';
            print "</div>";
        }
?><script>
$(document).ready(function(){
   $("#dialogo").dialog();
});
</script>    
    </body>
    </html>