<?php
  session_start();
?>
<h1>Мои посты</h1>
<meta charset="utf-8">
<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'lesson40');
$query = mysqli_query($con, "SELECT * FROM users WHERE id={$_SESSION["id"]}");
$stroka = $query->fetch_assoc();
echo "Привет, " . $stroka["name"];

 ?>

 <a href="account.php"> Ссылка </a>
 