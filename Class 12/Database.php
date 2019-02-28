<?php

class dbconnection{

    public function connect(){
        $server = "mysql:host=localhost;dbname=test";

        $con =  new PDO($server, "root", "");
        return $con;

    }

}

?>