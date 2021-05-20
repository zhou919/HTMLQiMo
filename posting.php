<meta charset="UTF-8">
<?php
    include"mysql.php";
    $data = $_POST['data'];
    $num = $_POST['num'];
    $time = $_POST['time'];
    if($data == "" || $num == "" || $time == "")
    {
        echo"<script>
        alert('信息不可为空!');
        history.back();
        </script> ";
    }
    else
    {
        $selsql = "SELECT num FROM `table` WHERE num = '{$num}'";
        $selres = mysqli_query($conn,$selsql); //$conn->query($selsql)
        if (!$selres) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        $selrow = mysqli_fetch_object($selres);// $selres->fetch_object();
        if ($selrow)
        {
            echo"<script>
            alert('此文章已经存在！');
            history.back();
            </script>";
        }
        else
        {
            mysqli_query($conn,"SET NAMES uft8"); //$conn->query("SET NAMES uft8");
            $inssql = "INSERT INTO `table` (data,num,time) VALUES('$data','$num','$time')";
            mysqli_query($conn,"SET NAMES uft8");//$conn->query("SET NAMES uft8");
            $input = mysqli_query($conn,$inssql);// $insres = $conn->query($inssql);
            if($input)
            {
                echo"<script>
                alert('发布成功！');
                history.go(-2);
                </script>";
            }
            else
            {
                echo"<script>
                alert('发布失败！');
                </script>";
            }
        }
    }
?>