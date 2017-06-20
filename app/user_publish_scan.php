<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
    <html xmlns="http://www.w3.org/1999/xhtml">  
        <head>  
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <title>发布新闻列表</title>  
        </head>  
    <body>  
        <table width="70%" border="1px" cellpadding="0" cellspacing="0" style="text-align:center">  
        <tr>  
            <td>编号</td>  
            <td>标题</td>  
            <td>作者</td>  
            <td>来源</td>  
            <td>日期</td>  
             <td>删除</td>  
            <td>修改</td>    
    </tr>  
        <?php  
    $dbhost = 'localhost';          // mysql服务器主机地址
    $dbuser = 'root';               // mysql用户名
    $dbpass = 'mengxiang';          // mysql用户名密码
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    if(! $conn )
    {
        die('连接失败: ' . mysqli_error($conn));
    }else{
        echo "连接成功"."<br/>";
    }

    /** 服务器 用户名 密码 数据库 */
    $mysqli = new mysqli("localhost","root", "mengxiang" , "Learn");

    if (mysqli_connect_errno()) {
        echo "连接数据库失败".mysqli_connect_error();
        $mysqli = null;
        exit;
    }
    echo "连接数据库成功!<br/>";


        $sql="select * from user_publish_news";  
        $result = $mysqli->query($sql);  

        while($attr=$result->fetch_row())  
        {  
        echo "  
        <tr>  
        <td>{$attr[0]}</td>  
        <td>{$attr[2]}</td>  
        <td>{$attr[3]}</td>  
        <td>{$attr[4]}</td> 
        <td>{$attr[1]}</td>  
        <td><a onclick=\" return confirm('确定删除')\" href='user_publish_delete.php?user_newsid={$attr[0]}'>删除</a></td>  
        <td><a href='user_publish_change.php?user_newsid={$attr[0]}'>修改</a></td>  
        </tr>   
        ";  
         }  
    
        ?> 
    </table>  
    </body>  
 </html>  