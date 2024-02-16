<?php session_start();
if(!ISSET($_SESSION['user'])) {
  header("Location: home.php");
}

?>
<html>

<head>
  <script src="functions.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <style>
    #card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 420px;
      height: 87%;
      margin: auto;
      text-align: center;
      font-family: arial;
      margin-bottom: 75px;
    }

    .title {
      color: grey;
      font-size: 18px;
    }
  </style>


  <link rel="stylesheet" href="style.css">
  <script src="functions.js"></script>
  <title>Spartan Gym</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="spartan.png" type="image/png" sizes="40x40">
  <meta charset="UTF-8">
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
    </li>
  </ul>
  <h2 style="text-align:center; margin-left: 164px; margin-top: 41px;" >User Profile</h2>

  <div id="card">
  <?php 
  $profilepic = "jondoe.png";
  if (!empty($_SESSION['user']['ProfilePic']) && file_exists ('uploads/'.$_SESSION['user']['ProfilePic']))
    $profilepic = 'uploads/'.$_SESSION['user']['ProfilePic'];
  ?>
    <img src="<?php echo $profilepic; ?>" alt="John" id="pic" style="min-height: 38%;max-height: 38%;min-width:55%;max-width:55%;border-radius: 100%;padding-top: 15px;">
    <h1 style="padding: 0; font-size:30px;padding-top: 65px;" id='fullname'><?php echo $_SESSION['user']['Fullname']; ?></h1>
    <p class="title" id="username">@<?php echo $_SESSION['user']['Username']; ?></p>
    <p id="change_password"class="change_password" onclick="myFunction3();" >Change Password</p>
   
  </div>
  
  <ul class="toggle_main" >
    <li>
      <button id="toggle2" onclick="myFunction2(); document.getElementById('card')">User Card</button>
    </li>
    <br>
    <li>
      <button id="toggle" onclick="myFunction(); document.getElementById('reservation_history')">Reservation History</button>
    </li>
    </ul>
    <form method="post" action="scripts/edit.php" style="text-align:center;display: none;margin-left: 147px;margin-bottom: 65px;" id="change_psw_form">
      <label>Current Password: </label>
      <input type="hidden" id="userID" name="userID" value="<?php echo $_SESSION['user']['ID']; ?>" />
      <input type="password" name="current_password" id="current_password" required />
        <br>
      <label style="margin-left: 20px;">New Password: </label>
      <input type="password" name="new_password" id="new_password" required />
        <br>
      <button type="submit" name="changepwd" class="registerbtn" id="changepwd">Change</button>
    </form>
    
  <table id="reservation_history" style="display:none;">
    <tbody id="reservation_body">
     <tr style="background-color: #f7b126;">
        <th>Reservation Id</th>
        <th style="width: 95px;">Name</th>
        <th>Email</th>
        <th>Training Mode</th>
        <th>User Id</th>
        <th>Phone</th>
        <th>Arrive Date</th>
        <th>Arrive Time</th>
        <th>Invites</th>
        <th>Jacuzzi</th>
        <th>Massage</th>
      </tr>
      <?php
            try {
              $database = mysqli_connect("localhost","root", "","spartan_db");
            } catch (PDOException $pe) {
              die("Could not connect to the database :" . $pe->getMessage());
              exit();
            }
            $user_id = $_SESSION['user']['ID'];
            $sql = "SELECT * FROM reservations WHERE user_id = $user_id ORDER BY reservation_id" or die(mysql_error($database));
            $rs = mysqli_query($database, $sql);
            while($row = mysqli_fetch_array($rs)) {
                echo "\t<tr>
                <td>".$row['reservation_id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['training_mode']."</td>
                <td>".$row['user_id']."</td>
                <td>".$row['phone']."</td>
                <td>".$row['arrive_date']."</td>
                <td>".$row['arrive_time']."</td>
                <td>".$row['invites']."</td>
                <td>".$row['jacuzzi']."</td>
                <td>".$row['massage']."</td>
                </tr>\n";
            }
            mysqli_close($database);
    ?>
    </tbody>
  </table>

</body>
<footer>
  <div class="row">
    <div class="column" style="margin-top: -12px;margin-left: -153px; text-align: center;">
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
          <<div class="site-copyright" style="margin-left: -146px;margin-bottom: -36px;">
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
</div>

</html>