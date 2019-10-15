<?php

	$dob = "";
	if (isset($_POST['submit'])) {
		$dob = $_POST['dob'];
		if ($dob == "") {
			echo "null value";
		}
		else{
			echo $dob;
		}

	}

?>