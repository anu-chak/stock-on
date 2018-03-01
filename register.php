<?php

include('db_conn.php');

$name     =   $_POST['inputName'];
$password =   md5($_POST['inputPassword']);
$college  =   $_POST['inputCollege'];
$contact  =   $_POST['inputContact'];
$email    =   $_POST['inputEmail'];
$cash     =   '100000';
$networth =   $cash;
$ip 	  =	  $_SERVER['REMOTE_ADDR'];

$stmt	  =   "INSERT INTO traderlist (tr_name, tr_password, tr_college, tr_contact, tr_email, tr_networth, tr_cash, tr_ip) 
               VALUES ('$name', '$password', '$college', '$contact', '$email', '$networth', '$cash', '$ip')";
$res      =   mysqli_query($Con,$stmt);
                  

  $insertid=0;
  if($res)
  {
      $insertid = mysqli_insert_id($Con);
  }
  if ($insertid > 0)
      {
          header("Location:index.php?trid=".$insertid);
      }
  else
      {
          header("Location:index.php?trid=0");
      }

?>