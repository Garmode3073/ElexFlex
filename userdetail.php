<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php 
session_start();
require 'db_connection.php';
$conn = Connect();
?>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/head.css">
    <link rel="stylesheet" href="assets/css/foot.css">
    <title>ELEXFLEX | My Account | Personal Details</title>
    <style>
      main{
        position:fixed;
        top: 15%;
        left: 0;
        right: 0;
        bottom: 10%;
        overflow-x: hidden; 
        overflow-y: auto;
        background:#F76C5C;
      }
      input{
        margin-left: 25%;
        margin-right: auto;
        width: 50%;
        margin-bottom: 40px;
        font-size: 18px;
        padding-top: 2px;
        padding-bottom: 2px;
        padding-right: 3px;
        padding-left: 3px;
        border: none;
        box-shadow: 0px 0px 10px 4px #C72C1C;
      }
    </style>
  </head>
  <body>
    <header>
      <!--Header-->
      <?php
      include 'assets/html/header.html';
      ?>
      <!--Header-->
    </header>
    <main>
      <!-- Main Body -->
      <form action="" method="post">
      <?php
      mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
      $mysqli = new mysqli("localhost","root","","elexflex");

      if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }
      $sql = "SELECT * FROM user_acc WHERE username = '".$_SESSION["user"]."';";
      $res = mysqli_query($mysqli, $sql);
      $row= mysqli_fetch_assoc($res);
      $sql1 = "SELECT * FROM user_data WHERE username = '".$_SESSION["user"]."';";
      $res1 = mysqli_query($mysqli, $sql1);
      $row1= $res1!=false?mysqli_fetch_assoc($res):[];
      echo '<div class= "udata">
      <div id="namediv"><br>ENTER YOUR NAME<br>
          <input type="Fname" 
                 class="form-control" 
                 id="inputfname" 
                 placeholder="First Name"
                 value = '.$row1["fname"].'>
          
          <input type="Mname" 
                 class="form-control" 
                 id="inputmname" 
                 placeholder="Middle Name"
                 value = '.$row1["mname"].'>
          
          <input type="Lname" 
                 class="form-control" 
                 id="inputlname" 
                 placeholder="Last Name"
                 value = '.$row1["fname"].'>
   </div><br>
   
   <div id="contactdiv"><br>CONTACT DETAILS AND DATE OF BIRTH<br>
          <input type="date"
                 class="form-control"
                 id="inputdate"
                 placeholder="Date of Birth"
                 value = '.$row1["dob"].'>
   
          <input type="text"
                 class="form-control"
                 id="inputnumber"
                 placeholder="mobile number"
                 value = '.$row1["mob-no"].'>
   
          <input type="email"
                 class="form-control"
                 id="inputemail"
                 placeholder="email"
                 value = '.$row1["email"].'>
   </div>
   <br>
   
   <div id="qualifdiv">      <br>ENTER QUALIFICATIONS<br>
   
          <input type="text"
                 class="form-control"
                 id="inputqualification"
                 placeholder="Qualification">
          
          
   </div>
  </div>';
      ?>
      </form>
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

<!-- 
if(!$res){
          echo 'Error:  , $sql . "<br>" , $mysqli->error';
      } -->