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
<body>
<form action="" method="POST" role="form">
        <legend align="center">Sessions</legend>

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="user" id="" placeholder="Input field">
        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input type="text" class="form-control" name="pass" id="" placeholder="Input field">
        </div>

        <button type="submit" class="btn btn-primary" name="login">Submit</button>
    </form>
<!-- <form method="POST">    
<input type="text" name="user">

<input type="text" name="pass">


<input type="submit" name="login">

<form> -->


<?php
if(isset($_POST['login'])){

    $con=mysqli_connect("localhost","root","","class 7");
    $n=$_POST["user"];
    $p=$_POST["pass"];
    session_start();

    $q="select * from table1 where Name='$n' And Password='$p'";
$exe=mysqli_query($con,$q);

if($exe){

    $_SESSION['email']=$n;
    header("location:http://localhost:2124/Class 7/home.php");

}
else{

    echo "<script> alert('invalid email and password') </script>";
}


}

?>
</body>
</html>