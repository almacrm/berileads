<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);               //$_POST['login'];
  
//echo $login;
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);   
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);   


if (mb_strlen($login) < 5 || mb_strlen($login) >90) {
    echo "Недопустимая длина логина";
    exit();

}  else if (mb_strlen($email) < 3 || mb_strlen($email) >50) {
    echo "Недопустимая длина имени";
    exit();

} else if (mb_strlen($pass) < 2 || mb_strlen($pass) >6) {
    echo "Недопустимая длина пароля (от 2 до 6 символов)";
    exit();

} 

$pass = md5($pass."dsDkjgf656544");



$mysql = new mysqli('127.0.0.1','root','root','register-bd');
$mysql->query("INSERT INTO `users` (`login`,`pass`,`email`) VALUES('$login','$pass','$email')");

$mysql->close;

header("Location: /lk.php")
?>

