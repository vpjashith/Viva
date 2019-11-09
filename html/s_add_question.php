<?php
session_start();
require_once("../db.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="shortcut icon" type="image/png" href="../images/subject-icon-12.jpg" />
  <title>Viva-Link &nbsp;Add Questions</title>
  <link rel="stylesheet" href="../css/home.css" />
  <link rel="stylesheet" href="../css/s_home.css">
  <link rel="stylesheet" href="../css/question copy.css">
  <link rel="stylesheet" href="../css/s_main.css" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link rel="stylesheet" href="../css/logout_icon.css">
  <script src="../css/s_main.js"></script>
  <style>
    .red {
      height: 83vh;
    }

    nav .start-home,
    a:nth-child(5):hover~.animation {
      width: 120px;
      left: 440px;
      background-color: #ca4bb5;
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
              function getConfirmation() {
                var retVal = confirm("This will delete all the Questions in your Databases. Do you want to continue ?");
                if (retVal == true) {
                 // document.write("User wants to continue!");
                  return true;
                } else {
                 // document.write("User does not want to continue!");
                  return false;
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
      <br>
      <div class="container">
        <h2>Add a question...</h2>
        <form method="post" action="">
          <p>
            <label style="margin-top: 8px;">Question</label>
            <input class="qsin" type="text" name="question" required="" />
          </p>
          <p>
            <label>Choice #1</label>
            <input type="text" name="choice1" required="" />
          </p>
          <p>
            <label>Choice #2</label>
            <input type="text" name="choice2" required="" />
          </p>
          <p>
            <label>Choice #3</label>
            <input type="text" name="choice3" required="" />
          </p>
          <p>
            <label>Choice #4</label>
            <input type="text" name="choice4" required="" />
          </p>
          <p class="opt">
            <label style="width: 105px;">Correct answer : </label>
            <select name="answer" >
              <option value="a">Choice #1 </option>
              <option value="b">Choice #2</option>
              <option value="c">Choice #3</option>
              <option value="d">Choice #4</option>
            </select>
          </p>
          <p>

            <input class="butto" type="submit" name="submit" value="Submit" />
            <input class="butto" type="button" name="submit" value="Reset Library" style="padding: 3px 9px;margin-left: 65%;" onclick=" getConfirmation()"/>


          </p>
        </form>
      </div>

    </div>
  </div>
  </div>
  </div>
  </div>
</body>

</html>