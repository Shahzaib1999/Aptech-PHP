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
    <form method="POST" role="form" enctype="multipart/form-data">
        <legend align="center">Registration Form</legend>

        <div class="form-group">
            <label for="">Username</label>
            <input type="text" class="form-control" name="user" id="" placeholder="Input field">
        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input type="text" class="form-control" name="pass" id="" placeholder="Input field">
        </div>

        <div class="form-group">
            <label for="">Image</label>
            <input type="file" class="form-control" name="img" placeholder="Input field">
        </div>

        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" name="desc" id="" placeholder="Input field">
        </div>

        <button type="submit" class="btn btn-primary" name="register">Register</button>
    </form>

<?php

if(isset($_POST['register']))
    {

    $con=mysqli_connect("localhost","root","","login");
    $au = $_POST['user'];
    $p = $_POST["pass"];
    $d = $_POST["desc"];
    $name = $_FILES['img']['name'];

    $size = $_FILES['img']['size'];
    $type = $_FILES['img']['type'];
    $tmp_name = $_FILES['img']['tmp_name'];

    
    if((($_FILES['img']['type'] == 'image/gif')
        || ($_FILES['img']['type'] == 'image/jpg')
        || ($_FILES['img']['type'] == 'image/png')
        || ($_FILES['img']['type'] == 'image/jpeg'))
        && $_FILES['img']['size'] < 3000000)
    {
        if($_FILES['img']['error'] > 0)
        {
            echo 'Error occured: '.$_FILES['img']['error'];
        }
        else
        {
            $location = 'images/'.$name;
            if(move_uploaded_file($tmp_name, $location))
            {
                echo 'Stored in: '.$location;
                $insert = mysqli_query($con, "insert into table1 (Name,Password,Image,Description) VALUES ('$au','$p','$location','$d')");
                if($insert)
                {
                    header("location:Login.php");
                }
                else{
                    echo 'problem';
                }
            }
        }
    }
    
    else
    {
        echo 'Invalid File..';
    }
}
?>
</body>
</html>