<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/account.css" />
    <link rel="stylesheet" href="css/logout_icon.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style1.css" />
    <title>Document</title>
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
    <style>
      .red {
        height: calc(100vh - 114px);
        overflow-y: scroll;
        background: #f7f7f7;
      }

      .navi {
        background: #39424e;
      }

      body {
        background: white;
      }

      nav .start-home,
      a:nth-child(2):hover ~ .animation {
        width: 110px;
        left: 100px;
        background-color: #e74c3c;
      }
      table {
        margin: auto;
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
      style="border-radius: 15px;"
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
      <div class="red">
        <table class="data-table">
          <caption class="title"></caption>
          <thead>
            <tr>
              <th>SL.NO</th>
              <th>Test Name</th>
              <th>Date</th>
              <th>Max Score</th>
              <th>Score</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="text-align: center;">1</td>
              <td class="qwe">System Software Lab</td>
              <td style="text-align: center;">25-12-2019</td>
              <td style="text-align: center;">10</td>
              <td>6</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div style="background: #39424e;height: 50px;"></div>
    </div>
  </body>
</html>
