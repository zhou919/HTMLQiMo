<?php
    $UserName = 'root'; //数据库的名字
    $PassWord = 'root';//数据库密码
    $host = '127.0.0.1';
    $dataBase = 'test';//数据库名称
    $conn = mysqli_connect($host, $UserName, $PassWord, $dataBase);//；链接数据库
    if (!$conn)
    {
        echo"<script>
            alert('链接失败！');
            </script>";
    }
?>