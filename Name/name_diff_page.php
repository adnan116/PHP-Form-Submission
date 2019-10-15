<?php

	$name = "";
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		if ($name == "") {
			echo "null value";
		}
		else{
			echo $name;
		}

	}

?>