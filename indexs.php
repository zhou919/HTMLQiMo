<!DOCTYPE html> 
<html> 
<body> 
<?php 
    $num = $_SERVER['QUERY_STRING'];
    $nums = substr($num,0,2);
    if($nums == "qq" )
    {
        include"one.php";
    }else if($nums != "qq" && $nums != "qw" && $nums != "ed" && $nums != "se")
    {
        include"ini.php";
    }else if($nums == "qw")
    {
       include"post.php";
    }else if($nums == "ed")
    {
       include"edit.php";
    }else if($nums == "se")
    {
       include"serch.php";
    }
?> 
</body> 
</html>