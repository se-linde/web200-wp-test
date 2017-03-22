<?php
/**
 * @package    Bones-Test2-The Testening
 * @author     Dwayne Linde  <spinifex@gmail.com>
 * @copyright  Copyright (c) 2017, Dwayne Linde
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */


//Register my sidebar
register_sidebars(3,array(
	
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));
//
// Register My Menus
register_nav_menus(array(
'main-menu' => __( 'Main' ),
));
//
//featured images and post thumnails
add_theme_support( 'post-thumbnails' );
//
// page excerpts
add_post_type_support( 'page', 'excerpt' );
//
//get my title tag
function get_my_title_tag() {
	
	global $post;
	
	if ( is_front_page()) {
		bloginfo('description');
	}
	
	elseif ( is_page() || is_single()) { // pages and postings
		the_title();	
	}
		
	//elseif ( is_404() || is_search())  { // pages and postings
		//echo 'Sorry this page has no content!';	
	//}	
	
	
	else {
		
		bloginfo('description');
	}
		
		if ($post->post_parent ) {
			echo ' | ';
			echo get_the_title($post->post_parent);
	}
		
		echo ' | ';
		bloginfo('name');
		echo ' | ';
		echo 'Worldwide';	
	}
//

// breadcrumbs 

function bcn_display($return = false, $linked = true, $reverse = false) 
{ 
    global $breadcrumb_navxt; 
    if($breadcrumb_navxt !== null) 
    { 
        return $breadcrumb_navxt->display($return, $linked, $reverse); 
    } 
} 



function add_flexslider() { // display images as a flexslider 
     
    global $post;
    
    $attachments = get_children(array('post_parent' => $post->ID, 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'attachment', 'post_mime_type' => 'image', ));
    
    if ($attachments) { 
        
        echo '<div class="flexslider">';
        echo '<ul class="slides">';
    
	foreach ( $attachments as $attachment_id => $attachment ) { 
	
		echo '<li>';
		echo wp_get_attachment_image($attachment_id, 'large');
		echo '<p>';
		echo get_post_field('post_excerpt', $attachment->ID);
		echo '</p>';
		echo '</li>';     
	}
	echo '</ul>';
	echo '</div>';
        
    } 
    
} 
//

?>