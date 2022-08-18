<?php
/**
* Template Name: Documents
*/
?>
<div class="wrapper">
<?php
get_header();
?>

 <main class="documents-main">
        <div class="breadcrumbs">
            <div class="container">
                <a class="a-title" href="/"><span>Главная</span></a> 
                <span>| Документы</span>
            </div>
        </div>
          <div class="container">
            <div class="red-title">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/red.svg" alt="">
                <h4 class="title">Документы</h4>
              </div>
        <div class="documents">
            <div class="document-block">
                <div class="document">
                    <div class="document-title">
                    <img class="galochka" src="<?php echo bloginfo('template_url');?>/assets/img/list.svg" alt="">
                    <p class="doc-name"><?php the_field('txt1');?></p>
                    </div>
                    <div class="document-spoiler">
                        <div class="doc-download">
                        <a href="<?php the_field('link1');?>"><p class="doc-name"><?php the_field('txt1');?></p></a>
                            <div class="open-save">
                                <a href="<?php the_field('link1');?>"download><img src="<?php echo bloginfo('template_url');?>/assets/img/save.svg" alt=""></a>
                                <a href="<?php the_field('link1');?>"target="_blank" ><img src="<?php echo bloginfo('template_url');?>/assets/img/open.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="document">
                    <div class="document-title">
                    <img class="galochka" src="<?php echo bloginfo('template_url');?>/assets/img/list.svg" alt="">
                    <p class="doc-name"><?php the_field('txt2');?></p>
                    </div>
                    <div class="document-spoiler">
                        <div class="doc-download">
                        <a href="<?php the_field('link2');?>"><p class="doc-name"><?php the_field('txt2');?></p></a>
                            <div class="open-save">
                                <a href="<?php the_field('link2');?>"download><img src="<?php echo bloginfo('template_url');?>/assets/img/save.svg" alt=""></a>
                                <a href="<?php the_field('link2');?>"target="_blank" ><img src="<?php echo bloginfo('template_url');?>/assets/img/open.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="document">
                    <div class="document-title">
                    <img class="galochka" src="<?php echo bloginfo('template_url');?>/assets/img/list.svg" alt="">
                    <p class="doc-name"><?php the_field('txt3');?></p>
                    </div>
                    <div class="document-spoiler">
                        <div class="doc-download">
                        <a href="<?php the_field('link3');?>"><p class="doc-name"><?php the_field('txt3');?></p></a>
                            <div class="open-save">
                                <a href="<?php the_field('link3');?>"download><img src="<?php echo bloginfo('template_url');?>/assets/img/save.svg" alt=""></a>
                                <a href="<?php the_field('link3');?>"target="_blank" ><img src="<?php echo bloginfo('template_url');?>/assets/img/open.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="document">
                    <div class="document-title">
                    <img class="galochka" src="<?php echo bloginfo('template_url');?>/assets/img/list.svg" alt="">
                    <p class="doc-name"><?php the_field('txt4');?></p>
                    </div>
                    <div class="document-spoiler">
                        <div class="doc-download">
                        <a href=""><p class="doc-name"><?php the_field('txt4');?></p></a>
                            <div class="open-save">
                                <a href="<?php the_field('link4');?>"download><img src="<?php echo bloginfo('template_url');?>/assets/img/save.svg" alt=""></a>
                                <a href="<?php the_field('link4');?>"target="_blank" ><img src="<?php echo bloginfo('template_url');?>/assets/img/open.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="document-menu">
    
                    <div class="document-menu-1">
                    <img src="<?php echo bloginfo('template_url');?>/assets/img/logo-mini.svg" alt="">
                    <p class="white">Документы</p>
                    </div>

                    <a href="/documents-judes/">
                    <div class="document-menu-2">
                    <img class="img-svg" src="<?php echo bloginfo('template_url');?>/assets/img/dark-mini-logo.svg" alt="">
                    <p>Судейский и дисциплинарный комитет</p>
                    </div>
                    </a>
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
