<?php // Damn Gotti, you bold

// INCLUDES
$WPBP_DIR = get_template_directory();
require $WPBP_DIR . '/inc/helpers.php';
require $WPBP_DIR . '/inc/customizer.php';

// THEME SETUP
if( !function_exists( 'wpbp_setup' ) ) :

    function wpbp_setup() {

        #================
        # THEME SUPPORTS
        #================
        add_theme_support( 'post-thumbnails' );
        //add_theme_support( '' );

        #=======
        # MENUS
        #=======
        register_nav_menus( array(
            'primary-menu' => esc_html__( 'Header Menu', 'wpbp' ),
            //'' => esc_html__( '', 'wpbp' );
        ) );

        #===================
        # CUSTOM POST TYPES
        #===================
        /*
        register_post_type( 'wpbp_', array(
            'labels' => array(
                'name' => __( '', 'wpbp' ),
                'singular_name' => __( '', 'wpbp' ),
            ),
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-',
        ) );
        */

        #===================
        # REGISTER SIDEBARS
        #===================
        register_sidebar( array(
            'name'          => 'Custom Widget Area',
            'id'            => 'custom_widget_area',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );

    }

endif;
add_action( 'after_setup_theme', 'wpbp_setup' );

#================
# ENQUEUE STYLES
#================
function wpbp_enqueue_styles() {

    wp_enqueue_style( 'wpbp-default-style', get_stylesheet_uri() );
    wp_enqueue_style( 'wpbp-main-style', wpbp_file( '/css/style.min.css' ), array( 'wpbp-default-style' ) );

    //wp_enqueue_style( '', wpbp_file( '/css/' ), array( '' ) );

}
add_action( 'wp_enqueue_scripts', 'wpbp_enqueue_styles' );

#=================
# ENQUEUE SCRIPTS
#=================
function wpbp_enqueue_scripts() {

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'wpbp-main-js', wpbp_file( '/js/wpbp.js' ), array( 'jquery' ), false, true );

    //wp_enqueue_script( '', wpbp_file( '/js/' ), array( 'jquery' ), false, true );

}
add_action( 'wp_enqueue_scripts', 'wpbp_enqueue_scripts' );

#==================
# REGISTER WIDGETS
#==================
function wpbp_register_widgets() {

    #==========
    # INCLUDES
    #==========
    require $WPBP_DIR . '/inc/widgets/class-custom-widget.php';
    //require $WPBP_DIR . '/inc/widgets/class-.php';

    #==================
    # REGISTER WIDGETS
    #==================
    register_widget( 'Custom_Widget' );
    //register_widget( '' );

}
add_action( 'widgets_init', 'wpbp_register_widgets' );
