<?php
/**
* Template Name: Homepage
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</section><!-- #primary -->

<!--
</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<p>project 1</p>
		</div>
		<div class="col-sm-4">
			<p>project 2</p>
		</div>
		<div class="col-sm-4">
			<p>project 3</p>
		</div>
-->





<?php
get_footer();
