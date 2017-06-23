<?php 
	
	echo "Today is ".date("Y/m/d")."<br>";
	echo "Today is ".date("Y.m.d")."<br>";
	echo "Today is ".date("Y-m-d")."<br>";
	echo "Today is ".date("I")."<br>";

	/*
	  1. h - 带有首位0的12小时小时格式
	  2. i - 带有首位0的分钟格式
	  3. s - 带有首位0的秒(00 - 59 )
	  4. a - 带有(am  pm )
	**/

	//获得时区
	date_default_timezone_get("Asia/Shanghai"); 
	echo "当前时间 ".date("h:i:sa")."<br>";

	//创建时间
	$makeDate = mktime(1,12,23,3,13,2012);
	echo "创建日期 ".date("Y-m-d h:i:sa",$makeDate)."<br>";

    //使用字符串创建时间 strtotime 


    // 输出 距离某日的天数
    $date1 = strtotime("December 31");
    $date2 = ceil(($date1 - time())/60/60/24);

    echo "距离12月31日还有:".$date2."天"."<br>";


 ?>

php 提示 - 自动版权年份
©  2010-<?php echo date("Y")?> 

