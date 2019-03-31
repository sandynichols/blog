<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );
if(has_tag('eggs')){
	
	wp_nav_menu(array(
    'theme_location' => 'portfolio_eggs',
    'container' => 'ul', 
    'menu_class' => 'nav'
));
	
}
			    //the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

	

<?php
if ( is_singular() ) :
    echo get_the_tag_list(
        '<ul class="my-tags-list"><li>',
        '</li><li>',
        '</li></ul>',
        get_queried_object_id()
    );
endif;
?>

<?php
get_sidebar();
get_footer();
