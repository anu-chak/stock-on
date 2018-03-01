<?php
	$MyServer = "localhost";
	$MyUser   = "root";
	$MyPassword = "";
	$MyDatabase = "stock_on";
	$Con  = mysqli_connect("$MyServer","$MyUser","$MyPassword",$MyDatabase);
	//mysql_select_db("$MyDatabase",$Con) or die("mysql server could not be connected ".mysql_error());

	//$MyServer = "67.227.144.7";
	//$MyUser   = "srijanju_stockon";
	//$MyPassword = "Stockon123#@";
	//$MyDatabase = "srijanju_stockon";
	//$Con  = mysqli_connect("$MyServer","$MyUser","$MyPassword",$MyDatabase);
?>