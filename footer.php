<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softlab
 */

?>

	  <!-- Footer section start -->
	  <footer class="footer_wrapper bg-center bg-cover overflow-hidden" style="background-image: url(<?php echo get_theme_file_uri();?>./assets/img/footer.png);">
        <div class="container">
            <div class="row">
                
                <?php 
                    if( is_active_sidebar('footer-1')){
                        dynamic_sidebar('footer-1');
                    }
                 ?>
                
            </div>
        </div>
    </footer>
    <!-- Footer section end -->

<?php wp_footer(); ?>

</body>
</html>
