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
    <title>Votante</title>
    <br>
    <br>
    <br>
    <br>
  

<br>
    <!-- Bootstrap core CSS -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet">
     <script src="./libs/validacion/validacion_text_y_num.js"></script>


        <link href="css/css/bootstrap.minm.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/css/dashboard.css" rel="stylesheet">
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
<script>
    texto="";

     var Tletras=new Array ("0","1","2","3","4","5","6","7","8","9","-");
     var z=0;
     var Numero=true
     var Guion=new Array("-");

     function anadir(letra){
  texto=document.f.barra.value;
  if(letra=="\b"){
  numeroLetras=texto.length-1
  texto=texto.substring(0,numeroLetras);
  }
  else{
  if(!Numero){letra=letra.toLowerCase()}
  texto=texto+letra;
  }
  document.f.barra.value=texto;
  }
  function mostrar(){
  if (z==0){z=1;document.getElementById('botones').style.visibility="visible";pregunta.innerHTML="Ocultar teclado";}
  else {z=0;document.getElementById('botones').style.visibility="hidden";pregunta.innerHTML="Mostrar teclado";}
  }
</script>
  <style id="holderjs-style" type="text/css"></style></head>
  <br>
  <br>
  <nav>
     <ul>
     <h5>
   
 
<body class="inicio">
<center>
<p>RESULTADOS:</p> 
<a href="./graficos/graficoPresidencial.php">Gràficos Presidente</a></p>
<a href="./graficos/graficoDiputados.php">Gràficos Diputados</a></p>
<a href="./graficos/graficoAlcaldes.php">Gràficos Alcaldes</a></p>

</center>
<form action="sesionDui.php" method="post" name="f">
<br><br>
<center>
<div style="width:300px">
  <div>
   DUI:
  </div>
  <div>
<input type="Text"  name="barra" onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);"  style="width:200px;border:solid 2px black" class="required form-control" maxlength="10" required="true" placeholder="00000000-0">
</div>

  <?php if (isset($_REQUEST['msg'])) { ?>
                    
                    <div class="row">
                        <div class="col-xs-4"></div>
                        
                        <div class="col-xs-2">
                        
                            <div class='label alert-danger'>
                            <?php  print "DUI NO<br> REGISTRADO O YA <br>HA EMITIDO SUFRAGIO...!!!";?> 
                            </div>
                          
                        </div>

                    </div>
                    
                    <br>
                    <?php }  ?>

<br>
<center><input type="submit" name='bot' value="Entrar" class="btn btn-primary"></center><br>
<a id="pregunta" href=javascript:mostrar()>Mostrar teclado</a><br>

<br>
<br>
<div align=center id="botones" style="font:normal 16px/12px verdana;visibility:hidden;"></div>


<script>
var c="0";
var letras="";
var p=0;
for (a=0;a<Tletras.length;a++){
letras=letras+"<input style='width:80px;' type='Button' value="+Tletras[a]+" onclick=anadir('"+Tletras[a]+"')>&nbsp;";
p=p+1;
if(p==10){p=0;letras=letras+"<br><br>";}
}
document.getElementById('botones').innerHTML=letras+"<input style='width:40px;' alt='Borrar' type='Button' value=&laquo; onClick=anadir('\b')><br><font style='font:20px'></font>";
</script>
</div>
</center>
</form>

</body>
</html>
