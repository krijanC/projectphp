<?php
$user_id = $_POST['uid'];
$user_name = $_POST['uname'];
$user_address = $_POST['uaddress'];

$user_phone = $_POST['uphone'];

include 'config.php';

$sql = "UPDATE user SET uname = '{$user_name}', uaddress = '{$user_address}', uphone = '{$user_phone}' WHERE uid = {$user_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/project/display.php");

mysqli_close($conn);

?>
