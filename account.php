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
    <link
      rel="shortcut icon"
      type="image/png"
      href="images/subject-icon-12.jpg"
    />
    <link rel="stylesheet" href="./css/logout_icon.css" />
    <link rel="stylesheet" href="css/box_design.css" />
    <link rel="stylesheet" href="css/account.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script>
      function fade() {
        $("#form").fadeOut(300);
        $(".wrapper").addClass("form-success");
      }

      function show() {
        if (document.getElementById("drop").style.opacity == 0) {
          document.getElementById("drop").style.opacity = 1;
          document.getElementById("tri").style.opacity = 1;
        } else {
          document.getElementById("drop").style.opacity = 0;
          document.getElementById("tri").style.opacity = 0;
        }
      }
      function w() {
        if (document.getElementById("drop").style.opacity == 1) {
          document.getElementById("drop").style.opacity = 0;
          document.getElementById("tri").style.opacity = 0;
        }
      }
    </script>
    <style>
      .red {
        height: calc(100vh - 114px);
      }
    </style>
  </head>

  <body>
    <div id="tri" class="triangle-up"></div>
    <div class="sidebar" id="drop">
      <img
        src="images/perlog.png"
        alt="person"
        width="100px"
        height="100px"
        style="margin-left:65px; margin-top: 20px;"
      />
      <div class="nameo">
        Jasthith V.P
      </div>
      <button class="logout">
        Logout
      </button>
    </div>
    <img
      src="images/perlog.png"
      alt="person"
      width="30px"
      height="30px"
      class="photo"
      onclick="show()"
    />
    <div onclick="w()">
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
          <?php if (empty($_SESSION['user'])) { ?>
          <a href="account.php">Home</a>
          <a href="history.php">History</a>
          <?php } else if (isset($_SESSION['user'])) { ?>

          <a href="logout.php">Logout</a>
          <?php } ?>
          <a href="html/account_contact.html">Contact</a>
          <div class="animation start-home"></div>
        </nav>
      </div>
      <div class="red"></div>
      <div style="background: #39424e;height: 50px;"></div>
    </div>
  </body>
</html>
