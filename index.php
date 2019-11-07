<?php
session_start();
require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<title>Viva-Link &nbsp; Home</title>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
  <link rel="stylesheet" href="css/home.css" />
  <link rel="shortcut icon" type="image/png" href="images/subject-icon-12.jpg" />
  <link rel="stylesheet" href="css/box_design.css" />
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script>
    function fade() {
      $("#form").fadeOut(300);
      $(".wrapper").addClass("form-success");
    }
  </script>

  <style>
    .red {
      height: calc(100vh - 128px);
    }
  </style>
</head>

<body>
  <div>
    <div class="navi">
      <div class="logo">
        <img class="img1" src="images/subject-icon-12.jpg" alt="logo" width="40px" height="40px" />
        <div style="display: inline-block;">VIVA - LINK</div>
      </div>
      <nav>
        <a href="index.php">Home</a>

        <a href="admin_login.php">Admin login</a>
        <a href="question.php">Question</a>
        <a href="./html/contact.html">Contact</a>
        <div class="animation start-home"></div>
      </nav>
    </div>
    <div class="red">
      <div class="wrapper">
        <div class="container">
          <form action="login.php" method="post" class="form">
            <label>
              <h1 style="color:  #39424e;font-family:serif;  font-weight: bold; margin-bottom: 30px;">
                WELCOME
              </h1>
            </label>
            <div id="form">
              <input type="text" name="user" id="user" placeholder="Username" />
              <input type="password" name="pass" id="pass" placeholder="Password" />
              <button type="submit" id="login-button" onclick="fade()">
                Login
              </button>
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