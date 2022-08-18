<?php
/**
* Template Name: Сlubs
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
                <span>| Клубы</span>
            </div>
        </div>
          <div class="container">
            <div class="red-title">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/red.svg" alt="">
                <h4 class="title">КЛУБЫ АССОЦИАЦИИ ИНТЕЛЛЕКТУАЛЬНОЙ ИГРЫ МАФИЯ</h4>
              </div>
            <div class="find-bar"> 
                <input class="find-input" placeholder="Введите название клуба" type="text" >
                <input class="find-input" placeholder="По региону" type="text">
                <input class="find-input" placeholder="По количеству участников" type="text">
          </div>
          <div class="clubs">
              <div class="club">
                <div class="logo-description">
                    <div class="club-logo">
                        <img src="<?php echo bloginfo('template_url');?>/assets/img/vteme.png" alt="vteme">
                    </div>
                    <div class="description">
                        <p class="club-name">Клуб ВТЕМЕ</p>
                        <p class="player-count">Количество участников: 21</p>
                        <p class="club-headline">Расположение:</p>
                        <p class="club-info">Брестская область,
                            г. Пинск</p>
                        <p class="club-info"><span class="club-headline" >Сайт:</span> https://mafia.of.by/</p>
                        <p  class="club-headline">Контактные данные:</p>
                        <p  class="club-info">+375 (29) 740-2-740</p>
                    </div>                    
                </div>
                <div class="short_description">
                    <p class="club-headline short">Короткое описание:  </p>
                    <p class="club-info">«Клуб ВТЕМЕ» — это универсальное место, в котором каждый найдёт себе занятие по душе, не считая основного направления — это игра Мафия. Мафия в Пинске...</p>
                </div>
                <div class="club-btn">
                <a class="popup-with-form" href="#test-form" mb-checked="1" data-tip=""> <button class="join-club">Вступить в клуб</button> </a>
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
      
      get_footer(); ?>
</div>
