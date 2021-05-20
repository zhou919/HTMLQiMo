<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="banner2.jfif">
<?php
    include"mysql.php";
    $sql="SELECT * FROM `table`";
    $res = mysqli_query($conn,$sql);
    $conn = array();
    if($res && is_object($res))
    {
        while($row = mysqli_fetch_assoc($res))
        {
            $data = $row['data'];
            $num = $row['num'];
            $time = $row['time'];
            echo "<div style = 'border:1px solid #F00;'>
            <p>内容: $data</p>
            <p>编号: $num</p>
            <p>发布时间 $time</p>
            </div> ";
        }
    }
?>
</body>
</html>