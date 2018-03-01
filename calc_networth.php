<?php

include('db_conn.php');

$tr_id     		=   substr($_SESSION['trader_id'],2);
$shares_worth	=	0;

$stmt	=	"SELECT tr_cash FROM traderlist WHERE tr_id='" . $tr_id . "'";
$result	=	mysqli_query($Con,$stmt);

while ($row = mysqli_fetch_array($result)) {
	$cash_in_hand	=	$row['tr_cash'];
}

$stmt	=	"SELECT tr_cash FROM traderlist WHERE tr_id='" . $tr_id . "'";
$result	=	mysqli_query($Con,$stmt);

while ($row = mysqli_fetch_array($result)) {
	$cash_in_hand	=	$row['tr_cash'];
}

$stmt	= 	"SELECT num_shares,curr_val FROM asset_list,stocks_val WHERE tr_id='".$tr_id."' AND asset_list.company=stocks_val.company";
$result	=	mysqli_query($Con,$stmt);

while ($row	= mysqli_fetch_array($result)) {
	
	$shares_worth += $row['num_shares'] * $row['curr_val'];
}

$networth	=	$shares_worth + $cash_in_hand;

$stmt	= "UPDATE traderlist SET tr_networth='".$networth."' WHERE tr_id='".$tr_id."'";
mysqli_query($Con,$stmt);

$_SESSION['trader_networth']	=	$networth;

mysqli_close($Con);
?>