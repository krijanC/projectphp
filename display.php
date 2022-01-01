<?php
$conn=mysqli_connect('localhost','root','','user');
$sql = "SELECT * FROM login";
$res = mysqli_query($conn, $sql);
$data = [];
if (mysqli_num_rows($res) > 0) {
		while ($row = mysqli_fetch_assoc($res)) {
		array_unshift($data, $row);		
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>
<table border="1">
	<thead>
		<tr>
		<th>Id</th>
		<th>username</th>
		<th>password</th>
		<th>Action</th></tr>
	</thead>
	<?php
		$i=1;
		foreach ($data as  $d) {
			?> 
	<tbody>
		<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $d['username']; ?></td>
		<td><?php echo $d['password'];?></td>
		
		<td>
		 <a href="edit.php?id=<?php echo $d['id'] ?>">edit</a>
		 <a href="deleteform.php?id=<?php echo $d['id'] ?>" onclick = "return confirm('are you sure to delete??')">delete</a> </td>
	</tr>
	</tbody>
	<?php } ?>
</table>
</body>
</html>