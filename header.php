
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<!--<![endif]-->
<html>
<head>
<meta charset="UTF-8">
<title><?php get_my_title_tag(); ?></title>
    
    
<meta name="description" content="<?php echo (get_the_excerpt()); ?>" />
<meta name="keywords" content="Transgender, trans, LGBTQ, MTF, FTM, Genderqueer, Queer, Ally" />
<!-- <meta name="viewport" content="user-scalable=no, intial-scale=1.0, maxium-scale=1.0" /> --> 
    
<!-- make this responsive --> 
<meta name="viewport" content="width=device-width" />    
    
    
    
        
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    
    

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">



    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>

<!-- begin flex slider -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function upon window load
    $('.flexslider').flexslider(); // call flexslider function
  });
</script>
<!-- end flex slider -->
    
    
    
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    
<!-- begin toggle menu in jQuery -->
    <script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function upon window load
	$("#toggle").click(function() { // when toggle is clicked...
		$("#navigation").toggle(); // ... open or close the navigation
	});
      
      
// This is the toggle of the subnav 
      
    // $('#navigation li.page_item_has_children > a').after('<span class="sub-toggle">&#711;</span>'); // create the sub-toggle arrow

    // $('span.sub-toggle').click(function() { // when the arrow is clicked...

        // $(this).next('ul.sub-menu').slideToggle(); // ... toggle it's sub-menu

    // });
      
      
      
// To prevent the resizing bug 
      
    var loadwidth = window.innerWidth; 
      
    $(window).resize(function() {
        
        if (loadwidth !== window.innerWidth ) {
            
            if (window.innerWidth < 801) {
                $("#navigation").hide(); 
            } else {
                $("#navigation").show(); 
            }
            
        } // ends the trigger for width only. 
        
    })  
      
      
  });
</script>
    
<!-- end toggle menu -->     

    
<!-- start WP head -->
<?php wp_head(); ?>
<!-- end WP head -->
</head>


<body <?php body_class(); ?>>
<div id="content">
    
	<div id="login">
        
        <p><a href="https://www.facebook.com/SeattleTransSocial16/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>
/images/facebook-48.png" alt="Facebook"></a> 
        <a href="https://twitter.com/SeattleTSocial" target="_blank"><img src="<?php bloginfo('template_directory'); ?>
/images/twitter-48.png" alt="Twitter"></a>
        
    
<header>
    	<a href="http://www.lindese.com/web200/wp-test/wordpress/" ><img src="<?php bloginfo('template_directory'); ?>
/images/logo.jpg" alt="Seattle Trans Social logo" title="Seattle Trans Social logo"/></a>
        
        <h1><a href="http://www.lindese.com/web200/wp-test/wordpress/">Seattle Trans Social</a></h1>
    


<!-- start the toggle menu - pic --> 
    
    
    
<!-- <div id="header">
<h1 id="logo"><a href="index.php">Community</a></h1>    
<img id="toggle" src="images/img-toggle-black.png" width="25" height="25" alt="Toggle Menu">
</div>  -->   
    
<!-- end toggle menu -->       
    
  
        
    
<!-- start the toggle menu - glyph --> 
    
<div id="toggle">
<a href="#"><span class="glyph">&#8801;</span>&nbsp;Seattle Trans Social Menu</a>
</div>  
    
<!-- end toggle menu -->     
    
    
        
</header>
        
</div>
	 <nav class="main-nav">
                  
     <div id="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'nav','container_id' => 'navigation', 'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>', ) ); ?>
			
</div>
        
<div class="journal-section">
         
<?php if (!is_front_page()) { ?>
    <nav id="breadcrumbs">
    <?php bcn_display(); // display breadcrumb ?>
    </nav>
    
    
    <?php } ?>         
         
         

         