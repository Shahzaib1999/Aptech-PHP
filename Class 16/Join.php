<html>
<head>
    <title>Joins</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="container">
<?php 
$con = mysqli_connect("localhost","root","","class 16");
    
    $q = "select * from CATEGORY";
    $query = mysqli_query($con,$q);
    ?>
<div class="row">
    <h1 align="center">Data</h1>
    <div class="col-lg-6">

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>

            <?php while($row = mysqli_fetch_array($query)){ ?>

                <tr>
                    <td><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                </tr>

            <?php } ?> 

            </tbody>
        </table>

    </div>

    <div class="col-lg-6">

    <?php 
        $a = "select * from sub_Category";
        $query1 = mysqli_query($con,$a);
    ?>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>

        <?php while($row1 = mysqli_fetch_array($query1)){ ?>

            <tr>
                <td><?php echo $row1[0]; ?></td>
                <td><?php echo $row1[1]; ?></td>
            </tr>

        <?php } ?> 

        </tbody>
    </table>

</div>

<h1 align="center">Inner Join</h1>

<?php


$q2="SELECT a.Id,b.Name,a.Name from category as a INNER JOIN sub_Category as b on a.Id = b.Cat_Id";
$query2=mysqli_query($con,$q2);

?>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Sub_categories</th>
                <th>Category_name</th>
            </tr>
        </thead>

    <?php while($row2=mysqli_fetch_array($query2)) { ?>

        <tbody>
            <tr>
                <td><?php echo $row2[0] ?></td>
                <td><?php echo $row2[1] ?></td>
                <td><?php echo $row2[2] ?></td>
            </tr>
        </tbody>

    <?php } ?>
    </table>



    <h1 align="center">Left Join</h1>

<?php


$q3="SELECT a.Cat_Id,a.Name,b.Name FROM sub_Category as a LEFT JOIN category as b on a.Cat_Id = b.Id";
$query3=mysqli_query($con,$q3);

?>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Sub_categories</th>
                <th>Category_name</th>
            </tr>
        </thead>

    <?php while($row3=mysqli_fetch_array($query3)) { ?>

        <tbody>
            <tr>
                <td><?php echo $row3[0] ?></td>
                <td><?php echo $row3[1] ?></td>
                <td><?php echo $row3[2] ?></td>
            </tr>
        </tbody>

    <?php } ?>
    </table>

                

</div>
    

</body>
</html>

