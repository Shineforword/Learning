    <?php  
    $user_name  = $_POST["user"];  
    $user_pwd = $_POST["pwd"];  


    /** 服务器 用户名 密码 数据库 */
    $mysqli = new mysqli("localhost","root", "mengxiang" , "Learn");

    if (mysqli_connect_errno()) {
        echo "连接数据库失败".mysqli_connect_error();
        $mysqli = null;
        exit;
    }
    echo "连接数据库成功!<br/>";
      
    //写sql语句  
    $sql = "select user_pwd  from user_02 where user_name ='{$user_name}'";        
    //执行SQL语句  
    $result = $mysqli -> query($sql);  
     
    var_dump($result);
    
    if (!$result) {
        echo "sqli语句错误<br/>";
        echo "error".$mysqli->error. "|".$mysqli->error;
    }else{
        echo "查询数据成功..."."<br/>";
    }


    $v = $result->fetch_row();  

    if($user_pwd==$v[0])  {  
        echo "success login".'<br/>';
        sleep(1);
        header("Location:user_publish_news.html"); 
    }  
    else  {  
        echo"您输入的用户名或密码不正确，请重新输入！！";  
        sleep(3);
        header("Location:LoginTest.html"); 
    }  
?>