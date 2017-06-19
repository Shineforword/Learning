<!DOCTYPE html>
<html>
<head>
	<title>GET VS POST </title>
</head>
<body>
	<br>GET 和POST 都是用来创建数组<br>
	<br> 其中的键是表单控件的名称 而值是来自于用户的数据<br>
	<br> GET 和 POST 被视作$_GET 和 _POST ,他们是超全局变量 <br>
	<br> 这意味着他们的访问无需考虑作用域 无需任何特殊代码 能够从任何函数类或文件访问他们<br>
	<br> _GET 是通过URL 参数传递到当前脚本的变量数组<br>
	<br>_POST 是通过HTTP POST 传递到当前脚本的变量数组<br>
	<br>何时使用GET <br>
	<br>GET 是明文 所有变量 和值都会显示在URL中<br>
	<br>GET 对于发送信息的数量也有限制 限制在2000个字符  GET 可用于发送非敏感数据(不可以使用GET 来发送密码或者其他敏感的信息)<br>
</body>
</html>