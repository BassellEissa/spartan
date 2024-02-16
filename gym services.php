<?php
session_start();
?>
<html>

<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
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
  <style type="text/css">

  </style>
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
  <br>
  <h2 style="text-align: right;margin-right: 88px;">HUGE FACILITY | AMAZING TRAINERS | GREAT ATMOSPHERE</h2>
  <div class="sidenav">
    <h2 id="side_nav_title"><span>About Us</span></h2>
    <div>
      <ul id="side_menu">
        <li><a href="gym services.php">Gym Services</a></li>
        <li><a href="prices.php">Prices</a></li>
        <li style="border-bottom: none;"><a href="contact us.php">Contact Us</a></li>
      </ul>
    </div>
  </div>

  <p style="font-size: 19px; margin-left: 384px;text-align: inherit;">At SPARTAN GYM, we’re about real fitness.<br> Our
    no-nonsense, results-driven culture was built on a history rooted in weightlifting culture.<br>
    With our award winning designs and culture,<br> SPARTAN GYM has effortlessly became an internationally<br>
    recognized brand known for
    its commitment to health, strength, and fitness.<br> Today, we continue to be one of the most celebrated fitness
    brands in the world.<br>
    <br>
    Our team is heavily involved in our community and closely connected with local public services,<br>
    outreach programs, and other local businesses.<br> Our culture isn’t that of these corporate gyms. <br>
    When you walk in the door you’re here to work, sweat, and burn.<br> At SPARTAN GYM,<br> great shape is an authentic
    passion,
    and we don’t back down from <br>the challenge to push our bodies to levels constantly challenging our limits.<br>
    <br>
    Here at SPARTAN GYM you aren’t only joining a gym,<br>you join a team of individuals who are committed to leading
    strong,
    fit, and healthy lifestyles.<br> Our amazing trainers are ready to make sure you break boundaries and achieve your
    full potential.
    <br>At SPARTAN GYM, our facilities & equipements & experienced trainers ensure that you have full access<br> to
    everything you need to reach that next level:</p>
  <br>
  <h3 style="text-align: center">FEATURES</h3>
  <div style="margin-left: 500px;
    font-size: 18px;    font-family: cursive;">
    <br>
    <li>Free Aerobics</li>
    <br>
    <br>
    <li>Cardio Equipment with cardio theater</li>
    <br>
    <br>
    <li>Selectorize Equipment</li>
    <br>
    <br>
    <li>Free Weights</li>
    <br>
    <br>
    <li>Personal trainers</li>
    <br>
    <br>
    <li>Tanning beds</li>
    <br>
    <br>
    <li>Cycle studio</li>
    <br>
    <br>
    <li>Treadmills and ellipticals.</li>
    <br>
    <br>
    <li>Free gym orientation with membership</li>
    <br>
    <br>
    <li>Steam rooms</li>
    <br>
    <br>
    <li>Saunas</li>
    <br>
    <br>
    <li>Weight-loss packages</li>
    <br>
    <br>
    <li>Customized diet plans</li>
    <br>
    <br>
    <li>Nutrition shop</li>
    <br>
    <br>
    <li>Corporate membership rates</li>
    <br>
    <br>
    <li>Discounted rates for select groups</li>
    <br>
    <br>
  </div>
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
      <a style="color: white" href="tel:+2022557834">+2022557834</a>

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