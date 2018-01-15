<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyseventeen-style' for the Twenty Seventeen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/////////////


function asi_animate_post($type,$del=.5,$dur=.9){
	//$entry_animation_type = "fadeInLeftBig";

	///////////////////////////////////////////
	/*
	//requires: plugin AnimateIt!
	//purpose: wrap the next block of divs in this animation.
	// files: 
		index.php
			code: based on $index and $using_animation, call content or content-alt
		tempate-parts/post/content.php
			code: insert function call before block of code you want to animate.
		template-parts/post/content-alt.php
			code: insert function call before block of code you want to animate.
		functions.php
			code: function asi_animate_post($type,$del=.5,$dur=.9);
	///////////////////////////////////////////
	*/
	$animation_args=   '[edsanimate_start 
							entry_animation_type= "'.$type.'" 
							entry_delay= "'.$del.'" 
							entry_duration= "'.$dur.'" 
							entry_timing= "cubic-bezier(0.455, 0.03, 0.515, 0.955)" 
							exit_animation_type= "" 
							exit_delay= "" 
							exit_duration= "" 
							exit_timing= "" 
							animation_repeat= "1" 
							keep= "yes" 
							animate_on= "scroll" 
							scroll_offset= "15" 
							custom_css_class= ""
							]';

		//echo out the shortcode, created by AnimateIt! 
		echo(do_shortcode($animation_args)); 

}
 
 function asi_page_parallax_start(){
	$parallax_args = '[nk_awb awb_type="image" awb_stretch="true" awb_image="48" awb_image_size="full" awb_image_background_size="cover" awb_image_background_position="50% 50%" awb_parallax="scroll-opacity" awb_parallax_speed="0.5" awb_parallax_mobile="true" awb_mouse_parallax="true" awb_mouse_parallax_size="30" awb_mouse_parallax_speed="10000"]';

	echo(do_shortcode($parallax_args)); 
 }
 function asi_page_parallax_end(){
 	$parallax_args = '[/nk_awb]';
 	echo(do_shortcode($parallax_args)); 
 }
 
?>