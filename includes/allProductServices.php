<?php
    //include('includes/curl.php');

    function show_products($rows, $author){
        for($i=0; $i<count($rows); $i++){
            printf('<div class="medium-3 small-12 columns wd100 product" style="padding-left: 50px;">');
            printf('<div class="product-image">');
            //printf('<div class="sale-tag">Hot</div>');
            printf('<a href="%s">',$rows[$i][2]);
            printf('<img style="height:150px;" src="%s" alt="">',$rows[$i][3]);
            printf('<img style="height:150px;" src="%s" alt="">',$rows[$i][3]);
            printf('</a>');
            printf('<div class="pro-buttons menu-centered">
                        <ul class="menu">
                            <li><a href="javascript:void(0);" class="addWishList" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
                            <li><a href="javascript:void(0);" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="javascript:void(0);" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
                            <li><a href="javascript:void(0);" class="addCart" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div><!-- product buttons /-->
                </div><!-- Product Image /-->
                <div class="product-title">');

            printf('<a href="%s">%s</a>',$rows[$i][2],$rows[$i][1]);
            printf('</div><!-- product title /-->
                <div class="product-meta">
                    <div class="prices">
                        $<span class="shippingPrice">%s</span>
                        
                    </div>
                    <div class="last-row">
                        <div class="pro-rating float-left">',$rows[$i][8]);
                            printf(' <input id="%s" type="hidden" class="rating rate" value="%s" data-readonly data-filled="fa fa-star fa-x" data-empty="fa fa-star-o fa-x" data-fractions="2"/>',$rows[$i][0],$rows[$i][9]);
                        printf('</div>
                        <div class="store float-right">
                            By: <a href="http://www.webfulcreations.com/envato/webful_marketplace/html/store-front.html">'.$author.'</a>
                        </div>
                    </div><!-- last row /-->
                    <div class="clearfix"></div>
                </div><!-- product meta /-->
            </div><!-- Product /-->');
        }

    }
?>

<div class="small-12 columns tabs-panel" id="panel1" role="tabpanel" aria-hidden="false" aria-labelledby="panel1-label">
    <div class="small-12 columns" style="margin-left: -3.5%;width: 107%;">
        <div class="featured-area">
            <!--ALL PRODUCTS/SERVICES of Shruti's site-->
            <div class="section-title"><h2><span>Smedia</span></h2></div>
            <div class="content-section owl-carousel">
                <?php  show_products($shruti_rows, "Shruti Padmanabhan");?>
                <div class="clearfix"></div>
            </div>

            <!--ALL PRODUCTS/SERVICES of AJ's site-->
            <div class="section-title"><h2><span>Cleaner City</span></h2></div>
            <div class="content-section owl-carousel">
                <?php  show_products($aj_rows, "Anthony Bell");?>
                <div class="clearfix"></div>
            </div>

            <!--ALL PRODUCTS/SERVICES of Ami's site-->      
            <div class="section-title"><h2><span>TravelHack</span></h2></div>
            <div class="content-section owl-carousel">
                <?php  show_products($ami_rows, "Ami Patel");?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<div class="small-12 columns tabs-panel" id="panel2" role="tabpanel" aria-hidden="true" aria-labelledby="panel2-label">
    <div class="small-12 columns" style="margin-left: -3.5%;width: 107%;">
        <div class="featured-area">

            <!--ALL PRODUCTS/SERVICES of Ashutosh's site-->
            <div class="section-title"><h2><span>Code Warriors</span></h2></div>
            <div class="content-section owl-carousel">
                <?php  show_products($ash_rows, "Ashutosh Singh");?>
                <div class="clearfix"></div>
            </div>

            <!--ALL PRODUCTS/SERVICES of Manu's site-->
            <div class="section-title"><h2><span>Agent Immobilier</span></h2></div>
            <div class="content-section owl-carousel">
                <?php  show_products($manu_rows, "Manu Barsainyan");?>
                <div class="clearfix"></div>
            </div>

            <!--ALL PRODUCTS/SERVICES of Hiral's site-->
            <div class="section-title"><h2><span>Parikh's Snooker Club</span></h2></div>
            <div class="content-section owl-carousel">
                <?php  show_products($hiral_rows, "Hiral Parikh");?>
                <div class="clearfix"></div>
            </div-->
        </div>
    </div>
</div>
