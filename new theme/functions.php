  <?php register_nav_menu( 'nav', 'nav' ) ?>
    <?php register_nav_menu( 'side-menu', 'side-menu' ) ?>
    
<?php function mystyle() {
  wp_enqueue_style( 'mystyle', get_stylesheet_directory_uri().'/style.css');
  wp_enqueue_style( 'mysbcss', get_stylesheet_directory_uri().'/css/beats.css');
	wp_enqueue_style( 'mystyleFontAwes', get_stylesheet_directory_uri().'/css/font-awesome.min.css');
  wp_enqueue_script( 'myscriptscripfot', get_stylesheet_directory_uri().'/js/index.js', false , false, true  );
  wp_enqueue_script( 'myscriptscripvel', get_stylesheet_directory_uri().'/js/velocity.min.js', false , false, true  );
 wp_enqueue_script( 'myscriptscripquery', get_stylesheet_directory_uri().'/js/jquery.min.js', false , false, true  );
}

function load_stylesheets()
{
    $randomNum = rand(0, 100000);
    wp_register_style('style', get_template_directory_uri() . '/style.css?' . $randomNum,
    array(), false, 'all');
    wp_enqueue_style('style');
}



add_action( 'wp_enqueue_scripts', 'mystyle', 'load_stylesheets');

add_theme_support( 'post-thumbnails' );
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'sidebar-1',
    'id' => 'sidebar-1',
    'class' =>  'menu',
  'before_widget' => '<div>',
  'after_widget' => '</div>',
  'before_title' => '<h2>',
  'after_title' => '</h2>',
)
);



function redtext_shortcode( $atts, $content = null ) {
	return '<p class="redtext">' . $content . '</p>';
}
add_shortcode( 'redtext', 'redtext_shortcode' );



function greentext_shortcode( $atts, $content = null ) {
	return '<p class="greentext">' . $content . '</p>';
}
add_shortcode( 'greentext', 'greentext_shortcode' );



function randomtext_shortcode( $atts, $content = null ) {
	return '<p>hej här har du massa text som kommer från ingenstans, men du bad om det!</p>';
}
add_shortcode( 'randomtext', 'randomtext_shortcode' );

?>