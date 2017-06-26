<?php 
/*
		php过滤器用于验证和过滤来自非安全来源的数据,比如用户的输入
		验证和过滤用户输入数据或自定义数据是任何web应用程序的重要组成部分
		设计php的过滤扩展的目的是数据过滤更轻松快捷.

		为什么使用过滤器,
		几乎所有的web程序都依赖外部的输入,这些数据通常来自用户或其他应用程序,比如web服务,通过使用过滤器
		你能够确保程序后的正确的输入类型

		注意: 你应该始终对外部数据进行过滤, 输入过滤是最重要的安全课题之一

		什么是外部数据
		1.来自表单的数据
		2.Cookies
		3.服务器变量
		4.数据库查询结果

**/
/*
		函数和过滤器 
		如果需要过滤变量,请使用下面的过滤器函数之一
		1.filter_var() - 通过制定一个过滤器来过滤单一变量
		2.filter_var_array() - 通过相同的或不同的过滤器来过滤多变量
		3.filter_input 获取一个输入变量,并对他进行过滤
		4.filter_input_array 获取多个输入变量 并通过相同的或不同的过滤器来对他们进行过滤
**/

		$int = 123 ;
		if (!filter_var($int, FILTER_VALIDATE_INT)) {
			echo "integer is not vaild";
		}else
		{
			echo "integer is vaild ";
		}
/*
		上面使用了 FILTER_VALIDATE_INT 过滤器过滤变量
**/



/*
		有两种过滤器 Validating 和Sanitizing 

		validating 过滤
		1.用于验证用户输入
		2.严格的格式规则(比如URL E-mail)
		3.如果成功返回预期 不成功返回 false

		Sanitizing 
		1.用于允许或禁止字符串中指定的字符
		2.无数据格式规则
		3.使用返回字符串
**/
/*
		选项和标志 
		选项和标志用向指定的过滤器中添加额外的过滤选项
		不同的过滤器有不同的选项和标志
**/
		$var = 300 ;
		$int_options = array(
			"options" => array(
				"min_range"=>0,
				"max_range"=>256;
				)
			)
		if (!filter_var($var,FILTER_VALIDATE_INT,$int_options)) {
			echo "integer is not valid";
		}else
		{
			echo "integer is valid";
		}
/*
		就像上面代码一样,选项必须加入一个名为"options"的相关数组中,如果使用标志,则不需在数组内

**/
/*		验证输入
		1.查找我们正在查找的输入数据
		2,使用filter_input() 函数过滤数据
		3.在下面的例子中,输入变量"email"被传送到php页面
**/
		if (!filter_has_var(INPUT_GET, "email")) {
			echo " inputtype does not exist";
		}else
		{
			if (!filter_input(INPUT_GET, "email",FILTER_VALIDATE_EMAIL)) {
				echo "E-mail is not vaild";

				}else{
				echo "E-mail is vaild";
				}
		}
/*
		上面通过一个"GET" 方法 传送输入的变量email
		1.检测师傅存在"GET"类型的"email"输入变量
		2.如果存在检测他是否是有效的邮件地址
**/

/*
		净化输入
		让我们试着清理一下从表单传来的URL 
		1.确认输入数据存在
		2.净化数据
		3.
**/
		if (!filter_has_var(INPUT_POST, "url") {
			echo "inputtype does not exist";
		}else
		{
			$url = filter_input(INPUT_POST, "url",FILTER_SANITIZE_URL);
		}

/*
		上面
		1. 检测"POST"类型中的"url"输入变量
		2.如果存在此输入变量,对其净化,删除非法字符 ,并将其存入$url中
		假设: "http:www.W3Schoo非法l.cn/"

		净化: "http:www.W3School.cn"
**/


/*
		过滤多个输入
		表单通常有多个输入字段组成,为了避免对filer_var 或者filter_input 重复调用 
		我们可以使用filer_var_array 或 the_filer_input_array函数
**/


		$filters = array(
			"name" => array(
				"filter" = FILTER_SANITIZE_STRING
				),
			"age"  => array(
				"filter" = FILTER_VALIDATE_INT,
				"options" => array(
					"min_range" = 1 ,
					"max_range" =>120
				)
				),
			"email" => FILTER_VALIDATE_EMAIL,
		)

		$result = filter_input_array(INPUT_GET,$filters);

		if ($result["age"]) {
			echo "Age must br a number between 1 - 120 ";
		}else if ($result["email"]) {
			echo "E-mail is not  vaild ";
		}else{
			echo "User input is vaild";
		}
/*
		1.设置了一个数组, 其中包含输入变量的名称,以及用于指定输入变量的过滤器
		2.调用filter_input_array函数,参数包括get输入的变量及刚才输入的数组
		3.检测$result 变量中的age 和 email 变量有没有非法的输入

		存在非法输入,

		第二个参数可以是数组也可以是单一过滤器ID
		
**/










 
























 ?>