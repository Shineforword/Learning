    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
    <html xmlns="http://www.w3.org/1999/xhtml">  
    <head>  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <title>查看</title>  
    </head>  
      
    <body>  
    <?php  
        
    $id = $_GET["user_newsid"];  
          
    /** 服务器 用户名 密码 数据库 */
    $mysqli = new mysqli("localhost","root", "mengxiang" , "Learn");

    if (mysqli_connect_errno()) {
        echo "连接数据库失败".mysqli_connect_error();
        $mysqli = null;
        exit;
    }
    echo "连接数据库成功!<br/>";
    
    $sql="select * from user_publish_news where user_newsid ='{$id}'";  
    
    $result = $mysqli ->query($sql);  

    $attr = $result->fetch_row(); 

    ?>  
    
    <div style="width:100%; text-align:center" >  
        <h2>修改新闻</h2>  
        <form action="user_publish_change_ago.php?user_newsid=<?php echo $id;?>" method="post">  
            <input type="hidden" name="newsid" <?php echo "value='{$attr[0]}'";?>/>  
    <table style="margin:0 auto; text-align:left" >  
        <tr>  
            <td >标题：</td>
            <td><input type="text" style="width:400px" name="title" <?php echo "value='{$attr[2]}'";?>/></td>  
        </tr>  
        <tr>  
            <td >作者：</td>
            <td><input type="text" style="width:400px" name="Author" <?php echo "value='{$attr[3]}'";?>/></td>  
        </tr>  
        <tr>  
            <td >来源：</td>
            <td><input type="text" style="width:400px" name="source" <?php echo "value='{$attr[4]}'";?>/></td>  
        </tr>  
        <tr>  
        <td >内容：</td>  
            <td>
            <textarea cols="auto" rows="auto" style="width:400px; height:400px" name="content"><?php echo "{$attr[5]}";?></textarea>
            </td>  
        </tr>  
    </table>
    <br />  
    <?php  
    $time = date('y-m-d h:i:s');  
      
    echo "<input type=\"hidden\" name=\"time\" value=\"{$time}\"/>";  
    ?>  
    <div><a href="user_publish_change_ago.php?user_newsid=<?php echo $id;?>">
        <input type="button" title="查看" value="查看" /></a>
        <input type="submit" title="修改" value="修改"/>  
    </div>  
    </form>  
      
    </body>  
    </html>  