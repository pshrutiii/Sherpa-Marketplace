<?php include('includes/nav.php')?>

<?php

$var = $_GET['searchValue'];
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

    //$productgroup = $_GET['product_group'];
    
      function view_product_list($rows,$pg,$var){
      	for($i=0;$i<count($rows);$i++){
      		if(stripos($rows[$i][1],$var) !== false){
      			global $flag;
	        	printf(' 

                    <div class="medium-3 columns" style="margin-bottom: 20px;">
                      
                         <a href="viewProduct.php?product_detail=%s&product_gr=%s" class="portfolio-box"><img src="%s"  style="height:200px;width:auto;" class="img-responsive" alt="">
                             <div class="portfolio-box-caption" >
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"  >
                                    
                                </div>
                                <div class="project-name">
                                          %s

                               </div>
                            </div>
                        </div>
                    </a>
                </div>
                       ',$i,$pg,$rows[$i][3],$rows[$i][1]);

	        	$flag = false;
        	}
        }

     }

     printf("<table>");
     if(strlen($var) != 0){
		view_product_list($aj_rows,"aj",$var);	
		view_product_list($ash_rows,"ash",$var);
		view_product_list($shruti_rows,"shruti",$var);
		view_product_list($manu_rows,"manu",$var);
		view_product_list($hiral_rows,"hiral",$var);
		view_product_list($ami_rows,"ami",$var);


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