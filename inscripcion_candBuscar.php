<?php include './clases/Coneccion.php';?>
<pre>
<?php  
$sql ="SELECT * FROM inscripcion_cand WHERE id ='".$_REQUEST['id']."';";
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
    

    <title>Inscripcion De Candidatos</title>
    <br>


<br>
    <!-- Bootstrap core CSS -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet">


        <link href="css/css/bootstrap.minm.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/css/dashboard.css" rel="stylesheet">
     <script src="./libs/validacion/validacion_text_y_num.js"></script>
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


   
  <style id="holderjs-style" type="text/css"></style></head>
    <body>
    <li><a href="apertura.php "> Apertura De Elecciones</a></li>
     <li><a href="inscripcionPartido.php">Inscripcion De Partidos</a></li>
     <li><a href="inscripcion_cand.php">Inscripcion de candidatos</a></li>
     <li><a href="dui.php ">Votar y Resultados Preliminares</a></li>
     <li><a href="registro_votante.php">Registro De Votante</a></li> 
      <li><a href="cerrar.php" class="label label-primary">Cerrar Sesion</a></li>

        <form name="Candidato" action="modificarCandidato.php" method="post" id="registro">
            <input type="hidden" onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);" name="id" 
                    value='<?php print $datos[0][0]?>'>
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <h1>Inscripcion de Candidato</h1>

            Dui:<input type="text" name="Dui"  value='<?php print $datos[0][1]?>' class="form-control" placeholder="00000000-0 " required="on" maxlength="10"/>
            Apellido:<input type="text" onkeydown="return validarLetras(event)" name="Apellido" value='<?php print $datos[0][2]?>' class="form-control" required="on"/>
            Nombre:<input type="text" onkeydown="return validarLetras(event)" name="Nombre"  value='<?php print $datos[0][3]?>' class="form-control" required="on"/>
            Departamento:<input type="text" onkeydown="return validarLetras(event)" name="Departamento"  value='<?php print $datos[0][4]?>' class="form-control" required="on"/>
            Municipio:<input type="text" onkeydown="return validarLetras(event)" name="Municipio"  value='<?php print $datos[0][5]?>' class="form-control" required="on "/>
            Tipo de Candidatura:<select name="Candidatura" class="form-control">
             <option value="Partidario">Partidario</option>
             <option value="Independiente">Independiente</option><br><br>
             </select>
            <br>
            <input type="submit" name="bot" class="btn btn-primary"/>
           
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
