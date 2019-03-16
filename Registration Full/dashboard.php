
<?php 


Session_Start();

// echo $_SESSION["id"];

$s = $_SESSION["id"];

$con=mysqli_connect("localhost","root","","login");

$q = "select * from table1 where Name='$s'";
$exe=mysqli_query($con,$q);
$row = mysqli_num_rows($exe);

if($s == ""){
    header('location:http://localhost:2124/Shahzaib/Login.php');
}

?>
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
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>password</th>
            <th>Iamge</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php 
                while ($b = mysqli_fetch_row($exe)) {

                    echo '<td>'.$b[0].'</td><td>'.$b[1].'</td><td>'.$b[2].'</td><td><img width="150" src='.$b[3].' /></td><td>'.$b[4].'</td>';

            }?>
        </tr>
    </tbody>
</table>

<form method="POST">
<center><button type="submit" class="btn btn-danger" name="logout">LogOut</button></center>
</form>
<?php
if (isset($_POST['logout'])) {

    session_destroy();

    header('location:Login.php');

}
?>

</body>
</html>
