<!DOCTYPE html>
<html>
<head>
	<title>PHP $_REQUEST </title>
</head>
<body>
<br>$_REQUEST 是用来收集HTML表单提交数据的<br>
<br>下面这个例子展示了一个包含输入字段及提交按钮的表单,当用户通过提交按钮来提交表单数据时<br>
<br>表单数据将发送到form 标签的action中指定脚本文件 <br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	 Name:	<input type="text" name="fname">
 			<input type="submit">	
</form>
<?php 
	$name = $_ERQUEST['fname'];
	echo $name;
 ?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<br>$_POST 广泛用于搜集提交 method = "post" 的HTML数据<br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	Name:<input type="text" name="fname">
	<input type="submit">
</form>
<?php 
	$name = $_POST['fname'];
	echo  $name;
 ?>

 <br>$_GET 也可以用于搜集提交HTML表单信息(method = 'get') 之后的表单数据<br>
 <a href="014_test_get.php?subject=PHP&web= W3School.com.cn">测试$GET</a>
</body>
</html>