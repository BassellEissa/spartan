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
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" style="right:0;">
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

<body style="text-align: center;">
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
  <br>
  <br>
  <h3 style="margin-left: 27rem;">GYM LOCATION</h3>
  <div id="line2" style="margin-left: 27rem;">
  </div>
  <br>


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

  <div>
    <iframe id="map"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.6889436848255!2d31.279092014592905!3d30.0170868268205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145838b43defdb13%3A0xf2d60331ba4ada77!2s9%20Al-Mokattam%20St.%2C%20Al%20Abageyah%2C%20El-Khalifa%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1608499512429!5m2!1sen!2seg"
      width="900" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
      tabindex="0"></iframe></div>
  <br>
  <br>
  <br>
  <div style="background-color: black;background-color: #a60a0a;
    height: 216px;
    padding-top: 32px;">
    <h3>OUR SOCIAL LINKS:</h3>
    <div id="line2">
    </div>
    <br>
    <br>
    <a href="https://www.facebook.com/spartan.gym.566" target="_blank" class="fab fa-facebook-f"></a>
    <a href="https://www.instagram.com/spartan.gym21/" target="_blank" class="fab fa-instagram"></a>
    <a href="https://api.whatsapp.com/send?phone=+201124575724" target="_blank" class="fab fa-whatsapp"></a>
  </div>
  <br>
  <br>
  <br>
  <h3>OUR E-MAILS:</h3>
  <div id="line2">
  </div>
  <br>
  <br>

  <a style="color: black; width: 147px; font-size: 18px;"
    href="emailto:spartangym2021@hotmail.com">spartangym2021@hotmail.com</a>
  <br>
  <br>
  <br>
  <h3>OUR CONTACT NUMBERS:</h3>
  <div id="line2">
  </div>
  <br>
  <br>
  <div style="font-size: 18px;">
    <a style="color: black" href="tel:+201124575724">+201124575724</a>
    <br>
    <br>
    <a style="color: black" href="tel:+2022557834">+2022557834</a>
  </div>
  <br>
  <br>
  <br>
  <h3>GYM HOURS:</h3>
  <div id="line2">
  </div>
  <br>
  <br>
  <div style="font-size: 18px;">
    Open 24 hours a day
    <br><br>
    7 days a week
    <br><br>
    365 days a year
  </div>
  <br>
  <br>
  <br>
  <h3>OFFICE HOURS:</h3>
  <div id="line2">
  </div>
  <br>
  <br>
  <div style="font-size: 18px;">
    <div> Monday: 8:30-19:00
      <br>
      <br>
      Tuesday: 8:30-19:00
      <br>
      <br>
      Wednesday: 8:30-18:00
      <br>
      <br>
      Thursday: 8:30-19:00
      <br>
      <br>
      Friday: 8:30-17:00
    </div>
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