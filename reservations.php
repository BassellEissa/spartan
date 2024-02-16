<?php
session_start();
?>
<html>

<head>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <script src="functions.js"></script>
  <title>Spartan Gym</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="spartan.png" type="image/png" sizes="40x40">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <div class="header">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
      <polygon class="svg--sm" fill="#dcd9d9" points="0,0 30,100 65,21 90,100 100,75 100,100 0,100" />
      <polygon class="svg--lg" fill="#dcd9d9"
        points="0,0 15,100 33,21 45,100 50,75 55,100 72,20 85,100 95,50 100,80 100,100 0,100" />
    </svg>
    <div id="logo">
      <a href="home.php"><img src="spartan.png" height="200px" ;
          style="margin-right: 1000px;width: 207px;float: left;"></a>
    </div>
    <h1 class="header_h1"><span style=" color: #f7b126;">Sore</span> Today
      <span style="    color: #a60a0a;">Strong </span>Tomorrow</h1>
  </div>
</head>

<body>
  <?php if (isset($_SESSION['user'])) echo '<a href="profile.php"> <i class="fas fa-user-circle" id="profile" style="top: -318px;"></i></a>'; ?>

  <div class="floatingSocial">
    <a href="https://api.whatsapp.com/send?phone=01124575724" title="Whatsapp" target="_blank" class="whatsapp">
      <img src="Whatsapp.png"> </a>
    <a href="https://www.instagram.com/spartan.gym21/" title="Instagram" target="_blank" class="instagram">
      <img src="instagram.png"> </a>
    <a href="https://www.facebook.com/spartan.gym.566/" title="Facebook" target="_blank" class="facebook">
      <img src="facebook.png"> </a> </div>
  <ul>
    <li><a href="home.php" class="left">Home</a></li>
    <li><a href="reservations.php" class="left">Reservations</a></li>
    <li>
      <div class="dropdown">
        <a class="left" id="dropbtn">About Us</a>
        <div class="dropdown-content">
          <a href="gym%20services.php">Gym Services</a>
          <a href="prices.php">Prices</a>
          <a href="contact%20us.php">Contact Us</a>
        </div>
      </div>
    </li>
    <li>
      <?php
    if (ISSET($_SESSION['user'])) {
      echo '<a class="left" href="scripts/logout.php" style="cursor: pointer;" id="poplog">Logout</a></li>';
    } else {
      echo '<a class="left" onclick="document.getElementById(\'id01\').style.display=\'block\';" style="cursor: pointer;" id="poplog">Login</a></li>';
    }
    ?>
      <a class="left" onclick="document.getElementById('id01').style.display='block';" style="cursor: pointer;"
        id="poplog"></a></li>
  </ul>
  <form action="database2.php" method="post" id="reservationForm" style="text-align: center;">
    <!--  General -->
    <div class="form-group" style="margin-top: 53px;">
      <h2 class="heading" ">Booking &amp; contact</h2>
      <div class=" controls">
        <label for="name" id="name">Name</label>
        <input type="text" class="floatLabel" name="name" required>

    </div>
    <div class="controls">
      <label for="email" id="email">Email</label>
      <input type="text" class="floatLabel" name="email" required>

    </div>


    </div>

    <div>
      <div class="controls" style="margin-right: 15rem;">
        <label for="ID">ID</label>
        <input type="text" id="ID" class="floatLabel" name="user_id" style="width:200px;" required>
      </div>
      <br>
    </div>
    <div class="controls">
      <label for="phone">Phone</label>
      <input type="tel" id="phone" class="floatLabel" name="phone" style="height: 36px" required>

    </div>

    <br>
    <!--  Details -->
    <div class="form-group">
      <h2 class="heading">Details</h2>
      <div class="grid">
        <div class="col-1-4 col-1-4-sm">
          <div class="controls" style="margin-right: 128px;">
            <label for="arrive" class="label-date"><i class="fa fa-calendar" style="margin-left: 95px;"
                ;></i>&nbsp;&nbsp;Arrive Date</label>
            <input type="date" id="arrive" class="floatLabel" name="arrive_date" required> <br><br>
            <label for="arrive" style="margin-right:19rem;" class="label-date"><i class="fa fa-calendar"
                style="margin-left: 95px;" ;></i>&nbsp;&nbsp;Arrive Time</label>
            <input type="time" id="arrive" class="floatLabel" name="arrive_time" required><br><br>
          </div>
        </div>
      </div>
      <br>
      <div class="col-1-3 col-1-3-sm">
        <div class="controls" style="margin-right: 19rem;">
          <i class="fa fa-sort"></i>
          <label for="fruit">Training Mode:</label>
          <select class="floatLabel" name="training_mode" style="height:33px" required>
            <option value="Pool & Souna">Pool & Souna</option>
            <option value="Cardio" selected>Cardio</option>
            <option value="Workout">Workout</option>

          </select>

        </div>

      </div>
      <div class="grid" style="margin-left: 293px;width: 80%;">
        <br>
        <div class="col-1-3 col-1-3-sm">
          <div class="controls" style="margin-right: 49rem;">
            <i class="fa fa-sort"></i>
            <label for="fruit;><i class=" fa fa-male"></i>&nbsp;&nbsp;People</label>
            <select class="floatLabel" name="invites" required>
              <option value="blank"></option>
              <option value="1" selected>1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>


            </select>

          </div>
        </div>
        <br><br>
        <div class="col-1-3 col-1-3-sm">
          <div class="controls" style="margin-right: 577px">
            <i class="fa fa-sort"></i>
            <label for="fruit" ;>Do you want to reserve the jacuzzi </label>
            <select class="floatLabel" name="jacuzzi" required>
              <option value="blank"></option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>

          </div>
        </div>
        <br><br>
        <div class="col-1-3 col-1-3-sm">
          <div class="controls" style="margin-right: 36rem;">
            <i class="fa fa-sort"></i>
            <label for="fruit" ;>Do you want to reserve a massage</label>
            <select class="floatLabel" name="massage" required>
              <option value="blank"></option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>

          </div>
        </div>

      </div>
      <br><br><br>
      <div class="grid" style="margin-left: 371px;">
        <p class="info-text" style="font-size: 20px;margin-right: 344px;">Please describe your needs e.g. supplements
        </p>

        <div class="controls" style="margin-right: 340px;">
          <textarea name="comment" class="floatLabel" id="comments" style="width:400px; height: 100px;"
            control-id="ControlID-11"></textarea>
        </div>
        <br>


      </div>
    </div>
    <!-- /.form-group -->
    <?php 
    if (ISSET($_SESSION['user'])) {
      echo '<button type="submit" value="Submit" class="btn-submit" name="reservation" style="">Submit</button>';
    } else {
      echo '<script>alert("Please Login First!")</script>';
      echo '<script>document.getElementById("name").style.marginLeft = "-185px";
      document.getElementById("email").style.marginLeft = "-185px";
      </script>';
      echo '<button class="btn-submit" onclick="document.getElementById(\'id01\').style.display=\'block\';">Login First!</button>';
    }
    ?>
  </form>
 
     <br>
</body>
<br>
<br>
<footer>
  <div class="row">
    <div class="column" style="    margin-top: -12px;
    margin-left: -153px;
    text-align: center;">
      <div>
        <div>
          <h3 style="width: 624px;">Our Phone Numbers</h3>
        </div>
      </div>
      <a style="color: white" href="tel:+201124575724">+201124575724</a><br><br>
      <a style="color: white" href="tel:+022557834">+2022557834</a>
    </div>
    <div class="column" style="    margin-top: -12px;
    margin-left: -30px;
    text-align: center;
    width: 320px;">
      <h3>Our Email</h3>
      <a style="color: white; width: 147px;" href="emailto:spartangym2021@hotmail.com">spartangym2021@hotmail.com</a>
      <div class="row">
        <div class"column">
          <div class="site-copyright">
            <span class="footer-divider"></span>
            <div>© 2021 Spartan Gym-Cairo,Egypt</div>
          </div>
        </div>
      </div>
    </div>
    <div class="column" style="margin-top: -12px;
    margin-left: 17px;
    text-align: center;
    width: 510px;">
      <h3>Directions To Spartan Gym</h3>
      <a style="color: white;" href="https://goo.gl/maps/67zmazMYWybX7YLs6">to Google Maps</a>
    </div>

  </div>
</footer>

</html>

<div id="id01" class="modal">

  <form class="modal-content animate" method="post" action="scripts/login.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close"
        title="Close Modal">&times;</span>
      <img src="the gym.png" alt="" class="avatar">
    </div>

    <div class="container" style="text-align: center;">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" id="uname" required>
      <br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <br><br>

      <label>
        Remember me
      </label>
      <input type="checkbox" checked="checked" name="remember">
      <input type="submit" name="login" value="Login"></input>
      <br><br>
      <label>Not yet a registered user? </label>
      <a href="register.php">Register Now</a>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none';"
        class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>