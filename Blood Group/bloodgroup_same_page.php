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

<!DOCTYPE html>
<html>
<head>
	<title>Blood Group Form Submission</title>
</head>
<body>

	<form method="POST" action="">

		<fieldset>
			<legend>
				<h3>BLOOD GROUP</h3>
			</legend>
			<select name="bg">
			  <option value=""></option>
			  <option value="A+">A+</option>
			  <option value="A-">A-</option>
			  <option value="B+">B+</option>
			  <option value="B-">B-</option>
			  <option value="AB+">AB+</option>
			  <option value="AB-">AB-</option>
			  <option value="O+">O+</option>
			  <option value="O-">O-</option>
			</select>
			<hr>
			<input type="submit" name="submit" value="Submit">
			<br><br>
		</fieldset>
		
	</form>

</body>
</html>