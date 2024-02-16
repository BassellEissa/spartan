<!DOCTYPE html>
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
    <h1 class="header_h1"><span style=" color: #f7b126;">Sore</span> Today
      <span style="    color: #a60a0a;">Strong </span>Tomorrow</h1>
  </div>
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
  <?php if (isset($_SESSION['user'])) echo '<a href="profile.php"> <i class="fas fa-user-circle" id="profile" style="top: -348px;"></i></a>'; ?>
  <div class="floatingSocial">
    <a href="https://api.whatsapp.com/send?phone=+201124575724" title="Whatsapp" target="_blank" class="whatsapp">
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
  <br>
  <br>
  <br>
  <br>

  <form method="post" action="scripts/register.php" enctype="multipart/form-data">
    <div class="Regcontainer">
      <h1 style="padding:15px 0px">Register</h1>
      <div class="s">Please fill in this form to create an account.</div>
      <hr>
      <label for="fname"><b>First Name</b></label>
      <input type="text" placeholder="First Name" name="fname" id="fname" required>
      <br>
      <label for="lname"><b>Last Name</b></label>
      <input type="text" placeholder="Last Name" name="lname" id="lname" required>
      <br>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Username" name="uname" id="uname" required>
      <br>
      <label for="email" style="margin-right: 37px;"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>
      <br>

      <label for="psw" style="margin-right: 7px;"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
      <br>
      <label for="psw-repeat" style="margin-left: -58px;"><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Password" name="psw-repeat" id="psw-repeat" required>
      <br><br>
      <label for="dob" style="margin-left: 14px;"><b>Date Of Birth</b></label>
      <input type="date" placeholder="" name="dob" id="dob" required>
      <br><br>
      <label for="phone" style="margin-left: 64px;"><b>Phone</b></label>
      <input type="tel" placeholder="" name="phone" id="phone" required>
      <br><br>
      <label for="pp"><b>Profile Picture</b></label>
      <input type="file" placeholder="" name="profilepic" id="profilepic" required>
      <hr>
      <div class="s">By creating an account you agree to our Terms & Privacy.</div>
      <br>

      <button type="submit" name="register" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
      <div class="s">Already have an account? <a onclick="document.getElementById('id01').style.display='block';" style="color: #0000ffb3;
    cursor: pointer;">Sign in</div>.</p>
    </div>
  </form>

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
        <div class="column">
          <div class="site-copyright" style="margin-left: -146px;margin-bottom: -36px;">
            <span class="footer-divider" style="width:272%;"></span>
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
  <script src="https://kit.fontawesome.com/a4e672886c.js" crossorigin="anonymous"></script>
</div>