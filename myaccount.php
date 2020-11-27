<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/head.css">
    <link rel="stylesheet" href="assets/css/foot.css">
    <title>ELEXFLEX | My Account</title>
    <style>
      main{
        position:fixed;
        top: 15%;
        left: 0;
        right: 0;
        bottom: 10%;
        overflow-x: hidden; 
        overflow-y: auto;
      }
    </style>
  </head>
  <body>
    <!--Connection-->
    <?php
      include 'db_connection.php';
      $conn = Connect();
    ?>
    <!--Connection-->
    <header>
      <!--Header-->
      <?php
      include 'assets/html/header.html';
      ?>
      <!--Header-->
    </header>
    <main>
      <!-- Main Body -->
      <?php
      if(isset($_SESSION['user'])&& $_SESSION['type']=='Customer'){
      ?>
      <a href="./logout.php"><button>Sign Out</button></a>
      <?php
      }
      elseif(isset($_SESSION['user'])&& $_SESSION['type']=='Seller'){
      ?>
      <?php
      }
      else{
          include './login.php';
          include './signup.php';
      }
      ?>
      <!-- Main Body -->
    </main>
    <footer>
    <!--Footer-->
    <?php
    include 'assets/html/footer.html';
     ?>
     <!--Footer-->
    </footer>
  </body>
</html>
