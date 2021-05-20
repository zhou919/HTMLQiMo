<meta charset="UTF-8">
<?php
    include"mysql.php";
    $num = $_POST['num'];

    //mysqli_query($conn,"DELETE FROM `table` WHERE num='{$num}'");

    if($num == "")
    {
        echo"<script>
        alert('信息不可为空!');
        history.back();
        </script> ";
    }
    else
    {
        //mysqli_query($conn,"DELETE FROM `table` WHERE num='{$num}'");
        $selsql = "SELECT num FROM `table` WHERE num = '{$num}'";
        $selres = mysqli_query($conn,$selsql);
        if (!$selres) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        $selrow = mysqli_fetch_object($selres);
        if($selres)
        {
            mysqli_query($conn,"DELETE FROM `table` WHERE num='{$num}'");
            echo"<script>
            alert('留言已删除！');
            history.back();
            </script>";
        }else
        {
            echo"<script>
            alert('留言不存在！');
            history.back();
            </script>";
        }
    }
?>