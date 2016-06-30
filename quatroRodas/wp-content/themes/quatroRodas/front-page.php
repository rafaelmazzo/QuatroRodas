<?php
/**
 * Index Quatro Rodas
 * 
 *
 * @package WordPress
 * @subpackage Quatro Rodas
 * @since Quatro Rodas 1.0
 */

get_header(); ?>
	<section id="MainContent">
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();				 
				get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile;
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
		<div class="clear"></div>
	</section>
    <!-- /MainContent -->
<?php get_footer(); ?>