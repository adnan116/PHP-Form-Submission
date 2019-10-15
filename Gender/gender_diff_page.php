<?php

	$gender = "";
	if (isset($_POST['submit'])) {
		if (empty($_POST['gender'])) {
			echo "null value!!";
		}
		else{
			$gender = $_POST['gender'];
			echo $gender;
		}
	}

?>