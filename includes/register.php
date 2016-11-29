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
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="padding-top:30px;">

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
            <legend><a href="/"><i class="glyphicon glyphicon-globe" style=" color:#FF8C00"></i></a> Sign up!</legend>
            <form action="#" method="post" class="form" role="form">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="firstname" placeholder="First Name" type="text" style="margin-bottom: 10px;"
                        required autofocus />
                </div>
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="lastname" placeholder="Last Name" type="text" style="margin-bottom: 10px;" required />
                </div>
            </div>
            <input class="form-control" name="youremail" placeholder="Your Email" style="margin-bottom: 10px;" type="email" required/>
            <input class="form-control" name="reenteremail" placeholder="Re-enter Email" type="email" style="margin-bottom: 10px;" required/>
            <input class="form-control" name="password" placeholder="New Password" type="password" style="margin-bottom: 10px;" required/>
            <label for="">
                Birth Date</label>
            <div class="row">
                <div class="col-xs-4 col-md-4">
                    <select class="form-control" name="birthdate[]" style="margin-bottom: 10px;">
                        <option value="Month">1</option>
                        <option value="Month">2</option>
                        <option value="Month">3</option>
                        <option value="Month">4</option>
                        <option value="Month">5</option>
                        <option value="Month">6</option>
                        <option value="Month">7</option>
                        <option value="Month">8</option>
                        <option value="Month">9</option>
                        <option value="Month">10</option>
                        <option value="Month">11</option>
                        <option value="Month">12</option>
                    </select>
                </div>
                <div class="col-xs-4 col-md-4">
                    <select class="form-control" style="margin-bottom: 10px;">
                        <option value="Day">1</option>
                        <option value="Day">2</option>
                        <option value="Day">3</option>
                        <option value="Day">4</option>
                        <option value="Day">5</option>
                        <option value="Day">6</option>
                        <option value="Day">7</option>
                        <option value="Day">8</option>
                        <option value="Day">9</option>
                        <option value="Day">10</option>
                        <option value="Day">11</option>
                        <option value="Day">12</option>
                        <option value="Day">13</option>
                        <option value="Day">14</option>
                        <option value="Day">15</option>
                        <option value="Day">16</option>
                        <option value="Day">17</option>
                        <option value="Day">18</option>
                        <option value="Day">19</option>
                        <option value="Day">20</option>
                        <option value="Day">21</option>
                        <option value="Day">22</option>
                        <option value="Day">23</option>
                        <option value="Day">24</option>
                        <option value="Day">25</option>
                        <option value="Day">26</option>
                        <option value="Day">27</option>
                        <option value="Day">28</option>
                        <option value="Day">29</option>
                        <option value="Day">30</option>
                        <option value="Day">31</option>
                    </select>
                </div>
                <div class="col-xs-4 col-md-4">
                    <select class="form-control" style="margin-bottom: 10px;">
                        <option value="Year">2005</option>
                        <option value="Year">2004</option>
                        <option value="Year">2003</option>
                        <option value="Year">2002</option>
                        <option value="Year">2001</option>
                        <option value="Year">2000</option>
                        <option value="Year">1999</option>
                        <option value="Year">1998</option>
                        <option value="Year">1997</option>
                        <option value="Year">1996</option>
                        <option value="Year">1995</option>
                        <option value="Year">1994</option>
                        <option value="Year">1993</option>
                        <option value="Year">1992</option>
                        <option value="Year">1991</option>
                        <option value="Year">1990</option>
                        <option value="Year">1989</option>
                        <option value="Year">lesse than</option>
                    </select>
                </div>
            </div>
            <label class="radio-inline">
                <input type="radio" name="sex" id="inlineCheckbox1" value="male" />
                Male
            </label>
            <label class="radio-inline">
                <input type="radio" name="sex" id="inlineCheckbox2" value="female" />
                Female
            </label>
            <br />
            <br />
            <button class="btn btn-lg btn-primary btn-block" name="submit" style=" background-color:#FF8C00" type="submit">
                Sign up</button>
            </form>
        </div>
    </div>
</div>

<?php

      extract($_POST);
      extract($_GET);

      //$conn_string = "host=sheep port=5432 dbname=test user=lamb password=bar";
      

  if(isset($_POST['submit']) && isset($_POST['youremail']) && isset($_POST['reenteremail']) && isset($_POST['password'])){
          
              //make a db call and enter the user data
            $email=isset($_POST['youremail']);

              // $con = pg_connect($conn_string);

              // if (!$con) {
                      
              //     die("Connection could not be established: ");
                           
              // }
              
             

              $result = pg_query($con, "insert into users(firstname,lastname,email,password,birthdate,gender)
               values('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['youremail']."','".$_POST['password']."','"
                .$_POST['birthdate'][0]."/".$_POST['birthdate'][1]."/".$_POST['birthdate'][2]."','".$_POST['sex']."')");

              if (!$result) {
                 echo "login failed";
                 header('Location: ../index.php');

              }
              else {
                header('Location: includes/index_after_login.php?username=$email');
              }
            }
            //pg_close($con);
               
          
    ?>

 </body>
</html>

<!--db schema would have following fields:
    first name:
    last name:
    email id:
    password:
    birthdate:
    gender:
-->