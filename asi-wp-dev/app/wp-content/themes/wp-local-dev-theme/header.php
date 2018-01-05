
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <style>
body {
  margin: 0;
  font-family: Arial;
}

.top-container {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

.header {
  padding: 10px 16px;
  background: #222;
  color: #f1f1f1;
}

.content {
  padding: 16px;
}
 


 
.sticky {
  position: fixed;
  <?php if(!is_user_logged_in()){ ?>
      top: 0px;
  <?php } else {?>
      top: 30px;
    <?php } ?>
  width: 100%;
  opacity:.9;
}

.sticky + .content {
  padding-top: 102px;
}
</style>
  </head>
<?php
/////////////////////////////////
global $current_user;
get_currentuserinfo();
$USER_ACCESS_NOTES = false;
if($current_user->user_level >= 2){
    $USER_ACCESS_NOTES = true;
}  
//////////////////////
?>
  <body <?php body_class(); ?>>
    <header id="myHeader" class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>WP-LOCAL-DEV</strong></a></h1>
      <a href="<?php echo esc_url(site_url('/search')); ?>" class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></a>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul>
            
            <li <?php if (is_page('react-plugin') or wp_get_post_parent_id(0) == 16) echo 'class="current-menu-item"' ?>>
                <a href="<?php echo site_url('/react-plugin') ?>">React Plugin Page</a>
            </li>

          </ul>
        </nav>
        <div class="site-header__util">
          <?php if(is_user_logged_in()   ) { ?>


               <?php if($USER_ACCESS_NOTES ) {?>
                <a href="<?php echo esc_url(site_url('/my-notes')); ?>" class="btn btn--small btn--orange float-left push-right">My Notes</a>
                <?php } ?>

                <a href="<?php echo wp_logout_url();  ?>" class="btn btn--small  btn--dark-orange float-left btn--with-photo">
            <span class="site-header__avatar"><?php echo get_avatar(get_current_user_id(), 60); ?></span>
            <span class="btn__text">Log Out</span>
            </a>

            <?php } else { ?>
               
              <a href="<?php echo wp_login_url(); ?>" class="btn btn--small btn--orange float-left push-right">Login</a>

              <a href="<?php echo wp_registration_url(); ?>" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>

             <?php } ?>
          
          <a href="<?php echo esc_url(site_url('/search')); ?>" class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></a>
          
        </div>
      </div>
    </div>
    <div>
 
    </div>
  </header>


<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>