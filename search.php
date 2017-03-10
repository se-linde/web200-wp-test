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
        <img src="<?php bloginfo('template_directory'); ?>/images/main1.png" alt="Main_image" title="Main Image"/>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content(''); ?>
        <?php endwhile; endif; ?>
        <small>search.php</small>
        
        <!----- end content  ----------------------->
        
        <!----footer start ------>
        </div>
        <!-- end text -->
<?php get_footer(); ?>