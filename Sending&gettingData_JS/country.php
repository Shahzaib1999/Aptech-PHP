<?php


$server = "localhost";
$username="root";
$pass="";
$dbname="1706d";


$con = new mysqli($server,$username,$pass,$dbname);
if($con) {
	echo "connected successfully";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Select Country :
  <select id="id1" onchange="myfun()">  

  





  <option>  select </option>
<?php


$kal = mysqli_query($con,"SELECT * FROM country");
while ($kal1 = mysqli_fetch_array($kal)){
   echo "<option value='".$kal1[0]."'> ".$kal1[1]."</option>";

}

?>

  </select>


<br> <br>

<select id="id2">
	<option>Select</option>





</select>


</body>
</html>


<script type="text/javascript">
	function myfun(){
     var asd = new XMLHttpRequest();
     asd.open ("GET", "city.php?id3="+document.getElementById('id1').value, false);
     asd.send('null');
     document.getElementById('id2').innerHTML = asd.responseText; 





	}






</script>