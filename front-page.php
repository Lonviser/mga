<div class="wrapper">
<?php
get_header();
?>

<main>
        <div class="container content">
          <section class="about">
            <img src="<?php echo bloginfo('template_url');?>/assets/img/MgaFamily.png" alt="" class="banner">
            <div cl>
              <div class="red-title">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/red.svg" alt="">
                <h2>
                  MAFIA GAME ASSOCIATION
                </h2>
              </div>

              <h3 class="association">
                Ассоциация игры Мафия
              </h3>
              <p class="main-info">
                MGA — платформа объединяющая игроков и клубы по интеллектуальной игре мафия Республики Беларусь
                Проводить турниры будет удобно.
                Зарегистрируй свой клуб или организуй турнир
                и предоставь своим игрокам доступ
                к игровой статистике турниров, трансляциям
                и возможность сыграть в Кубке Беларуси. <br> <br>
                Цели MGA : Объединить клубы, играющие в игру “Мафия” по классическим правилам, в ассоциацию интеллектуальной игры Мафия. Проводить чемпионаты среди клубов MGA. <br>
                Установить единые правила проведения чемпионатов среди клубов MGA. <br>
                Установить календарь и график проведения отборочных турниров чемпионатов среди клубов Республики Беларусь. <br>
                Ассоциация интеллектуальной игры мафия создана с целью объединения всего мафиозного движения . <br> <br>
                Мафиозные чемпионаты и турниры – это всегда настроение праздника, дружбы, азарта и новых впечатлений. Присоединяйтесь друзья!
  
              </p>
            </div>
          </section>
          <section class="benefits"> 
            <div class="red-title">
              <img src="<?php echo bloginfo('template_url');?>/assets/img/red.svg" alt="">
              <h4 class="title" >Наши преимущества</h4>
            </div>
            
            <div class="blocks"> 
              <div class="block">
                <img class="img-svg" src="<?php echo bloginfo('template_url');?>/assets/img/planet.svg" alt="">
                <p class="block-title"><?php the_field('kolichestvo_gorodov');?></p>
                <h3>Городов</h3>
              </div>
              <div class="block">
                  <img class="img-svg" src="<?php echo bloginfo('template_url');?>/assets/img/players.svg" alt="">                 
                  <p class="block-title"><?php the_field('kolichestvo_igrokov');?></p>
                <h3>Игроков</h3>
              </div>

              <div class="block">
                  <img class="img-svg" src="<?php echo bloginfo('template_url');?>/assets/img/clubs.svg" alt="">                 
                <p class="block-title"><?php the_field('kolichestvo_klubov');?></p>
                <h3>Клубов</h3>
              </div>
              <div class="block">
                <img class="img-svg" src="<?php echo bloginfo('template_url');?>/assets/img/turnirs.svg" alt="">
                <p class="block-title"><?php the_field('kolichestvo_turnirov');?></p>
                <h3>Турниров</h3>
              </div>
            </div>
          </section>
          <p class="new-player">
            А для новичков, Вы устали от бытовых проблем, жизненных неурядиц? Хотите расширить спектр <br>
            ощущений? Разнообразить круг общения? Тогда игра интеллектуальная «Мафия» — это для вас. <br>
            Когда Вы сядете за стол вместе с другими игроками, все, что было для вас привычным, начнет изменяться. Вы попадете в мир, <br> который вроде бы является уменьшенной копией обычного мира. «Мафия» — это макет системы <br>
            нашего общества. Здесь на каждое ваше действие происходит незамедлительная реакция. Вы можете напрямую проследить причинноследственную связь, которая в обычной жизни долго бы еще оставалась 
            скрытой. <br>
            Это игра, которая заставляет задуматься. О людях, об отношениях между ними. О себе. Здесь вскрываются все Ваши недостатки и достоинства, иногда
            совершенно неожиданно для вас. <br>
            Здесь Вы начинаете лучше видеть и понимать мотивы поведения других людей. Когда игра заканчивается, еще <br>
            какое-то время Вы будете вспоминать и мысленно анализировать все, что произошло.
          </p>
          <section class="translation">
            <div class="red-title">
              <img src="<?php echo bloginfo('template_url');?>/assets/img/red.svg" alt="">
              <h4 class="title">Трансляции MGA</h4>
            </div>
            <div class="twich-translation">
              <a target="_blank" href="https://www.twitch.tv/gmafamily"> <img class="twitch-block" src="<?php echo bloginfo('template_url');?>/assets/img/twich1.png" alt=""></a>
              <a target="_blank" href="https://www.twitch.tv/gmafamily"> <img class="twitch-block" src="<?php echo bloginfo('template_url');?>/assets/img/twich2.png" alt=""></a>
              <a target="_blank" href="https://www.twitch.tv/gmafamily"> <img class="twitch-block" src="<?php echo bloginfo('template_url');?>/assets/img/twich3.png" alt=""></a>
              <a target="_blank" href="https://www.twitch.tv/gmafamily"> <img class="twitch-block" src="<?php echo bloginfo('template_url');?>/assets/img/twich4.png" alt=""></a>
            </div>
          </section>
          <section class="our_partners"> 
            <div class="red-title">
              <img src="<?php echo bloginfo('template_url');?>/assets/img/red.svg" alt="">
              <h4 class="title">Наши партнёры</h4>
            </div>
            <div class="partners">
              <a target="_blank"href="<?php the_field('link1');?>"> <img class="partner" src="<?php the_field('first_sponsor');?>" alt=""></a>
              <a target="_blank" href="<?php the_field('link2');?>"><img class="partner" src="<?php the_field('second_sponsor');?>" alt=""></a>
              <a target="_blank" href="<?php the_field('link3');?>"><img class="partner" src="<?php the_field('tretij_sponsor');?>" alt=""></a>
              <a target="_blank" href="<?php the_field('link4');?>"><img class="partner" src="<?php the_field('chetvyortyj_sponsor');?>" alt=""></a>
              <a target="_blank" href="<?php the_field('link5');?>"><img class="partner" src="<?php the_field('pyatyj_sponsor');?>" alt=""></a>
              <a target="_blank" href="<?php the_field('link6');?>"><img class="partner" src="<?php the_field('shestoj_sponsor');?>" alt=""></a>  
            </div>
          </section>
        </div>
      </main>
      

<!-- form itself -->
<form id="test-form" class="white-popup-block mfp-hide">
	<fieldset style="border:0;">
    <p class="center">В разработке</p>
	</fieldset>
</form>
<?php
get_footer();?>
</div>

