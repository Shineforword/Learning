    <?php 

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
      
    //写sql语句  
    $sql = "insert into user_publish_news (date,title,Author,source,content) values ('{$date}','{$title}','{$Author}','{$source}','{$content}')";  
      
    //执行SQL语句  
    $result = $mysqli-> query($sql);  
    
    var_dump($result);
    if (!$result) {
        echo "sqli语句错误<br/>";
        echo "error".$mysqli->error. "|".$mysqli->error;
    }else{

        echo "成功..."."<br/>";
        header("location:user_publish_news.html");  
    }