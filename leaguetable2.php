<!DOCTYPE html>
<html>
<head>
	<title>KSL table</title>
	<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

</style>
</head>
<body>
	<div style="margin: 20px; margin-bottom: 40px; ">
	<?php require('connection.php');
	$sql="select * from league_table ORDER BY points DESC";
	$query=mysqli_query($con,$sql);
	echo "<table border=1>";
	echo "<tr><h3><b><th>Pos</th><th>Name</th><th>G.P</th><th>Wins</th><th>Draws</th><th>Loss</th><th>G.S</th><th>G.C</th><th>Pts</th></b></h3></tr>";
	while ($result=mysqli_fetch_array($query)) 
	{

	    echo "<tr><td>$result[1]</td><td>$result[2]</td><td>$result[3]</td><td>$result[4]</td><td>$result[5]</td><td>$result[6]</td><td>$result[7]</td><td>$result[8]</td><td>$result[9]</td></tr>";
	}
	echo "</table>";
	?>
	</div>
</body>
</html>

