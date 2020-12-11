<?php
	session_start();
?>
<?php
	$img_dir = 'img/'; //папка где хранятся картинки
	$img_name = $img_dir . basename($_FILES["avatarka"]["name"]); // путь где хранится картинка или полное нзвание картинки
	$upload = move_uploaded_file($_FILES["avatarka"]["tmp_name"], $img_name);

	$connect = mysqli_connect('127.0.0.1', 'root', '', 'lesson40');
	if($upload==true){
		$query = mysqli_query($connect, "UPDATE users SET avatar = '{$img_name}' WHERE id = '{$_SESSION["id"]}'");
	}
	header("Location: account.php")
?>