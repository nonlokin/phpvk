<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">	
</head>
<body>
<div class="col-12" style="background-color: #4680C2">
	<div class="col-8 mx-auto">
		<div class="row">
			<div class="col-2">
				<img src="img/vk.png" class="w-25">
			</div>
			<div class="col-8">
			</div>
		</div>
	</div>
</div>
<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "lesson40");
	$text_zaprosa = "SELECT * FROM users";
	$zapros = mysqli_query($connect, $text_zaprosa);
	$stroka = $zapros->fetch_assoc();	
?>
<div class="col-6 border mx-auto" style="height:450px;">
	<form action="register2.php" method="GET">
		<input type="" name="name" class="form-control mt-2" placeholder="Имя">
		<input type="" name="surname" class="form-control mt-2" placeholder="Фамилия">
		<input type="" name="password" class="form-control mt-2" placeholder="Пароль">
		<input type="" name="city" class="form-control mt-2" placeholder="Город">
		<input type="" name="phone" class="form-control mt-2" placeholder="Номер телефона">
		<input type="" name="email" class="form-control mt-2" placeholder="Почта">
		<input type="" name="education" class="form-control mt-2" placeholder="Образование">
		<input type="" name="img" class="form-control mt-2" placeholder="Картинка">
		<button class="btn bg-primary mt-2 text-white">Зарегистрироваться</button>
	</form>
</div>
</body>
</html>