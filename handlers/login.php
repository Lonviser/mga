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

$pass= $_POST['pass'] ?? '';

$_SESSION['message'] = [];
if( !$email ) {
  
  $_SESSION['message'][] = '<p>Задайте корректный емейл для входа</p> ';  
  header('Location: /reg22');
  exit;
}
if( !$pass ) {
  $_SESSION['message'][] = 'Задайте пароль для входа';
  header('Location: /reg22');
  exit;
}

$query = "SELECT idusers,loginID, email, pass, verified, country, area, city FROM users WHERE email=?";

if ($stmt = mysqli_prepare($db, $query)) {

  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_bind_result($stmt, $idusers,$loginID, $emailDB, $passDB, $verifiedDB, $country, $area, $city);
  mysqli_stmt_fetch($stmt);

  if( $verifiedDB == 'N' ){
    $_SESSION['message'][] = 'До входа подтвердите регистрацию -
   нажмите на ссылку в электронной почте';
    header('Location: /reg22');
    exit;
  }
  
  if( password_verify($pass, $passDB)  ){
    $_SESSION['username'] = $email;
    $_SESSION['idusers'] = $idusers;
    $_SESSION['loginID'] = $loginID;
    $_SESSION['country'] = $country;
    $_SESSION['area'] = $area;
    $_SESSION['city'] = $city;
    
    header('Location: /reg22');
    exit;    
  }
  $_SESSION['message'][] = 'Пароль неверный';
  header('Location: /reg22');
  exit; 
}

}

