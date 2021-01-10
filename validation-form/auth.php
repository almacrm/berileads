<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);               //$_POST['login'];
  
//echo $login;
   
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);  


$pass = md5($pass."dsDkjgf656544");



$mysql = new mysqli('127.0.0.1','root','root','register-bd');



$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' and `pass` = '$pass'");
$user = $result->fetch_assoc();
if(count($user) == 0) {
 echo "Такой пользователь не найден";
 exit();
}
//print_r($user);
//exit();
setcookie('user', $user['login'], time() + 3600, "/");




$mysql->close;

header('Location: /lk.php');






?>