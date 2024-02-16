<?php
if(isset($_POST['register']))
{
    try {
        $database = mysqli_connect("localhost","root", "","spartan_db");
    } catch (PDOException $pe) {
        die("Could not connect to the database :" . $pe->getMessage());
        exit();
    }

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$uname=$_POST['uname'];
	$password=$_POST['psw'];
    $password_confirm=$_POST['psw-repeat'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$phone=$_POST['phone'];
	$profile_picture=$_FILES["profilepic"];

    $fileName = $profile_picture['name'];
    $fileTmpName = $profile_picture['tmp_name'];
    $fileSize = $profile_picture['size'];
    $fileError = $profile_picture['error'];
    $fileType = $profile_picture['type'];

    $fileActualExt = pathinfo(basename($fileName), PATHINFO_EXTENSION);

    $allowed = array('jpg', 'jpeg', 'png', 'bmp');
   
   $check_uname = "SELECT uname FROM users WHERE uname = '$uname'";
   $result = mysqli_query($database, $check_uname);
   if ($result->num_rows>0){
    
    echo '<script>
    alert("Username Exist Try Different Username");
    window.open("../register.php", "_self");
    </script>';
    
   }
   else{
    
    if($password_confirm==$password){
	
    if ($result)
    {
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000) {
                    $fileNameNew = mysqli_insert_id($database) . '_profilepic.' . $fileActualExt;
                    $sql = "INSERT INTO users (ID, fname, lname, uname, password, email, dob, phone, profile_picture)
                    VALUES ('NULL', '$fname', '$lname', '$uname','$password','$email' ,'$dob', '$phone','$fileNameNew')";
                    $result = mysqli_query($database, $sql);
                    
                    $fileDestination = '../uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    echo '<script>alert("Successfuly Registered, please login");
                    window.open("../home.php", "_self");</script>';
                } else {
                    echo '<script>alert("Your file is too big!");
                    window.open("../register.php", "_self");</script>';
                }
            } else {
                echo '<script>alert("There was an error uploading your file!");
                window.open("../register.php", "_self");</script>';
            }
        } else {
            echo '<script>alert("You cannot upload files of this type!");
            window.open("../register.php", "_self");</script>';
        }
    } else {
        echo '<script>alert("Sorry something went wrong, your registration couldn\'t be completed");
        window.open("../register.php", "_self");</script>';
    }
        
    }
    else{
        echo '<script>alert("Password Isn\'t Matched");
        window.open("../register.php", "_self");
        </script>';
        
    }
    
    
    
   }
	
}
?>