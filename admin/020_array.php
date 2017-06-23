<?php 
  /*多维数组是指包含一个或者多个数组的数组
    PHP能够理解二 三 四级甚至更多级数组,不过超过三级深的数组大多数人难以管理
    数组的需要维度指示您需要选择元素的索引数
    对于二维数组,您需要两个索引来选取元素
    对于三维数组您需要三个来选取元素


    php 二维数组

*/
    $car = array (
    	array("Vo",22,18),
    	array("BMW",2,18),
    	array("Saab",22,8),
    	array("Land Rover",2,1),
    	);
    echo $car[0][0]."库存:".$car[0][1]."销量:".$car[0][2]."<br>";

 ?>
 <?php 
 		for ($row=0; $row < 4; $row++) { 
 			echo "<p><b>Row number $ row </b></p>";
 			echo "<ul>";
 			for ($col =0; $col  < 3; $col ++) { 
 				echo "<li>".$car[$row][$col]."</li>";
 			}
 			echo "<ul>";
 		}


  ?>