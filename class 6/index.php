<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="" method="POST">
        <input type="text" name="name" >
        <input type="text" name="pass" >
        <input type="submit" name="login" value="login" >
        </form>
        </center>
<?php

        if(isset($_POST['login'])){

          
$n =$_POST['name'];
$p =$_POST['pass'];
setcookie("n",$n,120);
headrer("location:localhost:2124/crud1/cookie.php");

        }
        else{

echo "invalid username and pass";
        }
?>
</body>
</html>