        	<div id="sidebar">
            
         
            <!--- begin sub nav------->
            <div id="sub-navigation" class="widget">
                  
             
            <!--     
                
            </* ?php if (is_page()); ? */ >
            <h2></* ?php echo get_the_title($post->post_parent); ? */></h2>
            <ul> --> 
            
            
            <?php
			
				if ($post->post_parent) { 
					
					wp_list_pages( array( 'child_of' => $post->post_parent, 'title_li' => '', )); 
				
				} else {
					
					wp_list_pages( array( 'child_of' => $post->ID, 'title_li' => '', ));	
					
				}
				
				?>
              
            </ul> 
           
            <?php if (!(is_page())) : ?>
            <h2>Blog</h2>
            <ul>
            <?php wp_list_categories( array('title_li' => '')); ?>
            </ul>
            <?php endif; ?>
            </div>
            
            <!--- end sub nav ------->
            
            <!--- begin qoute ---->
            <?php if(get_post_meta($post->ID, 'Quote', true)) : ?>
            
            <div class="widget">
        	<blockquote><?php echo get_post_meta($post->ID, 'Quote', true); ?></blockquote></div>
            
            <?php endif; ?>
            
            
            <!--- end qoute ---->
            
            
            <!----begin sidebar widget ---->
            <?php dynamic_sidebar(); ?>
      
            <!----end sidebar widget ---->
             
             
        </div>
             
        <!-- end sidebar ------>