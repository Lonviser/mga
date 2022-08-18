<?php
/**
* Template Name: Profile
*/
?>
<div class="wrapper">
<?php
get_header();
?>

 <main class="clubs-main">
        <div class="breadcrumbs">
            <div class="container">
                <a class="a-title" href="/"><span>Главная</span></a> 
                | Профиль пользователя <?php
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
                                    print "".$userdata['user_login']."";
                                }
                            }
                            else
                            {
                              
                            }
                            ?></span>
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
                            <h3 class="profile-title">ИНФОРМАЦИЯ О ПОЛЬЗОВАТЕЛЕ</h3>
                            <table class="profile-table">
                            <tr><td>Имя:</td><td class="profile-table-desc">-</td></tr> 
                            <tr><td>Ник:</td><td class="profile-table-desc">  <?php
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
                                    print "".$userdata['user_login']."";
                                }
                            }
                            else
                            {
                                print "Для просмотра авторизируйтесь";
                            }
                            ?>
                            </td></tr>
                            <tr><td>Статус:</td><td class="profile-table-desc">Игрок</td></tr>
                            <tr><td>Домашний регион:</td><td class="profile-table-desc"><?php
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
                                    print "".$userdata['country']."";
                                    print " ";
                                    print "".$userdata['area']."";
                                    print " ";
                                    print "".$userdata['city']."";
                                }
                            }
                            else
                            {
                                print "Для просмотра авторизируйтесь";
                            }
                            ?></td></tr>
                            <tr><td>Клуб:</td><td class="profile-table-desc">-</td></tr>
                            <tr><td>Вконтакте:</td><td class="profile-table-desc"><a href="" target="_blank">-</a> </td></tr>
                            <tr><td>Telegram:</td><td class="profile-table-desc"><a href="" target="_blank">-</a> </td></tr>
                            <tr><td>Instagram:</td><td class="profile-table-desc"><a href="" target="_blank">-</a> </td></tr>
                            <tr><td>Facebook:</td><td class="profile-table-desc"><a href="" target="_blank">-</a> </td></tr>
                            </table>
                        </div>
                        <a style="  <?php
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
?>" class="popup-with-form" href="#test-form" mb-checked="1" data-tip="">
                        <button class="change-profile profile-avatar-btn">Редактировать</button>
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
