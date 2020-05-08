<?php
require('connection.php');
$sql="select * from league_table ORDER BY points DESC";
$query=mysqli_query($con,$sql);

echo "<table border=1>";
echo "<tr><th>Position</th><th>Name</th><th>Gplayed</th><th>Wins</th><th>Draws</th><th>Loss</th><th>GoalsScored</th><th>GoalsConceded</th><th>Points</th></tr>";
while ($result=mysqli_fetch_array($query)) 
{

    echo "<tr><td>$result[1]</td><td>$result[2]</td><td>$result[3]</td><td>$result[4]</td><td>$result[5]</td><td>$result[6]</td><td>$result[7]</td><td>$result[8]</td><td>$result[9]</td></tr>";
}
echo "</table>";
?>