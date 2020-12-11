<?php session_start()?>
<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "lesson40");
	$text_zaprosa = "SELECT * FROM users WHERE email ='{$_GET["email"]}' AND password = '{$_GET["password"]}'";
	$zapros = mysqli_query($connect, $text_zaprosa);
	$stroka = $zapros->fetch_assoc();
	$_SESSION["id"]=$stroka["id"];
	if($zapros->num_rows==0){
		header("location: index.php?error=Такого пользователя нет");
	} else {
		header("location: account.php");
	}
?>