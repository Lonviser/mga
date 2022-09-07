<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mga
 */

?>

<footer class="footer">
        <div class="container">
          <div class="footer-menu">
            <a href="/"> <img src="<?php echo bloginfo('template_url');?>/assets/img/footer-logo.svg" alt=""></a>
            <div class="support">
              <h4 class="white tech">Тех поддержка</h4>
              <a href="mailto:support@mgafamily.by"><p class="sup">support@mgafamily.by</p></a>
              
              <p class="social">Мы в соц сетях:</p>
              <div class="social-networks">
                <a href="https://t.me/+X3AGmWEgNsNmYTZi"><img src="<?php echo bloginfo('template_url');?>/assets/img/telegram.svg" alt=""></a>
                <a href="https://www.instagram.com/mgafamily.by/"><img src="<?php echo bloginfo('template_url');?>/assets/img/instagram.svg" alt=""></a>
                <a href="https://vk.com/mgafamily_by"><img src="<?php echo bloginfo('template_url');?>/assets/img/vkontakte.svg" alt=""></a>
                <a href="https://www.twitch.tv/gmafamily"><img src="<?php echo bloginfo('template_url');?>/assets/img/twitch.svg" alt=""></a>
              </div>
            </div>
            <div class="aboutUs menu-line-height">
            <a class="popup-with-form" href="#test-form" mb-checked="1" data-tip=""><h4 class="white menu-title">О нас</h4></a>
            <a href="/igroki/"><p>Игроки</p></a>
              <a href="/kluby/"><p>Клубы</p></a>
              <a href="/sudi/"><p>Судьи</p></a>
            </div>
            <div class="tournaments menu-line-height2">
            <a class="popup-with-form" href="#test-form" mb-checked="1" data-tip=""><h4 class="white menu-title">Турниры</h4></a>
            <a class="popup-with-form" href="#test-form" mb-checked="1" data-tip=""><h4 class="white">Рейтинг</h4></a>
            <a  href="/dokumenty/" ><h4 class="white">Документы</h4></a>   
            </div>
            <div class="news-gen-cab menu-line-height2">
            <a href="/novosti/"><h4 class="white menu-title">Новости</h4></a>
            <a  href="/generator-igr/"><h4 class="white">Генератор игр</h4></a>
            <a href="/profile"><h4 class="white">Личный кабинет</h4></a>
              <?php get_search_form(); ?>
            </div>   
          </div>   
        </div>
        <div class="under_footer ">
          <div class="container">
            <div class="mga-develop">
              <p>Mgafamily.by © Все права защищены.</p>
              <a target="_blank" href="https://anika-cs.by/"><p>Разработка сайта Mgafamily</p></a>
            </div> 
          </div>

      </footer>
 <!— Yandex.Metrika counter —>
        <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(88263012, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
        });
        </script>
        <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
        <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
        <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>

        <noscript><div><img src="https://mc.yandex.ru/watch/88263012" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!— /Yandex.Metrika counter —>
<?php wp_footer(); ?>

</body>
</html>

