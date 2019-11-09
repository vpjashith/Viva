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
  <title>Viva-Link &nbsp;Add Questions</title>
  <link rel="stylesheet" href="../css/home.css" />
  <link rel="stylesheet" href="../css/s_home.css">
  <link rel="shortcut icon" type="image/png" href="../images/subject-icon-12.jpg" />
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
    a:nth-child(4):hover~.animation {
      width: 120px;
      left: 320px;
      background-color: #4bca6b;
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
                      var retVal = confirm("This will delete all the Students in your Databases. Do you want to continue ?");
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
        <h2>Add a Student...</h2>
        <form method="post" action="">
          <p>
            <label style="margin-top: 8px;">Username</label>
            <input type="text" name="question" required="" />
          </p>
          <p>
            <label style="margin-top: 8px;">Name</label>
            <input type="text" name="question" required="" />
          </p>
          <p>
            <label style="margin-top: 8px;">Password</label>
            <input type="text" name="question" required="" />
          </p>
          <p class="opt">
            <label style="width: 50px;">Class : </label>
            <select name="answer" style="width: 90px; padding: 2px">
              <option value="CS1A">CS1A</option>
              <option value="CS1B">CS1B</option>
              <option value="CS2A">CS2A</option>
              <option value="CS2B">CS2B</option>
              <option value="CS3A">CS3A</option>
              <option value="CS3B">CS3B</option>
              <option value="CS4A">CS4A</option>
              <option value="CS4B">CS4B</option>
              <option value="CS5A">CS5A</option>
              <option value="CS5B">CS5B</option>
              <option value="CS6A">CS6A</option>
              <option value="CS6B">CS6B</option>
              <option value="CS7A">CS7A</option>
              <option value="CS7B">CS7B</option>
              <option value="CS8A">CS8A</option>
              <option value="CS8B">CS8B</option>

              <option value="EC1A">EC1A</option>
              <option value="EC1B">EC1B</option>
              <option value="EC2A">EC2A</option>
              <option value="EC2B">EC2B</option>
              <option value="EC3A">EC3A</option>
              <option value="EC3B">EC3B</option>
              <option value="EC4A">EC4A</option>
              <option value="EC4B">EC4B</option>
              <option value="EC5A">EC5A</option>
              <option value="EC5B">EC5B</option>
              <option value="EC6A">EC6A</option>
              <option value="EC6B">EC6B</option>
              <option value="EC7A">EC7A</option>
              <option value="EC7B">EC7B</option>
              <option value="EC8A">EC8A</option>
              <option value="EC8B">EC8B</option>

              <option value="EEE1">EEE1</option>
              <option value="EEE2">EEE2</option>
              <option value="EEE3">EEE3</option>
              <option value="EEE4">EEE4</option>
              <option value="EEE5">EEE5</option>
              <option value="EEE6">EEE6</option>
              <option value="EEE7">EEE7</option>
              <option value="EEE8">EEE8</option>


              <option value="EBE1">EBE1</option>
              <option value="EBE2">EBE2</option>
              <option value="EBE3">EBE3</option>
              <option value="EBE4">EBE4</option>
              <option value="EBE5">EBE5</option>
              <option value="EBE6">EBE6</option>
              <option value="EBE7">EBE7</option>
              <option value="EBE8">EBE8</option>

            </select>
          </p>
          <p>


            <p style="margin-top: 20px">

              <input class="butto" type="submit" name="submit" value="Submit" />
            <input class="butto" type="button" name="submit" value="Reset Library" style="padding: 3px 9px;margin-left: 65%;"
              onclick=" getConfirmation()" />


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