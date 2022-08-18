<?php
$email = '';
$pass1 = '';
$pass2 = '';

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
$email = filter_input(
  INPUT_POST,
  'email',
  FILTER_VALIDATE_EMAIL 
);

$pass1= $_POST['pass1'] ?? '';
$pass2= $_POST['pass2'] ?? '';

$loginID = !empty($_POST['login']) ? $_POST['login'] : '';
$country= !empty($_POST['country']) ? $_POST['country'] : '';
$area= !empty($_POST['area']) ? $_POST['area'] : '';
$city= !empty($_POST['city']) ? $_POST['city'] : '';

$_SESSION['message'] = [];
if( !$email ) {
  $_SESSION['message'][] = 'Задайте корректный емейл';  
  header('Location: /reg22?signup');
  exit;
}
if( !$pass1 || !$pass2 ) {
  $_SESSION['message'][] = 'Задайте пароль и подтверждение';
  header('Location: /reg22?signup');
  exit;
}
if( $pass1 != $pass2 ) {
  $_SESSION['message'][] = 'Укажите одинаковые пароли';
  header('Location: /reg22?signup');
  exit;
}

$stmt = mysqli_stmt_init($db);
if (mysqli_stmt_prepare($stmt, 'SELECT idusers FROM users WHERE email=?')) {
  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_bind_result($stmt, $idusers);
  mysqli_stmt_fetch($stmt);
  if( $idusers ){
    $_SESSION['message'][] = 'Email уже занят';
    header('Location: /reg22?signup');
    exit;
  } 
}

$stmt = mysqli_stmt_init($db);
if (mysqli_stmt_prepare($stmt, 'SELECT loginID FROM users WHERE loginID=?')) {
  mysqli_stmt_bind_param($stmt, "s", $loginID);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_bind_result($stm, $loginID);
  mysqli_stmt_fetch($stmt);
  if( $idusers ){
    $_SESSION['message'][] = 'Логин уже занят';
    header('Location: /reg22?signup');
    exit;
  } 
}

$pass = password_hash($pass1, PASSWORD_BCRYPT, ['cost' => 12,]);
$confirmation_token = bin2hex(random_bytes(40));
$query = "INSERT INTO `users` (`idusers`, `loginID`, `email`, `pass`, `verified`,`country`,`area`, `city`,  `created_at`, `confirmation_token`) VALUES (NULL,'$loginID', ?, '$pass', 'N','$country','$area','$city', NOW(), '$confirmation_token')";

$stmt = mysqli_stmt_init($db);
if (mysqli_stmt_prepare($stmt, $query)) {
  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);
  $_SESSION['message'][] = 'Проверьте емейл и подтвердите регистрацию';
  $msg = "Нажмите на \"http://{$_SERVER['SERVER_NAME']}/reg22/?confirmation_token=" . $confirmation_token . "\" ссылку для подтверждения email"; 
  mail("$email", "Подвердите регистрацию", "$msg");  
  header('Location: /reg22');
}
}
