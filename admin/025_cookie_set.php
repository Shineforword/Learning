<?php 
#cookie cookie 常用于识别用户。cookie 是服务器留在用户计算机中的小文件。每当相同的计算机通过浏览器请求页面时，
#它同时会发送 cookie。通过 PHP，您能够创建并取回 cookie 的值
/*
如何创建 cookie？
setcookie() 函数用于设置 cookie。
注释：setcookie() 函数必须位于 <html> 标签之前。
语法
#setcookie(name, value, expire, path, domain);

注释：在发送 cookie 时，cookie 的值会自动进行 URL 编码，
在取回时进行自动解码（为防止 URL 编码，请使用 setrawcookie() 取而代之）。
**/
/*
如果您的应用程序涉及不支持 cookie 的浏览器，您就不得不采取其他方法在应用程序中从一张页面向另一张页面传递信息。
一种方式是从表单传递数据（有关表单和用户输入的内容，稍早前我们已经在本教程中介绍过了）。
**/
setcookie("user", "Alex Porter", time()+3600);

?>