<!DOCTYPE html>
<html>
<head>
	<title>php 超全局变量</title>
</head>
<body>
<br> 
  <br>PHP中的许多预定义变量都是"超全局的",这意味着他们在一个脚本中全部作用域中都可以使用 <br>
  <br>在函数或方法中无需执行 global $variable 就可以访问他们 <br>
  <br>1.$GLOBALS<br>
  <br>2.$_SERVER<br>
  <br>3.$_REQUEST <br>
  <br>4._POST <br>
  <br>5._GET <br>
  <br>6._FILES <br>
  <br>7._ENV <br>
  <br>8._COOKIE <br>
  <br>9._SESSION <br>

  <br>1.$GLOBALS <br>
  <br>$GLOBALS 这种全局变量用于PHP脚本中的任意位置访问全局变量(从函数或方法中均可)<br>
  <br>php 在名为$GLOBALS[index] 的数组中 <br>
  <br> 储存了所有的全局变量 ,变量的名字就是数组的键 <br>

  <br>php  $_SERVER 这种超全局变量保存关于报头路径和脚本的位置信息 <br>

 <br>
<?php 
	$x = 75 ;
    $y = 25 ;

    function additions(){
    	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    additions();
    echo $z;
    echo "<br>";
    echo "访问全局的变量 并计算函数的最终值";
	echo "<br>";
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo $_SERVER['HTTP_HOST'];
	echo "<br>";
	echo $_SERVER['HTTP_REFERER'];
	echo "<br>";
	echo $_SERVER['HTTP_USER_AGRENT'];
	echo "<br>";
	echo $_SERVER['SCRIPT_NAME'];
	echo "<br>";
 ?>

</body>

</html>