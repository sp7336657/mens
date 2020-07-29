<?php 

require "code_login.php";

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/registro.css">
    <title>MENSAJERIA</title>
  </head>
  <body>
      
      <div class="container all">
      <div class="ctn-form">
      <img src="img/slider12.jpg" alt="" class="logo">
          <h1 class="title">Iniciar Sesion</h1>

          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

          <label for="">Email</label>
              <input type="text" name="email">
              <span class="msg-error"><?php echo "$email_err"; ?></span>
            <label for="">Contraseña</label> 
              <input type="password" name="password">
              <span class="msg-error"><?php echo "$password_err"; ?></span>
              <input type="submit" value="Iniciar">
          </form>
          <span class="text-footer">Aun no te has registrado
              <a href="registros.php">REGISTRATE</a>
          </span>
 </div>

      
      
     
           <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>