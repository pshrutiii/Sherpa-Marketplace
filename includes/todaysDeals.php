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
else{
	$result = pg_query($con, "select * from todaysdeals");
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
    	 printf('<div class="medium-3 small-12 columns wd100 product">');
	printf('<div class="product-image">');
	printf('<div class="sale-tag">Deal</div>');
	printf('<a href="%s">',$line['product_id']);
	printf('<img style="height:150px;" src="%s" alt="">',$rows[$line['product_id']][3]);
	printf('<img style="height:150px;" src="%s" alt="">',$rows[$line['product_id']][3]);
	printf('</a>');
	printf('
	        <div class="pro-buttons menu-centered">
	            <ul class="menu">
	                <a href="javascript:void(0);" class="addCart" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
	            </ul>
	        </div><!-- product buttons /-->
	    </div><!-- Product Image /-->
	    <div class="product-title">
	 ');
	       printf('<a href="%s">%s</a>',$rows[$line['product_id']][3],$rows[$line['product_id']][1]);
	    printf('</div><!-- product title /-->
	    <div class="product-meta">
	        <div class="prices">
	            $<span class="shippingPrice">%s</span>
	            
	        </div>
	        <div class="last-row">
	           
	            <div class="store"> Available till:'.$hr.':'.$min.':'.$sec.' </div>
	        </div><!-- last row /-->
	        <div class="clearfix"></div>
	    </div><!-- product meta /-->
	</div><!-- Product /-->',$rows[$line['product_id']][8]);
	
}

}