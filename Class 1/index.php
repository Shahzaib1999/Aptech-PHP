<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
 
//  for ($i = 0; $i < sizeOf($arr); $i++) { 
//      echo($arr[$i].'<br />');
//  }


?>

<!-- // Traveling data on other page -->
<form action="server.php" method="GET">
    <div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="">
    </div>
    <div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" name="name" id="" aria-describedby="emailHelpId" placeholder="">
    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
