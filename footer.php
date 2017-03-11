</div>

<!-- begin footer --> 

<footer>
    <nav class="footer-nav"> 
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'navigation', 'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>', ) ); ?>
        
    </nav>
    
    <div class="section">
    
    <div id="footer-social">
        
        <p><a href="https://www.facebook.com/SeattleTransSocial16/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>
/images/facebook-48.png" alt="Facebook"></a> 
        <a href="https://twitter.com/SeattleTSocial" target="_blank"><img src="<?php bloginfo('template_directory'); ?>
/images/twitter-48.png" alt="Twitter"></a>
    
    </div>
    
    </div>    
    
    
    </footer>
    
    </div>
    
    <p style="text-align: center; padding: 0px;">&#169; 2017 - Dwayne Linde - All rights reserved. <?php wp_loginout(); ?></p>
    
<!-- end the footer --> 
    
<!-- start WP footer --> 
<?php wp_footer(); ?>
<!-- end WP footer --> 
    
</body>
</html>

    
    
</footer>
</div>

