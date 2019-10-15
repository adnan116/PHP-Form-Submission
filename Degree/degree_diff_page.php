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
