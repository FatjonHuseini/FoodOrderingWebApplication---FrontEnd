<!DOCTYPE html>
<html>

<head>
	<style>
		table,
		td,
		th {
			border: 1px solid black;

		}

		table {
			border-collapse: collapse;
			width: 50%;
			text-align: center;
			margin-left: 350px;
		}

		th {
			height: 50px;
		}
	</style>
</head>

<body>
	<?php

	include("db_connect.php");


	$query = "select * from reservations";

	$result = mysqli_query($conn, $query);
	echo "<table>";
	echo "<tr><th>Name</th><th>Number of people</th><th>Date</th><th>Time</th></tr>";
	while ($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>";
		echo $row['name'];
		echo "</td>";
		echo "<td>";
		echo $row['nr'];
		echo " </td>";
		echo "<td>";
		echo $row['date'];
		echo " </td>";
		echo "<td>";
		echo $row['time'];
		echo " </td>";
		echo "</tr>";
	}
	echo "</table>";
	?>
</body>

</html>