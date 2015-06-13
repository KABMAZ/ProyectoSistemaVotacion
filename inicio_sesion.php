
<?php include './clases/Coneccion.php';?>
<!DOCTYPE html>

<html>
     <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Login</title>
    <br>
     <center><img src="imagenes/img1.png" width="650" height="100" alt="imagen"></center>
<br>
    <!-- Bootstrap core CSS -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet">


        <link href="css/css/bootstrap.minm.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/css/dashboard.css" rel="stylesheet">

   
  <style id="holderjs-style" type="text/css"></style></head>
    <body>
        
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <center>
            <h1>Login</h1>
            <form action="sesion.php" method="post" class="login">
              <div><label>Usuario</label> <input name="usuario" type="text"></div>
              <br>
              <div><label>Clave  </label> <input name="clave" type="password"></div>
            <?php if (isset($_REQUEST['msg'])) { ?>
                    <div class="row">
                        <div class="col-xs-4"></div>
                        <div class="col-xs-2">
                            <div class='label alert-danger'>
                               <?php  print "Error al inicio de sesion";?> 
                            </div>
                        </div>
                    </div>
                    <br>
                    <?php }  ?>
           
            
            

            <br>
            <br>

           <input type="submit" name="bot" value="Entrar" class="btn btn-primary">
       </form>
            </div>
            <div class="col-md-3"></div>



</center>


        </div>
        <br>
        <br>
<br>







    </body>
</html>
