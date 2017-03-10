<?php get_header(); ?> 
</nav>

<!-- end of header --> 

<!-- begon content --> 

<div class="background">
<!-- begin text --> 

<div class="banner">
<?php add_flexslider(); ?> 
    
<img src="<?php bloginfo('template_directory'); ?>/images/frame1.jpg" alt="Seattle Trans Social logo" title="Seattle Trans Social logo"/>   
    
    </div>
    
<div class="background">
    <div class="section">
    <img src="<?php bloginfo('template_directory'); ?>/images/frame1.jpg" alt="Seattle Trans Social logo" title="Seattle Trans Social logo"/> 
    <h3>Seattle</h3>    
    <?php while ( have_posts() ) : the_post(); ?> 
    <?php the_content(); ?>
    <?php endwhile; ?>     
        
    </div>
    
    <div class="section"> 
    <img src="<?php bloginfo('template_directory'); ?>/images/frame1.jpg" alt="Seattle Trans Social logo" title="Seattle Trans Social logo"/> 
    <h3>Trans</h3> 
    <?php rewind_posts(); ?> 
    <?php query_posts('showposts=4'); ?> 
    <ul>
    
    <?php while ( have_posts() ) : the_post(); ?> 
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>  <?php endwhile; ?>   
    </ul>    
    </div>
    
    <div class="section">
    <img src="<?php bloginfo('template_directory'); ?>/images/frame1.jpg" alt="Seattle Trans Social logo" title="Seattle Trans Social logo"/> 
    <h3>Social</h3> 
    <p>Lorem ipsum Pellentesque molestie aliquam accumsan. Nunc sagittis ipsum vel cursus fringilla. Donec efficitur imperdiet molest et elit. Pellentesque ultricies ac diam eu ornare. Aenean auctor diam sit amet porttitor malesuada. <a href="" target="_blank" class="link-1"><br>READ MORE</a></p>        
    </div>
    
    <small>front-page.pgp ~ bones test 2</small>
    
    <!-- end content  -->
        
    <!-- footer start -->
        
    <!-- end text -->
    
    
    <?php get_footer(); ?> 
    
    
    
