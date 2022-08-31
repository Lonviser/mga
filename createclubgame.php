<?php
/**
* Template Name: createClubGame
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
     <h5 class="generator_h5">Создание клубной игры</h5>
     <div class="newProtocol">
            <div>
                <span class="protocol-txt">Выберите клуб</span>
                <select class="choise_club" name="" id=""></select>
            </div>
            <div class="date-block">
                <span class="protocol-txt" for="">Дата</span>
                <textarea class="date" name=""><?php echo date('d-m-Y'); ?></textarea>
            </div>
            <div class="table-block">
                <span class="protocol-txt" for="">Укажите стол</span>
                <input class="count_table" type="text">
            </div>
        </div>
        <div class="newProtocol_btn-position">
            <a href="/klubnaya-igra/"><button type="submit" class="newProtocol_btn">Сгенерировать протокол</button></a>
            
    </div>
    
 </div>
</main>

<?php
      get_footer();
?>
</div>
