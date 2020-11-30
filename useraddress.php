<?php
include("connconf.php")


?>


<html>

<head>
    <link rel="stylesheet" type="text/css" href="assets/css/userdata.css">
</head>

<body>
    <form action="useraddress.php" method="POST">
        <div class="maincont">
            <div class="container" id="usernamediv"><br>ENTER a USERNAME again<br><br>
                <input type="username" class="form-control" id="username" placeholder="UserName" name="username">
            </div><br>

            <div id="addressdiv" class="container"><br>ENTER YOUR ADDRESS DETAILS<br><br>

                <input type="text" class="form-control" id="inputstreet" placeholder="Street" name="inputstreet">

                <input type="text" class="form-control" id="inputhome" placeholder="Home" name="inputhome">

                <input type="text" class="form-control" id="landmark" placeholder="Landmark" name="landmark">

                <input type="text" class="form-control" id="inputCity" placeholder="City" name="inputCity">

                <input type="text" class="form-control" id="inputdistrict" placeholder="District" name="inputdistrict">

                <input type="text" class="form-control" id="inputdistate" placeholder="State" name="inputstate">


                <input type="text" class="form-control" id="inputpincode" placeholder="Zip" name="inputpincode">


            </div><br>

            <div class="submitdetails1">
                <input type="submit" class="form-submit" id="submitdetails1" name="submitdetails1" value="CONFIRM">
            </div>
        </div>
    </form>
</body>

<?php
if (isset($_POST['submitdetails1'])) {
    $username = $_POST['username'];
    $home = $_POST['inputhome'];
    $inputstreet = $_POST["inputstreet"];
    $inputlandmark = $_POST['landmark'];
    $inputcity = $_POST['inputCity'];
    $inputdistrict = $_POST['inputdistrict'];
    $inputstate = $_POST['inputstate'];
    $inputpincode = $_POST['inputpincode'];

    $res = mysqli_query($connection,"INSERT INTO user_add  VALUES ('$username','$home','$inputstreet','$inputlandmark','$inputcity','$inputdistrict','$inputstate','$inputpincode')");
    
}
?>

</html>