<?php
/**
* Template Name: clubgame
*/
?>

<div class="wrapper">
<?php
get_header();
?>
<main>
 
<div class="breadcrumbs">
            <div class="container">
                <a class="a-title" href="/"><span>Главная</span></a> 
                <span>| Генератор игр</span>
            </div>
        </div>
  <div class="container">
        <div class="red-title">
                    <img src="<?php echo bloginfo('template_url');?>/assets/img/red.svg" alt="">
                    <h4 class="title">Генератор игр</h4>
        </div>
     <h5 class="generator_h5">Клубная игра</h5>
     <div class="game_head">
        <div class="game_meta">
            <div class="club_name">
                <div>Клуб:</div>
                <div>Клуб ВТЕМЕ</div> 
            </div>
            <div class="game_date">
                <div>Дата:</div>
                <div><?php echo date('d-m-Y'); ?></div>
            </div>
            <div class="game_table">
                <div>Cтол:</div>
                <div>1</div>
            </div>
        </div>
        <button type="submit" class="button">Редактировать</button>
     </div>
     <hr class="game_line">

        <button class="accordion">Игра №1</button>
        <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <div class="action-zone">
            <div class="time-game-zone">
                <div class="timer">
                    <div class="timer-count">
                        1:00
                    </div>
                    <div class="control play">
                        <span class="left"></span>
                        <span class="right"></span>
                    </div>
            </div>
            <div class="day_and_night">
                <div class="day">
                    <button type="submit" class="button">Фаза день</button>
                </div>
                <div class="night">
                    <button type="submit" class="button">Фаза ночь</button>
                </div>
            </div>
            </div>
        </div>
            
 </div>
</main>

<?php
      get_footer();
?>
</div>
