<?php
session_start();
if(isset($_POST['login']))
{
    try {
        $database = mysqli_connect("localhost","root", "","spartan_db");
    } catch (PDOException $pe) {
        die("Could not connect to the database :" . $pe->getMessage());
        exit();
    }

	$username = $_POST['username'];
	$password = $_POST['psw'];
	$login = "SELECT * FROM users WHERE uname='$username' AND password='$password'";
    $result = mysqli_query($database, $login);
    
    if ($result->num_rows>0)
    {
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $id = $user['ID'];
        $_SESSION['user']['ID'] = $user['ID'];
        $_SESSION['user']['Fullname'] = $user['fname'] . ' ' . $user['lname'];
        $_SESSION['user']['Username'] = $user['uname'];
        $_SESSION['user']['ProfilePic'] = $user['profile_picture'];
        echo '<script>
        window.open("../profile.php", "_self");</script>';
    } else {
        echo '<script>alert("Username or password are wrong");
        window.open("../home.php", "_self");</script>';
    }
}
?>