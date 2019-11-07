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
          <a href="index.php">Home</a>
          <a href="ranklist.php">Ranklist</a>
          <a href="logout.php">Logout</a>
          <div class="animation start-home"></div>
        </nav>
      </div>
      <div class="red">
        <br>
        <h2>Welcome Admin</h2>
        <a href="add.php">Add Questions</a>
        <a href="all.php">View All Questions</a>
        <a href="add_stud.php">Add Student</a>
      </div>
      <div style="background: #39424e;height: 60px;"></div>
    </div>
  </body>
</html>
