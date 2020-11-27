<?php
session_start();

$mysqli = new mysqli("localhost","root","","elexflex");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT * FROM user_acc WHERE username = '".$_POST["uname"]."' and password = '".$_POST["psw"]."';";
$res = $mysqli->query($sql);
$row= mysqli_fetch_assoc($res);
$count=mysqli_num_rows($res);

if($count==0){
    echo '<script>alert("Enterted Username or Password is wrong")</script>';
    header("Location: ../../myaccount.php");
}
else{
    $_SESSION['type'] = 'Customer';
    $_SESSION['user'] = $_POST["uname"];
    header("Location: ../../myaccount.php");
}
?>