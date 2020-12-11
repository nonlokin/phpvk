<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "lesson40");
	$text_zaprosa_vstavit = "INSERT INTO users (name, surname, password, city, phone, email, education, avatar)
							VALUES ('{$_GET["name"]}', '{$_GET["surname"]}', '{$_GET["password"]}', '{$_GET["city"]}', '{$_GET["phone"]}', '{$_GET["email"]}', '{$_GET["education"]}', '{$_GET["img"]}')";
	$zapros_vvoda = mysqli_query($connect, $text_zaprosa_vstavit);
	header("Location: index.php");
?>