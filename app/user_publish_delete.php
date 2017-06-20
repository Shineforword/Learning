    <?php  
    $id=$_GET["user_newsid"];  
      
    $dbhost = 'localhost';          // mysql服务器主机地址
    $dbuser = 'root';               // mysql用户名
    $dbpass = 'mengxiang';          // mysql用户名密码
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    if(! $conn )
    {
        die('连接失败: ' . mysqli_error($conn));

    }else{
        echo "连接成功";
    }

    /** 服务器 用户名 密码 数据库 */
    $mysqli = new mysqli("localhost","root", "mengxiang" , "Learn");

    if (mysqli_connect_errno()) {
        echo "连接数据库失败".mysqli_connect_error();
        $mysqli = null;
        exit;
    }
    echo "连接数据库成功!<br/>";

    $sql="delete from user_publish_news where user_newsid='{$id}'";  
      
    $result=$mysqli->query($sql);  
      
    if ($result)  
    {  
        header("location:user_publish_scan.php");  
    }  
    else  
    {  
        echo "删除失败";  
    }  