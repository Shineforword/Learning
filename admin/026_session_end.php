<?php 
/*
终结 Session
如果您希望删除某些 session 数据，可以使用 unset() 或 session_destroy() 函数。
unset() 函数用于释放指定的 session 变量：
**/
unset($_SESSION['views']);

/*
您也可以通过 session_destroy() 函数彻底终结 session：
注释：session_destroy() 将重置 session，您将失去所有已存储的 session 数据。
**/
?>