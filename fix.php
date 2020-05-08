
<?php
// require('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KPL Home page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <style type='text/css'>
    .c
    {
         background-image: url('image/animation.png');
    }
    .b
    {
         background-color: rgba(0,0,0,0.4);
    }
    </style>
</head>
<body class=''>
<nav class="navbar navbar-expand-lg bg-green">
        
        <a class="navbar-brand" href="#">
        <img src="image/icon.jpeg" width="150" height="150" class="d-inline-block align-top" alt="icon">
      </a>
                    <div class="collapse navbar-collapse float-md-right" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <p><b><h1 style="color:red;">This is the Official Website Of<br/>
                                The Kenya Premier League</h1></b></p>
                            </li>
                            <li class="nav-item">
                                <img src="image/nakumatt.jpeg" width="40" height="40"alt="icon">
                            </li>   
                            <li class="nav-item">
                                <img src="image/zoo.jpeg" width="40" height="40"alt=" ">
                            </li>
                            <li class="nav-item">
                                <img src="image/gor.png" width="40" height="40"alt="icon">
                        
                            </li>
                            <li class="nav-item">
                                <img src="image/sharks.png" width="40" height="40"alt=" ">
                            </li>    
                            <li class="nav-item">
                                <img src="image/tusker.jpeg" width="40" height="40" alt="icon">
                            </li>
                            <li class="nav-item">
                                <img src="image/kakamega.jpeg" width="40" height="40"alt="icon">
                            </li>
                            <li class="nav-item">
                                <img src="image/sofapaka.jpeg" width="40" height="40"alt="icon">
                            </li>
                            <li class="nav-item">
                                <img src="image/icon.jpeg" width="150" height="150"alt="icon">
                            </li>
                             <li class="nav-item">
                                <p><b><h1 style="color: rgb(106, 90, 205);">SportPesa</h1></b></p>
                            </li>
                         </ul>
                     </div>
         </nav>
<nav class="navbar navbar-expand-lg bg-green">
        
        <a class="navbar-brand" href="#">
        <img src="image/icon.jpeg" width="40" height="40" class="d-inline-block align-top" alt="icon">
      </a>
      <!--links-->
                <!-- <button class="navbar-toggler dropdown-toggle" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                    <div class="collapse navbar-collapse float-md-right" id="navbarNavDropdown">
                        <ul class="navbar-nav"style="background-color: rgb(238, 130, 238); width: 100%;text-transform: uppercase;font-weight: bold;>
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aboutus.php">About Us</a>
                            </li>    
                            <li class="nav-item">
                                <a class="nav-link" href="fix.php">Fixtures</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="leaguetable.php">League table</a>
                        
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tscorers.php">Top Scorers</a>
                            </li>    
                            <li class="nav-item">
                                <a class="nav-link" href="news.php">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="transfers.php">Transfers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contactus.php">Contact Us</a>
                            </li>
                            <li class="nav-item" id="loginbtn">
                                <a class="nav-link" href="adminl.php">Login</a>

                            </li>
                         </ul>
                     </div>
         </nav>
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

$sql = "SELECT name FROM teams ORDER BY name";
$result = mysqli_query($con,$sql);

while($r=mysqli_fetch_array($result))
{
echo $r['name'].",";

// $data = serialize($r);
// echo $data;
              

// $clubs = array(
//     'Gor Mahia', 'Ulinzi Stars', 'Tusker Utd', 'AFC Leopards', 'Sofapaka', 'Nzoia Sugar', 'KCB', 'Kakamega Homeboyz', 'Bandari Fc', 'Kariobangi sharks', 'Chemilil Sugar', 'Vihiga Utd', 'Mathare Utd', 'Zoo Kericho', 'Nakumatt', 'Western Stima', 'Wazito FC', 'Mount Kenya Utd');
$clubs=array('name');
shuffle($clubs);

$num_players = count($clubs) - 1;

// Set the return value
$ret = '';

// Generate the pairings for each round.
for ($round = 0; $round < $num_players; $round++) {
    $ret .= '<h3> DAY  ' . ($round + 1) . ' TIME:16:00 </h3>';
    $players_done = array();

    // Pair each player except the last.
    for ($player = 1; $player < $num_players; $player++) {
        if (!in_array($player, $players_done)) {
            // Select opponent.
            $opponent = $round - $player;
            $opponent += ($opponent < 0) ? $num_players : 1;

            $playerName = $clubs[$player];
            $opponentName = $clubs[$opponent];

            // Ensure opponent is not the current player.
            if ($opponent != $player) {
                // Choose colours.
                if (($player + $opponent) % 2 == 0 xor $player < $opponent) {
                    // Player plays white.
                    $ret .= "$playerName vs $opponentName <br>";
                } else {
                    // Player plays black.
                    $ret .= "$opponentName vs $playerName <br>";
                }

                // This pair of players are done for this round.
                $players_done[] = $player;
                $players_done[] = $opponent;
            }
        }
    }

    // Pair the last player.
    if ($round % 2 == 0) {
        $playerName = $clubs[$num_players];
        $opponent = ($round + $num_players) / 2;
        $opponentName = $clubs[$opponent];
        // Last player plays white.
        $ret .= "$playerName vs $opponentName <br>";
    } else {
        $opponent = ($round + 1) / 2;
        // Last player plays black.
        $ret .= "$opponentName vs $playerName <br>";
    }
}
}

echo $ret;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ret = $_POST['$ret'];
//         $sql = "INSERT INTO fix(name)
// VALUES ('$ret')";
//     $query = mysqli_query($con, $sql);
//     if ($query) {
//         echo "New Record Added Successfully";
//     } else {
//         echo "Error Adding Record" . mysqli_error($con);
//     }
// }
// mysqli_close($con);
        $sql = "INSERT INTO fix(name)
VALUES ('$ret')";
    $query = mysqli_query($con, $sql);
    if ($query) {
        echo "New Record Added Successfully";
    } else {
        echo "Error Adding Record" . mysqli_error($con);
    }
}
mysqli_close($con);
?>
<?php include "footer.php";
?>