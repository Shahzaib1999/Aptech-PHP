<?php

$con = new mysqli("localhost","root",null,"js");

if($con) {
	echo "connected successfully";
}



$a = $_GET['id5'];

$qwe = $_GET['id3'];

if ($qwe) {
	echo "<select><option> Select </option>"; 

$asd1 = mysqli_query($con,"SELECT Id,city_name from City where c_id=$qwe");

	while ($asad = mysqli_fetch_array($asd1)){
		echo "<option value='".$asad[0]."'>".$asad[1]." </option>";
	}

echo "</select>";	
}

else if($a){
	echo "<select><option> Select </option>"; 

$q = mysqli_query($con,"SELECT Area_Name from area where City_Id=$a");

	while ($b = mysqli_fetch_array($q)){
		echo "<option>".$b[0]." </option>";
	}

echo "</select>";	
}






?>

