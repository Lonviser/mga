<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mga
 */
?>
<div class="wrapper">
<?php get_header();
?>

<main>
		<div div class="breadcrumbs">
            <div class="container">
                <a href="/"><span class="a-title">Главная</span></a>  <span>|</span>
				<a href="/novosti/"><span class="a-title"> Новости</span></a> <span>|</span> <span><?php the_title(); ?></span>
                
            </div>
        </div>
	<div class="container">
	
	<div class="red-title">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/red.svg" alt="">
                <h4 class="title"><?php the_title(); ?></h4>
    </div>
	<div>
	<p class="author-time-position">Автор поста: <?php the_author(); ?> <span class="time">|</span> <span class="time"><?php the_date( 'Y-m-d', '<span>', '</span>' ); ?></span> </p>
	</div>
	<?php the_content() ?>
	<hr class="news-line"> 
	<div>
		<p class=" actual-news"> Актуальные новости</p>
	</div>
	<div class="hot-blocks">


	<?php
        $my_posts = get_posts( array(
            'numberposts' => 4,
            'category'    => 'news',
            'orderby'     => 'rund',
            'order'       => 'DESC',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

        foreach( $my_posts as $post ){
            setup_postdata( $post );
            ?>
            <div class="hot-block">
            <a class="a-title" href="<?php the_permalink(); ?>">
                <div>
                    <?php if (function_exists ('has_post_thumbnail') && has_post_thumbnail () ) {
                    the_post_thumbnail (array(205, 165)); 
                    } ?>
                </div>
                <div>
                    <h2 class="hot-title"><?php the_title( );?></a> </h2>
                </div>

            </div>
            <?php
        }

        wp_reset_postdata(); // сброс
                ?>
		</div>
	</div>
</main>

<?php
get_footer();?>
</div>






