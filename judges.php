<?php
/**
* Template Name: Judges
*/
?>
<div class="wrapper">
<?php
get_header();
?>

 <main class="clubs-main">
        <div class="breadcrumbs">
            <div class="container">
                <a href="/"><span class="a-title">Главная</span></a> 
                <span>| Судьи</span>
            </div>
        </div>
          <div class="container">
            <div class="red-title">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/red.svg" alt="">
                <h4 class="title">CУДЬИ АССОЦИАЦИИ ИНТЕЛЛЕКТУАЛЬНОЙ ИГРЫ МАФИЯ</h4>
              </div>
            <div class="find-bar"> 
                <input class="find-input" placeholder="Введите ник" type="text" >
                <input class="find-input" placeholder="По региону" type="text">
                <input class="find-input" placeholder="По клубу" type="text">
          </div>
          <div class="players">
              <div class="player">
                  <div class="avatar">
                    <img src="<?php echo bloginfo('template_url');?>/assets/img/avatar.png" alt="">
                  </div>
                  <div>
                      <p class="player-name">Дмитрий</p>
                      <p class="player-desc">Игрок, Судья 3 категории</p>
                      <p class="player-headline">Ник: <span class="player-info">Хайзер</span></p> 
                      <p class="player-headline">Клуб: <span class="player-info">Втеме</span></p> 
                      <p class="player-headline">Домашний регион:</p> 
                      <p class="player-info">Брестская область,г. Пинск</p>
                      <div class="player-btn-position">
                      <a class="popup-with-form" href="#test-form" mb-checked="1" data-tip=""> <button class="player-btn">Подробнее</button></a>
                      </div>
                  </div>
              </div>

          </div>

        </div> 
      </main>
      <form id="test-form" class="white-popup-block mfp-hide">
	<fieldset style="border:0;">
    <p class="center">В разработке</p>
	</fieldset>
</form>
      <?php
      
      get_footer();?>
</div>
