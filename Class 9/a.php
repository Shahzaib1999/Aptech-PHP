<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
<br />
<div class="container">
    <form action="" method="POST" role="form">
        <legend align="center">Sessions</legend>

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" id="" placeholder="Input field">
        </div>

        <button type="submit" class="btn btn-primary" name="ab">Submit</button>
    </form>


<?php

include './index.php';

if(isset($_POST['ab'])){

    // $con=mysqli_connect("localhost","root","","class 9");
    $n=$_POST["name"];

    $obj = new salary($n);

    echo $obj-> cal_hra().'<br>';

    echo $obj-> calc_ta();

}

?>

</div>