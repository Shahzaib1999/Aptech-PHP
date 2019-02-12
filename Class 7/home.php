<?php
session_start();
if($_SESSION['email'] != null ){

   echo "Welcome ".$_SESSION['email'];

echo "<form method='POST' ><button name='logout' >logout</button> </form>";

}
else{
    header("location:http://localhost:2124/Class 7/login.php");
}


if(isset($_POST['logout'])){

    session_destroy();

}

?>