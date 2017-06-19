 <!DOCTYPE html>
 <html>
 <head>
 	<title>这是一个php文件</title>
 </head>
 <body>

 <?php
 //这是一个注释
 /** 这也是一个注释*/
 echo "Hello world";
 ?>

 <?php 
  /** 可以有多个*/
 echo "wangguangqian"; 
 ?>

 <?php 
  print("haha!");
 ?>

<?php 
$txt1 = "hello world ";
$txt2 = "123456";
echo txt2 . " " . txt1;

echo $txt;

echo strlen(txt1);

 ?>
 <?php  
 /** 字符串匹配位置*/
 echo strpos("hello world !", "world");
 ?>
 </body>
 </html>