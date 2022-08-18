<div class="wrapper">
<?php
get_header();
?>
  <main>
    <div class="container">
    <h3 class="authorization">Авторизация</h3>
    <p class="center">Ещё нет аккаунта? <a href="/reg22/?signup"><span class="red">Зарегистрироваться</span></a></p>
    <div class=form-position>
      <form method="POST" class="authorization-form"  action="?login">
      <div class="form-container">
          <label for="email">Email:</label>
          <input class="reg-input" name="email" id="email" placeholder="Введите email"  />
          <label for="pass">Пароль:</label>
          <input class="reg-input" type="password" name="pass" id="pass"  placeholder="Введите пароль" />
          <input type="submit" class="authorization-btn registration-btn " value="Войти"  />
          <a href="/reg22/?recovery"><p class="red middle">Забыли пароль? </p></a>
        </div>    
      </form>
      </div>
      </div> 
    </div>
  </main>
  <?php
      
      get_footer();?>
</div>


