<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

label{
  color: #99A3A4;
  font-weight: 600;
  font-size: 24px;
  font-family: sans-serif;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  font-size: 18px;
  border: none;
  box-shadow: 0px 0px 10px 4px #C72C1C;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}
img.e.jpg{
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The form (background) */
.form {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* form Content/Box */
.form-content {
  background: #E74C3C;
  border-radius: 13px;
  box-shadow: 0px 0px 70px 10px #555555;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}
 
@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<h1 style="width:auto; margin-top:12%; margin-left: 30%;">You have not yet logged in, please log in</h1>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; margin-top:2%; margin-left: 42%;">Login</button>

<div id="id01" class="form">
 
  <form class="form-content animate" action="./assets/forms/flogin.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close form">&times;</span>
      <img src="assets/img/e.png" alt="icon" class="icon">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
       
      <button type="submit">Login</button>
      <button>Login as Administrator</button>
 
      <label>
        <input type="checkbox" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the form
var form = document.getElementById('id01');

// When the user clicks anywhere outside of the form, close it
window.onclick = function(event) {
    if (event.target == form) {
        form.style.display = "none";
    }
}
</script>

</body>
</html>
