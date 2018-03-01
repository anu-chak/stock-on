<?php
	if (isset($_GET['buy'])) {
		if ($_GET['buy'] == 1) {
				echo "<div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">";
			      echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>";
			      echo "<h4>Shares bought successfully</h4>";
			      echo "<p>Desired number of shares bought. Now, you may proceed to other transactions.</p>";
			    echo "</div>";
		}else if ($_GET['buy'] == 0) {
				echo "<div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">";
			      echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>";
			      echo "<h4>Shares couldn't be bought</h4>";
			      echo "<p>Desired number of shares couldn't be bought due to low cash in hand. Please try again with lesser number of shares.</p>";
			    echo "</div>";
			}
		}
?>