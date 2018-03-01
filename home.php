<script type = "text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
<?php 
  require_once('checklogin.php');
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
    
    <!-- TICKER NEWS -->
    <link href="assets/css/ticker-style.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/ticker.js" type="text/javascript"></script>

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

   <!---------------------------- Fixed navigation bar ----------------------------->
   <!--===========================================================================-->
   
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
            <li class="active"><a href="home.php">Home</a></li>
			<li><a href="rules.html">Rules</a></li>
            <li><a href="leaderboard.php">Leaderboard</a></li>
            <li><a href="logout.php">logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <!--===========================================================================-->
	
    <div class="container theme-showcase" role="main">

      <div class="row">
        <div class="col-lg-4" align="center">
          <br><br>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-9">
              <p class="lead text-danger text-left">Time Now<br><?php include('time.php'); get_time(time()); ?></p>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-9">
              <p class="lead text-success text-left">Next Price Change<br><?php get_time(time()+3600*2); ?></p>
            </div>
          </div>

        </div>
        <div class="col-lg-4" align="center">
          <img src="assets/images/brand/stockon.png" class="img-responsive">
        </div>
        <div class="col-lg-4" align="center">
          <p class="text-danger"><b>Powered by:</b></p>
          <img src="assets/images/brand/airtel.png" class="img-responsive">
        </div>
      </div>

      <hr>

      <!-- NEWS & RUMOURS -->

      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-18">
          <h4 class="text-center text-primary"><b>News Flash</b></h4>
            <marquee scrollamount="7">
            	<p class="text-danger lead">
            	<?php 
            		include("db_conn.php");
                    $stmt = "SELECT * FROM newsfeed";
                    $result = mysqli_query($Con,$stmt);
                    while ($row = mysqli_fetch_array($result)) 
                    {
                    	echo $row['news'] . "&nbsp;&nbsp;|&nbsp;&nbsp;";
                    }
                    mysqli_close($Con);
            	?>
            	</p>
            </marquee>
        </div>
      </div>

      <!-- ---------- -->

  	  <div class="row">

      <?php require_once('calc_networth.php'); ?>

        <div class="col-lg-4 col-md-4 col-xs-6">
          <hr>
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h3 class="panel-title">Trader Profile</h3>
            </div>
            <div class="panel-body">
              <ul class="list-group">
                <li class="list-group-item"><span class="badge"><?php echo $_SESSION['trader_id']; ?></span> <b>Trader ID</b></li>
                <li class="list-group-item"><span class="badge"><?php echo $_SESSION['trader_name']; ?></span> <b>Name</b></li>
				        <li class="list-group-item"><span class="badge"><?php echo $_SESSION['trader_email']; ?></span> <b>Email</b></li>
                <li class="list-group-item"><span class="badge"><?php echo $_SESSION['trader_college']; ?></span> <b>College</b></li>
                <li class="list-group-item"><span class="badge">Rs. &nbsp;&nbsp;<?php echo $_SESSION['trader_networth']; ?></span> <b>Net Worth</b></li>
                <li class="list-group-item"><span class="badge">Rs. &nbsp;&nbsp;<?php echo $_SESSION['trader_cash']; ?></span> <b>Cash In Hand</b></li>
              </ul>
            </div>
          </div>
      
      </div>

    	<div class="col-lg-4 col-md-4 col-xs-6">
        <!--Invoking the buy-alert.php-->
        <?php require('buy-alert.php'); ?>

		    <hr>
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Buy Shares</h3>
            </div>
            <div class="panel-body" style="height: 375px;overflow-y: scroll;">

                <div class="list-group">
                  <?php
                    include("db_conn.php");
                    $trader_id  = substr($_SESSION['trader_id'],2);
                    $stmt = "SELECT * FROM stocks_val";
                    $result = mysqli_query($Con,$stmt);
                    while ($row = mysqli_fetch_array($result)) 
                    {
                        echo "<div class=\"list-group-item\">";

                          echo "<h4 class=\"list-group-item-heading\">" . $row['company'] . "<a href=\"buy.php?company=".$row['company']."\" class=\"btn btn-success btn-sm pull-right\">Buy</a></h4>";
                  
                          echo "<p>";
                            if($row['percent_change']>0)
                              echo "<p class=\"text-success\"><span class=\"badge\">&#x20B9;&nbsp;" . $row['curr_val'] . "</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src=\"assets/images/arrow_up_green.png\">&nbsp;&nbsp;" . $row['percent_change'] . "% </p>";
                            if($row['percent_change']<0)
                              echo "<p class=\"text-danger\"><span class=\"badge\">&#x20B9;&nbsp;" . $row['curr_val'] . "</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src=\"assets/images/arrow_down_red.png\">&nbsp;&nbsp;" . $row['percent_change'] . "% </p>";
                          echo "</p>";

                          echo "<h6 class=\"text-success\"><small>52 Week High &nbsp;</small>&#x20B9;&nbsp;" . $row['high'] . "</h6>";
                          echo "<h6 class=\"text-danger\"><small>52 Week Low &nbsp;</small>&#x20B9;&nbsp;" . $row['low'] . "</h6>";

                        echo "</div>";
                    }
                    mysqli_close($Con);
                  ?>

                </div>

            </div>
          </div>
      </div>

    	<div class="col-lg-4 col-md-4 col-xs-6">
          <!--Invoking the sell-alert.php-->
          <?php require('sell-alert.php'); ?>

          <hr>
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">Sell Shares</h3>
            </div>
            <div class="panel-body" style="height: 375px;overflow-y: scroll;">
              <div class="list-group">
                <?php
                  include("db_conn.php");
                  $trader_id  = substr($_SESSION['trader_id'],2);
                  $stmt = "SELECT * FROM asset_list WHERE tr_id='".$trader_id."'";
                  $result = mysqli_query($Con,$stmt);
                  while ($row = mysqli_fetch_array($result)) 
                  {
                    echo "<div class=\"list-group-item\">";
                      echo "<h4 class=\"list-group-item-heading\">" . $row['company'] . "<a href=\"sell.php?company=" . $row['company'] . "\" class=\"btn btn-danger btn-sm pull-right\">Sell</a></h4>";
                             
                      $query = "SELECT * FROM stocks_val WHERE company='".$row['company']."'";
                      $res = mysqli_query($Con,$query);
                      while($r = mysqli_fetch_array($res))
                      {
                        if($r['percent_change']>0){
                          echo "<p class=\"text-success\">";
                            echo "<span class=\"badge\">&#x20B9;&nbsp;" . $r['curr_val'] . "</span>&nbsp;&nbsp;&nbsp;&nbsp;";
                            echo "<img src=\"assets/images/arrow_up_green.png\">&nbsp;" . $r['percent_change'];
                          echo "</p>";
                        }elseif($r['percent_change']<0){
                          echo "<p class=\"text-danger\">";
                            echo "<span class=\"badge\">&#x20B9;&nbsp;" . $r['curr_val'] . "</span>&nbsp;&nbsp;&nbsp;&nbsp;";
                            echo "<img src=\"assets/images/arrow_down_red.png\">&nbsp;" . $r['percent_change'];
                          echo "</p>";
                        }

                        echo "<h6 class=\"text-success\"><small>52 Week high &nbsp;</small>&#x20B9;&nbsp;" . $r['high'] . "</h6>";
                        echo "<h6 class=\"text-danger\"><small>52 Week low &nbsp;</small>&#x20B9;&nbsp;" . $r['low'] . "</h6>";

                      }
                    echo "</div>";
                  }
                  mysqli_close($Con);
                ?>
              </div>
              
            </div>
          </div>
        </div>
  	  
  	  </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/modal.js"></script>
    <script src="assets/js/popover.js"></script>
    <script src="assets/js/tooltip.js"></script>
    <script src="assets/js/docs.min.js"></script>
  </body>
</html>
