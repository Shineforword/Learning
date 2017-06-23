<?php 

		$myfile = fopen("022_operate_file_test.txt", "w") or die ("uable to open file !");

        $text = "我是王光前!";
        fwrite("022_operate_file_test.txt", $text);
        fclose("022_operate_file_test.txt");
        $output = fopen("022_operate_file_test.txt", "w") or die ("uable to open file !");
        echo fread($output);
        fclose("022_operate_file_test.txt");

        /** PHP 文件权限 (Apache中设置)*/

 ?>