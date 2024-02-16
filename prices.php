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
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
  <?php if (isset($_SESSION['user'])) echo '<a href="profile.php"> <i class="fas fa-user-circle" id="profile" style="top: -248px;"></i></a>'; ?>
  <h2 style="text-align: center;margin-left: 391px; margin-top: 135px;">Our Prices</h2>
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
  <table class="PricesTable">
    <tr>
      <th>Number of Trainings</th>
      <th>1</th>
      <th>8</th>
      <th>12</th>
      <th>16</th>
    </tr>
    <tr>
      <th>Personal Training</th>
      <td>1,300 EGP</td>
      <td>1,170 EGP</td>
      <td>1,070 EGP</td>
      <td>1,000 EGP</td>
    </tr>
    <tr>
      <th>Total</th>
      <td>1,300 EGP</td>
      <td>9,360 EGP</td>
      <td>12,480 EGP</td>
      <td>16,000 EGP</td>
    </tr>
    <tr>
      <th>Personal Training Duo</th>
      <td>2,120 EGP</td>
      <td>15,360 EGP</td>
      <td>21,000 EGP</td>
      <td>26,200 EGP</td>
    </tr>
    <tr>
      <th>Total</th>
      <td>1,060 EGP</td>
      <td>7,680 EGP</td>
      <td>10,500 EGP</td>
      <td>13,100 EGP</td>
    </tr>
  </table>
  <table class="PricesTable2">
    <tr>
      <th>Daily Ticket</th>
      <td>500 EGP</td>
    </tr>
    <tr>
      <th>1 month membership</th>
      <td>2,980 EGP</td>
    </tr>
    <tr>
      <th>3 month's membership</th>
      <td>7,690 EGP</td>
    </tr>
    <tr>
      <th>6 month's membership</th>
      <td>15,290 EGP</td>
    </tr>
    <tr>
      <th>12 month's membership</th>
      <td>27,090 EGP</td>
    </tr>
    <tr>
      <th>Membership for students</th>
      <td>2,690 EGP</td>
    </tr>
    <tr>
      <th>Family membership</th>
      <td>2,690 EGP</td>
    </tr>
  </table>

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