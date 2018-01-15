<?php
//require get_theme_file_path('/inc/utility-functions.php');


//////////////de-register certain react scripts //////////////
/*
add_action( 'wp_print_scripts', 'my_deregister_javascript', 100 );
function my_deregister_javascript() {
    $screen = get_current_screen(); 
    echo('</br>'); echo($screen->id); 
    if($screen->id != "toplevel_page_myplugin/myplugin-admin-page "){
      return;
    }
    wp_deregister_script( 'admin-react-scripts' );
   
}
TRYING TO GET RID OF THIS ERROR:
Minified React error #200;
*/

function register_asi_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
   wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
}
add_action( 'init', 'register_asi_menus' );



function custom_rest() {
  register_rest_field('post', 'authorName', array(
    'get_callback' => function() {return get_the_author();}
  ));

  register_rest_field('note', 'userNoteCount', array(
    'get_callback' => function() {return count_user_posts(get_current_user_id(), 'note');}
  ));
}

add_action('rest_api_init', 'custom_rest');




function custom_files() {
 
  /* STYLE PARAMETERS:
  wp_enqueue_style( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, string $media = 'all' )
  */
  wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('university_main_styles', get_stylesheet_uri(),NULL,'1.0.0',NULL);
  wp_localize_script('main-university-js', 'universityData', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest')
  ));
 /*
  wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyBh9b1rNCp6kOi5JeMHiRP4klDymBeoEWk', NULL, '1.0', true);
  */
 /*
 wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css');

 wp_enqueue_script('smooth-scroll', '//cdnjs.cloudflare.com/ajax/libs/smooth-scroll/12.1.5/js/smooth-scroll.min.js', array('jquery'), '1.0', true);
 wp_enqueue_script('smooth-scroll-polyfill', '//cdnjs.cloudflare.com/ajax/libs/smooth-scroll/12.1.5/js/smooth-scroll.polyfills.min.js', array('jquery') , '1.0', true);
 wp_enqueue_script('aos', '//cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js', array('jquery') , '1.0', true);
 wp_enqueue_script('mouse-wheel', '//cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js', array('jquery') , '1.0', true);
*/
 wp_enqueue_script('bayon-js', get_theme_file_uri('/js/bayon.js'), NULL, '1.0', true);
  wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css');
   wp_enqueue_script('aos', '//cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js', array('jquery') , '1.0', true);
}

add_action('wp_enqueue_scripts', 'custom_files');

/////////   CUSTOM UI FUNCTIONS /////////////////

function pageBanner($args = NULL) {
  
  if (!$args['title']) {
    $args['title'] = get_the_title();
  }
/*  UNREADY ELEMENTS: I believe there were 'Custom Fields' added to PAGES for the following
  if (!$args['subtitle']) {
    $args['subtitle'] = get_field('page_banner_subtitle');
  }

  if (!$args['photo']) {
    if (get_field('page_banner_background_image')) {
      $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
    } else {
      $args['photo'] = get_theme_file_uri('/images/ocean.jpg');
    }
  }
*/
  ?>
  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo']; ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php echo $args['title'] ?></h1>
      <div class="page-banner__intro">
        <p><?php echo $args['subtitle']; ?></p>
      </div>
    </div>  
  </div>
<?php }



?>
