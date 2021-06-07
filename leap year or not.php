<!DOCTYPE html>
<html>
<head>
	<title>leap year or not</title>
</head>
<body>
	<?php
	$val = $_GET["value"];
	if($val % 400 == 0){
		print"<h3>It's Leap Year</h3>";
	}elseif ($val % 100 == 0) {
		print"<h3>It's not a Leap Year</h3>";
	}elseif ($val % 4 == 0) {
		print"<h3>It's Leap Year</h3>";
	}else{
		print"<h3>It's not a Leap Year</h3>";
	}


	?>

</body>
</html>