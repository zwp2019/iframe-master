<?php

/* Connect to a MySQL server 连接数据库服务器 */

$link = mysqli_connect(
    'localhost:3306',    /* The host to connect to 连接MySQL地址 */
    'root',         /* The user to connect as 连接MySQL用户名 */
    '307065147',       /* The password to use 连接MySQL密码 */
    'php');    /* The default database to query 连接数据库名称*/
if (!$link)
{
    printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());
    exit;
}
else
{
    echo ('数据库连接上了！')."<br/>";   /* Close the connection 关闭连接*/
}

//mysqli_query($link,'set names utf8');    //解决中文乱码的问题

//if ($result = mysqli_query($link, 'SELECT ID,NAME,AGE FROM userinfo'))
//{
//    echo('ID  NAME  AGE '). "<br/>";
//    /* Fetch the results of the query 返回查询的结果 */
//    while( $row = mysqli_fetch_assoc($result) )
//    {
//        echo $row['ID'], " ", $row['NAME'], " ", $row['AGE'], "<br/>";
//        // printf("%s (%s) ", $row['id'],$row['class'], $row['scores']);
//    }
//    /* Destroy the result set and free the memory used for it 结束查询释放内存 */
//    mysqli_free_result($result);
//
//}

/* Close the connection 关闭连接*/
mysqli_close($link);
