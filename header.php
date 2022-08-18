<?php
/**
 * The header for our theme
 * @package mga
 */

?>


<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google-site-verification" content="t-uNaPAkGXE5pRUTM3WNUww9W18VYINYYDHOJ4VIOUo" />
  <meta name="yandex-verification" content="62b29ded6ae3154b" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;700&display=swap" rel="stylesheet">
	<title>MGA — 𝙢𝙖𝙛𝙞𝙖 𝙜𝙖𝙢𝙚 𝙖𝙨𝙨𝙤𝙘𝙞𝙖𝙩𝙞𝙤𝙣</title>
  <meta name="keywords" content="Белорусская ассоциация интеллектуальной игры мафия, ассоциация игры мафия рб, игра мафия, турниры по мафии рб, клубы по игре мафия рб, mga мафия, правила проведения турниров игра мафия, обучение и сертифицирование судей мафия,классические правила игры в мафию, игра мафия рб, федерация игры мафия рб" />

	<?php wp_head(); ?>
</head>
<body>
<header class="header" id="header">
        <nav class="navbar">
            <div class="navbar-container ">
                <input type="checkbox" name="" id="">
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <a href="/"><img class="logo" src="<?php echo bloginfo('template_url');?>/assets/img/logoFull.svg" alt=""></a> 
                <ul class="menu-items">
                    <li>
                      <div>
                        <div class="spoiler-title">
                        <p class="about-btn">О нас</p>
                         <img src="<?php echo bloginfo('template_url');?>/assets/img/galochka.svg" alt="">
                        </div> 
                      <div class="spoiler">
                        <ul>
                        <li><a href="/igroki/"><p class=" white"> Игроки</p> </a></li>
                        <li><a href="/kluby/"><p class="white"> Клубы</p> </a></li>
                        <li><a href="/sudi/"><p class="white"> Судьи</p> </a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                    <li><a class="popup-with-form" href="#test-form" mb-checked="1" data-tip=""><p class="white">Турниры</p> </a></li>
                    <li><a class="popup-with-form" href="#test-form" mb-checked="1" data-tip=""><p class="white">Рейтинг</p> </a></li>
                    <li><a href="/dokumenty/"><p class="white">Документы</p> </a></li>
                    <li><a href="/novosti/"><p class="white">Новости</p> </a></li>
                    <li>
                      <p class="white">Мы в соц сетях:</p>
                    </li>
                    <li>
                      <div class="social-networks">
                        <a href="https://t.me/+X3AGmWEgNsNmYTZi"><img class="icon" src="<?php echo bloginfo('template_url');?>/assets/img/telegram.svg" alt=""></a>
                        <a href="https://www.instagram.com/mgafamily.by/"><img class="icon" src="<?php echo bloginfo('template_url');?>/assets/img/instagram.svg" alt=""></a>
                        <a href="https://vk.com/mgafamily_by"><img class="icon" src="<?php  echo bloginfo('template_url');?>/assets/img/vkontakte.svg" alt=""></a>
                        <a href="https://www.twitch.tv/gmafamily"><img class="icon" src="<?php  echo bloginfo('template_url');?>/assets/img/twitch.svg" alt=""></a>
                      </div>
                    </li>   
                </ul>                  
            </div>

        </nav>
		<h1 class="logo-txt">Белорусская ассоциация <br>
                    интеллектуальной игры мафия</h1>
    <a  class="popup-with-form" href="#test-form" mb-checked="1" data-tip=""><p class="generator">ГЕНЕРАТОР ИГР</p>
  </a>
  <div class="dropdown user" >
  <a class="popup-with-form" href="#test-form" mb-checked="1" data-tip=""> 
  <p class="dropbtn">
  
  

<img style="  <?php
   $link=mysqli_connect("localhost", "studi181_mgadb", "*SkF3Ey9PCiu1Pn1", "studi181_mgadb");

  if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
  {
      $query = mysqli_query($link, "SELECT *,INET_NTOA(user_ip) AS user_ip FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
      $userdata = mysqli_fetch_assoc($query);
  
      if(($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['user_id'] !== $_COOKIE['id'])
   or (($userdata['user_ip'] !== $_SERVER['REMOTE_ADDR'])  and ($userdata['user_ip'] !== "0")))
      {
          setcookie("id", "", time() - 3600*24*30*12, "/");
          setcookie("hash", "", time() - 3600*24*30*12, "/", null, null, true); // httponly !!!
          print "Хм, что-то не получилось";
      }
      else
      {
         
      }
  }
  else
  {
      print "display:none";
  }
?>" class="arrow-user" src="<?php echo bloginfo('template_url');?>/assets/img/galochka.svg" alt="">
</p>

  <div class="dropdown-content" style="display:none">
    <a href="/profile/">
    <img src="<?php echo bloginfo('template_url');?>/assets/img/profile.svg" alt="">
     МОЙ ПРОФИЛЬ </a>
    <a class="popup-with-form" href="#test-form" mb-checked="1" data-tip="">
    <img src="<?php echo bloginfo('template_url');?>/assets/img/myClub.svg" alt="">  
    МОЙ КЛУБ</a>
    <a href="/logout">
    <img src="<?php echo bloginfo('template_url');?>/assets/img/logout.svg" alt="">    
    ВЫХОД
  </a>
  </div>
  </a>
</div>
</header>