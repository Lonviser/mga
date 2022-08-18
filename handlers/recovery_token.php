


<?php
if( $_SESSION['recovery_token'] == $_GET['recovery_token'] ){

  require get_template_directory(  ). "/handlers/set_new_password.php";   
  require get_template_directory(  ). "/views/set_new_password.php";   
  exit;
} else {
  $_SESSION['message'][] = 'Некорректная ссылка восстановления';
  header('Location: /?recovery');
  exit;    
}