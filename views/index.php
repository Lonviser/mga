<div class="wrapper">
<?php
get_header();
?>

 <main class="clubs-main">
        <div class="breadcrumbs">
            <div class="container">
                <a class="a-title" href="/"><span>Главная</span></a> 
                <span>| Профиль пользователя <?php echo($_SESSION['loginID']);?> </span>
            </div>
        </div>
          <div class="container">
            <div class="red-title">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/red.svg" alt="">
                <h4 class="title">Профиль</h4>
              </div>
            
              <div class="profile-block">
                <div class="profile-bar">
                    <div class="profile-info">
                        <p>Общая информация</p>
                    </div>
                    <div class="profile-main">
                        <div class="profile-avatar">
                        <img class="flex-img" src="<?php echo bloginfo('template_url');?>/assets/img/profile-avatar.png" alt="">
                        <a class="popup-with-form" href="#test-form" mb-checked="1" data-tip="">
                        <button class="profile-avatar-btn">Загрузить фото</button>
                        </a>
                        </div>
                        <div class="profile-info-table">
                            <table class="profile-table">
                            <h3 class="profile-title">ИНФОРМАЦИЯ О ПОЛЬЗОВАТЕЛЕ</h3>
                            <tr><td>Имя:</td><td class="profile-table-desc">-</td></tr> 
                            <tr><td>Ник:</td><td class="profile-table-desc">  <?php echo($_SESSION['loginID']); ?>
                            </td></tr>
                            <tr><td>Статус:</td><td class="profile-table-desc">Игрок</td></tr>
                            <tr><td>Домашний регион:</td><td class="profile-table-desc"> <?php 
                              echo($_SESSION['country']);
                              echo($_SESSION['area']);
                              echo($_SESSION['city']);
                              ?>
                            </td></tr>
                            <tr><td>Клуб:</td><td class="profile-table-desc">-</td></tr>
                            <tr><td>Вконтакте:</td><td class="profile-table-desc"><a href="" target="_blank">-</a> </td></tr>
                            <tr><td>Telegram:</td><td class="profile-table-desc"><a href="" target="_blank">-</a> </td></tr>
                            <tr><td>Instagram:</td><td class="profile-table-desc"><a href="" target="_blank">-</a> </td></tr>
                            <tr><td>Facebook:</td><td class="profile-table-desc"><a href="" target="_blank">-</a> </td></tr>
                            </table>
                        </div>
                        <a style=" " class="popup-with-form" href="#test-form" mb-checked="1" data-tip="">
                        <button class="change-profile profile-avatar-btn">Редактировать</button>
                        </a>
                        <a href="/reg22/?logout">
                          Выйти
                        </a>
                    </div>
                </div>
                </div>
            </div>



            <?php
      get_footer(); ?>
        </div> 

      </main>


      <form id="test-form" class="white-popup-block mfp-hide">
	<fieldset style="border:0;">
    <p class="center">В разработке</p>
	</fieldset>
</form>

</div>
