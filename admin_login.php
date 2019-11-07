<?php
session_start();
require_once("db.php");
if(isset($_SESSION['admin'])) {
  header("location: adminhome.php");
}

if(isset($_POST['password'])) {
  $password = $_POST['password'];
  $admin_pass = '$2y$10$8WkSLFcoaqhJUJoqjg3K8eWixJWswsICf7FTxehKmx8hpmIKYWqju';
  if(password_verify($password, $admin_pass)) {
    $_SESSION['admin'] = "active";
    header("location: adminhome.php");
  }
  else {
    echo "<script> alert('Wrong Password!'); </script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <title>Admin Login</title>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/box_design.css" />
    <link
      rel="shortcut icon"
      type="image/png"
      href="images/subject-icon-12.jpg"
    />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
      function fade() {
        $("#form").fadeOut(300);
        $(".wrapper").addClass("form-success");
      }
    </script>

    <style>
      nav .start-home,
      a:nth-child(2):hover ~ .animation {
        width: 130px;
        left: 100px;
        background-color: #e74c3c;
      }
      .red {
        height: calc(100vh - 128px);
      }
    </style>
  </head>
  <body>
    <div>
      <div class="navi">
        <div class="logo">
          <img
            class="img1"
            src="images/subject-icon-12.jpg"
            alt="logo"
            width="40px"
            height="40px"
          />
          <div style="display: inline-block;">VIVA - LINK</div>
        </div>
        <nav>
          <a href="./home.html">Home</a>

          <a href="./admin_login.html">Admin login</a>
          <a href="./question.html">Question</a>
          <a href="./contact.html">Contact</a>
          <div class="animation start-home"></div>
        </nav>
      </div>
      <div class="red">
        <div class="wrapper">
          <div class="container">
            <form method="POST" action="" class="form">
              <label><h1 style="color:  #39424e;font-family:serif;  font-weight: bold; margin-bottom: 30px;">WELCOME</h1></label>
              <div id="form">
                <input type="password" name="password" placeholder="password" />
                <input type="submit" name="submit" value="Login">
                <!--
                <button type="button" id="login-button" onclick="fade()">
                  Login
                </button>
              -->
              </div>
            </form>
          </div>

          <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
      <div style="background: #39424e;height: 60px;"></div>
    </div>
  </body>
</html>
