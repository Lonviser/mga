
<div class="wrapper">
<?php get_header();
?>
<main>
 <div class="container">

 <div class=form-position>
 <form class="recover" method="POST" action="?recovery">
    <h3>Восстановление пароля: шаг 1 из 2</h3>
    <br>
    <label class="label" for="email">Email:</label>
    <input class="reg-input" name="email" id="email" require />
    <input class="registration-btn" value="Отправить" type="submit" />
</form>
 </div>
 </div>
</main>

<?php
      get_footer();
?>
</div>

