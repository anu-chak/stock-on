<?php

if (isset($_SESSION['trader_id'])) {
  header("Location:home.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="STOCK ON is an event of Jadavpur University FETSU Presents Srijan 2015">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/stockon-logo.png">

    <title>StockOn 2015 @ SRIJAN-JU</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

    <!---------------------------- Fixed navigation bar --------------------------- -->
    <!--=========================================================================== -->
   
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Stock On</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="rules-index.html">Rules</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <!--===========================================================================-->

    <div class="container theme-showcase" role="main">

      <div class="row">
        <div class="col-lg-3" align="center">
          <img src="assets/images/brand/srijan.png" class="img-responsive">
        </div>
        <div class="col-lg-5">
          <img src="assets/images/brand/stockon.png" class="img-responsive">
        </div>
        <div class="col-lg-4" align="center">
          <p class="text-danger"><b>Powered by:</b></p>
          <img src="assets/images/brand/airtel.png" class="img-responsive">
        </div>
      </div>
	  
  	  <div class="row">

    		<div class="col-lg-3 col-md-3 col-xs-5">

            <?php
              if (isset($_GET['login'])) {
                if ($_GET['login']==0) {

                  echo "<div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">";
                    echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>";
                    echo "<p>Oops! Incorrect Trader ID or Password entered. Please try again!</p>";
                  echo "</div>";

                }
              }
            ?>

            <br><br>

	          <form class="form-horizontal well" role="form" method="POST" action="login.php">
	          	<fieldset>
	            <div class="form-group">
	              <div class="col-sm-10">
	                <input type="text" class="form-control" name="inputTraderId" placeholder="Trader ID" required>
	              </div>
	            </div>
	            <div class="form-group">
	              <div class="col-sm-10">
	                <input type="password" class="form-control" name="inputPassword" placeholder="Password" required>
	              </div>
	            </div>
	            <div class="form-group">
	              <div class="col-sm-offset-2 col-sm-10">
	                <button type="submit" class="btn btn-primary">Login</button>
	              </div>
	            </div>
	            </fieldset>
	          </form>
        </div>

        <div class="col-lg-5 col-md-5 col-xs-9">
          <!-- Calling Registration Modal -->
          
          	<?php require_once('register-modal.php'); ?>

          	<br><br>
          	<h4 class="text-center text-info">Our Visitors</h4>
 			<p class="text-center">
 				<a href="http://www.visitormap.org/" target="blank"><img src="http://www.visitormap.org/map/m:srkmpphbkoassvmp/s:1/c:ffffff/p:cross/y:5.png" alt="Free Visitor Maps at VisitorMap.org" border="0"></a>
 			</p>         	
          
          <!-- MODAL CODE ENDS -->
        </div>

    		<div class="col-lg-4 col-md-4 col-xs-4">
            <br><br>
	          <form class="form-horizontal well" role="form" method="POST" action="register.php">
	          	<fieldset>
	            <div class="form-group">
	              <div class="col-sm-10">
	                <input type="text" class="form-control" name="inputName" placeholder="Full Name" required>
	              </div>
	            </div>
	            <div class="form-group">
	              <div class="col-sm-10">
	                <input type="text" class="form-control" name="inputCollege" placeholder="College" required>
	              </div>
	            </div>
	            <div class="form-group">
	              <div class="col-sm-10">
	                <input type="text" class="form-control" name="inputContact" placeholder="Contact Number" required>
	              </div>
	            </div>
	            <div class="form-group">
	              <div class="col-sm-10">
	                <input type="email" class="form-control" name="inputEmail" placeholder="Email" required>
	              </div>
	            </div>
	            <div class="form-group">
	              <div class="col-sm-10">
	                <input type="password" class="form-control" name="inputPassword" placeholder="Password" required>
	              </div>
	            </div>
	            <div class="form-group">
	              <div class="col-sm-offset-2 col-sm-10">
	                <button type="submit" class="btn btn-success">Register</button>
	              </div>
	            </div>
	            </fieldset>
	          </form>
        	</div>
  	  
  	  </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <script src="assets/js/modal.js"></script>
    <script type="text/javascript">
      $(window).load(function(){
          $('#regModal').modal('show');
      });
    </script>
  </body>
</html>
