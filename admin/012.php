<!DOCTYPE html>
<html>
<head>
	<title>数组排序</title>
</head>
<body>
<?php 	
	$cars  = array("vo","BMW","SAA");
	sort($cars);

	echo($cars);
	$numbers = array(1,2,3,4,5,7,8,0);
	echo($numbers);

	/** 数组排序*/
	/**
	1. sort()  - 升序对数组排序
	2. rsort() - 降序
	3. asort() - 根据值 以升序对数组进行排序
	4. ksort() - 根据键 以升序
	5. arsort() - 根据值 以降序
	6. krsort() - 根据键 以降序
	*/
 ?>
</body>
</html>