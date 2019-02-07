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

$con = mysqli_connect("localhost","root","","");


?>
<!--     
    <br />
    <br /> -->
    <div class="container">
        <!-- <form action="" method="POST" role="form">
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
        </form> -->

<!--     
    <br /><br /> -->
    <h2>Databases:</h2><br>
    
    <form action="" method="POST" role="form">

        <select class="form-control" name="option" onchange="this.form.submit()">
        
        <?php
            $listdb = mysqli_query($con,"show databases");

            echo '<h2>Databases:</h2><br>';
            
            while ($a = mysqli_fetch_object($listdb)) { ?>
                
                <option value="<?php echo $a->Database ?>"><?php echo $a->Database ?></option>
            
            <?php } ?>
    

        </select>

    
    <h2>Tables:</h2><br>
    <select class="form-control" name="tab" onchange="this.form.submit()">

<?php

if (isset($_POST['option'])) {
    
    $db = $_POST['option'];
    $table = mysqli_select_db($con,$db);
    $tbl = mysqli_query($con,"Show tables");

    while ($b = mysqli_fetch_row($tbl)) {?>
        
        <!-- echo $b[0]."<br>"; -->
        <option value="<?php echo $b[0]."<br>" ?>"><?php echo $b[0]."<br>" ?></option>
    
    <?php } 

}  

?>

    </select>

    </form>
            

    </div>
</body>
</html>