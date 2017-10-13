<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ironhat
 */

get_header(); ?>
	
	<div class="content">
		<div class="center">
			<?php
				while ( have_posts() ) : the_post();

					the_content();

				endwhile;
			?>
		</div>
	</div>

<?php
get_sidebar();
get_footer();
