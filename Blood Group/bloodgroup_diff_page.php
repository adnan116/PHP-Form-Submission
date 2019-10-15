<?php

	$blgrp = "";
	if (isset($_POST['submit'])) {
		$blgrp = $_POST['bg'];
		if ($blgrp == "") {
			echo "null value!!";
		}
		else{
			echo $blgrp;
		}
	}

?>