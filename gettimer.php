 <?php
 
$server = "ec2-174-129-242-241.compute-1.amazonaws.com";
$postgres_user="acrxklsjedgwdc";
$postgres_pass="v6vtN4K4Pbgj7UIKfNIKmbT2PQ";
 $db="d4a07qknvais7o";
 $con = pg_connect("host=$server port=5432 dbname=$db user=$postgres_user password=$postgres_pass");
if (!$con) {
echo "A connection error occurred.\n";
exit;
}
else
{
$result = pg_query($con, "select * from todaysdeals");
while($line=mysqli_fetch_assoc($result)){
	$time=strtotime($line['date']);
$currtime=strtotime("now");
$time=$time-$currtime;
	if($line['product_group']=="manu")
	   {
		 $rows=$manu_rows; 
	   }
            printf(' 

                   <div class="content-section today-deal">
                        <div class="product small-12 columns">
						<?php
						
						?>
                            <div class="timer">
                                Ends in: <span class="countdown timeout" data-seconds-left="5400"><span class="hours">%s</span><span class="clearDiv"></span></span>
                            </div>
                            <div class="product-image">
                                <a href="#">
                                    <img src="%s" alt="">
                             
                                </a>

                                <div class="pro-buttons menu-centered">
                                    <ul class="menu">
                                        <li><a href="#" class="addWishList" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
                                        <li><a href="#" class="addCart" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div><!-- product buttons /-->

                            </div><!-- Product Image /-->
                            <div class="product-title">
                                <a href="http://www.webfulcreations.com/envato/webful_marketplace/html/single-product.html">%s</a>
                            </div><!-- product title /-->
                            <div class="product-meta">
                                <div class="prices">
                                    <span class="price">$12</span> / Piece
                                    <span class="off-tag">-25%</span>
                                </div>
                                <div class="clearfix"></div>
                            </div><!-- product meta /-->
                        </div><!-- Product /-->

                        <div class="clearfix"></div>
                    </div><!-- content section /-->

                       ',$time,$rows[$line['product_id']][3],$rows[$line['product_id']][1]);

         }


}

?>
