<?php
$con=mysqli_connect('localhost','root','');

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$db=mysqli_select_db($con,'kpl');
if (!$db)
{
    echo 'no database selected';
}

$result = "SELECT * FROM teams";
$rows = mysqli_fetch_array($con,$result);
?>

<!-- Use count to decide when to put a new div with class 'row' -->
<?php $count = 1; ?>

<?php foreach ($rows as $key => $row) { ?>

    <!-- Create a new div with class 'row' on the first item + everytime theres a 4th one -->
    <?php if ($count == 1 || ($count % 4 == 0)) { ?>
        <div class="row">
    <?php } ?>

        <div class="col-dsk-4">
            <?php echo $row["name"]; ?>    
        </div>

    <!-- Close div with class 'row' everytime theres a 4th one -->
    <?php if ($count == 1 || ($count % 4 == 0)) { ?>
        </div>
    <?php } ?>

    <!-- Increment the count -->
    <?php $count++; ?>
<?php } ?>