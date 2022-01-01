<?php
include 'header.php'; 
session_start();
?>

<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body>

	<h1>THIS IS ADMIN HOME PAGE.</h1><?php echo $_SESSION["username"]?>

</body>
</html>