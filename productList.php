<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Marketplace</title>

    <!-- important for responsiveness remove to make your site non responsive. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FavIcon -->
    <link rel="shortcut icon" type="image/x-icon" href="">
    <!-- Foundation CSS File -->
    <link rel="stylesheet" type="text/css" href="./assets/foundation.min.css" media="all">

    <!-- Theme Styles CSS File -->
    <link rel="stylesheet" type="text/css" href="./assets/style.css" media="all">

    <!-- Revolution Slider Files Delete if not using slider. -->
    <link rel="stylesheet" type="text/css" href="./assets/pe-icon-7-stroke.css">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="./assets/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="./assets/layers.css">

    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="css/bootstrap-rating.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css" media="all">

</head>
<body class="loaded">
    
    <div class="container">

    <!-- Top Nav-->
        <div class="top-info-bar">
            <div class="row">
                <div class="medium-6 small-12 columns">
                    <ul class="menu">
                        <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.php">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div><!-- Left Ends /-->
            </div><!-- row /-->
        </div>
    <!-- top Nav END /-->

    <!-- Header Starts -->
        <div class="header">
            <div class="row">
                <div class="medium-4 small-12 columns logo-container">
                    <div class="logo float-left">
                        <a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html">
                            <img alt="" src="./assets/logo.png">
                        </a>
                    </div><!-- Logo /-->
                <!-- Categories -->
                 <!-- Categories /-->

                </div><!-- first column /-->

                <div class="medium-5 small-12 columns search-wrap">
                    <div class="main-search-form">
                        <input type="text" placeholder="What you are shopping for ..." class="search-head">
                        <select>
                            <option value="0">All Categories</option>
                            <option value="1">Products</option>
                            <option value="2">Services</option>
                            
                        </select>
                        <button type="submit" class="primary button"><i class="fa fa-search"></i></button>
                    </div><!-- main search form /-->
                </div><!-- Second Column /-->


                    <div class="my-account-holder float-right">

                        <div class="my-account-title" data-toggle="myaccount-dropdown" aria-controls="myaccount-dropdown" data-is-focus="false" data-yeti-box="myaccount-dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="user-icon float-left">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <div class="links float-left">
                                <a href="" class="sign-in special-margin">Sign in</a> <a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" class="special-margin">Join</a>
                                <a href="">Welcome Back Ash</a>
                            </div>
                        </div><!-- ends title /-->
                        <!-- Hidden Menus -->
                        <!-- Hidden Menus /-->
                    </div><!-- my account holder /-->

                </div><!-- Third Column /-->

            </div><!-- Row /-->
        </div>
        <!-- Header Ends /-->








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
          <div class="banner row module">

 <?php 
    

include('includes/curl.php');

$productgroup = $_GET['product_group'];


      function view_product_list($rows, $author,$pg){
        for($i=0; $i<count($rows); $i++){
            printf(' 
                     <div class="medium-4 columns no-pad-left" style="height:400px;width:400px;">
                        <h4 color="#1675E1">
                        %s
                        </h4>
                         <a href="viewProduct.php?product_detail=%s&product_gr=%s"><img src="%s" style="height:300px;width:300px"></img></a>
                                
                      </div>
                        ',$rows[$i][1],$i,$pg,$rows[$i][3]);

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