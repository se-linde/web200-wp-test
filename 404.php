<?php get_header(); ?>
        </nav>
        <!---- header end  ------>   
    
    	<aside class="sidebar">
        <?php get_sidebar(); ?>
        </aside>
        
		<!----- begin content  ----------------------->
     	<div class="background">
        <!-- Begin text ---->
        <div class="journal-section">
  
       
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php get_search_form(); ?>
        
        <small>404.php</small>
        
        <!----- end content  ----------------------->
        
        <!----footer start ------>
        </div>
        <!-- end text -->
<?php get_footer(); ?>