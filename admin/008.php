<!DOCTYPE html>
<html>
<head>
	<title>默认参数值</title>
</head>
<body>
<?php  

	 function setHeight($minHeight = 50)
	{
		echo "The height is : $minHeight <br>" ;
	}

	setHeight(300);
	setHeight();
	setHeight(20);

?>
</body>
</html>