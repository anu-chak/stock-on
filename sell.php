<script type = "text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>

<?php
  require_once('checklogin.php');
  $company_name = $_GET['company'];
  $_SESSION['company']= $company_name;
  $trader_id= substr($_SESSION['trader_id'],2);
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
            <li><a href="home.php">Home</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <!--===========================================================================-->
  
  <div class="container theme-showcase" role="main">
    <div class="row">
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
      
    <div class="col-lg-3 col-md-3 col-xs-5"></div>
    <div class="col-lg-5 col-md-5 col-xs-7">
          <?php 
            include("db_conn.php");
            $stmt= "SELECT * FROM stocks_val WHERE company='".$_SESSION['company']."'";
            $result= mysqli_query($Con,$stmt);
            while ($row = mysqli_fetch_array($result)) 
            {
              $curr_val = $row['curr_val'];
            }
            $stmt= "SELECT * FROM asset_list WHERE company='".$_SESSION['company']."' AND company='".$_SESSION['company']."'";
            $result= mysqli_query($Con,$stmt);
            while ($row = mysqli_fetch_array($result)) 
            {
              $num_shares = $row['num_shares'];
              $_SESSION['total_shares'] = $num_shares;
            }
            mysqli_close($Con);
          ?>
          <hr>
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"> Sell from <?php echo $num_shares ?> Stocks of <?php echo $_SESSION['company'] ?> at Rs. <?php echo $curr_val ?></h3>
            </div>
          <form class="form-horizontal well" role="form" method="POST" action="sellshares.php">
            <fieldset>
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="numShares" placeholder="Enter number of shares" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-1 col-md-1 col-xs-2">
                  <button type="submit" class="btn btn-danger">Sell</button>
                </div>
              </div>
            </fieldset>
          </form>  
          </div>
      </div>
    </div>

      <hr>
      <div class="footer">
        <div class="col-lg-4 col-md-4 col-xs-6"></div>
        <div class="col-lg-4 col-md-4 col-xs-6 text-center">&copy; StockOn 2015</div>
        <div class="col-lg-4 col-md-4 col-xs-6"></div>
      </div>
  </div> <!--container-->
  
  
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <script src="countdown.js"></script>
  </body>
</html>
