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
            <li><a href="index.php">Home</a></li>
            <li><a href="#rules">Rules</a></li>
            <li><a href="leaderboard.php">Leaderboard</a></li>
            <li><a href="stockmarket.php">Stock Market</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase" role="main">
	  
  	  <div class="row">

        <div class="col-lg-1 col-md-1 col-xs-1"></div>

    		<div class="col-lg-4 col-md-4 col-xs-4">
          <h4><b>Login</b></h4>
          <form class="form-horizontal" role="form" method="POST" action="login.php">
            <div class="form-group">
              <div class="col-sm-10">
                <input type="text" class="form-control" name="inputTraderId" placeholder="Trader ID">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10">
                <input type="password" class="form-control" name="inputPassword" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
              </div>
            </div>
          </form>  
        </div>

    		<div class="col-lg-2 col-md-2 col-xs-6"></div>

    		<div class="col-lg-4 col-md-4 col-xs-4">
          <div class="modal fade" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title text-success">Registration Successful</h4>
                </div>
                <div class="modal-body">
                  <table class="table">
                    <tr>
                      <td><b>Trader ID:</b></td>
                      <td>TR1</td>
                    </tr>
                    <tr>
                      <td><b>Trader Name:</b></td>
                      <td>Swapnil Dey</td>
                    </tr>
                    <tr>
                      <td><b>Trader College:</b></td>
                      <td>Jadavpur University</td>
                    </tr>
                    <tr>
                      <td><b>Trader Contact:</b></td>
                      <td>+91 9477346994</td>
                    </tr>
                  </table>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
        </div>

        <div class="col-lg-1 col-md-1 col-xs-1"></div>
  	  
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
    <script src="assets/js/modal.js"></script>
    <script type="text/javascript">
      $(window).load(function(){
          $('#myModal').modal('show');
      });
    </script>
  </body>
</html>
