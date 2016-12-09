<?php include('includes/nav.php')?>
<?php include('includes/curl.php')?>

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
                            <li role="menuitem"><a href="productList.php?product_group=hiral">Parikh's Snooker Club</a></li>
                            <li role="menuitem"><a href="productList.php?product_group=aj"> Cleaner City</a></li>
                            <li role="menuitem"><a href="productList.php?product_group=ami"> TravelHack</a></li>
                       </ul>
                    </nav><!-- widget-content /-->

                </div><!-- widget /-->
            </div>
            <!-- Categories -->
            <!-- Main slider -->
            <div class="medium-9 small-12 columns main-slider no-pad-right">

                <div id="homepageslider_wrapper" class="rev_slider_wrapper tp-mouseover" data-alias="news-gallery34" style="overflow: visible; height: 477px;">
                      <img src="assets/background1.jpg" style="width:833px;height:477px"/>  
                </div><!-- END REVOLUTION SLIDER -->

            </div><!-- Main Slider /-->

        </div>
        <!-- Banner Section Ends /-->

    <!-- MOST VISITED PRODUCTS/SERVICES -->
        <div class="featured_items row module">

            <div class="medium-9 small-12 columns">
                <div class="featured-area">
                    <div class="section-title"><h2><span>Most Popular</span></h2></div><!-- section title /-->
                        <div class="content-section owl-carousel"><?php include('includes/mostVisited.php'); ?></div>
                </div><!-- Featured Area /-->
            </div>

            <div class="medium-3 small-12 columns">
                <div class="featured-area">
                    <div class="section-title">
                        <div class="float-left">
                            <h2><span>Today's</span> Deal</h2>
                        </div>
                        <div class="float-right left-out">
                            231 Left
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- section title /-->
                        <?php 
                        $server = "ec2-174-129-242-241.compute-1.amazonaws.com";
                        $postgres_user="acrxklsjedgwdc";
$postgres_pass="v6vtN4K4Pbgj7UIKfNIKmbT2PQ";
 $db="d4a07qknvais7o";
                        
                        echo 'here';
$con = pg_connect("host=$server port=5432 dbname=$db user=$postgres_user password=$postgres_pass");
if (!$con) {
echo "A connection error occurred.\n";
exit;
}
else
{
echo 'connected';
$result = pg_query($con, "select * from todaysdeals");
	
echo '<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
   <div class="carousel-inner" role="listbox">'
while($line=pg_fetch_assoc($result))
{
        
        $time=strtotime($line['date']);

$currtime=strtotime("now");
	
$time=$time-$currtime;
	$hr=intval($time/3600);
$min=intval(($time-$hr*3600)/60);
	$sec=intval($time-$hr*3600-$min*60);
	if($line['product_group']=="manu")
	   {
		 $rows=$manu_rows; 
	   }
	   if($line['product_group']=="ami")
	   {
		 $rows=$ami_rows; 
	   }
	   if($line['product_group']=="shruti")
	   {
		 $rows=$shruti_rows; 
	   }
	   if($line['product_group']=="aj")
	   {
		 $rows=$aj_rows; 
	   }
	   if($line['product_group']=="ash")
	   {
		 $rows=$ash_rows; 
	   }
	   if($line['product_group']=="hiral")
	   {
		 $rows=$hiral_rows; 
	   }
	
	
}
echo '</div></div>';
}
                        
                        ?>
                   
			
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
                            <img alt="" src="./assets/store1.jpg">
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
                        <a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#">
                            <img alt="" src="./assets/store2.jpg">
                        </a>
                        <h4><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#">Fajar Accessories &amp; Fashion Store</a></h4>
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
                        <p class="store-end"><i class="fa fa-map-marker" aria-hidden="true"></i> 25 Birmingham, USA</p>

                        <div class="products-container">

                            <div class="featured-product product">
                                <div class="medium-5 small-5 columns">
                                    <a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#">
                                        <img src="./assets/product3-1.jpg" alt="">
                                    </a>
                                </div>

                                <div class="medium-7 small-7 columns product-detail">
                                    <h6><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#">Floral Lace Shift Dress</a></h6>
                                    <div class="top-product-review">
                                        <div class="star">
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="price">$50.00</div>
                                </div>
                                <div class="clearfix"></div>
                            </div> <!-- Product Ends /-->

                            <div class="featured-product product no-border">
                                <div class="medium-5 small-5 columns">
                                    <a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#">
                                        <img src="./assets/product4-1.jpg" alt="">
                                    </a>
                                </div>

                                <div class="medium-7 small-7 columns product-detail">
                                    <h6><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#">Floral Lace Shift Dress</a></h6>
                                    <div class="top-product-review">
                                        <div class="star">
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="price">$50.00</div>
                                </div>
                                <div class="clearfix"></div>
                            </div> <!-- Product Ends /-->

                        </div><!-- products container /-->

                    </div><!-- Store container /-->
                </div> <!-- Store /-->

                <div class="medium-4 small-12 columns store">
                    <div class="thumbnail">
                        <a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#">
                            <img alt="" src="./assets/store3.jpg">
                        </a>
                        <h4><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#">Fajar Accessories &amp; Fashion Store</a></h4>
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
                        <p class="store-end"><i class="fa fa-map-marker" aria-hidden="true"></i> 25 Birmingham, USA</p>

                        <div class="products-container">

                            <div class="featured-product product">
                                <div class="medium-5 small-5 columns">
                                    <a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#">
                                        <img src="./assets/productm2-1.jpg" alt="">
                                    </a>
                                </div>

                                <div class="medium-7 small-7 columns product-detail">
                                    <h6><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#">Floral Lace Shift Dress</a></h6>
                                    <div class="top-product-review">
                                        <div class="star">
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="price">$50.00</div>
                                </div>
                                <div class="clearfix"></div>
                            </div> <!-- Product Ends /-->

                            <div class="featured-product product no-border">
                                <div class="medium-5 small-5 columns">
                                    <a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#">
                                        <img src="./assets/productm3-1.jpg" alt="">
                                    </a>
                                </div>

                                <div class="medium-7 small-7 columns product-detail">
                                    <h6><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#">Floral Lace Shift Dress</a></h6>
                                    <div class="top-product-review">
                                        <div class="star">
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="price">$50.00</div>
                                </div>
                                <div class="clearfix"></div>
                            </div> <!-- Product Ends /-->

                        </div><!-- products container /-->

                    </div><!-- Store container /-->
                </div> <!-- Store /-->

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
            navigationText : ["Prev","Next"],
            rewindNav : true,
            scrollPerPage : true
            
        });

        ShoppingCart.init();

     });

    </script>
</body>
</html>
