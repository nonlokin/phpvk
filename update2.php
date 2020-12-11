<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "lesson40");	

	$text_zaprosa = "UPDATE users
	SET name = '{$_GET["name"]}', surname = '{$_GET["surname"]}', password = '{$_GET["password"]}', city = '{$_GET["city"]}', phone = '{$_GET["phone"]}', email = '{$_GET["email"]}'
	WHERE id = {$_GET["id"]}";
	mysqli_query($connect, $text_zaprosa);
	header("Location: index.php");
?>