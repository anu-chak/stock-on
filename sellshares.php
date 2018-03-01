<?php

require_once('checklogin.php');
include('db_conn.php');

$company		=	$_SESSION['company'];
$num_shares     =   $_POST['numShares'];
$total_shares	=	$_SESSION['total_shares'];
$tr_id     		=   substr($_SESSION['trader_id'],2);
$cash_in_hand	=   $_SESSION['trader_cash'];
$curr_shareval  =	0;

if ($num_shares <= $total_shares) {

	$stmt			= "SELECT * FROM stocks_val WHERE company='".$company."'";
	$result			= mysqli_query($Con,$stmt);
	while ($row = mysqli_fetch_array($result)) 
	{
		$curr_shareval = $row['curr_val'];
	}

	if ($num_shares < $total_shares) {
		
		$cash_in_hand += $num_shares * $curr_shareval;
		$total_shares -= $num_shares;

		$query	= "UPDATE asset_list SET num_shares='". $total_shares ."' WHERE tr_id='".$tr_id."' AND company='".$company."'";
		mysqli_query($Con,$query);

		$stmt	=	"INSERT INTO transactions (tr_id,company,price,volume,mode) VALUES ('" . $tr_id . "','" . $company . "','" . $curr_shareval . "','" . $num_shares . "','sell')";
		mysqli_query($Con,$stmt);

	}elseif ($num_shares == $total_shares) {
		$cash_in_hand += $total_shares * $curr_shareval;
		
		$query	= "DELETE FROM asset_list WHERE tr_id='".$tr_id."' AND company='".$company."'";
		mysqli_query($Con,$query);

		$stmt	=	"INSERT INTO transactions (tr_id,company,price,volume,mode) VALUES ('" . $tr_id . "','" . $company . "','" . $curr_shareval . "','" . $total_shares . "','sell')";
		mysqli_query($Con,$stmt);
	}
	
	$_SESSION['trader_cash']	=   $cash_in_hand;

	$query	= "UPDATE traderlist SET tr_cash='".$cash_in_hand."' WHERE tr_id='".$tr_id."'";
	mysqli_query($Con,$query);
	
	header("Location:home.php?sell=1");

}else{

	header("Location:home.php?sell=0");
}


mysqli_close($Con);
?>