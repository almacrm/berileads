<?php
       if($_COOKIE['user'] == ''):
       ?>

<?php
if($_COOKIE['user'] == ''):
		?>
<?php else: ?>
<p color='blue'> Привет <?=$_COOKIE['user']?>. Чтобовы выйти нажмите 
	<a href="/exit.php">здесь</a><div>dfsadf <img src="Img/video.png" alt=""></div></p>


<?php endif;?>