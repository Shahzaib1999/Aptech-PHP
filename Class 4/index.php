<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>                                                                                                             

</head>
<body>
    
    <br />
    <br />
    <div class="container">
        <form action="" method="POST" role="form">
            <legend align="center">Insert Data</legend>
        
            <div class="form-group">
                <label for="">Name:</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="">Department:</label>
                <input type="text" class="form-control" name="department" placeholder="Enter department">
            </div>
            
            <button name="insert" class="btn btn-success">Submit</button>

            <button class="btn btn-success" name="get">Get</button>
        </form>

    
    <br /><br />
    

<?php 
$con = mysqli_connect("localhost","root","","class 4");

    
    $q = "select * from table1";
    $query = mysqli_query($con,$q);

    ?>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
            </tr>
        </thead>
        <tbody>

        <?php while($row = mysqli_fetch_array($query)){ ?>

            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
            </tr>

        <?php } ?> 

        </tbody>
    </table>
    


    </div>
    

<?php 

if (isset($_POST['insert'])) {

    $gname = $_POST["name"]; 
    $gemail = $_POST["email"]; 
    $gdepartment = $_POST["department"]; 

    $con = mysqli_connect("localhost","root","","class 4");

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

}

?>
    
</body>
</html>