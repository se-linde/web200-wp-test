<?php get_header(); ?> 
</nav> 
<!-- header end --> 

<aside class="sidebar">
<?php get_sidebar(); ?> 
</aside>

<!-- begin the content --> 

<div id="content"> 
<!-- begin text -->

<div class="journal-section">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
<article id="post-<?php the_ID(); ?>" class="post">
    
<?php echo get_the_post_thumbnail($post -> ID, 'large'); ?>     

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>    

<p><small>Posted on <?php the_time('F j, Y');?> by <?php the_author();?> in <?php the_category(', ');?></small></p>
        
<?php the_content(''); ?>
<?php endwhile; endif; ?>

        
<!----- end content  ----------------------->
        
<!----footer start ------>
</div>
<!-- end text -->
<?php get_footer(); ?>    