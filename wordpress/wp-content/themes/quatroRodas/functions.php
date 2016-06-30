<?php
	/**
	 * Quatro Rodas Functions
	 *
	 
	 * @package WordPress
	 * @subpackage Quatro Rodas
	 * @since Quatro Rodas 1.0
	 */

	if ( ! function_exists( 'quatroRodas_setup' ) ) :
	
	function quatroRodas_setup() {

		
		add_theme_support( 'post-thumbnails' );
		//set_post_thumbnail_size( 825, 510, true );
		
		add_theme_support( 'post-formats', array(
			'image' 
		) );
		
	}
	endif; // twentyfifteen_setup
	add_action( 'after_setup_theme', 'quatroRodas_setup' );
?>