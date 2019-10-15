<?php

	$email = "";
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		echo $email;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email Form Submission</title>
</head>
<body>

	<form method="POST" action="">
		
		<fieldset>
			<legend>
				<h3>EMAIL</h3>
			</legend>
			<input type="text" name="email" 
			value="<?php 
						if (isset($_POST['submit'])) {
							$email = $_POST['email'];
							echo $email;
					}?>"> 
			<?php 
				if (isset($_POST['submit']) && $email == "") {
					echo "null value!!";}?>
			<hr>
			<input type="submit" name="submit" value="Submit">
			<br><br>
		</fieldset>
	</form>
</body>
</html>