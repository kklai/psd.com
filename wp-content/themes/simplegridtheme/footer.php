    </div><!--//content_container-->

    

    <div id="footer">

        <div class="footer_widgets_cont">

        

            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>       


            

            <?php endif; ?>                

            

            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Last') ) : ?>       
            

            <?php endif; ?>                

            

            <div class="clear"></div>

        

        </div><!--//footer_widgets_cont-->

    

        <div class="footer_copyright">© Promotional Student Design  |  2012 Simple Grid Theme</div>

    </div><!--//footer-->



</div><!--//main_container-->



<?php wp_footer(); ?>

</body>

</html>