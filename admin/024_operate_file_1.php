<?php 

		$myfile = fopen("022_operate_file_test.txt", "w") or die ("uable to open file !");

        $txt = "我是王光前!";
        fwrite($myfile, $txt);
        fclose($myfile);
        // $output = fopen("022_operate_file_test.txt", "w") or die ("uable to open file !");
		// echo fread($output, filesize("022_operate_file_test.txt"));
        // fclose($output);

        /** PHP 文件权限 (Apache中设置)*/

 ?>