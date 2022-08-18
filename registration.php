<?php
/**
* Template Name: Registration
*/
?>


    <div class="wrpapper">
    <?php
    get_header();
    ?>
    <main>
    <div class="container">
    <h3 class="registration">РЕГИСТРАЦИЯ</h3>
    <a href="/avtorizacziya/"><h4 class="center">Войти в профиль</h4></a>
    <div class=form-position>
    <form class="registration-form" method="POST" action="">
        <div class="form-container">
            <p class="error-message"><?php
        $link=mysqli_connect("localhost", "studi181_mgadb", "*SkF3Ey9PCiu1Pn1", "studi181_mgadb");

        if(isset($_POST['submit']))
        {
            $err = [];

            // проверям логин
            if(!preg_match("/^[а-яА-ЯёЁa-zA-Z0-9]+$/",$_POST['login']))
            {
                $err[] = "Логин может состоять только из букв и цифр, без пробелов";
            }

            if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
            {
                $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
            }

            // проверяем, не сущестует ли пользователя с таким именем
            $query = mysqli_query($link, "SELECT user_id FROM users WHERE user_login='".mysqli_real_escape_string($link, $_POST['login'])."'");
            if(mysqli_num_rows($query) > 0)
            {
                $err[] = "Пользователь с таким логином уже существует в базе данных";
            }

            if($_POST['password']!=$_POST['password2']){
                $err[] = "Пароли не совпадают";
            }

            // Если нет ошибок, то добавляем в БД нового пользователя
            if(count($err) == 0)
            {
                $login = $_POST['login'];
                $country = $_POST['country'];
                $area = $_POST['area'];
                $city = $_POST['city'];
                // Убераем лишние пробелы и делаем двойное хеширование
                $password = md5(md5(trim($_POST['password'])));
                //mysqli_query($link,"INSERT INTO users SET user_login='".$login."', user_password='".$password."',, country='".$country."', area ='".$area."', city ='".$city."' " );
                mysqli_query($link,"INSERT INTO users SET user_login='".$login."', user_password='".$password."', city='".$city."', country='".$country."', area='".$area."'" );
                print "<p class='verify'>Вы успешно зарегистрировались</p>";
                print "<a href='/avtorizacziya/' class='verify'>Авторизируйтесь для входа в аккаунт</a>";
        
            }
            else
            {
                print "<b>При регистрации произошли следующие ошибки:</b><br>";
                foreach($err AS $error)
                {
                    print $error."<br>";
                }
            }
          
        }

    ?></p>
        <label class="label" for="">Ник в игре</label>
        <input name="login" class="reg-input" type="text" placeholder="Введите никнейм"  required>
        <p>
        <?php 
        $query = mysqli_query($link, "SELECT user_id FROM users WHERE user_login='".mysqli_real_escape_string($link, $_POST['login'])."'");
        if(mysqli_num_rows($query) > 0)
        {
            $err[] = "Пользователь с таким логином уже существует в базе данных";
        }
        ?>
        </p>

        <label class="label" for="">Пароль</label>
        <input name="password" class="reg-input" type="password" placeholder="Придумайте пароль"  required>
        <label  class="label" for="">Подтверждение пароля</label>
        <input name="password2" class="reg-input" type="password" placeholder="Подтверждение пароля" >
        <div class="reg-block">
            <div class="reg-block-column">
            <label class="label" for="">Страна</label>
            <select name="country" class="reg-input" type="text" placeholder="Страна">
            <option value="Беларусь">Беларусь</option>
            </select>
            </div>
            <div class="reg-block-column">
            <label class="label" for="">Область</label>
            <select name="area" class="reg-input" type="text" placeholder="Выберите область"> 
            <option value="Минская область">Минская область</option>
            <option value="Брестская область">Брестская облась</option>
            <option value="Витебская область">Витебская область</option>
            <option value="Гомельская область">Гомельская область</option>
            <option value="Гродненская область">Гродненская область</option>
            <option value="Могилёвская область">Могилёвская область</option>
            </select>
            </div>
            <div class="reg-block-column">
            <label class="label" for="">Город</label>
            <input name="city" class="reg-input" type="text" placeholder="Выберите город">
            </div>
        </div>
        
        <p class="agreement">Нажимая на кнопку «Зарегистрироваться», вы соглашаетесь с Правилами сайта и 
        даете согласие на обработку персональных данных</p>
        <input class="registration-btn" name="submit" type="submit" value="Зарегистрироваться">
        </div>
    </form>


    
    </div>
    <form id="test-form" class="white-popup-block mfp-hide">
        <fieldset style="border:0;">
        <p class="center">В разработке</p>
        </fieldset>
    </form>
    </main>
    <?php
        get_footer();?>
    </div>
    </div>