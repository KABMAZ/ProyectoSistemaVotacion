<?php include './clases/Coneccion.php';?>
<?php session_start(); ?>
<?php 
    if (isset($_SESSION['usuario'])) {
        
    

 ?>
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
    <script type="text/javascript">
            
function justNumbers(e)
{
var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8) || (keynum == 46))
return true;
 
return /\d/.test(String.fromCharCode(keynum));
document.tree.miSelect.options[indice].text
}
var patron = new Array(2,2,4)
var patron2 = new Array(1,3,3,3,3)
var patron3 = new Array(8,1)
function mascara(d,sep,pat,nums){
if(d.valant != d.value){
  val = d.value
  largo = val.length
  val = val.split(sep)
  val2 = ''
  for(r=0;r<val.length;r++){
    val2 += val[r]  
  }
  if(nums){
    for(z=0;z<val2.length;z++){
      if(isNaN(val2.charAt(z))){
        letra = new RegExp(val2.charAt(z),"g")
        val2 = val2.replace(letra,"")
      }
    }
  }
  val = ''
  val3 = new Array()
  for(s=0; s<pat.length; s++){
    val3[s] = val2.substring(0,pat[s])
    val2 = val2.substr(pat[s])
  }
  for(q=0;q<val3.length; q++){
    if(q ==0){
      val = val3[q]
    }
    else{
      if(val3[q] != ""){
        val += sep + val3[q]
        }
    }
  }
  d.value = val
  d.valant = val
  }
}

        </script>

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
                  <img src="imagenes/img1.png" width="500" height="200" alt="img1"/>
                  <center><h2>Registro de Votante</h2></center>


            <form name="votante" action="manejadorvotante.php?accion=save" method="post" id="registro_votante">
                      <h4>Dui</h4><input type="text" name="dui" value="" class="form-control" name="textfield" id="textfield" onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);" 
                       placeholder="00000000-0"  required="on" maxlength="10"/><br>
    
                    <h4>Nombre</h4><input type="text" name="nombre" value="" placeholder="Ingrese su nombre" class="form-control" required=""/><br>
                  
                    
                      <h4>Apellido</h4><input type="text" name="apellido" value="" placeholder="Ingrese su apellido" class="form-control" required=""/><br>
                  
                 <h4>Foto</h4> <input type="File" name="Foto" required="true"><br>

                      Genero:
            Masculino     <input type="radio" name ="Genero" value="Masculino" checked>
            Femenino      <input type="radio" name ="Genero" value="Femenino" checked>
                
                  <h4>Fecha de vencimiento</h4><input type="date" name="fecha_vencimiento" value="" placeholder="Ingrese su fecha" class="form-control" required=""/><br>

                  <h4>Direccion</h4><input type="text" name="direccion" value="" placeholder="Ingrese su Direccion" class="form-control" required=""/><br>

                  <h4>Departamento</h4><input type="text" name="departamento" value="" placeholder="Ingrese su Departamento" class="form-control" required=""/><br>
             
                  <h4>Municipio</h4><input type="text" name="municipio" value="" placeholder="Ingrese su Munjicipio" class="form-control" required=""/><br>
        </select>
      
        <br>
          </select>     
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
<?php }else{
    header("Location:inicio_sesion.php");
 } ?>