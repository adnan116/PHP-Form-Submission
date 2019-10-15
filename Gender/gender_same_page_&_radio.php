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

<!DOCTYPE html>
<html>
<head>
	<title>Gender Form Submission</title>
</head>
<body>

	<form method="POST" action="">
		
		<fieldset>
			<legend>
				<h3>GENDER</h3>
			</legend>
			<input type="radio" name="gender" value="Male" <?php if ($gender == 'Male') {echo 'checked';} ?>>Male
			<input type="radio" name="gender" value="Female" <?php if ($gender == 'Female') {echo 'checked';} ?>>Female
			<input type="radio" name="gender" value="Other" <?php if ($gender == 'Other') {echo 'checked';} ?>>Other
			<hr>
			<input type="submit" name="submit" value="Submit">
			<br><br>
		</fieldset>
	</form>
</body>
</html>