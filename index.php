<?php get_header(); ?>
        </nav>
        <!---- header end  ------>   
    
    	<aside class="sidebar">
        <?php get_sidebar(); ?>
        </aside>
        
		<!----- begin content  ----------------------->
        
     	<div id="content">
        <!-- Begin text ---->
        <div class="journal-section">
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
        <article class='post-excerpt'>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
         <small>Posting on <?php the_time('F j, Y')  ?> by <?php the_author(); ?> in <?php the_category(', ') ?></small>
      
        <?php the_post_thumbnail( 'thumbnail' ); ?>
        <?php the_excerpt(); ?>
       
    
        </article>
        <?php endwhile; endif; ?>
            
 
        
        <!----- end content  ----------------------->
        
        <!----footer start ------>
        </div>
        <!-- end text -->
<?php get_footer(); ?>