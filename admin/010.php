<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

	/** 数组:能够在单一变量名中储存多个值*/
	//array();
	/**
	1.索引数组 带有数字索引的数组
	2.关联数组 带有指定键的数组
	3.多维数组 包含一个或多个数组的数组
	*/
	$cars =	array("Volvo","BMW","SAAB");
	echo count($cars);
			echo "<br>";
	$arrlength = count($cars);

	for($i = 0 ; $i < $arrlength ; $i ++){
		echo $cars[$i];
		echo "<br>";
	}

 ?>

</body>
</html>