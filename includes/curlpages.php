<?php
    function get_data($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    // Individual URLs to cURL
    $ash_url = "http://codewarriors.herokuapp.com/services/allservices.php";
    $shruti_url = "http://smedia.herokuapp.com/services/allservices.php";
    $aj_url = "http://cleanercity.co/allservices.php";
    // $ami_url = "http://sign-privilege.000webhostapp.com/searchServices.php";
    $manu_url = "http://agentimmobilier.000webhostapp.com/getproducts.php";
    $hiral_url = "http://hiralparikh.000webhostapp.com/allservices.php";

    //cURL each of the URLs
    $ash_result = get_data($ash_url);
    $shruti_result = get_data($shruti_url);
    $aj_result = get_data($aj_url);
    // $ami_result = get_data($ami_url);
    $manu_result = get_data($manu_url);
    $hiral_result = get_data($hiral_url);

    // contains all products & services in each of those sites
    $ash_rows = json_decode($ash_result);
    $shruti_rows = json_decode($shruti_result);
    $aj_rows = json_decode($aj_result);
    // $ami_rows = json_decode($ami_result);
    $manu_rows = json_decode($manu_result);
    $hiral_rows = json_decode($hiral_result);

    // Initial testing
    // printf("<table>");
    // for($i=0;$i<count($shruti_rows);$i++){
    //     echo "<tr><th>Title</th><th>Page URL</th><th>Image URL</th><th>Description</th><th>Star Count</th><th>Num of Ratings</th><th>Visits Count</th><th>Cost</th></tr>"; 
    //     echo "<tr><td>".$shruti_rows[$i][1]. //title
    //         "</td><td>".$shruti_rows[$i][2]. //page_url
    //         "</td><td>".$shruti_rows[$i][3]. //image_url
    //         "</td><td>".$shruti_rows[$i][4]. //description
    //         "</td><td>".$shruti_rows[$i][5]. //total_rating
    //         "</td><td>".$shruti_rows[$i][6]. //num_rating
    //         "</td><td>".$shruti_rows[$i][7]. //visit
    //         "</td><td>".$shruti_rows[$i][8]. //costs
    //         "</td></tr>";
    // }
    // printf("</table>");
    

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
                            <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
                            <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
                            <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div><!-- product buttons /-->
                </div><!-- Product Image /-->
                <div class="product-title">');

            printf('<a href="%s">%s</a>',$rows[$i][2],$rows[$i][1]);
            printf('</div><!-- product title /-->
                <div class="product-meta">
                    <div class="prices">
                        <span class="price">Custom</span>
                        
                    </div>
                    <div class="last-row">
                        <div class="pro-rating float-left">');
                            printf(' <input id="%s" type="hidden" class="rating rate" value="%s" data-readonly data-filled="fa fa-star fa-x" data-empty="fa fa-star-o fa-x" data-fractions="2"/>',$rows[$i][0],$rows[$i][5]);
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


<!--ALL PRODUCTS/SERVICES of Ashutosh's site-->
    <div class="section-title"><h2><span>Code Warriors</span></h2></div>
    <div class="content-section owl-carousel">
        <?php  show_products($ash_rows, "Ashutosh Singh");?>
        <div class="clearfix"></div>
    </div>

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

<!--ALL PRODUCTS/SERVICES of Ami's site>
    <div class="section-title"><h2><span>SiteName</span></h2></div>
    <div class="content-section owl-carousel">
        <?php  show_products($ami_rows, "Ami Patel");?>
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

