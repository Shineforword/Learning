<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$d  = date("D");

	if ($d == "Fri")
		echo "Have a nice weekend! ";
	elseif ($d == "Sun") 
		echo "Have a good day ! ";
	else
		echo "Have a nice day !";
 ?>
</body>
</html>