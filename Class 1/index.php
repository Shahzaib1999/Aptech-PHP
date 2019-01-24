<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<?php

$ab = "Welcome";
$add = 5+5;

//Array
$arr = ['A','B','C','D'];

//echo '<h1>'.$add.'</h1>'

//If condition
//  if ($add > 10) {
//     echo '<h1>value is greater then 10</h1>';
//  } else {
//     echo '<h1>value is less then 10</h1>';
//  }
 
 for ($i = 0; $i < sizeOf($arr); $i++) { 
     echo($arr[$i].'<br />');
 }


?>

</body>
</html>