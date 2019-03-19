<!DOCTYPE html>

<?php

$con = new mysqli("localhost","root",null,"js");

// if($con) {
// 	echo "connected successfully";
// }
?>

<body>
Select Country :
  <select id="id1" onchange="myfun()">  

    <option>  Select Country </option>

  <?php

    $kal = mysqli_query($con,"SELECT * FROM country");
    while ($kal1 = mysqli_fetch_array($kal)){
       echo "<option value='".$kal1[0]."'> ".$kal1[1]."</option>";

    }

  ?>

  </select>

<br /><br />

Select City :
<select id="id2" onchange="area()">
	<option>Select City</option>
</select>

<br /> <br/>

Select Area :
<select id="id4">
  <option>Select Area</option>
</select>


<script type="text/javascript">
  function myfun(){
     var asd = new XMLHttpRequest();
     asd.open ("GET", "city.php?id3="+document.getElementById('id1').value, false);
     asd.send('null');
     document.getElementById('id2').innerHTML = asd.responseText; 

  }

  function area(){
    debugger
     var aa = new XMLHttpRequest();
     aa.open ("GET", "city.php?id5="+document.getElementById('id2').value, false);
     aa.send('null');
     document.getElementById('id4').innerHTML = aa.responseText; 

  }

</script>
</body>
</html>


