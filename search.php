<?php include('includes/nav.php')?>
<?php

$var = $_POST['searchValue'];
//echo $var;

   function get_data($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    // Find most RATED pages
    $top3Rated = array();
    $id_r = array();
    $title_r = array();
    $page_url_r = array();
    $img_url_r = array();
    $avg_rating_r = array();
    $author_r = array();

    // Individual URLs to cURL
    $ash_url = "http://codewarriors.herokuapp.com/services/allservices.php";
    $shruti_url = "http://smedia.herokuapp.com/services/allservices.php";
    $aj_url = "http://cleanercity.co/allservices.php";
    $ami_url = "http://sign-privilege.000webhostapp.com/searchServices.php"; 
    $manu_url = "http://agentimmobilier.000webhostapp.com/getproducts.php";
    $hiral_url = "http://hiralparikh.000webhostapp.com/allservices.php";

    //cURL each of the URLs
    $ash_result = get_data($ash_url);
    $shruti_result = get_data($shruti_url);
    $aj_result = get_data($aj_url);
    $ami_result = get_data($ami_url);
    $manu_result = get_data($manu_url);
    $hiral_result = get_data($hiral_url);

    // contains all products & services in each of those sites
    $ash_rows = json_decode($ash_result);
    $shruti_rows = json_decode($shruti_result);
    $aj_rows = json_decode($aj_result);
    $ami_rows = json_decode($ami_result);
    $manu_rows = json_decode($manu_result);
    $hiral_rows = json_decode($hiral_result);

    //Initial testing
    $flag = true;
    
     printf("<table>");
     if(strlen($var) != 0){
		     for($i=0;$i<count($aj_rows);$i++){
		          
		           

						         if(stripos($aj_rows[$i][1],$var) !== false){
						         
						         printf('<div class="medium-3 product" align="middle">');
						                                    printf('<div class="product-image">');
						                                    //printf('<div class="sale-tag">Hot</div>');
						                                            printf('<a href="%s">',$aj_rows[$i][0]);
						                                                printf('<img style="height:270px; width:270px" src="%s" alt="">',$aj_rows[$i][3]);
						                                                printf('<img style="height:270px; width:270px" src="%s" alt="">',$aj_rows[$i][3]);
						                                    printf('</a>');
						                                    printf('
						                                            <div class="pro-buttons menu-centered" >
						                                                <ul class="menu">
						                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
						                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
						                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
						                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
						                                                </ul>
						                                            </div><!-- product buttons /-->

						                                        </div><!-- Product Image /-->
						                                        <div class="product-title">
																');

						                                           printf('<a href="%s">%s</a>',$aj_rows[$i][0],$aj_rows[$i][1]);

						                                        printf('</div><!-- product title /-->
						                                        <div class="product-meta" >
						                                            <div class="prices">
						                                            	<span class="price">$%s</span>
						                                            </div>
						                                            <div class="last-row">
						                                                <div class="pro-rating float-left">',$aj_rows[$i][8]);
																			printf(' <input id="%s" type="hidden" class="rating rate" value="%s" data-readonly data-filled="fa fa-star fa-x" data-empty="fa fa-star-o fa-x" data-fractions="2"/>',$aj_rows[$i][0],$aj_rows[$i][5]);
								                                        printf('</div>
						                                                <div class="store float-right">
						                                                    By: <a href="http://www.webfulcreations.com/envato/webful_marketplace/html/store-front.html">Anthony Bell</a>
						                                                </div>
						                                            </div><!-- last row /-->
						                                            <div class="clearfix"></div>
						                                        </div><!-- product meta /-->
						                                    </div><!-- Product /-->');

						                                    $flag = false;
						                                    
							         

						         }
						         if(strpos(strtolower($ash_rows[$i][1]),strtolower($var)) !== false){


							         printf('<div class="medium-3 product" align="middle">');
						                                    printf('<div class="product-image">');
						                                    //printf('<div class="sale-tag">Hot</div>');
						                                            printf('<a href="%s">',$ash_rows[$i][0]);
						                                                printf('<img style="height:270px; width:270px" src="%s" alt="">',$ash_rows[$i][3]);
						                                                printf('<img style="height:270px; width:270px" src="%s" alt="">',$ash_rows[$i][3]);
						                                    printf('</a>');
						                                    printf('
						                                            <div class="pro-buttons menu-centered" >
						                                                <ul class="menu">
						                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
						                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
						                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
						                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
						                                                </ul>
						                                            </div><!-- product buttons /-->

						                                        </div><!-- Product Image /-->
						                                        <div class="product-title">
																');

						                                           printf('<a href="%s">%s</a>',$ash_rows[$i][0],$ash_rows[$i][1]);

						                                        printf('</div><!-- product title /-->
						                                        <div class="product-meta">
						                                            <div class="prices">
						                                            	<span class="price">$%s</span>
						                                            </div>
						                                            <div class="last-row">
						                                                <div class="pro-rating float-left">',$ash_rows[$i][8]);
																			printf(' <input id="%s" type="hidden" class="rating rate" value="%s" data-readonly data-filled="fa fa-star fa-x" data-empty="fa fa-star-o fa-x" data-fractions="2"/>',$ash_rows[$i][0],$ash_rows[$i][5]);
								                                        printf('</div>
						                                                <div class="store float-right">
						                                                    By: <a href="http://www.webfulcreations.com/envato/webful_marketplace/html/store-front.html">Ashutosh Singh</a>
						                                                </div>
						                                            </div><!-- last row /-->
						                                            <div class="clearfix"></div>
						                                        </div><!-- product meta /-->
						                                    </div><!-- Product /-->');

						                                    $flag = false;

						         }
						         if(stripos($shruti_rows[$i][1],$var) !== false){

						          printf('<div class="medium-3 product" align="middle">');
						                                    printf('<div class="product-image">');
						                                    //printf('<div class="sale-tag">Hot</div>');
						                                            printf('<a href="%s">',$shruti_rows[$i][0]);
						                                                printf('<img style="height:270px; width:270px" src="%s" alt="">',$shruti_rows[$i][3]);
						                                                printf('<img style="height:270px; width:270px" src="%s" alt="">',$shruti_rows[$i][3]);
						                                    printf('</a>');
						                                    printf('
						                                            <div class="pro-buttons menu-centered" >
						                                                <ul class="menu">
						                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
						                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
						                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
						                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
						                                                </ul>
						                                            </div><!-- product buttons /-->

						                                        </div><!-- Product Image /-->
						                                        <div class="product-title">
																');

						                                           printf('<a href="%s">%s</a>',$shruti_rows[$i][0],$shruti_rows[$i][1]);

						                                        printf('</div><!-- product title /-->
						                                        <div class="product-meta">
						                                            <div class="prices">
						                                            	<span class="price">$%s</span>
						                                            </div>
						                                            <div class="last-row">
						                                                <div class="pro-rating float-left">',$shruti_rows[$i][8]);
																			printf(' <input id="%s" type="hidden" class="rating rate" value="%s" data-readonly data-filled="fa fa-star fa-x" data-empty="fa fa-star-o fa-x" data-fractions="2"/>',$shruti_rows[$i][0],$shruti_rows[$i][5]);
								                                        printf('</div>
						                                                <div class="store float-right">
						                                                    By: <a href="http://www.webfulcreations.com/envato/webful_marketplace/html/store-front.html">Shruti Padmanabhan</a>
						                                                </div>
						                                            </div><!-- last row /-->
						                                            <div class="clearfix"></div>
						                                        </div><!-- product meta /-->
						                                    </div><!-- Product /-->');

						                                    $flag = false;
							         

						         }

						         if(stripos($ami_rows[$i][1],$var) !== false){
							          printf('<div class="medium-3 product" align="middle">');
						                                    printf('<div class="product-image">');
						                                    //printf('<div class="sale-tag">Hot</div>');
						                                            printf('<a href="%s">',$ami_rows[$i][0]);
						                                                printf('<img style="height:270px; width:270px" src="%s" alt="">',$ami_rows[$i][3]);
						                                                printf('<img style="height:270px; width:270px" src="%s" alt="">',$ami_rows[$i][3]);
						                                    printf('</a>');
						                                    printf('
						                                            <div class="pro-buttons menu-centered" >
						                                                <ul class="menu">
						                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
						                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
						                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
						                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
						                                                </ul>
						                                            </div><!-- product buttons /-->

						                                        </div><!-- Product Image /-->
						                                        <div class="product-title">
																');

						                                           printf('<a href="%s">%s</a>',$ami_rows[$i][0],$ami_rows[$i][1]);

						                                        printf('</div><!-- product title /-->
						                                        <div class="product-meta">
						                                            <div class="prices">
						                                            	<span class="price">$%s</span>
						                                            </div>
						                                            <div class="last-row">
						                                                <div class="pro-rating float-left">',$ami_rows[$i][8]);
																			printf(' <input id="%s" type="hidden" class="rating rate" value="%s" data-readonly data-filled="fa fa-star fa-x" data-empty="fa fa-star-o fa-x" data-fractions="2"/>',$ami_rows[$i][0],$ami_rows[$i][5]);
								                                        printf('</div>
						                                                <div class="store float-right">
						                                                    By: <a href="http://www.webfulcreations.com/envato/webful_marketplace/html/store-front.html">Ami Patel</a>
						                                                </div>
						                                            </div><!-- last row /-->
						                                            <div class="clearfix"></div>
						                                        </div><!-- product meta /-->
						                                    </div><!-- Product /-->');

						                                    $flag = false;


						     }

						     if(stripos($manu_rows[$i][1],$var) !== false){
							          printf('<div class="medium-3 product" align="middle">');
						                                    printf('<div class="product-image">');
						                                    //printf('<div class="sale-tag">Hot</div>');
						                                            printf('<a href="%s">',$manu_rows[$i][0]);
						                                                printf('<img style="height:270px; width:270px" src="%s" alt="">',$manu_rows[$i][3]);
						                                                printf('<img style="height:270px; width:270px" src="%s" alt="">',$manu_rows[$i][3]);
						                                    printf('</a>');
						                                    printf('
						                                            <div class="pro-buttons menu-centered" >
						                                                <ul class="menu">
						                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
						                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
						                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
						                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
						                                                </ul>
						                                            </div><!-- product buttons /-->

						                                        </div><!-- Product Image /-->
						                                        <div class="product-title">
																');

						                                           printf('<a href="%s">%s</a>',$manu_rows[$i][0],$manu_rows[$i][1]);

						                                        printf('</div><!-- product title /-->
						                                        <div class="product-meta">
						                                            <div class="prices">
						                                            	<span class="price">$%s</span>
						                                            </div>
						                                            <div class="last-row">
						                                                <div class="pro-rating float-left">',$manu_rows[$i][8]);
																			printf(' <input id="%s" type="hidden" class="rating rate" value="%s" data-readonly data-filled="fa fa-star fa-x" data-empty="fa fa-star-o fa-x" data-fractions="2"/>',$manu_rows[$i][0],$manu_rows[$i][5]);
								                                        printf('</div>
						                                                <div class="store float-right">
						                                                    By: <a href="http://www.webfulcreations.com/envato/webful_marketplace/html/store-front.html">Manu Barsainyan</a>
						                                                </div>
						                                            </div><!-- last row /-->
						                                            <div class="clearfix"></div>
						                                        </div><!-- product meta /-->
						                                    </div><!-- Product /-->');

						                                    $flag = false;


						     }

						     if(stripos($hiral_rows[$i][1],$var) !== false){
	          printf('<div class="medium-3 product" align="middle">');
                                    printf('<div class="product-image">');
                                    //printf('<div class="sale-tag">Hot</div>');
                                            printf('<a href="%s">',$hiral_rows[$i][0]);
                                                printf('<img style="height:270px; width:270px" src="%s" alt="">',$hiral_rows[$i][3]);
                                                printf('<img style="height:270px; width:270px" src="%s" alt="">',$hiral_rows[$i][3]);
                                    printf('</a>');
                                    printf('
                                            <div class="pro-buttons menu-centered" >
                                                <ul class="menu">
                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
                                                    <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div><!-- product buttons /-->

                                        </div><!-- Product Image /-->
                                        <div class="product-title">
										');

                                           printf('<a href="%s">%s</a>',$hiral_rows[$i][0],$hiral_rows[$i][1]);

                                        printf('</div><!-- product title /-->
                                        <div class="product-meta">
                                            <div class="prices">
                                            	<span class="price">$%s</span>
                                            </div>
                                            <div class="last-row">
                                                <div class="pro-rating float-left">',$hiral_rows[$i][8]);
													printf(' <input id="%s" type="hidden" class="rating rate" value="%s" data-readonly data-filled="fa fa-star fa-x" data-empty="fa fa-star-o fa-x" data-fractions="2"/>',$hiral_rows[$i][0],$hiral_rows[$i][5]);
		                                        printf('</div>
                                                <div class="store float-right">
                                                    By: <a href="http://www.webfulcreations.com/envato/webful_marketplace/html/store-front.html">Hiral Parikh</a>
                                                </div>
                                            </div><!-- last row /-->
                                            <div class="clearfix"></div>
                                        </div><!-- product meta /-->
                                    </div><!-- Product /-->');

                                    $flag = false;


                                    }


     				
		     
		     }
     }else{
     	echo "Empty Search. ";
     }
     if($flag){
         	echo "Search for "."<b>".$var."</b>"." not found.";

         }
     printf("</table>");


?>

</div>
</div>
</div>
</body>
</html>