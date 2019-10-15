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
			  <option value="" <?php if($blgrp==''){echo "selected";} ?>></option>
			  <option value="A+" <?php if($blgrp=='A+'){echo "selected";} ?>>A+</option>
			  <option value="A-" <?php if($blgrp=='A-'){echo "selected";} ?>>A-</option>
			  <option value="B+" <?php if($blgrp=='B+'){echo "selected";} ?>>B+</option>
			  <option value="B-" <?php if($blgrp=='B-'){echo "selected";} ?>>B-</option>
			  <option value="AB+" <?php if($blgrp=='AB+'){echo "selected";} ?>>AB+</option>
			  <option value="AB-" <?php if($blgrp=='AB-'){echo "selected";} ?>>AB-</option>
			  <option value="O+" <?php if($blgrp=='O+'){echo "selected";} ?>>O+</option>
			  <option value="O-" <?php if($blgrp=='O-'){echo "selected";} ?>>O-</option>
			</select>
			<hr>
			<input type="submit" name="submit" value="Submit">
			<br><br>
		</fieldset>
		
	</form>

</body>
</html>