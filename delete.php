<?php

$username = $_GET['username'];
//connect to database
$conn = mysqli_connect('localhost','root','','user');
//query to delete record from tbl_category with id
$sql = "delete from login where username = $username";
//execute query
mysqli_query($conn, $sql);

//redirect to listing page
header('location:display.php');
?>