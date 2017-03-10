<?php get_header(); ?>
        </nav>
        <!---- header end  ------>   
    
   
		<!----- begin content  ----------------------->
     	<div class="background">
        <!-- Begin text ---->
        
       <div class="banner">
       <?php add_flexslider(); ?>
    	<img src="<?php bloginfo('template_directory'); ?>/images/frame1.jpg" alt="All for One Logo" title="All for one logo"/>
        
	</div>
    	
        <!--<aside class="sidebar">
        	<div class="therapy">
        		<img src="images/frame1.jpg" alt="All for One Logo" title="All for one logo"/>
            </div>
        </aside> -->
     <div class="background">
        <div class="section">
        	<img src="<?php bloginfo('template_directory'); ?>/images/main2.jpg" alt="All for One Logo" title="All for one logo"/>
            <h3>Growing Small Villages</h3>
           <?php while ( have_posts() ) : the_post(); ?>
           <?php the_content(); ?>
           <?php endwhile; ?>
           
        </div>
        <div class="section">
            <img src="<?php bloginfo('template_directory'); ?>/images/main3.jpg" alt="All for One Logo" title="All for one logo"/>
            <h3>Recent Journals</h3>
            <?php rewind_posts(); ?>
            <?php query_posts('showposts=4'); ?> 
            <ul>
            <?php while( have_posts() ) : the_post(); ?>
            <!--<li><a href="<?php //the_permalink(); ?>"><?php // the_title(); ?></a></li>  -->
     
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></br></a>
            
            <?php endwhile; ?>
            </ul>
            
            
        </div>
        <div class="section">
			<img src="<?php bloginfo('template_directory'); ?>/images/main1.png" alt="All for One Logo" title="All for one logo"/>
            <h3>Building A Community</h3>
            <p>Lorem ipsum Pellentesque molestie aliquam accumsan. Nunc sagittis ipsum vel cursus fringilla. Donec efficitur imperdiet molest et elit. Pellentesque ultricies ac diam eu ornare. Aenean auctor diam sit amet porttitor malesuada. <a href="" target="_blank" class="link-1"><br>READ MORE</a></p>
        </div>
       <!-- <section class="left-col">
       		<p>Lorem ipsum Pellentesque molestie aliquam accumsan. Nunc sagittis ipsum vel cursus fringilla. Donec efficitur imperdiet molest et elit. Pellentesque ultricies ac diam eu ornare. Aenean auctor diam sit amet porttitor malesuada. <a href="" target="_blank" class="link-1">READ MORE</a></p>
            </section> -->
     </div>
        <small>front-page.php</small>
        
        <!----- end content  ----------------------->
        
        <!----footer start ------>
        
        <!-- end text -->
<?php get_footer(); ?>