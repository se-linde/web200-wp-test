<?php get_header(); ?> 

</nav> 
<!-- end of header --> 

<aside class="sidebar"> 
<?php get_sidebar(); ?> 
</aside>

<!-- begin the content --> 

<div class="background">
<!-- begin text --> 
<div class="journal-section"> 
<img src="<?php bloginfo('template_directory'); ?>/images/main1.png" alt="Main_image" title="Main Image"/>
    
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>    
    
<?php the_content(''); ?> 
<?php endwhile; endif; ?> 
    
<small>page.php ~ bones 2 test</small>    

<!-- end of content --> 
<!-- footer start -->     
</div>
<!--end the text --> 
<?php get_footer(); ?>     