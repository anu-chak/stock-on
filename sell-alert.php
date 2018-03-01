<?php
	if (isset($_GET['sell'])) {
		if ($_GET['sell'] == 1) {
				echo "<div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">";
			      echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>";
			      echo "<h4>Shares sold successfully</h4>";
			      echo "<p>Desired number of shares sold. Now, you may proceed to other transactions.</p>";
			    echo "</div>";
		}else if ($_GET['sell'] == 0) {
				echo "<div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">";
			      echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>";
			      echo "<h4>Shares couldn't be sold</h4>";
			      echo "<p>Desired number of shares couldn't be sold because you entered improper number of shares.</p>";
			    echo "</div>";
			}
		}
?>