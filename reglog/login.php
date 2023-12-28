<?php
require 'config.php';
if(!empty($SESSION["id"]]]{
	header("Location: index.php");
}
if(isset($_post["sumbit"])){
	$usernameemail = $_POST["usernameemail"];
	$password = $_POST["password"];
	$result = mysqli_query($conn, "SELECT * FORM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
	$row = mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result) > 0){
		if($password == $row["password"]){
			$_SESSION["login"] = true;
			$_SESSION["id"] = $row["id"];
			header("Location: index.php");
		}
		else{
			echo
			"<script> alert ('Wrong password');</script>";
		}
	}
	else{
		echo
			"<script> alert ('User not registered'); </script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
     <h2>Login</h2>
	 <form class="" action="" method="post" autocomplete="of">
	 <label for="usernameemail">username or email : </label>
	 <input type="tex" name="usernameemail" id="usernameemail" required value=""> <br>
	 
	 <label for="password">password : </label>
	 <input type="tex" name="password" id="password" required value=""> <br>
	 <button type="sumbit" name="sumbit">Login</button>
	 </form>
	 <br>
	 <a href="registration.php">Registration</a>
	 
	 
	 
</body>
</html>