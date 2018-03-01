<?php

	if (isset($_GET['trid'])) {
		if ($_GET['trid'] > 0) {
			echo "<div class=\"modal fade\" id=\"regModal\">";
	            echo "<div class=\"modal-dialog\">";
	              echo "<div class=\"modal-content\">";
	                echo "<div class=\"modal-header\">";
	                  echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>";
	                  echo "<h4 class=\"modal-title text-success\">Registration Successful</h4>";
	                echo "</div>";
	                echo "<div class=\"modal-body\">";
	                  	echo "<h4>Trader ID:  <div class=\"text-danger\">TR" . $_GET['trid'] . "</div></h4>";
	                  	echo "<p class=\"lead text-primary\">Please use the Trader ID and Your Password to Login</p>";
	                echo "</div>";
	              echo "</div>";
	            echo "</div>";
	          echo "</div>";
		}else{
			echo "<div class=\"modal fade\" id=\"regModal\">";
	            echo "<div class=\"modal-dialog\">";
	              echo "<div class=\"modal-content\">";
	                echo "<div class=\"modal-header\">";
	                  echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>";
	                  echo "<h4 class=\"modal-title text-danger\">Registration Failed</h4>";
	                echo "</div>";
	                echo "<div class=\"modal-body\">";
	                  	echo "<p class=\"lead text-primary\">Please try again!</p>";
	                echo "</div>";
	              echo "</div>";
	            echo "</div>";
	          echo "</div>";
		}
	}

?>