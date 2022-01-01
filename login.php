<?php

$host="localhost";
$user="root";
$password="";
$db="user";

session_start();
$data=mysqli_connect($host,$user,$password,$db);
if($data==false){
	die("connection error");
}
if(isset($_POST["username"]) || isset($_POST["password"]) ^ $_SERVER["REQUEST_METHOD"]=="POST"){

	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql='select username, password, usertype from login';

	$result=mysqli_query($data,$sql);
	$row=mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	// echo $row;

	foreach ($row as $rrr) {
		if($rrr["username"]==$username && $rrr["password"]==$password)
		{
		if($rrr["usertype"]=="admin"){ 
			echo "admin";
		$_SESSION["username"]=$username;
		
		header("location:adminhome.php");
	}
	else if($rrr["usertype"]=="user"){ 
		echo "user";
		$_SESSION["username"]=$username;

		header("location:userhome.php");
	}
	else if($rrr["usertype"]=="doctor"){ 
		echo "doctor";
		$_SESSION["username"]=$username;

		header("location:doctorhome.php");
	}

	
	// if($row["usertype"]=="admin"){ 
	// 	$_SESSION["username"]=$username;
		
	// 	header("location:adminhome.php");
	// }

	else{

		echo "username or password incorrect";
	}
	} // if
	}// foreach
	
	}



?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
		<h1>Login Form</h1>
		<br><br><br><br>
		<div style="background-color: grey; width: 500px;">
			<br><br>


			<form action="#" method="POST">
	<div>
		<label>username</label>
		<input type="text" name="username" required>
	</div>
	<br><br>
	<div>
		<label>password</label>
		<input type="password" name="password" required>
	</div>
	<br><br>
	<div>
		
		<input type="submit" value="Login">
	</div>
	</form>
	<br><br>
	</div>
</center>

</body>
</html>