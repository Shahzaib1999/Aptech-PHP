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
    
    <br />
    <br />
    <div class="container">
        <form action="insert.php" method="POST" role="form">
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
            
        
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    
    
</body>
</html>