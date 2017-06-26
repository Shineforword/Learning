<?php 
		/*
		通过使用FILER_CALLBACK过滤器 可以调用自定义函数,把他作为一个过滤器使用,
		这样我们拥有数据过滤的完全控制权

		你可以创建自定义函数,也可以使用已有的PHP函数
		规定您准备用到过滤器的放阿飞,与规定选项的方法相同
		**/ 
		function convertSpace($string){
				return str_replace("_"," ",$string);
		};

		$string = "al_is_a_good_dog !";

		echo filter_var($string ,FILTER_CALLBACK,array("options" => "convertSpace"));

		/*
		1.创建一个把"_"替换成" "的函数
		2.调用filter_var()函数, 他的参数是FILTER_CALLBACK 过滤器以及包含我们的函数数组.
		**/

 ?>