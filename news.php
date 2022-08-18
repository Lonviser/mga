<?php
/**
* Template Name: News
*/
?>
<div class="wrapper">
<?php get_header();
?>
<main>
        <div class="breadcrumbs">
            <div class="container">
                <a href="/" class="a-title"><span>Главная</span></a> 
                <span>| Новости</span>
            </div>
        </div>
          <div class="container">
            <div class="red-title">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/red.svg" alt="">
                <h4 class="title">НОВОСТИ</h4>
              </div>
              <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>

        <?php
                // paged для сохранения текущего номера страницы
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                // берем из БД где категория == 'novosti'
                $posts = new WP_Query(array(
                    'category_name' => '',
                    'posts_per_page' => 5,
                    'paged' => $paged
                ));
                if ($posts->have_posts()):
                    while ($posts->have_posts()): $posts->the_post();
            ?>
            <div class="news-block">
                    <div class="news-block__image">
                        <?php
                            $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
                            $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                            the_post_thumbnail (array(260, 180)); 
                        ?>  
                    </div>
                    <div class="news-block__text">
                        <a href="<?php the_permalink(); ?>"><p class="news-title"><?php the_title(); ?></p></a>
                        <span class="news-author-date"><?php the_author();?></span> <span news-author-date>|</span> <span class="news-author-date"><?php echo get_the_date('d.m.Y') ?></span>
                        <p class="txt-news"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>"><p class="read-later">Читать подробнее</p></a>
                    </div>
            </div>
            
                    
                <?php endwhile; wp_reset_postdata(); endif; ?>
                <div class="pagination">
                    <?php
                    // вывод pagination
                    echo paginate_links( array(
                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                        'total'        => $posts->max_num_pages,
                        'current'      => max( 1, get_query_var( 'paged' ) ),
                        'format'       => '?paged=%#%',
                        'show_all'     => false,
                        'type'         => 'plain',
                        'end_size'     => 2,
                        'mid_size'     => 1,
                        'prev_next'    => false,
                        'add_args'     => false,
                        'add_fragment' => '',
                    ) );
                    ?>

          
        </div> 
      </main>

<?php
      get_footer();
?>
</div>
