<!DOCTYPE html>
<html>
<head>
	<title>欢迎</title>
</head>
<body>

	Welcome <?php 
	/**
     * 1. 在处理PHP表单提交时请关注安全,对表单提交适当的安全验证对于防止黑客攻击 和垃圾邮件十分重要
     */
	echo $_POST['name']; ?><br>
	Your email address is :<?php echo $_POST['email']; ?>
</body>
</html>