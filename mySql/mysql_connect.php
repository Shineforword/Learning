
 <?php
// header('Content-type:textml;charset=utf-8');
$dbhost = 'localhost';          // mysql服务器主机地址
$dbuser = 'root';               // mysql用户名
$dbpass = 'mengxiang';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
    die('连接失败: ' . mysqli_error($conn));
}
echo '连接成功'."<br/>";
mysqli_select_db($conn,"Learn");
mysqli_query($conn , "set names utf8");

$sql="select * from user_01";
$res=mysqli_query($conn,$sql);

$str="<table><tr>
  <td>user_01</td>
</tr>";
$strs="";
while($row = mysqli_fetch_array($res))
{
  $strs.="<tr>
    <td>".$row['user_name']."</td>
    <td>".$row['user_birthday']."</td>
    <td>".$row['user_sex']."</td>
    <td>".$row['user_age']."</td>
  </tr>";
}
echo $str.$strs."</table>";
?>