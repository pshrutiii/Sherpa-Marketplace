<?php include('includes/nav.php')?>

       








        <!-- Banner Section Starts -->
        <div class="banner row module">

            <!-- Categories -->
            <div class="medium-3 columns no-pad-left">
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
           <div class="medium-9 columns no-pad-left">

 <?php 
    

include('includes/curl.php');

$productgroup = $_GET['product_group'];


      function view_product_list($rows, $author,$pg){
        for($i=0; $i<count($rows); $i++){
            printf(' 

                    <div class="medium-4 columns" style="margin-bottom: 20px;">
                      
                         <a href="viewProduct.php?product_detail=%s&product_gr=%s" class="portfolio-box"><img src="%s"  style="height:200px;width:auto" class="img-responsive" alt="">
                             <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    
                                </div>
                                <div class="project-name">
                                          %s

                               </div>
                            </div>
                        </div>
                    </a>
                </div>
                       ',$i,$pg,$rows[$i][3],$rows[$i][1]);

         }



  



    }
if($productgroup=="ami"){
    view_product_list($ami_rows,"Ami Patel","ami");
}
 
else if($productgroup=="shruti"){
    view_product_list($shruti_rows,"shruti","shruti");
}
else if($productgroup=="manu"){
    view_product_list($manu_rows,"manu","manu");
}
else if($productgroup=="ash"){
    view_product_list($ash_rows,"Ash","ash");
}
else if($productgroup=="aj"){
    view_product_list($aj_rows,"Aj","aj");
}
else if($productgroup=="hiral"){
    view_product_list($hiral_rows,"hiral","hiral");
}





    ?> 

    </div>         
</div>
          <!-- Main Slider /-->

        </div>
        <!-- Banner Section Ends /-->

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

   <script src="js/creative.min.js"></script>

    
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    
    <script type="text/javascript" src="js/bootstrap-rating.min.js"></script>
    <script type="text/javascript" src="js/rating.js"></script>
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
     });

    </script>
</body>
</html>