<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="login.css"> -->
</head>
<style type="one/css">
    * {
    margin: 0;
    padding: 0;
}

body {
    width: 100%;
    height: 100vh;
    background: linear-gradient(-45deg,#ee6654, #e71c6e, #2396d5, #23c5ab);
    background-size: 400% 400%;
    animation: moveBg 12s linear infinite;
}
@keyframes moveBg{
    0%{
        background-position: 0% 50%;
    }
    50%{
        background-position: 100% 50%;
    }
    100%{
        background-position: 0 50%;
    }
}

.container{
    width: 100%;
    height: 100%;
    position: relative;
}
.login{
    width: 480px;
    height: 356px;
    /* background: red; */
    background: rgba(21, 124, 172, 0.493);
    position: absolute;
    top: calc(50% - 178px);
    left: calc(50% - 240px);
    border-radius: 16px;
    box-shadow: 0 0 5px 0px rgba(123, 194, 199, 0.411);
}

.box{
    width: 200px;
    height: 200px;
    /* background-color: red; */
    position: absolute;
    top: 25%;
}
input{
    width: 356px;
    height: 30px;
    outline-style: none;
    border: none;
    border-bottom: 2px solid #ffffff;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: transparent;
}
label{
    display: block;
    color: #ffffff;
}
.form-group{
    width: 365px;
    height: 50px;
    /* background: blue; */
    margin: 20px auto;
}
h2{
    text-align: center;
    font-size: 34px;
    color: #ffffff;
    border-bottom: 3px solid #ffffff;
    width: 100px;
    margin: 8px auto;
}
#btn{
    width: 300px;
    height: 40px;
    position: absolute;
    bottom: -33px;
    left: calc(50% - 150px);
    font-size: 20px;
    font-weight: bold;
    color: #ffffff;
    background: transparent;
    border-radius: 20px;
    border: 3px solid rgb(13, 168, 109);
    outline-style: none;
}
#alert{
    display: none; 
}
.alert-success{
    width: 260px;
    height: 25px;
    background: rgb(238, 177, 64);
    border-radius: 10px;
    text-align: center;
    color: rgb(17, 102, 0);
    line-height: 25px;
    font-size: 17px;
    font-weight: bold;
    position: absolute;
    left: calc(50% - 130px);
    bottom: 18px;    
}
.alert-warning {
    width: 260px;
    height: 25px;
    background: rgb(223, 71, 60);
    border-radius: 10px;
    text-align: center;
    color: rgb(16, 80, 218);
    line-height: 25px;
    font-size: 17px;
    font-weight: bold;
    position: absolute;
    left: calc(50% - 130px);
    bottom: 18px;    
}

a,a:hover{
    text-decoration: none;
    color: #ffffff;
}
#register{
    position: absolute;
    bottom: -58px;
    left: 10px;
}
    </style>
<body background="banner2.jfif">
<div class="container">
            <div class="body">
            <form action = "posting.php" method = "post">
            <div align = "center" style = "line-height: 50px;">
            <p>内容：<input type = "text" name = "data"/></p>
            <p>编号：<input type = "text" name = "num" value = "<?php echo rand(10000,90000);?>"/></p>
            <p>时间：<input type = "text" name = "time" value = "<?php echo date("Y/m/d");?>"/></p>
            <input type = "submit">
        </div>
    </form>
</body>
</html>