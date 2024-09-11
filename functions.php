<?

// 'admin-bar'
// 'align-wide'
// 'appearance-tools'
// 'automatic-feed-links'
// 'block-templates'
// 'block-template-parts'
// 'border'
// 'core-block-patterns'
// 'custom-background'
// 'custom-header'
// 'custom-line-height'
// 'custom-logo'
// 'customize-selective-refresh-widgets'
// 'custom-spacing'
// 'custom-units'
// 'dark-editor-style'
// 'disable-custom-colors'
// 'disable-custom-font-sizes'
// 'disable-custom-gradients'
// 'disable-layout-styles'
// 'editor-color-palette'
// 'editor-gradient-presets'
// 'editor-font-sizes'
// 'editor-spacing-sizes'
// 'editor-styles'
// 'featured-content'
// 'html5'
// 'link-color'
// 'menus'
// 'post-formats'
// 'post-thumbnails'
// 'responsive-embeds'
// 'starter-content'
// 'title-tag'
// 'widgets'
// 'widgets-block-editor'
// 'wp-block-styles'






class Teddyfood {

    //Hooks
    public function __construct(){
        add_action( 'after_setup_theme', array( $this, 'teddyfood_theme_setup') );
        add_action( 'wp_enqueue_scripts', array( $this, 'teddyfood_wp_enqueue_scripts' ) );
    }

    //Theme supports 
    function teddyfood_theme_setup(){
            add_theme_support( 'title-tag' );
            add_theme_support( 'custom-logo', array(
                'height' => 480,
                'width'  => 720,
            ) );
            add_theme_support( 'post-thumbnails' );

            $args = array(
                'flex-width'    => true,
                'width'         => 1400,
                'flex-height'   => true,
                'height'        => 400,
                'default-image' => get_template_directory_uri() . '/assets/images/header.jpg',
            );
            add_theme_support( 'custom-header', $args );

            add_theme_support( 'custom-logo', array(
                'height'               => 100,
                'width'                => 400,
                'flex-height'          => true,
                'flex-width'           => true,
                'header-text'          => array( 'site-title', 'site-description' ),
                'unlink-homepage-logo' => true,
                ) );
                add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
            //add_theme_support( 'custom-background' );
        } 

    //Enqueue scripts

    function teddyfood_wp_enqueue_scripts() {

        wp_enqueue_script( 'bootstrap-jquery', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', '', '1.0.0', true );
        wp_enqueue_script( 'bootstrap-bundle', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array( 'bootstrap-jquery' ), '1.0.0', true );

        wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', '', '1.0.0', 'all' );

        wp_enqueue_style( 'teddy-food', get_stylesheet_directory_uri() . '/assets/css/style.css', '', '1.0.0', 'all' );
        
    }

}

$teddyfood = new Teddyfood(); 