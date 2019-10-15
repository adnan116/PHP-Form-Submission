<?php

	$name = "";
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		echo $name;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Name Form Submission</title>
</head>
<body>

	<form method="POST" action="">
		
		<fieldset>
			<legend>
				<h3>NAME</h3>
			</legend>
			<input type="text" name="name" 
			value="<?php 
						if (isset($_POST['submit'])) {
							$name = $_POST['name'];
							echo $name;
					}?>"> 
			<?php 
				if (isset($_POST['submit']) && $name == "") {
					echo "null value!!";}?>
			<hr>
			<input type="submit" name="submit" value="Submit">
			<br><br>
		</fieldset>
	</form>
</body>
</html>