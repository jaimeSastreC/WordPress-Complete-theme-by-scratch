            <footer>
                <div class="footer">
                    <div class="footer-container">
                        <h3 class="footer-container__heading">How can we help? <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></h3>
                        <?php 
                            wp_nav_menu([
                                'menu' => '25',
                                'menu_class' => 'footer-container__body',
                            ]);   
                        ?>
                    </div>
                    <div class="footer-container">
                        <h3 class="footer-container__heading">Useful Info <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></h3>
                        <?php
                            wp_nav_menu([
                                'menu' => '26',
                                'menu_class' => 'footer-container__body',
                            ]);        
                        ?>
                    </div>
                    <div class="footer-container">
                        <h3 class="footer-container__heading">Company <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></h3>
                        <?php
                            wp_nav_menu([
                                'menu' => '27',
                                'menu_class' => 'footer-container__body',
                            ]);        
                        ?>
                    </div>
        <!--             <div class="footer-container">
                        <h3 class="footer-container__heading">Download <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></h3>
                        <p class="footer-container__body">
                            <img src="images/appstore.png">
                        </p>
                    </div> -->
                </div>

                <div class="copyright">
                    <div class="copyright__social">
                        <!-- Youtube -->
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>
                        </a>
                        <!-- Facebook -->
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                        </a>
                        <!-- Instagram -->
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                        </a>
                    </div>

                    <div class="copyright__body"> <?php echo date('Y');?> Jaime Sastre. &copy;</div>
                </div> 

            </footer>
        </div>                        
        <div style="color:white">Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon" style="color:white">www.flaticon.com</a></div>

            <?php wp_footer(); ?>

        <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-8Y1PXNZJEN"></script> -->
        <!-- optional jquery -> if not loaded by WP -->
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> -->
    </body>
</html>