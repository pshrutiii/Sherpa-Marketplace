 <?php
 include('includes/curl.php');
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
while($line=pg_fetch_assoc($result))
{
	echo 'found data';
$time=strtotime($line['date']);
$currtime=strtotime("now");
$time=$time-$currtime;
	$hr=intval($time/3600);
$min=intval(($time-$hr*3600)/60);
	echo $line['product_group'];
	echo $line['product_id'];
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
           echo $rows;
			 printf(' 

                   <div class="content-section today-deal">
                        <div class="product small-12 columns">
						
                            <div class="timer">
                                Ends in: <span class="countdown timeout" data-seconds-left="5400"><span class="hours">%s:%s,%s,%s</span><span class="clearDiv"></span></span>
                            </div>
                      

                       ',$hr,$min,$rows[$line['product_id']][3],$rows[$line['product_id']][1]);
         }


}

?>
