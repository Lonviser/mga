<?php
/**
* Template Name: Regist-22
*/
?>
<?php

//включаем буферизацию вывода
ob_start();

//стартуем сессию
session_start();

//подключаем базу
require get_template_directory(  ). "/config_db.php";

//отладочная информация
//echo "<pre>GET:",print_r($_GET),"</pre>";
//echo "<pre>POST:",print_r($_POST),"</pre>";
//echo "<pre>SESSION:",print_r($_SESSION),"</pre>";

//проверяем массив flash-сообщений и выводим
if( !empty($_SESSION['message']) ){
  foreach($_SESSION['message'] as $value){
    echo <<<MESSAGE
<div>{$value}</div>   
MESSAGE;
  }
  unset($_SESSION['message']);
}

//подтверждаем регистрацию: проверка клика по ссылке из емейла
if( !empty($confirmation_token = $_GET['confirmation_token']) ){
  require get_template_directory(  ). "/handlers/confirmation_token.php";  
}

//восстанавливаем пароль
if( isset( $_GET['recovery_token'])) {
  require get_template_directory(  ). "/handlers/recovery_token.php"; 
}

//обработка выхода из сессии
if( isset($_GET['logout']) ){
  require get_template_directory(  ). "/handlers/logout.php";  
}

//показ личного кабинета при существовании $_SESSION['username']
if($_SESSION['username']){
  require get_template_directory(  ). "/views/index.php";

 
 } elseif( !isset($_GET['recovery']) && !isset($_GET['signup']) ){ 

  //обработка входа - login 
  require get_template_directory(  ). "/handlers/login.php";
  require get_template_directory(  ). "/views/login.php";
}
 elseif( isset($_GET['recovery']) ){

  //форма восстановления пароля
  require get_template_directory(  ). "/handlers/recovery.php";
  require get_template_directory(  ). "/views/recovery.php";
}
 elseif( isset($_GET['signup']) ){

  //форма регистрации на сайте
  require get_template_directory(  ). "/handlers/signup.php";
  require get_template_directory(  ). "/views/signup.php";
}
?>



