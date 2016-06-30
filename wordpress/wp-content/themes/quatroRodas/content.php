<?php
/**
 * Conteúdo do site
 *
 * @package WordPress
 * @subpackage Quatro Rodas
 * @since Quatro Rodas 1.0
 */
?>
	<article class="boxDestaqueSmall" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<figure class="destaque_img">
				<img src="<?php the_post_thumbnail_url ();?>" />
			</figure>
			<div class="contentBoxDestaque">
				<span>QUATRO RODAS</span>
				<a href='<?php the_permalink(); ?>'><h3><?php the_title();?></h3></a>	
				<?php
					if ( is_single() ) :
						the_content();
					endif;
				?>
				
			</div>
		
	</article>