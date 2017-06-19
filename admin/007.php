<!DOCTYPE html>
<html>
<head>
	<title>函数参数</title>
</head>
<body>
<?<?php 
function familyName($fname){
	echo "$fname Zhang.<br>";
}

familyName("Li");
familyName("Hong");
familyName("Tao");
familyName("Xiao Mei");
familyName("Jian");

function familyNameSecond($fname ,$year){
	echo "$fname Zhang.born in $year <br>";
}

familyNameSecond("wang","1991");

 ?>

</body>
</html>