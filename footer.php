
<footer> 
    <div class="main-footer">
        <div class="footer-widget">
            <?php 
                if ( is_active_sidebar('footer-top-first') ){
                    dynamic_sidebar('footer-top-first');
                }
            ?>
        </div>
        <div class="footer-widget">
            <?php
            if ( is_active_sidebar('footer-top-second') ){
                dynamic_sidebar('footer-top-second');
            }
            ?>
        </div>
        <div class="footer-widget">
        <?php
        if ( is_active_sidebar('footer-top-third') ){
            dynamic_sidebar('footer-top-third');
        }
        ?>
        </div>
    </div>
</footer>
<?php
    wp_footer();
?>
</body>
</html>