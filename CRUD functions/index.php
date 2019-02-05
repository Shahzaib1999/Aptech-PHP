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
    
<?php

$con = mysqli_connect("localhost","root","","class 4");

$Id = "";
$Name = "";
$Email = "";
$Dept = "";

if (isset($_POST['abc'])) {

    $Id = $_POST['abc'];
    $edit = "select Name,Email,Department from table1 where id=$Id";
    $query = mysqli_query($con,$edit);
        
    while ($data = mysqli_fetch_array($query)) {
        //alert($data[0]);
        $Name = $data[0];
        $Email = $data[1];
        $Dept = $data[2];
    }
    //alert($Id);
    

}

?>

    <br />
    <br />
    <div class="container">
        <form action="" method="POST" role="form">
            <legend align="center">Insert Data</legend>
        
            <div class="form-group">
                <label for="">Id:</label>
                <input type="text" class="form-control" name="id" value="<?php echo $Id ?>" readonly />
            </div>
            <div class="form-group">
                <label for="">Name:</label>
                <input type="text" class="form-control" name="name" value="<?php echo $Name ?>" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="">Email:</label>
                <input type="email" class="form-control" name="email" value="<?php echo $Email ?>" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="">Department:</label>
                <input type="text" class="form-control" name="department" value="<?php echo $Dept ?>" placeholder="Enter department">
            </div>
            
            <button name="insert" class="btn btn-success">Submit</button>
            <button name="update" class="btn btn-success">Update</button>
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

        <?php while($row = mysqli_fetch_array($query)){ 
            if ($row) {
            
            ?>

            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <form method="POST" role="form">
                    <td><button class="btn btn-success" value="<?php echo $row[0]; ?>" name="abc">Get</button></td>
                    <td><button class="btn btn-danger" value="<?php echo $row[0]; ?>" name="delete">Delete</button></td>
                </form>
            </tr>

        <?php }else{  ?> 

            <h1>No Data</h1>

        <?php } } ?>

        </tbody>
    </table>
    


    </div>
    

<?php 

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}


// For Inserting
if (isset($_POST['insert'])) {

    $gname = $_POST["name"]; 
    $gemail = $_POST["email"]; 
    $gdepartment = $_POST["department"]; 

    $q = "insert into table1(Name,Email,Department) values('$gname','$gemail','$gdepartment')";
    $query = mysqli_query($con,$q);

    if ($query) {
        alert('Data Inserted');
    } else {
        alert('Data not Inserted');
    }
}


// For Editing
if (isset($_POST['update']) && $_POST['id']) {
    
    $gid = $_POST['id'];
    $gname = $_POST["name"]; 
    $gemail = $_POST["email"]; 
    $gdepartment = $_POST["department"];  

    if (!$gname || !$gemail || !$gdepartment) {
        alert('Fill all the fields');
    }else{
        
        $q = "update table1 set Name='".$gname."',Email='".$gemail."',Department='".$gdepartment."' where id = '".$gid."'";
        
        $query = mysqli_query($con,$q);

        if ($query) {
            alert('Data Updated');
        } else {
            alert('Data not Updated');
        }

    }

}

// For deleting
if (isset($_POST['delete'])) {

    $id = $_POST['delete'];

    $delete = "delete from table1 where id = '" .$id. "'";
    $query = mysqli_query($con,$delete);

    if ($query) {
        alert('Data Deleted');
    } else {
        alert('Data not Deleted');
    }
    

}


?>
    
</body>
</html>