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
include './clases/coneccion.php';
include './clases/candidato.php';
include './clases/candidatoControlador.php';

$alumnoA = new CandidatoControlador();

$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if(isset($_REQUEST['bot'])){
           $alumnoA->setId('NULL');
           $alumnoA->setDui($_REQUEST['Dui']);
           $alumnoA->setApellido($_REQUEST['Apellido']);
           $alumnoA->setNombre($_REQUEST['Nombre']);
           $alumnoA->setDepartamento($_REQUEST['Departamento']);
           $alumnoA->setMunicipio($_REQUEST['Municipio']);
           $alumnoA->setCandidatura($_REQUEST['Candidatura']);
           $datosObj=array($alumnoA->getId(),
                           $alumnoA->getDui(),
                           $alumnoA->getApellido(),
                           $alumnoA->getNombre(),
                           $alumnoA->getDepartamento(),
                           $alumnoA->getMunicipio(),
                           $alumnoA->getCandidatura()
                           );         
           print $alumnoA->guardarDatos($con,$datosObj);
           print '<a href=\'manejadorCandidato.php?accion=con\'>Ver datos</a>';
       }else{
           print 'No se ha enviado datos ';
       }
        break;
    case 'con':        
        $sql = 'SELECT * FROM inscripcion_cand';
        $datoss =  consultaD($con, $sql);

        print imprimetabla($datoss,"inscripcion_cand","table table-bordered table-striped",1);
        break;
        default:
        print 'No hay Accion que realizar';
        break;
      }
 ?>  
     </body>
</html>




    
