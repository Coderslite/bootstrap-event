<?php include "includes/header.php"?>
                <!-- Header Section -->
                <section class="page-section " style="background-image: url(images/full-width-images/section-bg-1.jpg)" id="home">
                    <div class="container position-relative pt-30 pt-sm-50">
                            
                        <!-- Section Content -->
                        <div class="text-center">
                            <div class="row">
                                
                                <!-- Page Title -->
                                <div class="col-md-8 offset-md-2">
                                        
                                    <h1 class="hs-title-1 mb-20">
                                        <span class="wow charsAnimIn" data-splitting="chars">Gallery</span>
                                    </h1>
                                    
                                    <div class="row">
                                        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                                            <p class="section-descr mb-0 wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1.2s">
                                                Open this file in the HTML editor and copy the code of the wished component.
                                            </p>
                                        </div>
                                    </div>
                               
                               </div>
                               <!-- End Page Title -->
                                
                            </div>                            
                        </div>
                        <!-- End Section Content -->

                             <!-- Portfolio Section -->
         
         
         
                             <section class="page-section" id="portfolio">
                <div class="container">
                    
                    <div class="row mb-60 mb-md-40">
                        
                        <div class="col-lg-12"> 
                                                       
                            <h2 class="section-caption mb-xs-10">Our Gallery</h2>
                            
                            <h3 class="section-title mb-0"><span class="wow charsAnimIn" data-splitting="chars">Shots from our previous works.</span></h3>                                
                        
                        </div>                            
                        
                        <div class="col-lg-12">
                            <div class="row">
                         <?php
                         $count =5;
                            while($count>1){
                                ?>
                                 <div class="col-md-4 mb-5">
                                        <a href="images/portfolio/masonry/full-project-1.jpg" class="work-lightbox-link mfp-image">
                                        <div class="work-img">
                                            <div class="work-img-bg wow-p scalexIn"></div>
                                            <img src="images/portfolio/masonry/projects-1.jpg" alt="Work Description" class="wow-p fadeIn" data-wow-delay="1s" />
                                        </div>
                                        <div class="work-intro text-start">
                                            <h3 class="work-title">Medium Scene</h3>
                                        </div>
                                    </a>
                                </div>
                                <?php
                                $count--;
                            }
                         ?>
                            </div>
                        </div>
                    </div>                       
                    
                    
                </div>
            </section>
            <!-- End Portfolio Section -->
            
            
                            
                    </div>              
                </section>
                <!-- End Header Section -->


<?php include "includes/footer.php"?>
