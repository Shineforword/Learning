<?php 

		//PHP 操作文件 
		/**
			php 拥有多种函数可供创建读取上传以及编辑文件
			注意:谨慎操作文件
			常见错误;
			1.编辑错误的文件
			2.被垃圾数据填满硬盘
			3.意外删除文件内容

		*/

//php readfile()函数
/*
	readfile()函数读取文件,并把它写入输出缓冲

*/
		// echo readfile("022_operate_file_test.txt");
		$myfile = fopen("022_operate_file_test.txt","r") or die("uable to open file !");
		/** 文件读至末尾*/
		// echo fread($myfile, filesize("022_operate_file_test.txt"));
		// echo "<br>";
		// echo fgets($myfile);

		/** 输出单行直至末尾*/
		while (!feof($myfile)) {
			// echo fgets($myfile)."<br>";
			//输出单个字符直至末尾
			echo fgetc($myfile)."<br>";
		}

		fclose($myfile);


/*
	r 只读 文件指针在文件的开头开始
	w 只写 删除文件内容或创建一个新文件 如果他不存在,文件指针在文件的开头开始
	a 只写 文件中现有的数据会被保存,文件指针在文件的末尾开始,如果文件不存在创建新的文件,
	x 创建新文件为只写 返回FALSE和错误 如果文件已经存在

	r + 打开文件 为读写 文件指针在文件开始
	w + 打开文件为读写, 删除文件内容,如果他不存在,文件指针在文件开头开始
	a + 打开文件为读写, 文件中已有的数据会被保留,文件指针在文件结尾开始,创建新文件如果他不存在
	x + 创建文件为读写,返回FALSE和错误,如果文件已存在.

*/
	/*

	fclose() 关闭文件 用于关闭打开的文件
	注释: 用完文件后把他们全部关闭是一个良好的编程习惯,打开的文件会占用服务器的资源

	fclose()需要关闭的文件的名称
	**/

	/*
	fgets() 用于从文件中读取单行
	**/
	/*
	php 检查 End-of-File -feof()

    feof()函数检查是否已经到达文件末尾

	**/












 ?>