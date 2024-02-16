
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Spartan Gym</title>
	 <link rel="icon" href="spartan.png" type="image/png" sizes="40x40">
</head>

<body>

<?php

/*
if (!($database))
	die( "Could not connect to database </body></html>" );
if(isset($_POST['register']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$uname=$_POST['uname'];
	$password=$_POST['psw'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$phone=$_POST['phone'];
	$profile_picture=$_POST['pp'];
		
	$sql = "INSERT INTO users (ID, fname, lname, uname, password, email, dob, phone, profile_picture)
	VALUES ('NULL', '$fname', '$lname', '$uname','$password','$email' ,'$dob', '$phone','$profile_picture')";
	
	
	$result = mysqli_query($database, $sql);
	
	if (!($result))
	{
		?>
<script>
	alert('Error, Please Try Again Later');
	window.open('register.php','_self');
</script>
<?php
}
else if($result){
	?>
	<script>
	alert('Successfully Registered');
	window.open('home.php#openLogin','_self');
	
</script>
	<?php
}
}

if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['psw'];
	$login = "SELECT uname, password FROM users WHERE uname='$username' AND password='$password'";
	$result = mysqli_query($database, $login);
	
if ($result->num_rows>0)
{
			session_start();
			$profile = file_get_contents('profile.php');
			$nameQuery = "SELECT fname, lname, profile_picture FROM users WHERE uname='$username' AND password='$password'";
			$result = mysqli_query($database, $nameQuery);
			if($result){
				while ($row = mysqli_fetch_array($result)) {
					$Fullname = $row[0] ." ". $row[1];
					$Pic = $row[2];
				}
				setcookie("Fullname",$Fullname);
				setcookie("Username",$username);
		}
		
	}

		
else{
	
	?>
				<script>
				alert('Wrong Username Or Password');
				window.open('home.php','_self');
				</script>
		<?php
}
 
 }

	*/

$database = mysqli_connect("localhost","root", "","spartan_db");
	if(isset($_POST['reservation']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$training_mode=$_POST['training_mode'];
	$user_id=$_POST['user_id'];
	$phone=$_POST['phone'];
	$arrive_date=$_POST['arrive_date'];
	$arrive_time=$_POST['arrive_time'];
	$invites=$_POST['invites'];
	$jacuzzi=$_POST['jacuzzi'];
	$massage=$_POST['massage'];
	$comment=$_POST['comment'];
		
	$reservation = "INSERT INTO reservations (reservation_id,	name,	email,	training_mode,	user_id,	phone,	arrive_date,	arrive_time,	invites,	jacuzzi,	massage,	comment)
	VALUES ('NULL', '$name', '$email', '$training_mode','$user_id','$phone' ,'$arrive_date', '$arrive_time','$invites' , '$jacuzzi', '$massage', '$comment')";

	$result = mysqli_query($database, $reservation);
	
	if (!($result))
		die( "Could not connect to database </body></html>" );
		else{
			echo '<script>window.open("profile.php","_self");</script>';
		}
		
}
$reservation = "SELECT * FROM reservations, users WHERE reservations.user_id = users.ID";
$result = mysqli_query($database, $reservation);
if($result)
		{
			
			echo'<script>windows.open("profile.php","_self");</script>';
			
			
		}
?>

</body>
</html>