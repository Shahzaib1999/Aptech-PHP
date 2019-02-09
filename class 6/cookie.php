<?php
if($_COOKIE["n"] !=null){

    echo $_COOKIE["n"];
}
else{

    
header("location:http://localhost:2124/crud1/index.php");
}

?>