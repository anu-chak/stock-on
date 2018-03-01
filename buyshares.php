<?php

require_once('checklogin.php');
include('db_conn.php');

$company		=	$_SESSION['company'];
$num_shares     =   $_POST['numShares'];
$tr_id     		=   substr($_SESSION['trader_id'],2);
$networth	    =   $_SESSION['trader_networth'];
$cash_in_hand	=   $_SESSION['trader_cash'];
$curr_shareval  =	0;

$stmt			= "SELECT * FROM stocks_val WHERE company='".$company."'";
$result			= mysqli_query($Con,$stmt);
while ($row = mysqli_fetch_array($result)) 
{
	$curr_shareval = $row['curr_val'];
}

if($curr_shareval*$num_shares<$cash_in_hand)
{
	$stmt	=	"INSERT INTO transactions (tr_id,company,price,volume,mode) VALUES ('" . $tr_id . "','" . $company . "','" . $curr_shareval . "','" . $num_shares . "','buy')";
	mysqli_query($Con,$stmt);

	$stmt= "SELECT * FROM asset_list WHERE tr_id='".$tr_id."' AND company='".$company."'";
	$result= mysqli_query($Con,$stmt);
	
	if($row = mysqli_fetch_array($result))
	{
		$x= $row['num_shares'];
		$x= $x+$num_shares;
		$query	= "UPDATE asset_list SET num_shares='".$x."' WHERE tr_id='".$tr_id."' AND company='".$company."'";
		mysqli_query($Con,$query);
	}
	else
	{
		$sql	= "INSERT INTO asset_list (tr_id,company,num_shares) VALUES('".$tr_id."','".$company."','".$num_shares."')";
		mysqli_query($Con,$sql);
	}
	
	$stmt	= "SELECT num_shares,curr_val FROM asset_list,stocks_val WHERE tr_id='".$tr_id."' AND asset_list.company=stocks_val.company";
	$result	= mysqli_query($Con,$stmt);
	$networth	= 0;
	while ($row = mysqli_fetch_array($result)) 
	{
	    $networth= $networth+ $row['num_shares']*$row['curr_val'];
	}
	$cash_in_hand	= $cash_in_hand - $curr_shareval*$num_shares;
	$networth = $networth + $cash_in_hand;
	
	$_SESSION['trader_cash']   		    =   $cash_in_hand;
	$_SESSION['trader_networth'] 	    = 	$networth;
	$query	= "UPDATE traderlist SET tr_cash='".$cash_in_hand."',tr_networth='".$networth."' WHERE tr_id='".$tr_id."'";
	mysqli_query($Con,$query);
	header("Location:home.php?buy=1");
}
else
{
    header("Location:home.php?buy=0");
}
mysqli_close($Con);
?>