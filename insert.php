<?php 

$gname = $_POST["name"]; 
$gemail = $_POST["email"]; 
$gdepartment = $_POST["department"]; 

$con = mysqli_connect("localhost","root","","class3");

if ($con) {
    echo 'Connected<br>';
} else {
    echo 'Connection error<br>';
}

$q = "insert into table1(Name,Email,Department) values('$gname','$gemail','$gdepartment')";
$query = mysqli_query($con,$q);

if ($query) {
    echo 'Data Inserted';
} else {
    echo 'Data not Inserted';
}


?>