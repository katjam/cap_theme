			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => '',                              // remove nav container
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
        			'after' => '',                                  // after the menu
        			'link_before' => '',                            // before each link
        			'link_after' => '',                             // after each link
        			'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

          <div class="social-profile-buttons">
            <div class="facebook-profile">
              <a href="//facebook.com/CapriolFilms" class="profile sb text facebook" title="Facebook profile" alt="Facebook profile" target="_blank">
                <span class="hide-visually">Facebook</span>
              </a>
            </div>
            <div class="twitter-profile">
              <a href="//twitter.com/capriolfilms" class="profile sb text twitter" title="Twitter profile" alt="Twitter profile" target="_blank">
                <span class="hide-visually">Twitter</span>
              </a>
            </div>
          </div> <!-- end .social-profile-buttons -->
        </div> <!-- end #inner-footer -->  

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
