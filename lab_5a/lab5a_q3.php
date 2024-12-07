<!DOCTYPE html>
<html lang="en">
<head>
    <title>lab5a Q3</title>
</head>
        <body>
		    <h1>Calculate Area of a Rectangle</h1>
			<form method="POST" action="">
			    <label for="length">Enter Length:</label>
				<input type="number" name="length" id="length required>
				<br></br>
				
				<label for="width">Enter width:</label>
				<input type="number" name="width" id="width" required>
				<br>
				
				<button type="submit">Submit</button>
			</form>
		<?php
		function calculatearea($length,$width){
		return $length*$width;
		}
		
		if($_SERVER["REQUEST_METHOD"]=="POST"){
		$length=$_POST['length'];
		$width=$_POST['width'];
		
		if($length>0 && $width>0){
		$area=calculatearea($length,$width);
		
		echo "<h2> Results:</h2>";
		echo "<p> Length: $length</p>";
		echo "<p> width: $width</p>";
		echo "<p><strong> Area:$area</strong></p>";
		
		}else{
		echo "<p style='color:red;'>Please enter positive values for length and width.</p>";
	    }
	}
	
		?>
		</body>

</html>