<!DOCTYPE html>
<?php

$con = new mysqli("localhost","root",null,"js");

// if($con) {
// 	echo "connected successfully";
// }
?>
<head>

    <title>Data</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body class="container">

  
  <br /><br />


    <label>Search:</label>
    <input type="text" class="form-control" id="sea" onkeyup="search()" placeholder="Search">
    
    <br /><br />

    <label>Name:</label>   
    <input type="text" class="form-control" id="name" placeholder="Search">
    <br /><br />

    <label>Age:</label>
    <input type="number" class="form-control" id="age" placeholder="Search">
    
  <br /><br />

    <span class="input-group-btn">
      <button type="button" class="btn btn-primary" onclick="myfun()">Submit!</button>
    </span>
  
  <br /><br />

  <ol id="id1">  


<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Age</th>
    </tr>
  </thead>
  <tbody>

      <?php

        $kal = mysqli_query($con,"SELECT * FROM table1");

          while ($kal1 = mysqli_fetch_array($kal)){
            echo "<tr><td>".$kal1[0]."</td><td>".$kal1[1]."</td><td>".$kal1[2]."</td></tr>";
          }

      ?>
      
  </tbody>
</table>



  </ol>


<script type="text/javascript">

  function myfun(){
    var name = document.getElementById("name").value;
    var age = document.getElementById("age").value;

     var asd = new XMLHttpRequest();
     asd.open ("GET", "data2.php?nam="+name+"&nam1="+age, false);
     asd.send('null');
     document.getElementById('id1').innerHTML = asd.responseText; 

     document.getElementById("name").value = "";
     document.getElementById("age").value = "";
  }

  function search() {
    var name = document.getElementById("sea").value;

    if (document.getElementById("sea").value) {
      var asd = new XMLHttpRequest();
     asd.open ("GET", "search.php?nam="+name, false);
     asd.send('null');
     document.getElementById('id1').innerHTML = asd.responseText; 
    } else {
      myfun();
    }
    

  }

</script>
</body>
</html>


