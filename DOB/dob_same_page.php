<?php

	$dob = "";
	if (isset($_POST['submit'])) {
		$dob = $_POST['dob'];
		echo $dob;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>DOB Form Submission</title>
</head>
<body>

	<form method="POST" action="">
		
		<fieldset>
			<legend>
				<h3>DATE OF BIRTH</h3>
			</legend>
			<input type="DATE" name="dob" value=""> 
			<?php 
				if (isset($_POST['submit']) && $dob == "") {
					echo "null value!!";}
			?>
			<hr>
			<input type="submit" name="submit" value="Submit">
			<br><br>
		</fieldset>
	</form>
</body>
</html>