<?php



$server = "localhost";
$username="root";
$pass="";
$dbname="1706d";


$con = new mysqli($server,$username,$pass,$dbname);
if($con) {
	echo "connected successfully";
}


$qwe = $_GET['id3'];

echo "<select><option> Select </option>"; 
$asd1 = mysqli_query($con,"SELECT city_name from city where c_id=$qwe");
while ($asad = mysqli_fetch_array($asd1)){
	echo "<option>".$asad[0]." </option>";
}
echo "</select>";


?>

