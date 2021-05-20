<meta charset="UTF-8">
<?php
    include"mysql.php";
    $num = $_POST['num'];

    if($num == "")
    {
        echo"<script>
        alert('信息不可为空!');
        history.back();
        </script> ";
    }
    else
    {
        $selsql = "SELECT * FROM `table` WHERE num = '{$num}'";
        $selres = mysqli_query($conn,$selsql);
        if (!$selres) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        $conn = array();
        if($selres && is_object($selres))
        {
            while($row = mysqli_fetch_assoc($selres))
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
    }
?>