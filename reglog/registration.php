<?php
require 'config.php';
if(!empty($SESSION["id"]]]{
	header("Location: index.php");
}
if(isset($_POST["sumbit"])){
	$name = $_POST["name"];
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$confirmpassword = $_POST["confirmpassword"];
	$duplicate = mysqli_query($conn, "SELECT * FORM tb_user WHERE username = '$username' OR email = '$email'");
	if(mysqli_num_rows($suplicate) > 0){
		echo
		"<script> alert ('Username or email has already taken');</script>";
	}
	else{
		if($password == $confirmpassword){
			$query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
			mysqli_query($conn,$query);
			
			echo
			"<script> alert ('registration succssefule');</script>";
		}
		else{
			echo
		"<script> alert ('password Dose not match');</script>";
		
			



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h2>Registration</h2>
	  <form class="" action="" method="post" autocomplete="off">
	     <label for="name">Name : </label>
	     <input type="text" name="name" id ="name" required value=""> <br>
	   
	     <label for="userName">UserName : </label>
	     <input type="text" name="userName" id ="userName" required value=""> <br>
	     
	     <label for="email">email : </label>
	     <input type="email" name="email" id ="email" required value=""> <br>
	   
	     <label for="passwword">password : </label>
	     <input type="password" name="password" id ="password" required value=""> <br>
	   
	     <label for="confirmpasswword">Confirm password : </label>
	     <input type="password" name="confirmpassword" id ="confirmpassword" required value=""> <br>
	     <button type="sumbit" name="sumbit">Register</button> 
	   </form>
	   <br>
	   <a href="login.php">Login</a>
	   
</body>
</html>