</div>

<!-- begin footer --> 

<footer>
    <nav class="footer-nav"> 
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'navigation', 'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>', ) ); ?>
        
    </nav>
    
    <div class="section">
        <ul id="social-icons">
                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>
/images/facebook-icon.png"></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>
/images/twitter-icon.png"></a></li>
                </ul>
        </div>
    
    
    <div class="section">
    <p><strong>Lorem ipsum</strong> dolscing elit. Pellentesque molestie aliquam accumsan. Nunc sagittis ipsum vel cursus fringilla. Donec efficitur imperdieporttitor malesuada. <a href="" target="_blank" class="link-1">READ MORE</a></p>
    </div>
    
    <div class="section">
        <p><strong>Lorem ipsum</strong> dolscing elit. Pellentesque molestie aliquam accumsan. Nunc sagittis ipsum vel cursus fringilla. Donec efficitur imperdieporttitor malesuada. <a href="" target="_blank" class="link-1">READ MORE</a></p>
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

