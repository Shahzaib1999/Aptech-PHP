<?php

$con = new mysqli("localhost","root",null,"js");

// if($con) {
// 	echo "connected successfully";
// }

$name = $_GET['nam'];

	echo "
		<table class='table table-bordered table-hover'>
		<thead>
		<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Age</th>
		</tr>
		</thead>
		<tbody>"; 

	$asd1 = mysqli_query($con,"SELECT * from table1 where Name Like '$name'");
	
	
		while ($asad = mysqli_fetch_array($asd1)){
			echo "<tr><td>".$asad[0]."</td><td>".$asad[1]."</td><td>".$asad[2]."</td></tr>";
		}

		echo "</tbody></table>";


?>

