<?php 
	//设置编码格式
	// header('Content-type:textml;charset=utf-8');
	$dbhost = 'localhost';          // mysql服务器主机地址
	$dbuser = 'root';               // mysql用户名
	$dbpass = 'mengxiang';          // mysql用户名密码
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
    	die('连接失败: ' . mysqli_error($conn));

	}else{
		echo "连接成功";
	}

	/** 服务器 用户名 密码 数据库 */
	$mysqli = new mysqli("localhost","root", "mengxiang" , "Learn");

	if (mysqli_connect_errno()) {
		echo "连接数据库失败".mysqli_connect_error();
		$mysqli = null;
		exit;
	}
	echo "连接数据库成功!<br/>";

	#获取数据库编码
	echo $mysqli -> character_set_name()."<br/>";

	#获取客户端信息
	echo $mysqli ->get_client_info()."<br/>";

	#执行插入和删除  更新语句
	#$sql = "insert into user_01 (user_name,user_sex,user_birthday,user_age) values ('wangqian','男','2015-12-02','26') ";

	#删除
	#$sql  = " delete from user_01  where user_name = 'qian' ";

	#更新
	$sql   = "update user_01 set user_name = 'wang' ,user_age = '100' where user_birthday = '2017-06-12' ";
	#执行sql语句
	$result = $mysqli ->query($sql);

	var_dump($result);

	if (!$result) {
		echo "sqli语句错误<br/>";
		echo "error".$mysqli->error. "|".$mysqli->error;
	}else{
		echo "操作数据成功..."."<br/>";
	}


 ?>