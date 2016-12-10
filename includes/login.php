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

  <body style="padding-top:30px; padding-left: 5cm">

  
    <div clss="row">
    
      <div class="col-xs-12 col-sm-12 col-md-3 well well-sm" >

      <form class="form-signin" method="post"action="login.php">
        <legend><a href=""><i class="glyphicon glyphicon-globe" style=" color:#FF8C00"></i></a> Sign in! </legend>
     
        <label for="inputEmail" class="sr-only" style="height:30px;">Email address</label>

        <input type="email" id="inputEmail" class="form-control"  style="margin-bottom:10px;" placeholder="Email address" name="email" required autofocus>
        <label for="inputPassword" class="sr-only" >Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me" name="checkbox"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit" style=" background-color:#FF8C00">Sign in</button>
      </form>
    </div>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <?php

      extract($_POST);
      extract($_GET);


      $server = "ec2-174-129-242-241.compute-1.amazonaws.com";
      $postgres_user="acrxklsjedgwdc";
      $postgres_pass="v6vtN4K4Pbgj7UIKfNIKmbT2PQ";
      $db="d4a07qknvais7o";
    
      if(isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['password'])){
          $email=$_POST['email'];

         
              //make a db call and check whether the user exist or not

                $con = pg_connect("host=$server port=5432 dbname=$db user=$postgres_user password=$postgres_pass");
                if (!$con) {
                  echo "A connection error occurred.\n";
                  exit;
                }
              else{

              $result = pg_query($con, "select * from users where email= '". $email."'");
              $resultcount = pg_numrows($result);
              $line = pg_fetch_assoc($result);
              $pwd = $_POST['password'];
              

                if ($resultcount == 0) {
                 echo "login failed, try logging in again";
                # header('Location:http://sherpaa.herokuapp.com/index.php');
                }
              else {
                $password = $line['password'];

                  if($password == $pwd){
                    session_start();
                    $_SESSION['username']=$email;
                    #print_r($_SESSION);
                    echo "<script>sessionStorage.setItem('username', '$email');</script>";
                  #echo "<script>alert(sessionStorage.getItem('username'));</script>";
                    
                   # echo "Success"; 
                    header('Location:http://sherpaa.herokuapp.com/index.php?logged=true');
                    
                  }
                  else{
                    echo "Password does not match, please try again";
                  }
              }
            
          }
          pg_close($con);
      }
        
    ?>
  </body>
</html>


