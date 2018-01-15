<?php

/*
Plugin Name: React-Hello-World
Description: Plugin Created from basic create-react-app cmd
Version: 0.0.1
*/

/*

// add the CSS file to the header
wp_enqueue_style( 'prefix-style', plugins_url('css\main.9a0fe4f1.css', __FILE__) );
 
// add the JS file to the footer - true as the last parameter
wp_enqueue_script( 'plugin-scripts', plugins_url('js/main.350b4a43cde67bd603fc.js', __FILE__),array(),  '0.0.1', true );
*/

$STATIC_CSS = 'build/static/css/main.c17080f1.css';
$STATIC_JS = 'build/static/js/main.836c513b.js';
//main.fc696a54.js

function wp_react_hello_world() {
  //echo '<div id="root"></div>';
}
add_shortcode('react-hello-world','wp_react_hello_world');

function include_react_files() {
	// The following 2 files are just copies made manually of the build/static/ files...
	// add the CSS file to the header
	wp_enqueue_style( 'prefix-style', plugins_url('build/static/css/main.c17080f1.css', __FILE__) );
	 
	// add the JS file to the footer - true as the last parameter
	wp_enqueue_script( 'plugin-scripts', plugins_url('build/static/js/main.959b82df.js', __FILE__),array(),  '0.0.1', true );

	//wp_enqueue_script( 'plugin-scripts-service-worker', plugins_url('build/static/service-worker.js', __FILE__),array(),  '', true );
}

 // ADMIN SIDE ONLY add_action( 'wp_enqueue_scripts', 'include_react_files' );

function include_admin_react_files() {
	wp_enqueue_style( 'admin-prefix-style', plugins_url('build/static/css/main.c17080f1.css', __FILE__) );
	 
	wp_enqueue_script( 'admin-react-scripts', plugins_url('build/static/js/main.959b82df.js', __FILE__),array(),  '0.0.1', true );

}
add_action( 'admin_enqueue_scripts', 'include_admin_react_files' );
 
 ////////////////////////////////////////////////////////////////////////////////

 


////////////////////////////////////////
add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
	add_menu_page( 'Top ', 'Top Level Menu', 'manage_options', 'myplugin/myplugin-admin-page.php', 'myplguin_admin_page', 'dashicons-tickets', 6  );
		add_submenu_page( 'myplugin/myplugin-admin-page.php', 'My Sub Level Menu Example', 'Sub Level Menu', 'manage_options', 'myplugin/myplugin-admin-sub-page.php', 'myplguin_admin_sub_page' ); 

}
function myplguin_admin_page(){
	 
	?>
	<div class="wrap">
		<h2>Top Level Menu</h2>
		<?php 
		$screen = get_current_screen(); 
		//echo('<pre>');
		//print_r($screen);
		//echo('</pre>'); 

		echo('</br>'); echo($screen->id); 
	 
		?> 
		<?php  
		echo '<div id="root"></div>';
		//if($screen->id == "toplevel_page_myplugin/myplugin-admin-page"){
			//echo '<div id="root"></div>';
			//return;
		//}
		

		 ?>
		  
	</div>
	<?php
}
function myplguin_admin_sub_page(){
	?>
	<div class="wrap">
		<h2>Top Level Menu</h2>
	</div>
	<?php
}
?>