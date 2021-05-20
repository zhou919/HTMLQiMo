<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>留言板</title>
    <!-- <link rel="stylesheet" href="login.css"> -->
</head> 
<style type="text/css">
*{
    margin:0;
    padding:0;
}
section{
    position: relative;
    padding: 100px;
}
li
{
    float:left; 
    list-style:none;
}
.footer{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.footer .sci{
    position: relative;
    display: flex;
}

.footer .sci li{
    list-style: none;
}

.footer .sci li a{
    text-decoration: none;
    margin: 0 20px;
}

.footer .sci li a img{
    filter: invert(1);
    max-width: 40px;
}
.box{
    position:absolute;
    left:0px;
    top:0px;
}
</style>
<body> 
<div style="width:68%;">
<div class="box">
        <!-- <div align="center"> -->
            <ul>
               <li><a href="?" ><input type="button" style ="height:50px;
               width:383px; background-color:#F10; font:25px;" value="首页"> </a>  </li>
               <li><a href="?qq" ><input type="button" style ="height:50px;
               width:383px; background-color:#F10; font:25px;" value="留言板"> </a> </li>
               <li><a href="?qw" ><input type="button" style ="height:50px;
               width:383px; background-color:#F10; font:25px;" value="留言"> </a>  </li>
               <li><a href="?ed" ><input type="button" style ="height:50px;
               width:383px; background-color:#F10; font:25px;" value="删除"> </a>  </li>
               <li><a href="?se" ><input type="button" style ="height:50px;
               width:382px; background-color:#F10; font:25px;" value="查询"> </a>  </li>
            </ul>
            
        </div>
    </div>
<br /><br /><br />
<?php 
    include"indexs.php"
?> 
<br /><br /><br /><br /><br />
<br /><br /><br /><br />
<section class="footer">
        <ul class="sci">
            <li><a href="#"><img src="facebook.png"></a></li>
            <li><a href="#"><img src="twitter.png"></a></li>
            <li><a href="#"><img src="instagram.png"></a></li>
        </ul>
        <h4 class="copyrightText">Copyright  2021 <a href="#">MyOnline</a>.All rights</h4>
</section>
</body>
</html>