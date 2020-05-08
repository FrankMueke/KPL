
<?php require('connection.php');
$sql="select * from fixtures ORDER BY date DESC";
$query=mysqli_query($con,$sql);

echo "<table border=1>";
echo "<tr><th>Home Team</th><th>Away Team</th><th>Stadium</th><th>Date</th><th>Time</th></tr>";
while ($result=mysqli_fetch_array($query)) 
{

    echo "<tr><td>$result[1]</td><td>$result[2]</td><td>$result[3]</td><td>$result[4]</td><td>$result[5]</td></tr>";
}
echo "</table>";
?>