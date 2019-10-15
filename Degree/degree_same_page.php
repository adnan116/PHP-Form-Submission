<?php  
	
	$option[] = "";
	if (isset($_POST['submit'])) {
		if (empty($_POST['option'])) {
			echo "null value!!";
		}
		else{
			$option = $_POST['option'];
			for ($i=0; $i < count($option); $i++) { 
				echo $option[$i]."<br>";
			}
		}
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Degree Form Submission</title>
</head>
<body>

	<form method="POST" action="">

		<fieldset>
			<legend>
				<h3>DEGREE</h3>
			</legend>
			<input type="checkbox" name="option[]" value="SSC">SSC
			<input type="checkbox" name="option[]" value="HSC">HSC
			<input type="checkbox" name="option[]" value="BSc">BSc
			<input type="checkbox" name="option[]" value="MSc">MSc
			<hr>
			<input type="submit" name="submit" value="Submit">
			<br><br>
		</fieldset>
		
	</form>

</body>
</html>