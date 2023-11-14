<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	$conn = new mysqli('localhost','root', '', 'loginweb');

	$sql = "SELECT * FROM user WHERE username = '$username'";
	$result = $conn->query($sql)->fetch_assoc();

	if($result['password'] == $password) {
		header('Location: http://localhost/trangchu.php');
	} else {
		header('Location: http://localhost/form.php');
	}
	$conn -> close();


?>