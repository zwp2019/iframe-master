<?php
use Medoo\Medoo;
require "../libs/Medoo.php";
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'php',
    'username' => 'root',
    'password' => '307065147',
    'port' => '3306'
]);
$username = $_POST[username];
$password = $_POST[pwd];
//echo "查询结果:"."<br>";
/*$datas1 = $database->select("users","user_name",[
    "user_id[<=]" => 2
]);
foreach ($datas1 as $data){
    echo "用户名:".$data."<br>";
}*/

$datas = $database->select("users","password",
        ["user_name[=]" => $username]);
if ($datas == null){
    echo "<script>alert('用户名或密码错误，请重新登录');location.href=\"login.html\"</script>";
}
foreach ($datas as $data){
    if ($datas!= null && $data == $password){
        //echo "登录成功";
        header('Location: ../index_test.html');
    }else{
        echo "<script>alert('用户名或密码错误，请重新登录');
                location.href=\"login.html\"</script>";
    }
}
//echo $data;
//echo "hell";