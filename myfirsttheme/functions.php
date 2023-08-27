<?php
if ( ! function_exists( 'myfirsttheme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress  
     * features.
     *
     * It is important to set up these functions before the init hook so
     * that none of these features are lost.
     *
     *  @since MyFirstTheme 1.0
     */
    function myfirsttheme_setup() { 
       
        /**
		 * Add default posts and comments RSS feed links to <head>.
		 */
        add_theme_support('automatic-feed-links' );

        /**
		 * Add support for two custom navigation menus.
		 */
        register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
            'secondary' => __( 'Secondary Menu', 'myfirsttheme' )
        ) );
        
          /**
	 * Make theme available for translation.
	 * Translations can be placed in the /languages/ directory.
	 */
        load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );

        /**
		 * Enable support for post thumbnails and featured images.
		 */
        add_theme_support( 'post-thumbnails' );

        /**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */    
        add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    }

endif; // myfirsttheme_setup
add_action( 'after_setup_theme', 'myfirsttheme_setup' );


if ( ! isset ( $content_width) ) {
    $content_width = 800;
}