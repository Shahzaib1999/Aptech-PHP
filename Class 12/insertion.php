
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<?php
include("database.php");

?>

<?php
 $obj = new dbconnection();
 $za = "";
 $zb = "";
 $zc = "";
 if (isset($_POST["data"])) {

    $id = $_POST["id"];

    
    $stmt = $obj->connect()->prepare("select * from users where ID = :id");
    $stmt->bindValue("id",$id);
    $stmt->execute();
    $check = $stmt->rowCount();
    echo $check;


 

    while($r =$stmt->fetch(PDO::FETCH_OBJ)) {
        $_POST["username"] = $r->name;
        $za = $r->name;
        $zb = $r->email;
        $zc = $r->department;
        ?>
   
<?php } }?>


<div class="container">
    
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            
            <form action="" method="POST" role="form">
                <legend>CRUD OOP</legend>
                <div class="form-group">
                    <label for="">ID</label>
                    <input type="text" class="form-control" name="id" placeholder="Enter Id">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" value="<?php echo $za ?>" name="username" placeholder="Emter username">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" value="<?php echo $zb ?>" name="email" placeholder="Emter Email">
                </div>
                <div class="form-group">
                    <label for="">Department</label>
                    <input type="text" class="form-control" value="<?php echo $zc ?>" name="department" placeholder="Emter Department">
                </div>
            
                
            
                <button type="submit" class="btn btn-primary" name="data">Data</button>
                <button type="submit" class="btn btn-primary" name="Add">Add</button>
                <button type="submit" class="btn btn-primary" name="Show">Show</button>
                <button type="submit" class="btn btn-primary" name="Update">Update</button>
                
            </form>
            
        </div>
    </div>
    
</div>

<?php 
if(isset($_POST["Add"])){
    $n = $_POST["username"];
    $e = $_POST["email"];
    $d = $_POST["department"];
    $stmt= $obj->connect()->Prepare("insert into users (name, email, department) values (:name ,:email,:departemnt)");
    $stmt->bindValue("name",$n);
    $stmt->bindValue("email",$e);
    $stmt->bindValue("departemnt",$d);

    if($n != "" && !$e != "" && !$d != ""){

        $stmt->execute();
        echo "successfully inserted";
    }else{
        echo "something went wrong";
    }

}
if(isset($_POST["Show"])){
    $stmt = $obj->connect()->prepare("select * from users");
    $stmt->execute();
?>


<div class="container">
<div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
    
    
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
        <?php while($r =$stmt->fetch(PDO::FETCH_OBJ)) {?>
            <tr>
                <td><?php echo $r->ID; ?></td>
                <td><?php echo $r->name; ?></td>
                <td><?php echo $r->email; ?></td>
                <td><?php echo $r->department; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    
        
    </div>
</div>
</div>
<?php
}


if(isset($_POST["Update"])){
    $i = $_POST["id"];
    $n = $_POST["username"];
    $e = $_POST["email"];
    $d = $_POST["department"];

    $stmt = $obj->connect()->Prepare("update users set name = :name ,email = :email, department = :dpt where ID = :z ");
    $stmt->bindValue("z",$i);
    $stmt->bindValue("name",$n);
    $stmt->bindValue("email",$e);
    $stmt->bindValue("dpt",$d);
    $stmt->execute();
    $check = $stmt->rowCount();

    if($check > 0){?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Success</strong> Updated
        </div>
    <?php
    }else{?>
    
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Error</strong> updation failed.......
        </div>
    
<?php
    }
    

}


?>

