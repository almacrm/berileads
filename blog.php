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
				<div class="offers__title">
					<h3>БЛОГ</h3>
				</div>
				<div class="blog__news">
					<div class="blog__new">
						<div class="blog__new_image">
							<img src="Img/blog/news1.jpg" alt="">
						</div>
						<div class="blog__new__text">
							<div class="blog__new__title">
								Продажи как цель существования любой компании
							</div>
							<div class="blog__new__data">
								<img src="Img/icon/calendar.png" alt="">
								<span>Опубликовано: 04 мая 2019</span>
							</div>
							<div class="blog__new__subtitle">
								В наше время достаточно большая часть людей работает над развитием своего бизнеса в самых разных сферах. Благодаря этому они не только повышают уровень собственного дохода, но и работают над улучшением обеспечения определенными товарами ...
							</div>
							<div class="blog__new__link">
								<span class='blog__new__detail'>
									<a href="#">Подробнее...</a>								
								</span>
						    </div>	
						</div>
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

