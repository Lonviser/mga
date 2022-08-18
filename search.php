<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package mga
 */
?>
<div class="wrapper">
<?php get_header();
?>
<main>
 <div class="container">
	<h2 class="tac mb10">Найденные результаты:</h2>
 <?php if ( have_posts() ) : ?>



<?php
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content', 'search' );

endwhile;

the_posts_navigation();

else :

get_template_part( 'template-parts/content', 'none' );

endif;
?>

</main><!-- #main -->
</main>

<?php
      get_footer();
?>
</div>
</div>