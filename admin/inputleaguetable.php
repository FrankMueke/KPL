<?php
require('../connection.php');
?>
<?php include 'headera.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../main.css">

<style>
	body {

  font: 12px/20px 'Lucida Grande', Verdana, sans-serif;color: #404040; background: #ebc9a2;
}

input, textarea, select, label {
font-family: inherit;font-size: 12px;-webkit-box-sizing: border-box;  -moz-box-sizing: border-box; box-sizing: border-box;
}

.login {
  margin: 20px auto;padding: 18px 20px;width: 400px;background: white;background-clip: padding-box;
  border: 1px solid #172b4e; border-bottom-color: #142647;  border-radius: 3px;
  background-image: -webkit-radial-gradient(cover, #437dd6, #3960a6); 
  background-image: -moz-radial-gradient(cover, #437dd6, #3960a6);
  background-image: -o-radial-gradient(cover, #437dd6, #3960a6); 
   background-image: radial-gradient(cover, #437dd6, #3960a6);
  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), inset 0 0 1px 1px rgba(255, 255, 255, 0.1), 0 2px 10px rgba(0, 0, 0, 0.5);
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), inset 0 0 1px 1px rgba(255, 255, 255, 0.1), 0 2px 10px rgba(0, 0, 0, 0.5);
}

.login > h2 {
  margin-bottom: 20px;font-size: 16px;font-weight: bold;color: white;text-align: center;
}

.form-control {
  display: block;width: 100%;height: 40px;margin-bottom: 20px;padding: 0 9px;color: white;
  background: #2b3e5d;border: 1px solid #15243b;border-top-color: #0d1827;border-radius: 4px;
  background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.2) 20%, rgba(0, 0, 0, 0));
  background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.2) 20%, rgba(0, 0, 0, 0));
  background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.2) 20%, rgba(0, 0, 0, 0));
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.2) 20%, rgba(0, 0, 0, 0));
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.2);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.2);
}

.login-input:focus {
  outline: 0;background-color: #32486d;
 -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3), 0 0 4px 1px rgba(255, 255, 255, 0.6);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3), 0 0 4px 1px rgba(255, 255, 255, 0.6);
}

.lt-ie9 .login-input { line-height: 35px; text-transform: uppercase; }

.login-submit {
  display: block;width: 75%;height: 37px;margin-bottom: 15px;font-size: 14px;font-weight: bold;color: #294779;
  text-align: center;text-shadow: 0 1px rgba(255, 255, 255, 0.3);background: #adcbfa;background-clip: padding-box;
  border: 1px solid #284473;border-bottom-color: #223b66;border-radius: 4px;cursor: pointer;
  background-image: -webkit-linear-gradient(top, #d0e1fe, #96b8ed);
  background-image: -moz-linear-gradient(top, #d0e1fe, #96b8ed);
  background-image: -o-linear-gradient(top, #d0e1fe, #96b8ed);
  background-image: linear-gradient(to bottom, #d0e1fe, #96b8ed);
  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), inset 0 0 7px rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), inset 0 0 7px rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.15);
}

.login-submit:active {
  background: #a4c2f3;
  -webkit-box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.4), 0 1px rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.4), 0 1px rgba(255, 255, 255, 0.1);
}

.login-help {
  text-align: center;
}

.login-help > a {
  font-size: 12px;color: #d4deef;text-decoration: none;
}

.login-help > a:hover {
  text-decoration: underline;
}

::-moz-focus-inner {
  padding: 0;border: 0;
}

:-moz-placeholder { color: #bcc0c8 !important; }
::-webkit-input-placeholder { color: #bcc0c8; }
:-ms-input-placeholder { color: #bcc0c8 !important; }
	
</style>
</head>
<body>

<div class="bg-light container" >
<div class="form-group" >	
<form method="POST" action="" class="login">
	<h2>Update League Form</h2>
		<input class="form-control" type="number" name="position" placeholder="Position" min="1" max="18" required="">
		    <select class="form-control" name="name" required="">
            <option disabled selected>-- Select a team --</option>
            <option>Gor Mahia</option>
            <option>Ulinzi Stars</option>
            <option>Tusker</option>
            <option>AFC Leopards</option>
            <option>Sofapaka</option>
            <option>Nzoia Sugar</option>
            <option>KCB</option>
            <option>Kakamega Home Boys</option>
            <option>Bandari FC</option>
            <option>Kariobangi Sharks</option>
            <option>Chemelil Sugar</option>
            <option>Vihiga United</option>
            <option>Mathare United</option>
            <option>Zoo Kericho</option>
            <option>Nakumatt</option>
            <option>Western Stima</option>
            <option>Wazito FC</option>
            <option>Mount Kenya United</option>
        </select>
		<input class="form-control" type="number" name="gplayed" placeholder="Games played" min="0" max="34" required="">
		<input class="form-control" type="number" name="wins" placeholder="wins" min="0" max="34" required="">
		<input class="form-control" type="number" name="draws" placeholder="Draws" min="0" max="34" required="">
		<input class="form-control" type="number" name="loss" placeholder="Loss" min="0" max="34" required="">
		<input class="form-control" type="number" name="gscored" placeholder="Goals scored" min="0" max="100" required="">
    <input class="form-control" type="number" name="gconceded" placeholder="Goals conceded" min="0" max="100" required="">
		<input class="form-control" type="number" name="points" placeholder="Points" min="0" max="102" required="">
		<input submit class="btn btn-primary" type="submit" name="Submit" value="Submit">
<a href="indexa.php">Back</a>
</form>
</div>
</div>

</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $position = $_POST['position'];
    $name = $_POST['name'];
    $gplayed = $_POST['gplayed'];
    $wins = $_POST['wins'];
    $draws = $_POST['draws'];
    $loss = $_POST['loss'];
    $gscored = $_POST['gscored'];
    $gconceded = $_POST['gconceded'];
    $points = $_POST['points'];

        $sql = "INSERT INTO `league_table` (`position`, `name`, `gplayed`, `wins`, `draws`, `loss`, `gscored`, `gconceded`, `points`) VALUES ('$position', '$name', '$gplayed', '$wins', '$draws', '$loss', '$gscored', '$gconceded', '$points')";

    $query = mysqli_query($con, $sql);
    if ($query) {
        echo "New Record Added Successfully";
    } else {
        echo "Error Adding Record" . mysqli_error($con);
    }
}
mysqli_close($con);
?>