      
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
    $sql = "insert into user_02 values('{$user_name}','{$user_pwd}')";  
      
    //执行SQL语句    
    $result = $mysqli -> query($sql);  
     
    var_dump($result);
    
    if (!$result) {
        echo "sqli语句错误<br/>";
        echo "error".$mysqli->error. "|".$mysqli->error;
    }else{
        echo "查询数据成功..."."<br/>";
    }
 
    $result =$mysqli-> query($sql);  
      
    if($result)  {  
             echo " Register Success ！！";  
        
        } else {  

             echo " Register Failure ！！";  
    }  