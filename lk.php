
<!DOCTYPE html>
<html lang="ru">
	<head> 
		<title>Berileads</title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/iconsfont.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	</head>
   
	<body>
		<?php include('tpl/header.php');  ?>
	

		<section>
			<div class="wrapper">
				<div class="lk__title">
					<h3>Личный кабинет</h3>
				</div>
				<div class="lk__body">
					<div class="lk__sidbar">
						<div class="lk__saidbar__main">
							<div class="lk__saidbar__title">
								Ваш аккаунт
							</div>
							<div class="lk__saidbar__link">
							<ul>
								<li><a href="">Ваш профиль</a></li>
								<li><a href="">Оповещения</a></li>
								<li><a href="">Закладки</a></li>
							</ul>
							</div>
							
							
								<div class="lk__saidbar__title">
									Настройки
								</div>
								<div class="lk__saidbar__link">
								<ul>
									<li><a href="">Информация</a></li>
									<li><a href="">Безопасность</a></li>
									<li><a href="">Настройки</a></li>
									<li><a href="">Черный список</a></li>
								</ul>
								</div>
							
						</div>
						<div class="lk__sidbar_logout">
							<a href="" class="logout">Выйти</a>
						</div>
					</div>
					<div class="lk__main">
						<p color='blue'> Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите 
	                  <a href="/exit.php">здесь</a></p>
					</div>
	            </div>
			</div>
		</section>			

		
		<?php include('tpl/footer.php');  ?>
		<?php include('tpl/popup.php');  ?>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
		<script src="js/script.js"></script>
	</body>
</html>

               

