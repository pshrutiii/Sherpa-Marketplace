<?php
extract($_POST);
extract($_GET);
echo $prodid;
echo $visits;
$connection = mysqli_connect("localhost","userid","password","dbname");

if(!($connection))
  die("Cannot connect to database");

$query="update products set visit=".$visits." where id=".$prodid;
echo $query;
$answer=mysqli_query($connection,$query);
    ?>