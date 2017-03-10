</div>

<!-- begin footer --> 

<footer>
    <nav class="footer-nav"> 
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'navigation', 'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>', ) ); ?>
        
    </nav>
    
    <div class="section">
        <ul id="social-icons">
                    <li><a href="https://www.facebook.com/SeattleTransSocial16/"><img src="<?php bloginfo('template_directory'); ?>
/images/facebook-72.png"></a></li>
                    <li><a href="https://twitter.com/SeattleTSocial"><img src="<?php bloginfo('template_directory'); ?>
/images/twitter-72.png"></a></li>
                </ul>
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

