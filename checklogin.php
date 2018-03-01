<?php
    //Login Check
	session_start();
    if (isset($_SERVER['HTTP_REFERER'])) {

    }else{
      header('Location:index.php');
    }
?>