<?php
session_start();
require_once("../db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Viva-Link &nbsp;Students</title>
  <link rel="shortcut icon" type="image/png" href="../images/subject-icon-12.jpg" />
  <link rel="stylesheet" href="../css/home.css" />
  <link rel="stylesheet" href="../css/s_home.css">
  <link rel="stylesheet" href="../css/logout_icon.css">

  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link rel="stylesheet" type="text/css" href="../css/style1.css" />
  <script src="../css/s_main.js"></script>
  <style>
    .red {
      text-align: center;
      overflow-y: scroll;
      height: 83vh;
    }

    .red table {
      margin: 0 auto;
    }

    tbody {
      text-align: center;
    }

    nav .start-home,
    a:nth-child(3):hover~.animation {
      width: 110px;
      left: 210px;
      background-color: #3498db;
    }
  </style>
  <script>
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
</head>

<body>
  <div id="tri" class="triangle-up"></div>
  <div class="sidebar" id="drop">
    <img src="../images/perlog.png" alt="person" width="100px" height="100px" style="margin-left:65px; margin-top: 20px;" />
    <div class="nameo">
      Jasthith V.P
    </div>
    <button class="logout">
      Logout
    </button>
  </div>
  <img src="../images/perlog.png" alt="person" width="30px" height="30px" class="photo" onclick="show()" style="border-radius: 15px;" />
  <div onclick="w()">
    <div class="navi">
      <div class="logo">
        <img class="img1" src="../Images/subject-icon-12.jpg" alt="logo" width="40px" height="40px" />
        <div style="display: inline-block;">VIVA - LINK</div>
      </div>
      <nav>
        <a href="../adminhome.php">Questions</a>

        <a href="./s_history.php">History</a>
        <a href="./s_registered_student.php">Students</a>
        <a href="./s_add_student.php">Add Stud</a>
        <a href="./s_add_question.php">Add Ques</a>
        <div class="animation start-home"></div>
      </nav>
    </div>

    <div class="red">
      <br />
      <table class="data-table">
        <thead>
          <tr>
            <th>Username</th>
            <th>Name</th>
            <th>Password</th>
            <th>Class</th>
            <th>Last Attempt on</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="text-align: center">MDL17cs058</td>
            <td style="text-align: center">Jashith vp</td>
            <td style="text-align: center">MDL17cs058</td>
            <td style="text-align: center">9</td>
            <td style="text-align: center">17-06-2019</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  </div>
  </div>
</body>

</html>