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
    }

    //Theme supports 
        function teddyfood_theme_setup(){
            add_theme_support( 'title-tag' );
            add_theme_support( 'custom-logo', array(
                'height' => 480,
                'width'  => 720,
            ) );
            add_theme_support( 'post-thumbnails' );
            add_theme_support( 'custom-header' );
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

}

$teddyfood = new Teddyfood(); 