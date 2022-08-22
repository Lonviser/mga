<?php
/**
* Template Name: Generator Games
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
    <div class="games">
        <div class="clubgame_play">
            Создать клубную игру
        </div>
        <div class="tournamentgame_play">
         Создать турнир
        </div>
    </div>
 </div>
</main>

<?php
      get_footer();
?>
</div>
