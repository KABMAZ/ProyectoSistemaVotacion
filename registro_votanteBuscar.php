<?php include './clases/Coneccion.php';?>
<pre>
<?php  
$sql ="SELECT * FROM registro_votante WHERE id ='".$_REQUEST['id']."';";
        $datos= consultaD($con, $sql,3)
       ?>
      
       </pre>
<html>  
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <title>registro votante</title>
    <link href="css/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css/dashboard.css" rel="stylesheet">
    <style id="holderjs-style" type="text/css"></style></head>

<script language="javascript">

function validarNro(e) {

var key;

if(window.event) // IE

{

key = e.keyCode;

}

else if(e.which) // Netscape/Firefox/Opera

{

key = e.which;

}

if (key < 48 || key > 57)

{

if(key == 46 || key == 8 ) // Detectar . (punto) y backspace (retroceso)

    { return true; }
else 
    { return false; }

}

return true;

}

</script>

<li><a href="apertura.php "> Apertura De Elecciones</a></li>
     <li><a href="inscripcionPartido.php">Inscripcion De Partidos</a></li>
     <li><a href="inscripcion_cand.php">Inscripcion de candidatos</a></li>
     <li><a href="dui.php ">Votar y Resultados Preliminares</a></li>
     <li><a href="registro_votante.php">Registro De Votante</a></li> 
      <li><a href="cerrar.php" class="label label-primary">Cerrar Sesion</a></li>
    <body>
        
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                  <img src="img/img1.png" width="500" height="200" alt="img1"/>
                  <center><h2>Registro de Votante</h2></center>


            <form name="votante" action="modificarVotante.php" method="post" id="registro_votante">
                      <input type="hidden" name="id" 
                    value='<?php print $datos[0][0]?>'>
                    <h4>Dui</h4><input type="text" name="dui" value='<?php print $datos[0][1]?>' class="form-control" name="textfield" id="textfield" onkeypress="javascript:return validarNro(event)" 
                       placeholder="00000000-0"  required="on" maxlength="10"/><br>
    
                    <h4>Nombre</h4><input type="text" name="nombre" value='<?php print $datos[0][2]?>' placeholder="Ingrese su nombre" class="form-control" required=""/><br>
                  
                    
                      <h4>Apellido</h4><input type="text" name="apellido" value='<?php print $datos[0][3]?>'value="" placeholder="Ingrese su apellido" class="form-control" required=""/><br>
                  
                 <h4>Foto</h4> <input type="File" name="Foto" value='<?php print $datos[0][4]?>' required="true"><br>

                      Genero:
            Masculino     <input type="radio" name ="Genero" value='<?php print $datos[0][5]?>' checked>
            Femenino      <input type="radio" name ="Genero" value='<?php print $datos[0][5]?>' checked>
                
                  <h4>Fecha de vencimiento</h4><input type="date" name="fecha_vencimiento" value='<?php print $datos[0][6]?>'value="" placeholder="Ingrese su fecha" class="form-control" required=""/><br>

                  <h4>Direccion</h4><input type="text" name="direccion" value='<?php print $datos[0][7]?>' placeholder="Ingrese su Direccion" class="form-control" required=""/><br>

                  <h4>Departamento</h4><input type="text" name="departamento" value='<?php print $datos[0][8]?>' placeholder="Ingrese su Departamento" class="form-control" required=""/><br>
             
                  <h4>Municipio</h4><input type="text" name="municipio" value='<?php print $datos[0][9]?>' placeholder="Ingrese su Munjicipio" class="form-control" required=""/><br>
         
           <input type="submit" value="Guardar" name="bot" class="btn btn-primary"/>
           
           <input type="reset" value="Limpiar" name="entrar" class="btn btn-primary"/>
           <input type="submit" value="Cancelar" name="btn" class="btn btn-primary"/> 
         </form>
            </div>
            <div class="col-md-4">
                
            </div>
               
        
        </div>
        <h1><a href="Usuario.html">menu</a></h1> 
    </body>
</html>