<html lang="en-ca">
	<head>
		<!-- Meta Data -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Favicon -->
	    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
	    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
	    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
	    <link rel="manifest" href="./fav_index/site.webmanifest" />
		<!-- Css style sheet -->
		<link rel="stylesheet"dfghj href="./css/style.css" />
		<title>Surface Area and Volume of a Cone</title>
	</headlm
	<body>
		<!-- Title, Info and image -->
		<center><?php 
			echo '<center><h1>Surface Area and Volume of a Cone</h1></center>';
			echo '<img src="./images/cone.gif" width="30%"/>';
			echo "<p><center>Fill out the text fields below and find out the surface area and volume of your cone, don't forget to put units!</center></p>"; 
		?>
		<!-- Textfields -->
		<form method = "post">   
			Radius of the base: <input type="number" name="Radius" step="0.1">   
			<br><br>   
			Height of the cone: <input type="number" name="Height" step="0.1">   
			<br><br>
			Unit of Measurement: <input type="text" name="Unit"> <br>   
			<br><br>
			<!-- Button -->
			<input type = "submit" name = "enter" value="Calculate">    
			<br><br>
		<!-- Variables and Calculations -->
		<?php  
			if(isset($_POST['enter'])) {  
				$radius = $_POST['Radius'];   
				$height = $_POST['Height']; 
				$unit = $_POST['Unit'];
				$surfaceArea = pi() * $radius * ($radius + sqrt($height ** 2 + $radius ** 2));
				$surfaceArea = round($surfaceArea, 2);
				$volume = 1/3 * (pi() * ($radius ** 2) * $height);
				$volume = round($volume, 2);
				echo "<br><br>The surface area of the cone is " . $surfaceArea . $unit . '²';
				echo "<br><br>The volume of the cone is " . $volume . $unit . "³";
			}
		?>
	</body>
</html>