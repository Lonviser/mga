
<div class="wrpapper">
<?php
    get_header();
?>
    <main>
      <div class="container">
      <h3 class="registration">РЕГИСТРАЦИЯ</h3>
      <a href="/reg22"><h4 class="center">Войти в профиль</h4></a>
      <div class=form-position>
        <form name="address" class="registration-form" method="POST" action="?signup">
         <div class="form-container">
            <label class="label" for="">Ник в игре</label>
            <input class="reg-input" type="login" placeholder="Введите никнейм" name="login" id="login"  required/>
            <label class="label" for="email">Email:</label>
            <input class="reg-input" name="email" id="email" placeholder="Введите электронную почту" required />
            <label class="label" for="pass1" >Пароль:</label>
            <input class="reg-input" type="password" placeholder="Придумайте пароль" name="pass1" id="pass1" required />
            <label class="label" for="pass2">Повтор пароля:</label>
            <input class="reg-input" type="password" placeholder="Подтверждение пароля" name="pass2" id="pass2"  required/>
            <div class="reg-block">
            <div class="reg-block-column">
            <label class="label" for="">Страна</label>
            <select name="country" id="country" class="reg-input" type="text" placeholder="Страна">
            <option>Беларусь</option>
            </select>
            </div>
            <div class="reg-block-column">
            <label class="label" for="">Область</label>
            <select placeholder="Выберите область" class="reg-input" name="area" id="area" onChange="MkHouseValues(this.selectedIndex)">
            <option value="Минская область">Минская область</option>
            <option value="Брестская область">Брестская область</option>
            <option value="Витебская область">Витебская область</option>
            <option value="Гомельская область">Гомельская область</option>
            <option value="Гродненская область">Гродненская область</option>
            <option value="Могилёвская область">Могилёвская область</option>
            </select>
            </div>
            <div class="reg-block-column">
            <label  class="label" for="">Город</label>
            <select placeholder="Выберите город" class="reg-input" name="city" id="city">
            <option value="N/A">N/A</option>
            </select>
            </div>
            </div>
            <input class="registration-btn" type="submit" value="Зарегестрироваться" />
            </div>
            
         </form>
       </div>
      </div>
    
    </main>  
    <?php
        get_footer();?>
    </div>
    </div>
