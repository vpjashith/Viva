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
  <link rel="stylesheet" href="./css/logout_icon.css" />
  <link rel="shortcut icon" type="image/png" href="images/subject-icon-12.jpg" />
  <link rel="stylesheet" href="css/box_design.css" />
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/s_home.css">
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
      overflow-y: scroll;
      
    }
    th{
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div id="tri" class="triangle-up"></div>
  <div class="sidebar" id="drop">
    <img src="images/perlog.png" alt="person" width="100px" height="100px" style="margin-left:65px; margin-top: 20px;" />
    <div class="nameo">
      Jasthith V.P
    </div>
    <button class="logout">
      Logout
    </button>
  </div>
  <img src="images/perlog.png" alt="person" width="30px" height="30px" class="photo" onclick="show()" style="border-radius: 15px;" />
  <div onclick="w()">
    <div class="navi">
      <div class="logo">
        <img class="img1" src="images/subject-icon-12.jpg" alt="logo" width="40px" height="40px" />
        <div style="display: inline-block;">VIVA - LINK</div>
      </div>
      <nav>
        <a href="adminhome.php">Questions</a>
      
        <a href="html/s_history.php">History</a>
        <a href="html/s_registered_student.php">Students</a>
        <a href="html/s_add_student.php">Add Stud</a>
        <a href="html/s_add_question.php">Add Ques</a>
        <div class="animation start-home"></div>
      </nav>
    </div>
    <div class="red">
      <!-- <br>
      <h2>Welcome Admin</h2>
      <a href="add.php">Add Questions</a>
      <a href="all.php">View All Questions</a>
      <a href="add_stud.php">Add Student</a>
    </div> -->
      <table class="data-table">
        <caption class="title">

        </caption>
        <thead>
          <tr>
            <th>Q.NO</th>
            <th>Question</th>
            <th>Option1</th>
            <th>Option2</th>
            <th>Option3</th>
            <th>Option4</th>
            <th>Correct Answer</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="text-align: center;">1</td>
            <td class="qwe">To access the services of operating system, the interface is provided by the ___________</td>
            <td>System calls</td>
            <td>API</td>
            <td>Library</td>
            <td>Assembly instructions System calls</td>
            <td>a</td>
            <td> <a href='editquestion.php?qno=$qno'></a> Edit </a></td>

          </tr>
        </tbody>
  </table>
  
    </div>
    <div style="background: #39424e;height: 50px;">
  </div>
</body>

</html>