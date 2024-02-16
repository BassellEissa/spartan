<?php
session_start();
if(isset($_POST['changepwd']))
{
    try {
        $database = mysqli_connect("localhost","root", "","spartan_db");
    } catch (PDOException $pe) {
        die("Could not connect to the database :" . $pe->getMessage());
        exit();
    }

    $userID = $_POST['userID'];
	$currentpwd = $_POST['current_password'];
	$newpwd = $_POST['new_password'];
	$login = "SELECT * FROM users WHERE ID=$userID and password='$currentpwd'";
    $result = mysqli_query($database, $login);
    if ($result->num_rows>0)
    {
        $updateSQL = "UPDATE users SET password='$newpwd' WHERE ID=$userID";

        if (mysqli_query($database, $updateSQL)) {
            echo '<script>alert("Your password has been changed");
            window.open("../profile.php", "_self");</script>';
        } else {
            echo '<script>alert("Something wrong happened!");
            window.open("../profile.php", "_self");</script>';
        }
    } else {
        echo '<script>alert("Your current password is wrong");
        window.open("../profile.php", "_self");</script>';
    }
}

?>