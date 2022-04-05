<html lang="en-ca">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Surface Area and Volume of a Cone</title>
	</head>
	<body>
		<center><?php 
			echo '<center><h1>Surface Area and Volume of a Cone</h1></center>';
			echo '<p><center>Fill in blanks below and find out the surface area and volume of a cone</center></p>'; 
		?>
		<form method = "post">   
			Radius of the base: <input type="number" name="Radius" step="0.1">   
			<br><br>   
			Height of the cone: <input type="number" name="Height" step="0.1">   
			<br><br>
			Unit of Measurement: <input type="text" name="Unit"> <br>   
			<br><br>
			<input type = "submit" name = "enter" value="Calculate">    
			<br><br>
		<?php  
			if(isset($_POST['enter'])) {  
		    		   
				$radius = $_POST['Radius'];   
				$height = $_POST['Height']; 
				$unit = $_POST['Unit'];
				$surfaceArea = pi() * $radius * ($radius + sqrt($height ** 2 + $radius ** 2));
				$surfaceArea = round($surfaceArea, 2);
				$volume = 1/3 + (pi() * ($radius ** 2) * $height);
				$volume = round($volume, 2);
				
			}
		?>
	</body>
</html>