<?php session_start() ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
</head>
<body class="container">
<br />
<form method="POST" role="form">
        <legend align="center">Login</legend>

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="user" id="" placeholder="Input field">
        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input type="text" class="form-control" name="pass" id="" placeholder="Input field">
        </div>

        <button type="submit" class="btn btn-primary" name="login">LogIn</button>
        <button type="submit" class="btn btn-success" name="register">Register</button>
    </form>

<?php

if (isset($_POST['register'])) {
    header("location:registration.php");
}

if(isset($_POST['login'])){
    
    $con=mysqli_connect("localhost","root","","login");
    $n=$_POST["user"];
    $p=$_POST["pass"];
    $_SESSION["id"] =  $n;

    $q="select * from table1 where Name='$n' And Password='$p'";
    $exe=mysqli_query($con,$q);
    $row = mysqli_num_rows($exe);

    if($row == 1){
        header("location:dashboard.php");
    }
    else{
        echo "<script> alert('invalid email and password') </script>";
    }
}
?>
</body>
</html>