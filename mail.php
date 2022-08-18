<?php
/**
* Template Name: Mail
*/
?>



<form class="my-form" action="" method="post">
  <small>* Все поля обязательны для заполнения</small>
  <div class="form-group">
    <input type="email" class="form-control" name="email" placeholder="Ваш email" required/>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="theme" placeholder="Тема сообщения" required/>
  </div>
  <div class="form-group">
    <textarea class="form-control" rows="3" name="message" placeholder="Введите сообщение" required></textarea>
  </div>
  <button type="submit" class="btn btn-warning" name="submit">Отправить</button>
</form>

<?php
$to = "<47rex47@mail.ru>";
$email = $_POST['email'];
$subject = $_POST["theme"];
$page = 'Страница спасибо за комментарий'; 
$message = '
<html>
<body>
<center>	
<table border=1 cellpadding=6 cellspacing=0 width=90% bordercolor="#DBDBDB">
 <tr><td colspan=2 align=center bgcolor="#E4E4E4"><b>Информация</b></td></tr>
 <tr>
  <td><b>Откуда</b></td>
  <td>'.$page.'</td>
 </tr>
 <tr>
  <td><b>Адресат</b></td>
  <td><a href="mailto:'.$email.'">'.$email.'</a></td>
 </tr>
 <tr>
  <td><b>Тема</b></td>
  <td>'.$subject.'</td>
 </tr>
 <tr>
  <td><b>Сообщение</b></td>
  <td>'.$_POST['message'].'</td>
 </tr>
</table>
</center>	
</body>
</html>'; 
$headers  = "Content-type: text/html; charset=utf-8\r\n";
if (!empty($email) && !empty($subject) && !empty($message)) {
$result = mail($to, $subject, $message, $headers);
}	
if ($result) {
	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Сообщение успешно отправлено!</strong> Вы можете закрыть это сообщение.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}else{
	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Сообщение не отправлено!</strong> Попробуйте еще раз.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>