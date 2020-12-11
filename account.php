<?php 
	session_start();
 ?>
<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<meta charset="utf-8">
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 	<style type="text/css">
 		.search-input{
			border-radius: 15px;
			border:none;
			padding-top: 5px;
			padding-bottom: 5px;
			padding-left: 10px;		
			background: #224b7a;
			color: white;
			outline: none;
			width: 250px;
		}
 	</style>
 </head>
 <body>
<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "lesson40");
	$text_zaprosa = "SELECT * FROM users WHERE id={$_SESSION["id"]}";
	$zapros = mysqli_query($connect, $text_zaprosa);
	$stroka = $zapros->fetch_assoc();
?>
<div class="col-12" style="background-color: #4680C2">
	<div class="col-8 mx-auto">
		<div class="row">
			<div class="col-2">
				<img src="img/vk.png" class="w-25">
			</div>
			<div class="col-8">
				<input class="mt-1 search-input" placeholder="Поиск" >
			</div>
		</div>
	</div>
</div>

<div class="col-8 mx-auto">
	<div class="row">
		<div class="col-2">
			<p class="mt-2" style="color:#4680C2; font-size:13px;">Моя страница</p>
			<p class="" style="color:#4680C2; font-size:13px;">Новости</p>
			<p class="" style="color:#4680C2; font-size:13px;">Мессенджер</p>
			<p class="" style="color:#4680C2; font-size:13px;">Друзья</p>
			<p class="" style="color:#4680C2; font-size:13px;">Сообщества</p>
			<p class="" style="color:#4680C2; font-size:13px;">Фотографии</p>
			<p class="" style="color:#4680C2; font-size:13px;">Музыка</p>
			<p class="" style="color:#4680C2; font-size:13px;">Видео</p>
			<p class="" style="color:#4680C2; font-size:13px;">Клипы</p>
			<p class="" style="color:#4680C2; font-size:13px;">Игры</p>
			<div class="border-bottom"></div>
			<p class="mt-2" style="color:#4680C2; font-size:13px;">Мини-приложения</p>
			<p class="mt-2" style="color:#4680C2; font-size:13px;">VK Pay</p>
			<div class="border-bottom"></div>
			<p class="mt-2" style="color:#4680C2; font-size:13px;">Маркет</p>
			<p class="" style="color:#4680C2; font-size:13px;">Закладки</p>
			<p class="" style="color:#4680C2; font-size:13px;">Файлы</p>			
		</div>


		<div class="col-3 text-center">
			<div>
				<img src="<?php echo $stroka["avatar"]?>" class="w-100 img">
				<div style="background-color: rgba(0,0,0,0.7)">
					<p data-toggle="modal" data-target="#exampleModal" class="text-white update">Обновить фотографию</p>
				</div>
			</div>
			
			<form action="redakt.php" method="GET">
				<input type="hidden" name="id" value="<?php echo $stroka["id"]?>">
				<button class="btn btn-primary mt-3">Редактировать</button>
			</form>
			
		</div>
		<div class="col-7 pt-3">
			<div class="col-12 border-bottom " >
				<h5><?php echo $stroka["name"].'  '.$stroka["surname"]?></h5>
				<p class="text-secondary">Изменить статус</p>
			</div>
			<p class="mt-2 ml-2" style="color:gray">День рождения: ---</p>
			<p class="mt-2 ml-2" style="color:gray">Город: <span style="color:#4680C2" class="ml-5"><?php echo $stroka["city"]?></span></p>
			<p class="mt-2 ml-2" style="color:gray">Образование: <span style="color:#4680C2" class="ml-5"><?php echo $stroka["education"]?></span></p>
			<p class="mt-2" style="color:#4680C2; margin-left:150px;">Показать подробную информацию</p>
			<div class="border-bottom"></div>
		</div>
	</div>
</div>

<!--модальное окно-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Загрузка новой фотографии</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>Друзьям будет проще узнать Вас, если Вы загрузите свою настоящую фотографию.
		Вы можете загрузить изображение в формате JPG, GIF или PNG.</p>
		<form method="POST" action="update.php" enctype="multipart/form-data">	
			<input type="file" name="avatarka"  placeholder="Выбрать файл">
			<button class="btn btn-primary mt-3">Сохранить и продолжить</button>
		</form>
		
      </div>
      <div class="modal-footer">
        
        <p>Если у Вас возникают проблемы с загрузкой, попробуйте выбрать фотографию меньшего размера.</p>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

 </body>
 </html>