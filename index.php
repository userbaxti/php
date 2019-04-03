<!-- start config php -->
<?php

  //allow the config
  define('__CONFIG__', true);
  // require config
 require_once 'inc/config.php';


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP Registration From</title>
  </head>
  <body>
<div class="container">
  <!--  form  -->

    <?php 
      echo "Today is : ";
      echo date('Y m d');

     ?>

     <p>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
     </p>
</div>






  <?php include_once "inc/footer.php" ?>

  </body>
</html>