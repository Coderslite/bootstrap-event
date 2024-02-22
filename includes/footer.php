</main>     
   
   <!-- Footer -->
   <footer class="page-section footer bg-gray-light-1 pb-30">
                <div class="container">
                    
                    <div class="row pb-120 pb-sm-80 pb-xs-50">
                                                
                        <div class="col-md-4 col-lg-3 text-gray mb-sm-50">
                            
                            <div class="mb-30">
                                <img src="images/logo-dark.svg" width="105" height="34" alt="Your Company Logo" />
                            </div>
                            
                            <p>
                                Integer auctor aliquet martor, sed lorem malesuada eros blandit eget. Proin lacinia mortoc id odio vestibulum.
                            </p>
                            
                            <div class="clearlinks">                                
                                <strong>T.</strong> <a href="tel:+18376528800">+1 837 652 8800</a>
                            </div>
                            
                            <div class="clearlinks">
                                <strong>E.</strong> <a href="mailto:support@bestlooker.pro">support@bestlooker.pro</a>
                            </div>
                            
                        </div>
                        
                        <div class="col-md-7 offset-md-1 offset-lg-2">                            
                            <div class="row mt-n30">
                                
                                <!-- Footer Widget -->
                                <div class="col-sm-6 mt-30">
                                    
                                    <h3 class="fw-title">Company</h3>
                                    
                                    <ul class="fw-menu clearlist">                                        
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Events</a></li>
                                        <li><a href="#">Gallery</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                    
                                </div>
                                <!-- End Footer Widget -->
                                
                                <!-- Footer Widget -->
                                <div class="col-sm-6 mt-30">
                                    
                                    <h3 class="fw-title">Social Media</h3>
                                    
                                    <ul class="fw-menu clearlist">
                                        <li>
                                            <a href="#" rel="noopener nofollow" target="_blank">
                                                <i class="fa-facebook"></i>
                                                Facebook
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" rel="noopener nofollow" target="_blank">
                                                <i class="fa-youtube"></i>
                                                Youtube
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" rel="noopener nofollow" target="_blank">
                                                <i class="fa-pinterest"></i>
                                                Pinterest
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" rel="noopener nofollow" target="_blank">
                                                <i class="fa-linkedin"></i>
                                                LinkedIn
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                                <!-- End Footer Widget -->                        
                                
                            </div>                            
                        </div>
                        
                    </div>
                    
                    <!-- Footer Text -->
                    <div class="row text-gray">
                        
                        <div class="col-md-4 col-lg-3">
                            <b>© Bestlooker 2023.</b>
                        </div>
                        
                        <div class="col-md-7 offset-md-1 offset-lg-2 clearfix">
                            
                            <b>Based in London, United Kingdom.</b>
                            
                            <!-- Back to Top Link -->
                            <div class="local-scroll float-end mt-n20 mt-sm-10">
                                <a href="#top" class="link-to-top">                                
                                    <i class="mi-arrow-up size-24"></i>
                                    <span class="visually-hidden">Scroll to top</span>
                                </a>
                            </div>
                            <!-- End Back to Top Link -->
                            
                        </div>
                        
                    </div>
                    <!-- End Footer Text --> 
                    
                 </div>                 
            </footer>
            <!-- End Footer -->
        
        </div>
        <!-- End Page Wrap -->      
        
        <!-- JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>             
        <script src="js/contact-form.js"></script>        
        <script src="js/all.js"></script> 
        <!-- End JS -->       
        

        <script>
        // Function to toggle dark mode
        function toggleDarkMode() {
            const body = document.body;
            body.classList.toggle('dark-mode');
            const isDarkMode = body.classList.contains('dark-mode');
            // Update the cookie
            document.cookie = "darkMode=" + (isDarkMode ? "1" : "0");
            // Update page loader style based on dark mode
            const pageLoader = document.querySelector('.page-loader');
            const page = document.querySelector('.page');
            const pageSection = document.querySelector('.page-section');
            const mainNav = document.querySelector('.main-nav');
            const homeSection = document.querySelector('.home-section');
            const themeChanger = document.querySelector('.theme-changer');
            if (isDarkMode) {
                if(homeSection){
                homeSection.classList.add('bg-dark-1','light-content','bg-dark-alpha-90');
                homeSection.style.backgroundImage = "url('images/full-width-images/section-bg-2.jpg')";
                }
                mainNav.classList.add('dark','dark-mode');
                pageLoader.classList.add('bg-dark-1');
                page.classList.add('bg-dark-1');
                themeChanger.classList.remove('mi-moon');
                themeChanger.classList.add('mi-sun','text-warning');
                pageSection.classList.remove('bg-gray-light-1', 'bg-light-alpha-90','parallax-5');
                pageSection.classList.add('bg-dark-1', 'bg-dark-alpha-80', 'light-content','parallax-5')
            
  
            } else {
                mainNav.classList.remove('dark','dark-mode');
                pageLoader.classList.remove('bg-dark-1');
                page.classList.remove('bg-dark-1');
                themeChanger.classList.remove('mi-sun','text-warning');
                themeChanger.classList.add('mi-moon');
                pageSection.classList.remove('bg-dark-1', 'bg-dark-alpha-80', 'light-content','parallax-5');
                pageSection.classList.add('bg-gray-light-1', 'bg-light-alpha-90','parallax-5');
                if(homeSection){
                    homeSection.classList.remove('bg-dark-1','light-content','bg-dark-alpha-90');
                        homeSection.style.backgroundImage = "";
                }
            }
        }

        // Function to check for dark mode preference in cookies
        function checkDarkModePreference() {
            const cookie = document.cookie.split(';').find(cookie => cookie.trim().startsWith('darkMode='));
            if (cookie) {
                const homeSection = document.querySelector('.home-section');
                const pageSection = document.querySelector('.page-section');
                const themeChanger = document.querySelector('.theme-changer');
                const isDarkMode = cookie.split('=')[1] === '1';
                if (isDarkMode) {
                    document.body.classList.add('dark-mode');
                    document.querySelector('.page-loader').classList.add('bg-dark-1');
                    document.querySelector('.page').classList.add('bg-dark-1');
                    document.querySelector('.page-section').classList.add('bg-dark-1', 'bg-dark-alpha-80', 'light-content','parallax-5');
                    document.querySelector('.main-nav').classList.add('dark','dark-mode');
             
                     if(themeChanger){
                        themeChanger.classList.remove('mi-moon');
                     themeChanger.classList.add('mi-sun','text-warning');
                     }
                   if(homeSection){
                    homeSection.classList.add('bg-dark-1', 'light-content','bg-dark-alpha-90');
                     homeSection.style.backgroundImage = "url('images/full-width-images/section-bg-2.jpg')";
                   }
                   if (pageSection && pageSection.classList.contains('bg-gray-light-1')) {
                        // Perform your actions here
                        
                        homeSection.classList.remove('bg-gray-light-1');
                        homeSection.classList.add('bg-dark-2', 'light-content');
                    }
                }
                else{
                    document.querySelector('.page-section').classList.add('bg-gray-light-1', 'bg-light-alpha-90','parallax-5');
                }
            }
        }

        // Check the preference when the page loads
        checkDarkModePreference();
    </script>

    </body>

<!-- Mirrored from resonance.bestlooker.pro/main-multi-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 20:54:38 GMT -->
</html>