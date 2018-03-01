<script type = "text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
<?php
	require_once('checklogin.php');
	include('db_conn.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="STOCK ON is an event of FETSU Presents Srijan 2015">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/gold-coin.png">

    <title>StockOn 2015</title>

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

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Stock On</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="home.php">Home</a></li>
            <li><a href="rules.html">Rules</a></li>
            <li class="active"><a href="leaderboard.php">Leaderboard</a></li>
			<li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase" role="main">
	  
      <div class="row">
        <div class="col-lg-3" align="center"></div>
        <div class="col-lg-5">
          <img src="assets/images/brand/stockon.png" class="img-responsive">
        </div>
        <div class="col-lg-4" align="center">
          <p class="text-danger"><b>Powered by:</b></p>
          <img src="assets/images/brand/airtel.png" class="img-responsive">
        </div>
      </div>

    <br><br>
	  <div class="row marketing">
		<div class="col-lg-2"></div>
		<div class="col-lg-8">
			<div class="panel panel-success">
				<div class="panel-heading">
				  <h1 class="panel-title text-center">Leaderboard</h1>
				</div>
				<div class="panel-body">
				  <ul class="list-group">
					<li class="list-group-item">
						<div class="row">
							<div class="col-lg-1"><h5 class="text-center"><b>ID</b></h5></div>
							<div class="col-lg-3"><h5 class="text-center"><b>Trader Name</b></h5></div>
							<div class="col-lg-6"><h5 class="text-center"><b>College</b></h5></div>
							<div class="col-lg-2"><h5 class="text-center"><b>Net Worth</b></h5></div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
						<?php
						  $stmt = "SELECT * FROM traderlist ORDER BY tr_networth DESC LIMIT 10";
						  $result = mysqli_query($Con,$stmt);
						  while($row = mysqli_fetch_array($result))
						  {
							$tr_id        = $row['tr_id'];
							$tr_name      = $row['tr_name'];
							$tr_college   = $row['tr_college'];
							$tr_networth  = $row['tr_networth'];
							
							echo "<div class=\"col-lg-1\"><h6 class=\"text-center\">" . $tr_id . "</h6></div>";
							echo "<div class=\"col-lg-3\"><h6 class=\"text-center\">" . $tr_name . "</h6></div>";
							echo "<div class=\"col-lg-6\"><h6 class=\"text-center\">" . $tr_college . "</h6></div>";
							echo "<div class=\"col-lg-2\"><h6 class=\"text-center\"><i>" . $tr_networth . "</i></h6></div>";
						  }
						?>
						</div>
					</li>
				  </ul>
				</div>
			</div>
		</div>
		<div class="col-lg-2"></div>
	  </div>

      <hr>

      <div class="footer">
        <div class="col-lg-4 col-md-4 col-xs-6"></div>
        <div class="col-lg-4 col-md-4 col-xs-6 text-center">&copy; StockOn 2015</div>
        <div class="col-lg-4 col-md-4 col-xs-6"></div>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
  </body>
</html>
