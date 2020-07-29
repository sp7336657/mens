    <?php 
        
        include 'code_registro.php';

   
     ?>
     <!doctype html>
    <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/registros.css">
      <title>Registro</title>
    </head>
    <body>

      <div class="container all">
        <div class="ctn-form">
          <img src="img/slider12.jpg" alt="" class="logo">
          <h1 class="title">Registrarse</h1>

          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 

            <label for="">Nombre de usuario</label>
            <input type="text" name="username">
            <span class="msg-error"> <?php echo $username_err; ?></span>

            <label for="">Email</label>
            <input type="text" name="email">
            <span class="msg-error"> <?php echo $email_err; ?></span>

            <label for="">Contraseña</label> 
            <input type="password" name="password">
            <span class="msg-error"> <?php echo $password_err; ?></span>

           <input type="submit" value="Registrarse">

          </form>

          <span class="text-footer">ya te has registrado
            <a href="index.php">Iniciar Sesion</a>
          </span>
        </div>



         <!--  <div class="ctn-text">
          <div class="capa">
              <h1 class="title-description">lorem  lorem lorem</h1>
              <p class="text-description">LOREM
            </p>
              </div>
          </div>
          </div>
               <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        </body>
    </html> -->