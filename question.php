<!DOCTYPE html>
<html lang="en">
    <title>Viva-Link &nbsp; Question</title>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/question.css">
        <link rel="shortcut icon" type="image/png" href="images/subject-icon-12.jpg" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="css/s_main.js"></script>

    <script>

      $(document).ready(function() {
        $("#div1").click(function() {
          $("#ans1").toggle(500);
        });
      });
    $(document).on('click', '#number1', function (event) {
        event.preventDefault();
        $("#div1").click();
      });
            $(document).ready(function() {
        $("#submit").click(function() {
            if (
            document.getElementById("ra1").checked ||
            document.getElementById("rb1").checked ||
            document.getElementById("rc1").checked ||
            document.getElementById("rd1").checked
          ) {
          $("#ans1").slideToggle(500);
          }
        });
      });


    </script>

    <script>
      function startTimer(duration, display) {
        var timer = duration,
          minutes,
          seconds;
        setInterval(function() {
          minutes = parseInt(timer / 60, 10);
          seconds = parseInt(timer % 60, 10);

          minutes = minutes < 10 ? "0" + minutes : minutes;
          seconds = seconds < 10 ? "0" + seconds : seconds;

          display.textContent = minutes + ":" + seconds;

          if (--timer < 0) {
            timer = duration;
          }
          if(timer == 60){
             document.getElementById("time").style.color = "red";
             document.getElementById("alert").style.visibility = "visible";
             document.getElementById("alert").style.opacity = "1";
             document.getElementById("wholebody").style.opacity=".65";
             document.getElementById("wholebody").style.pointerEvents = "none";

          }
        }, 1000);
      }

      window.onload = function() {
        var fiveMinutes = 60 * 3,
          display = document.querySelector("#time");
        startTimer(fiveMinutes, display);
      };
    </script>
  </head>

  <body>
    <div id="alert" class="alert">
       <span class="minute" style="display: block; margin-top: 85px;">Only 1 Minute Remains</span>
      <button type="button" class="resume" id="resume" style="margin-top: 50px;" onclick="resume()">Resume</button>
   </div>
      <div id="info" class="alert">
      <span class="minute" style="display: block; margin-top: 85px;">These are the instuctions</span>
        <button type="button" class="resume" id="resume1" style="display: inline-block; margin-top: 50px;" onclick="infoe()">Resume</button>
      </div>
    <div id="wholebody">
      <div class="logo">
        <div  class="ins" id="info" onclick="resume1()"><img src="images/ins_icon.png" style="cursor: pointer" width="40px" height="40px" alt="instruction" onclick="info()"></div>
        <div class="logo_conti">
          <img
            class="img1"
            src="images/subject-icon-12.jpg"
            alt="logo"
            width="40px"
            height="40px"
          />
        <div style="display: inline-block; height: 40px; line-height: 40px">VIVA - LINK</div>
        </div>
        <div class="timer">
          <h2><span id="time" style="cursor: context-menu;"></span></h2>
        </div>
      </div>

      <div class="red" >

        <div class="sidebar">

          <div id="number1" class="qsno" style="text-align: center">
            <div id="circle1" class="circle">1</div>
          </div>

          <div id="number2"class="qsno" style="text-align: center">
            <div class="circle">2</div>
          </div>

          <div id="number3"class="qsno" style="text-align: center">
           <div class="circle">3</div>
          </div>

          <div id="number4"class="qsno" style="text-align: center">
            <div class="circle">4</div>
          </div>

          <div id="number5" class="qsno" style="text-align: center">
            <div class="circle">5</div>
          </div>

          <div id="number6"class="qsno" style="text-align: center">
            <div class="circle">6</div>
          </div>

          <div id="number7"class="qsno" style="text-align: center">
            <div class="circle">7</div>
          </div>

          <div id="number8"class="qsno" style="text-align: center">
            <div class="circle">8</div>
          </div>

          <div id="number9"class="qsno" style="text-align: center">
            <div class="circle">9</div>
          </div>
          <div id="number10"class="qsno" style="text-align: center">
            <div class="circle">10</div>
          </div>
          <div id="number11"class="qsno" style="text-align: center">
            <div class="circle">11</div>
          </div>

          <div id="number12"class="qsno" style="text-align: center">
            <div class="circle">12</div>
          </div>

          <div id="number13"class="qsno" style="text-align: center">
            <div class="circle">13</div>
          </div>

          <div id="number14"class="qsno" style="text-align: center">
            <div class="circle">14</div>
          </div>

          <div id="number15"class="qsno" style="text-align: center">
            <div class="circle">15</div>
          </div>

          <div id="number16"class="qsno" style="text-align: center">
            <div class="circle">16</div>
          </div>


          <div id="number17"class="qsno" style="text-align: center">
            <div class="circle">17</div>
          </div>
          <div id="number18"class="qsno" style="text-align: center">
            <div class="circle">18</div>
          </div>

          <div id="number19"class="qsno" style="text-align: center">
            <div class="circle">19</div>
          </div>

          <div id="number20"class="qsno" style="text-align: center">
            <div class="circle">20</div>
          </div>
        </div>
        <div id="alert" class="alert">
          adasd
        </div>
        <div class="answindow">

          <div id="div1" class="ques1" onclick="myfunc(this)">
            <div id ="questionno1" class="questionno1">
             <img  id="tick1" src="images/green-check-mark-2-icon-17.png" width="19px" height="19px" alt="" style="margin-top: -3px;margin-left: -1px; display: none;">
            </div>
            <div class="question">
            Consider the usual algorithm for determining whether a sequence of parentheses is balanced.
            The maximum number of parentheses that appear on the stack AT ANY ONE TIME when the algorithm analyzes: (()(())(()))
            are:

            </div>
          </div>

          <div id="ans1" class="ans1">
        <label class="container">One
         <input type="radio" id="ra1" name="radio" value="One">
           <span class="checkmark"></span>
        </label>
        <label class="container">Two
              <input type="radio" id="rb1" name="radio" value="Two">
                  <span class="checkmark"></span>
                </label>
                    <label class="container">Three
              <input type="radio"id="rc1" name="radio" value="Three">
           <span class="checkmark"></span>
      </label>
              <label class="container">Four
            <input type="radio" id="rd1" name="radio" value="Four">
       <span class="checkmark"></span>
                    </label>
              <button type="button" class="submit" id= "submit" id="di1"onclick="submit()">Submit</button>
              <button type="button" class="review" id="review" onclick="review()">Review</button>

          </div>
          <div id="div1" class="ques1" onclick="myfunc(this)">
            <div id="questionno1" class="questionno1">
              <img id="tick1" src="images/green-check-mark-2-icon-17.png" width="19px" height="19px" alt=""
                style="margin-top: -3px;margin-left: -1px; display: none;">
            </div>
            <div class="question">
           <p>In Unix, Which system call creates the new process?</p>
            </div>
          </div>
          <div id="div1" class="ques1" onclick="myfunc(this)">
            <div id="questionno1" class="questionno1">
              <img id="tick1" src="images/green-check-mark-2-icon-17.png" width="19px" height="19px" alt=""
                style="margin-top: -3px;margin-left: -1px; display: none;">
            </div>
            <div class="question">
            <p>Which system call returns the process identifier of a terminated child?</p>
            </div>
          </div>
          <div id="div1" class="ques1" onclick="myfunc(this)">
            <div id="questionno1" class="questionno1">
              <img id="tick1" src="images/green-check-mark-2-icon-17.png" width="19px" height="19px" alt=""
                style="margin-top: -3px;margin-left: -1px; display: none;">
            </div>
            <div class="question">
          <p>The address of the next instruction to be executed by the current process is provided by the __________</p>

            </div>
          </div>
          <div id="div1" class="ques1" onclick="myfunc(this)">
            <div id="questionno1" class="questionno1">
              <img id="tick1" src="images/green-check-mark-2-icon-17.png" width="19px" height="19px" alt=""
                style="margin-top: -3px;margin-left: -1px; display: none;">
            </div>
            <div class="question">
             <p>Which of the following is not the state of a process?</p>

            </div>
          </div>
        </div>

      </div>
      <button type="button" class="fsubmit" id="fsubmit" onclick="submit()">Submit</button>
  </body>
</html>
