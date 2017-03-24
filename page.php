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
    

<!-- new, post title without making it a hyperlink -->     
    
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

<!-- <h2>< /* ?php the_title(); ? */ ></h2> -->   
    
    
    
<?php the_content(''); ?> 
<?php endwhile; endif; ?> 
    
 

<!-- end of content --> 
<!-- footer start -->     
</div>
<!--end the text --> 
<?php get_footer(); ?>     