      
<?php  

    $id = $_GET["user_newsid"];  

    $title = $_POST["title"];  
    $Author = $_POST["Author"];  
    $source = $_POST["source"];  
    $content = $_POST["content"];  
    
    $datetime = new DateTime();
    $date = $datetime-> format('Y-m-d H:i:s');

    /** 服务器 用户名 密码 数据库 */
    $mysqli = new mysqli("localhost","root", "mengxiang" , "Learn");

    if (mysqli_connect_errno()) {
        echo "连接数据库失败".mysqli_connect_error();
        $mysqli = null;
        exit;
    }
    echo "连接数据库成功!<br/>";

      
    $sql="update user_publish_news set title='{$title}',Author='{$Author}',source='{$source}',content='{$content}',date='{$date}' where user_newsid='{$id}' ";  
      
    $result = $mysqli->query($sql); 

    if ($result)  
    {  
    header("location:user_publish_scan.php");  
    }  
    else  
    {  
    echo "修改失败"; 
    }  
?>