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
     </div>

     <div id="like_button_container"></div>
    <div id="data"></div>

     <hr class="game_line">

        <div class="game-board">
            <div class="status-bar">
                <div>Игра №1</div>
                <div class="win">
                    Победа
                    <input type="text">
                </div>
                <div class="meta-info">
                    <div class="pu">
                         ПУ
                        <input type="text" class="pu-input">
                    </div>
                    <div class="lh">
                        ЛХ
                        <input type="text" class="lh-input">
                        <input type="text" class="lh-input">
                        <input type="text" class="lh-input">
                    </div>
                    <div>
                        <img src="./assets/img/up2.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="game-panel">
                <div class="control-line">
                    <div class="timer-zone">
                        1:00
                    </div>
                    <div class="day_and_night">
                        <div class="day">
                            <button type="submit" class="button">Фаза </br> День</button>
                        </div>
                        <div class="night">
                             <button type="submit" class="button">Фаза </br> Ночь</button>
                        </div>
                    </div>
                    <div class="game_result">
                        <div class="result">Итог <br> игры</div>
                        <div class="teams">
                            <div>Мирные</div>
                            <div>Мафия</div>
                        </div>
                        <div class="draw">
                            Ничья
                        </div>
                        <div class="ppk">
                            ППК
                        </div>
                        <div class="teams">
                            <div>Мирные</div>
                            <div>Мафия</div>
                        </div>
                    </div>
                </div>
                <div class="table-name">
                    <div class="table_id">
                        №
                    </div>
                    <div class="game_nick">
                        Игровой ник
                    </div>
                    <div class="table_falls">
                        Фолы
                    </div>
                </div>
                <div class="table-grid">
                    <div class="player_id">
                        <input type="text" value = 1>
                        <input type="text" value = 2>
                        <input type="text" value = 3>
                        <input type="text" value = 4>
                        <input type="text" value = 5>
                        <input type="text" value = 6>
                        <input type="text" value = 7>
                        <input type="text" value = 8>
                        <input type="text" value = 9>
                        <input type="text" value = 10>
                    </div>
                    <div class="player_name">
                        <input type="text" >
                        <input type="text" >
                        <input type="text" >
                        <input type="text" >
                        <input type="text" >
                        <input type="text" >
                        <input type="text" >
                        <input type="text" >
                        <input type="text" >
                        <input type="text" >
                    </div>
                    <div class="falls">
                    <div class="fall">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="fall"><input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="fall">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="fall">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="fall">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="fall">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="fall">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="fall">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="fall">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="fall">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                        <input type="checkbox" name="" id="">
                    </div>
                </div>
                <div>
                    <img src="./assets/img/players.svg" alt="">
                </div>
                </div>
                <div class="delete_player">
                    <div>
                         Удаление <br> игроков
                    </div>
                    <div class="del-player">
                        <div>
                            №1
                        </div>
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="del-player">
                        <div>
                            №2
                        </div>
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="del-player">
                        <div>
                            №3
                        </div>
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="del-player">
                        <div>
                            №4
                        </div>
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="del-player">
                        <div>
                            №5
                        </div>
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="del-player">
                        <div>
                            №6
                        </div>
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="del-player">
                        <div>
                            №7
                        </div>
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="del-player">
                        <div>
                            №8
                        </div>
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="del-player">
                        <div>
                            №9
                        </div>
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="del-player">
                        <div>
                            №10
                        </div>
                        <input type="checkbox" name="" id="">
                    </div>
                </div>
            </div>            
        </div>  

        <button type="submit"  class="add_game_btn">+</button> <span>Добавить игру</span>
        
 </div>
</main>

<?php
      get_footer();
?>
</div>
