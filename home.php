<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a4e672886c.js" crossorigin="anonymous"></script>
  <script src="functions.js"></script>
  <title>Spartan Gym</title>
  <link rel="icon" href="spartan.png" type="image/png" sizes="40x40">
  <meta charset="UTF-8">

  <!-----Header----->
  <div class="header" style="top:-30px;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
      <polygon class="svg--sm" fill="#dcd9d9" points="0,0 30,100 65,21 90,100 100,75 100,100 0,100" />
      <polygon class="svg--lg" fill="#dcd9d9"
        points="0,0 15,100 33,21 45,100 50,75 55,100 72,20 85,100 95,50 100,80 100,100 0,100" />
    </svg>
    <div id="logo">
      <a href="home.php"><img src="spartan.png" height="200px" ;
          style="margin-right: 1000px;width: 207px;float: left;"></a>
    </div>
      <h1  class="header_h1"><span style=" color: #f7b126;">Sore</span> Today
      <span style="color: #a60a0a;">Strong </span>Tomorrow</h1>
  </div>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <!-----Floating Social Icons----->
  <?php if (isset($_SESSION['user'])) echo '<a href="profile.php"> <i class="fas fa-user-circle" id="profile" style="top: -348px;"></i></a>'; ?>
  <div class="floatingSocial">
    <a href="https://api.whatsapp.com/send?phone=+201124575724" title="Whatsapp" target="_blank" class="whatsapp">
      <img src="Whatsapp.png"> </a>
    <a href="https://www.instagram.com/spartan.gym21/" title="Instagram" target="_blank" class="instagram">
      <img src="instagram.png"> </a>
    <a href="https://www.facebook.com/spartan.gym.566/" title="Facebook" target="_blank" class="facebook">
      <img src="facebook.png"> </a> </div>

  <!-----Main Menu----->
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
      <!-----Login & Logout Sessions----->
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

  <!-----Hexagon Gallery----->

  <section class="hexagon-gallery">
    <div class="hex outer">
      <div class="hex"><img src="1.jpg" alt="some" style="    margin-left: -56px;"></div>
    </div>
    <div class="hex outer">
      <div class="hex"><img src="2.jpg" alt="some" style="margin-left: -110px;"></div>
    </div>
    <div class="hex outer">
      <div class="hex"><img src="3.jpg" alt="some"></div>
    </div>
    <div class="hex outer">
      <div class="hex"><img src="4.jpg" alt="some" style="margin-left: -38px;"></div>
    </div>
    <div class="hex outer">
      <div class="hex"><img src="5.jpg" alt="some" ></div>
    </div>
    <div class="hex outer">
      <div class="hex"><img src="6.jpg" alt="some" style="transform: scale(0.97);margin-left: -124px;"></div>
    </div>
    <div class="hex outer">
      <div class="hex"><img src="7.jpg" alt="some" style="margin-left: -151px;"></div>
    </div>
    <div class="hex outer">
      <div class="hex"><img src="8.jpg" alt="some" style="margin-left: -113px;"></div>
    </div>
    <div class="hex outer">
      <div class="hex"><img src="9.jpg" alt="some" style="transform: inherit;margin-left: -107px;"></div>
    </div>
    <div class="hex outer">
      <div class="hex"><img src="10.jpg" alt="some" style="width: 100%;"></div>
    </div>
    
  </section>
  <br>

  <div>
    <h2 style="text-align: center;">Who We Are</h2>
  </div>
  <div id="line">
  </div>
  <div>
    <p>At <span style="color:#a60a0a;"><b>Spartan</b></span> we place safety before ego
      we emphasize<br> patience over recklessness
      and we compete with ourselves,<br> not each other.</p>

    <p>Our training philosophy is built around creating a deeper <br>understanding of your body and taking personal
      ownership of<br> your well-being. </p>

    <p>We believe that clear intention--in whatever you do--is critical <br>to success.</p>

    <p>Our members are young, old, slow, fast, big, small, skinny, fat,<br> strong, weak, students, engineers, business
      owners, doctors,<br> nurses, moms, grandparents, lawyers, waitresses, teachers,<br> cops, soldiers, and everyone
      in between.</p>

    <p>Our program design allows for mobility and skill practice,<br> strength training, and high intensity conditioning
      to be<br> progressed up or down to meet the member’s individual goals<br> and needs. By building a solid
      foundation through <br>stability/mobility and strength training, and an emphasis on <br>the development of
      technical proficiency of basic movement <br>patterns, we help every member make steady progress and<br> remain
      injury-free.</p>
  </div>
  <!-----Container1----->
  <div id="container" style="font-size: 28px;font-family: cursive;text-align: center;">

    <img src="reservations.jpg" style="padding-left: 4px;padding-top: 22px;width: 445px;height: 251px;">

    <div id="res-now"> <span style="color: #a60a0a;font-size: 29px;"><b>Spartan</b></span> Gym offers group workouts
      that are purposeful, and process oriented, and
      powerful.
    </div>

    <div style="position: relative;top: 39px;">
      <button id="res-btn">
        <a style="text-decoration: none;color: white;" href="reservations.php">Reserve Now !</a>
      </button>
    </div>

  </div>

  <!-----container2----->
  <div id="container2" style="font-size: 28px;font-family: cursive;    text-align: center;">

    <img src="login.jpg" style="padding-left: 4px;padding-top: 22px;width: 445px;">
    <div id="res-now"> <span style="color: #a60a0a;font-size: 29px;"><b>To</b></span> start the journey of
      transformation with us! Please Register Now. </div>
    <div style="position: relative;top: 39px;">
      <button id="res-btn" onclick="location.href='register.php'">Register Now !</button>
    </div>
  </div>

  <!-----ADS Div----->
  <div class="ads">
    <br>
    <p style="color: white;">We're now open! Kindly call or click here for more information about our prices and offers.
      <a style="text-decoration: none;color:white;" href="prices.php">
        <button id="res-btn2">Check Our Prices</button>
      </a>
    </p>
  </div>
</body>
<br>
<br>
<!-----Footer----->

<footer>
  <div class="row">
    <div class="column" style="    margin-top: -12px;margin-left: -153px;text-align: center;">
      <div>
        <div>
          <h3 style="width: 624px;">Our Phone Numbers</h3>
        </div>
      </div>
      <a style="color: white" href="tel:+201124575724">+201124575724</a><br><br>
      <a style="color: white" href="tel:+2022557834">+2022557834</a>

    </div>
    <!-----Copy Rights Column----->

    <div class="column" style="    margin-top: -12px;margin-left: -30px;text-align: center;width: 320px;">
      <h3>Our Email</h3>
      <a style="color: white; width: 147px;" href="emailto:spartangym2021@hotmail.com">spartangym2021@hotmail.com</a>
      <div class="row">
        <div class="column">
          <div class="site-copyright" style="margin-left: -146px;margin-bottom: -36px;">
            <span class="footer-divider" style="width:272%;"></span>
            <div>© 2021 Spartan Gym-Cairo,Egypt</div>
          </div>
        </div>
      </div>
    </div>

    <div class="column" style="margin-top: -12px;margin-left: 17px; text-align: center;width: 510px;">
      <h3>Directions To Spartan Gym</h3>
      <a style="color: white;" href="https://goo.gl/maps/67zmazMYWybX7YLs6">to Google Maps</a>
    </div>

  </div>
</footer>

</html>

<!-----Login Form----->

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

      <label>Remember me</label>
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