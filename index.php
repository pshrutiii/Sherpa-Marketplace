<?php include('includes/nav.php')?>

        <!-- Header Ends /-->
        <!-- Banner Section Starts -->
        <div class="banner row module">

            <!-- Categories -->
            <div class="medium-3 small-12 columns no-pad-left hide-for-small-only">
                <div class="widget categories">
                    <h2>Websites</h2>

                    <nav class="widget-content">
                        <ul class="menu vertical dropdown" data-responsive-menu="accordion medium-dropdown" role="menubar" data-dropdown-menu="vtz2ih-dropdown-menu">
                            <li class="menuitem"><a href="productList.php?product_group=ash" tabindex="0">Code Warriors</a></li>
                            <li role="menuitem"><a href="productList.php?product_group=shruti">SMedia</a></li>
                            <li role="menuitem"><a href="productList.php?product_group=manu">Agent Immobilier</a></li>
                            <li role="menuitem"><a href="productList.php?product_group=hiral">Parikh Snooker Club</a></li>
                            <li role="menuitem"><a href="productList.php?product_group=aj"> Cleaner City</a></li>
                            <li role="menuitem"><a href="productList.php?product_group=ami"> TravelHack</a></li>
                       </ul>
                    </nav><!-- widget-content /-->

                </div><!-- widget /-->
            </div>
            <!-- Categories -->
            <!-- Main slider -->
            <div class="medium-9 small-12 columns main-slider no-pad-right">

                <div id="homepageslider_wrapper" class="rev_slider_wrapper tp-mouseover" data-alias="news-gallery34" style="overflow: visible; height: 250px;">
                      <img src="assets/bg.jpg" style="width:833px;height:250px"/>  
                </div><!-- END REVOLUTION SLIDER -->

            </div><!-- Main Slider /-->

        </div>
        <!-- Banner Section Ends /-->

    <!-- MOST VISITED PRODUCTS/SERVICES -->
        <div class="featured_items row module">

            <div class="medium-12 small-12 columns">
                <div class="featured-area">
                    <div class="section-title"><h2><span>Most Popular</span></h2></div><!-- section title /-->
                        <div class="content-section owl-carousel"><?php include('includes/mostVisited.php'); ?></div>
                </div><!-- Featured Area /-->
            </div>
        </div>
        <div class="featured_items row module">

             <div class="medium-12 small-12 columns">
                <div class="featured-area">
                    <div class="section-title"><h2><span>Today's deals</span></h2></div><!-- section title /-->
                        <div class="content-section owl-carousel"><?php include('includes/todaysDeals.php'); ?></div>
                </div><!-- Featured Area /-->
            </div><!-- Today's Deal /-->


        </div>

    <!--TOP RATED 4 PRODUCTS/ SERVICES-->
        <div class="featured_items row module">

            <div class="medium-12 small-12 columns">
                <div class="featured-area">
                    <div class="section-title"><h2><span>Top Rated</span></h2></div><!-- section title /-->
                    <div class="content-section owl-carousel"><?php include('includes/mostRated.php'); ?></div>
                </div><!-- Featured Area /-->
            </div>
        </div>

    <!-- ALL products/services section -->
        <div class="whats-new row module">
            <div class="big-section-title">
                <h2><span>All Products and Services</span></h2>
            </div><!-- big Section title ends.-->

            <div class="new-content">
               <div class="tabs-content" data-tabs-content="new-items">
                    <ul>
                        <li><a href="#panel1">Products</a></li>
                        <li><a href="#panel2">Services</a></li>
                        
                    </ul>
                    
                    <?php include('includes/allProductServices.php'); ?>
                </div><!-- tabs content ends /-->

            </div><!-- New content /-->
            </div>
        </div>
        <!-- What's new section Ends /-->
        <!-- Suggested Stores -->
       <div class="row suggested-stores module">
            <div class="big-section-title">
                <h2><span>Suggested Websites</span></h2>
            </div><!-- big Section title ends.-->

            <div class="stores-section">

                <div class="medium-4 small-12 columns store">
                    <div class="thumbnail">
                        <a href="https://codewarriors.herokuapp.com">
                            <img alt="" src="./assets/store1.jpg" width="450px" height="350px">
                        </a>
                        <h4><a href="https://codewarriors.herokuapp.com">Code Warriors - Custom Dev</a></h4>
                        <div class="store-reputation">
                            <div class="pro-rating float-left">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star off"></i>
                            </div>
                            <span>230 reviews</span>
                        </div><!-- Store reputation /-->
                        <p class="store-end"><i class="fa fa-map-marker" aria-hidden="true"></i> 25 Diridon Street, San Jose , USA</p>

                        <div class="products-container">

                            <div class="featured-product product">
                                <div class="medium-5 small-5 columns">
                                    <a href="http://codewarriors.herokuapp.com/consulting.php">
                                        <img src="http://codewarriors.herokuapp.com/img/portfolio/treehouse.png" alt="">
                                    </a>
                                </div>

                                <div class="medium-7 small-7 columns product-detail">
                                    <h6><a href="http://codewarriors.herokuapp.com/consulting.php">Consulting</a></h6>
                                    <div class="top-product-review">
                                        <div class="star">
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="price">Custom</div>
                                </div>
                                <div class="clearfix"></div>
                            </div> <!-- Product Ends /-->

                            <div class="featured-product product no-border">
                                <div class="medium-5 small-5 columns">
                                    <a href="http://codewarriors.herokuapp.com/customwebsites.php">
                                        <img src="http://codewarriors.herokuapp.com/images/seo.png" alt="">
                                    </a>
                                </div>

                                <div class="medium-7 small-7 columns product-detail">
                                    <h6><a href="http://codewarriors.herokuapp.com/customwebsites.php">Custom Development</a></h6>
                                    <div class="top-product-review">
                                        <div class="star">
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="price">Custom</div>
                                </div>
                                <div class="clearfix"></div>
                            </div> <!-- Product Ends /-->

                        </div><!-- products container /-->

                    </div><!-- Store container /-->
                </div> <!-- Store /-->

                <div class="medium-4 small-12 columns store">
                    <div class="thumbnail">
  <div style="
    height: 141px;
    width: 271px;
">
                        <a href="https://hiralparikh.000webhostapp.com/firstPage.html">
                            <img alt="" src="http://www.flyordie.com/snooker/images/snooker-lite.jpg" width="450px" height="350px" style="
    margin: auto;
    display: block;
">
                        </a>
  </div>   
    <h4 style="
    padding-top: 32px;
"><a href="https://hiralparikh.000webhostapp.com/firstPage.html">Parikh's Snooker Club</a></h4>
                        <div class="store-reputation">
                            <div class="pro-rating float-left">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star off"></i>
                            </div>
                            <span>270 reviews</span>
                        </div><!-- Store reputation /-->
                        <p class="store-end"><i class="fa fa-map-marker" aria-hidden="true"></i> 33 South, San Jose , USA</p>

                        <div class="products-container">

                            <div class="featured-product product">
                                <div class="medium-5 small-5 columns">
                                    <a href="https://hiralparikh.000webhostapp.com/setCookies.php?id=2">
                                        <img src="http://ichef.bbci.co.uk/onesport/cps/480/cpsprodpb/A367/production/_86913814_o'sullivan-main-rex.jpg" alt="">
                                    </a>
                                </div>

                                <div class="medium-7 small-7 columns product-detail">
                                    <h6><a href="https://hiralparikh.000webhostapp.com/setCookies.php?id=2">Organize Competition</a></h6>
                                    <div class="top-product-review">
                                        <div class="star">
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="price"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div> <!-- Product Ends /-->

                            <div class="featured-product product no-border">
                                <div class="medium-5 small-5 columns">
                                    <a href="https://hiralparikh.000webhostapp.com/setCookies.php?id=3">
                                        <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQsoCKjPRTg7Tiua1DMIQtt6ivmk5Z8qfHsAFQGDUaLF3_VF-aH" alt="">
                                    </a>
                                </div>

                                <div class="medium-7 small-7 columns product-detail">
                                    <h6><a href="https://hiralparikh.000webhostapp.com/setCookies.php?id=3">Learn and Play</a></h6>
                                    <div class="top-product-review">
                                        <div class="star">
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="price"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div> <!-- Product Ends /-->

                        </div><!-- products container /-->

                    </div><!-- Store container /-->
                </div>

                <div class="medium-4 small-12 columns store">
                    <div class="thumbnail">
  <div style="
    height: 174px;
    width: 188px;
">
                        <a href="smedia.herokuapp.com">
                            <img alt="" src="https://lh4.ggpht.com/JOkWv8lWzrvT4CgnOxPfkysg4W3lLel5-9TXVJrWWgEXNqULbCtCWmch8LKlQ9hTRMc=w300" width="450px" height="350px">
                        </a>
  </div>   
    <h4><a href="https://codewarriors.herokuapp.com">Smedia</a></h4>
                        <div class="store-reputation">
                            <div class="pro-rating float-left">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star off"></i>
                            </div>
                            <span>300 reviews</span>
                        </div><!-- Store reputation /-->
                        <p class="store-end"><i class="fa fa-map-marker" aria-hidden="true"></i> real almeda, San Jose , USA</p>

                        <div class="products-container">

                            <div class="featured-product product">
                                <div class="medium-5 small-5 columns">
                                    <a href="http://smedia.herokuapp.com/services/img9.php">
                                        <img src="http://smedia.herokuapp.com/img/gallery/IMG_9.jpg" alt="">
                                    </a>
                                </div>

                                <div class="medium-7 small-7 columns product-detail">
                                    <h6><a href="http://smedia.herokuapp.com/services/img9.php">Outdoor Sport</a></h6>
                                    <div class="top-product-review">
                                        <div class="star">
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="price"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div> <!-- Product Ends /-->

                            <div class="featured-product product no-border">
                                <div class="medium-5 small-5 columns">
                                    <a href="http://smedia.herokuapp.com/services/img3.php">
                                        <img src="http://smedia.herokuapp.com/img/gallery/IMG_3.jpg" alt="">
                                    </a>
                                </div>

                                <div class="medium-7 small-7 columns product-detail">
                                    <h6><a href="http://smedia.herokuapp.com/services/img3.php">Big Sur</a></h6>
                                    <div class="top-product-review">
                                        <div class="star">
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="price"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div> <!-- Product Ends /-->

                        </div><!-- products container /-->

                    </div><!-- Store container /-->
                </div>

            </div><!-- Store section /-->
        </div>
        <!-- Suggested Stores Ends /-->
      
        <!-- Footer -->
        <div class="footer">
      
        </div>
        <!-- Footer Ends here -->
    </div>
    <!-- MAIN Container Ends here. -->
    <a href="index.html#top" id="top" class="animated fadeInUp start-anim" style="display: none;"><i class="fa fa-angle-up"></i></a>
    <!-- Page Preloader -->
    <div class="preloader" style="display: none;"></div>
    <link rel="stylesheet" href="css/carousel.css" media="screen" type="text/css" />

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>

    <!-- Crousel JS -->
    <script type="text/javascript" src="./assets/owl.carousel.min.js.download"></script>
    <!-- jQuery Timer plugin delete if not using -->
    <script src="./assets/jquery.simple.timer.js.download"></script>

   
    
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    
    <script type="text/javascript" src="js/bootstrap-rating.min.js"></script>
    <script type="text/javascript" src="js/rating.js"></script>
    <script type="text/javascript" src="js/cart.js"></script>
    <script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            items:3,
            itemsDesktop : [1199,4],
            itemsDesktopSmall : [980,3],
            itemsTablet: [768,2],
            itemsTabletSmall: false,
            itemsMobile : [479,1],
            singleItem : false,
            itemsScaleUp : false,
            // Responsive 
            responsive: true,
            responsiveRefreshRate : 200,
            responsiveBaseWidth: window,
            //Lazy load
            lazyLoad : false,
            lazyFollow : true,
            lazyEffect : "fade",
            
            // Navigation
            navigation : true,
            navigationText : [
                "<i class='icon-chevron-left icon-white'><</i>",
                "<i class='icon-chevron-right icon-white'>></i>"
            ],
            rewindNav : true,
            scrollPerPage : true
            
        });

        ShoppingCart.init();

     });

    </script>
</body>
</html>
