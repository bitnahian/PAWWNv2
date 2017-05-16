<!DOCTYPE html>
<html>
<head>
	<style>
		table {
			width: 100%;
			border-collapse: collapse;
		}

		table, td, th {
			border: 1px solid black;
			padding: 5px;
		}

		th {text-align: left;}
	</style>
</head>
<body>



	<?php

$connection = mysqli_connect("localhost", "root"); // Establishing connection with server..

if(!$connection)
{
	die("Connection failed: " . mysqli_connect_error());
}

$db = mysqli_select_db($connection, "pawwn"); // Selecting Database.

$query=$_GET['query']; // Fetching keywords

$result = mysqli_query($connection, "SELECT name, email, address1, phone, city, state, postcode FROM clc WHERE " .$query);

if(!$result)
{
	echo "Unable to find any results.";
	mysqli_close($connection);
	exit(1);
}
echo "<table>
<tr>
	<th>Name</th>
	<th>Email</th>
	<th>Address</th>
	<th>Phone</th>
	<th>City</th>
	<th>State</th>
	<th>Post Code</th>
    <th>Apply</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['email'] . "</td>";
	echo "<td>" . $row['address1'] . "</td>";
	echo "<td>" . $row['phone'] . "</td>";
	echo "<td>" . $row['city'] . "</td>";
	echo "<td>" . $row['state'] . "</td>";
	echo "<td>" . $row['postcode'] . "</td>";
    echo "<td> <a href ='application.php' > Apply </a> </td>"; 
	echo "</tr>";
}
echo "</table>";
mysqli_close($connection);
?>

</body>
</html>