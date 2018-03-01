<?php
   $trid =  $_GET['trid'];
   $mail =  $_GET['mail'];

   $to = $mail;
   $subject = "Stock On 2015 : Activate your account";
   $message = "<h2>Click the link below to Activate your Trader account</h2>";
   $message .= "<a href=\"http://stockon.srijanju.in/confirmaccount.php?id=" . $trid;
   $header = "From:swapnildey94@gmail.com \r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true )
   {
      header("Location:confirmaccount.php?mail=sent");
   }
   else
   {
      header("Location:confirmaccount.php?mail=notsent");
   }
?>