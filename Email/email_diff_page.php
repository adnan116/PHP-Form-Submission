<?php

	$email = "";
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		if ($email == "") {
			echo "null value";
		}
		else{
			echo $email;
		}

	}

?>