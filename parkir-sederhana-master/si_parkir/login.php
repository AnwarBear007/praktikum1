<?php
include 'koneksi.php'; //connect the connection page
if(empty($_SESSION)) // if the session not yet started 
   session_start();


if(isset($_SESSION['username'])) { // if already login
   header("location: home.php"); // send to home page
   exit; 
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Parking-E</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="shortcut icon" href="image/logo.png">
  </head>
<body>
  <style>
  body {

    background: url('image/parkirmobil.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-color:#0f58af;
    font-family:arial;
    font-size:20px;
  }
  input, button, select, option, textarea {
    font-size: 100%;
  }

  </style>
  <ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul>
  <li><li><li><li><li><li>
  <div class="container">
    <br><h2> Login</h2>
    <form action = 'login_process.php' method='POST'>
      Username:   &nbsp;
      <input type="text" name="username" font="bold" />  <br><br>
      Password : &nbsp;
      <input type="password" name="password" />
      <br> <br>
      <ul><ul><ul><ul><ul><input type = "submit" name="submit" value="Ok" /></ul></ul></ul></ul></ul>  
    </form>
</div>
  </ul></ul></ul></ul></ul></ul></ul></ul></li></li>
</li></li></li></li></li></li>
</body>
</html>