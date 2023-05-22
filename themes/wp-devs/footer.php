
        <!-- footer area -->

        <footer class="site-footer">
            <div class="comtainer">
                <div class="copyright">
                    <p><i class="fa fa-copyright X - all  rights reserved" aria-hidden="true"></i></p>
                </div>
                <div class="footer-menu">
                    <?php wp_nav_menu(array('theme_location' => 'wp_devs_footer_menu', 'depth' => 1 )); ?>
                </div>
            </div>
        </footer>


    </div>
    <?php wp_footer(); ?>   
</body>
</html>