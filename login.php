<?php
	
	include('db_conn.php');

	$trader_id	 = 		$_POST['inputTraderId'];
	$password 	 = 	md5($_POST['inputPassword']);

	$tr_id 	 	 =	substr($trader_id, 2);

	$stmt = "SELECT * FROM traderlist WHERE tr_id='". $tr_id ."'" . " AND tr_password='". $password ."'";
	$result = mysqli_query($Con,$stmt);
	$flag= 0;

	while ($row = mysqli_fetch_array($result)) 
	{
		$query	= "UPDATE traderlist SET tr_ip ='". $_SERVER['REMOTE_ADDR'] ."' WHERE tr_id='".$tr_id."'";
		mysqli_query($Con,$query);
		session_start();
		$_SESSION['trader_id'] 	     		= 	"TR".$row['tr_id'];
	    $_SESSION['trader_name'] 	    	= 	$row['tr_name'];
		$_SESSION['trader_email'] 	     	= 	$row['tr_email'];
	    $_SESSION['trader_college'] 	    = 	$row['tr_college'];
	    $_SESSION['trader_networth'] 	    = 	$row['tr_networth'];
		$_SESSION['trader_cash']   		    =   $row['tr_cash'];
		$flag=1;
	    header("Location:comingsoon/index.html");
	}
	
	if($flag==0)
		header("Location:index.php?login=0");
?>