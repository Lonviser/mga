<?php
/**
* Template Name: Authorization
*/
?>
			<?php
// Страница авторизации

// Функция для генерации случайной строки
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

// Соединямся с БД
// Соединямся с БД   $link=mysqli_connect("localhost", "studi181_mgadb", "*SkF3Ey9PCiu1Pn1", "studi181_mgadb");
 $link=mysqli_connect("localhost", "studi181_mgadb", "*SkF3Ey9PCiu1Pn1", "studi181_mgadb");

if(isset($_POST['submit']))
{
    // Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysqli_query($link,"SELECT user_id, user_password FROM users WHERE user_login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    // Сравниваем пароли
    if($data['user_password'] === md5(md5($_POST['password'])))
    {
        // Генерируем случайное число и шифруем его
        $hash = md5(generateCode(10));

        /*
        if(!empty($_POST['not_attach_ip']))
        {
            // Если пользователя выбрал привязку к IP
            // Переводим IP в строку
            $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
        }
        */
        $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
        // Записываем в БД новый хеш авторизации и IP
        mysqli_query($link, "UPDATE users SET user_hash='".$hash."' ".$insip." WHERE user_id='".$data['user_id']."'");

        // Ставим куки
        setcookie("id", $data['user_id'], time()+60*60*24*30, "/");
        setcookie("hash", $hash, time()+60*60*24*30, "/", null, null, true); // httponly !!!

        // Переадресовываем браузер на страницу проверки нашего скрипта
        header("Location: /"); exit();
    }
    else
    {
        print "Вы ввели неправильный логин/пароль";
    }
}
?>
<div class="wrapper">

<?php
get_header();
?>
<div class="container">
<h3 class="authorization">Авторизация</h3>
<p class="center">Ещё нет аккаунта? <a href="/registracziya/"><span class="red">Зарегистрироваться</span></a></p>
		<p class="error-message">

	</p>
<div class=form-position>
<form method="POST" class="authorization-form" action="">
    <div class="form-container">
	
    <label class="label" for="">Ник в игре</label>
    <input name="login" class="reg-input" type="text" placeholder="Введите никнейм">
    <label  class="label" for="">Пароль</label>
    <input name="password" class="reg-input" type="password" placeholder="Введите пароль">
    <div class="save-me">
    <input type="checkbox" name="not_attach_ip">  <label class="label" for="">Запомнить меня</label>
    </div>
    <div class="authorization-btn-position">
        <button name="submit" class="authorization-btn registration-btn ">Войти</button>
     <a  class="popup-with-form" href="#test-form" mb-checked="1" data-tip=""><p class="red">Забыли пароль?</p> </a>
    </div>
    
    </div>
</form>
<form id="test-form" class="white-popup-block mfp-hide">
	<fieldset style="border:0;">
    <p class="center">В разработке</p>
	</fieldset>
</form>
</div>
<!-- form itself -->


</div>
<?php
      
      get_footer();?>
      </div>