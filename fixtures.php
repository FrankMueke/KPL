
<?php
require('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="main.css">
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
<nav class="navbar navbar-expand-lg bg-dark">
        
        <a class="navbar-brand" href="#">
        <img src="image/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <i class="fa fa-user" aria-hidden="true"></i>
        icon
      </a>
      <!--links-->
                <button class="navbar-toggler dropdown-toggle" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse float-md-right" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="registrationt.php">Clubs</a>
                            </li>    
                            
                            <li class="nav-item">
                                <a class="nav-link" href="referees.php">Referees</a>
                        
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="players.php">Players</a>
                            </li>    
                            <li class="nav-item">
                                <a class="nav-link" href="stadiums.php">Stadiums</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="transfers.php">Transfers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admins.php">Admins</a>
                            </li>
                            <li class="nav-item" id="logoutbtn">
                                <a class="nav-link" href="logout.php">Logout</a>

                            </li>
                         </ul>
                     </div>
         </nav>
<div class="bg-light container" >
<div class="form-group" >   
<form method="POST" action="" class="login">
    <h2>Team Fixtures Form</h2>
        <select class="form-control" name="hometeam">
            <option disabled selected>-- Select a team --</option>
            <option>Gor Mahia</option>
            <option>Kimathi all stars</option>
            <option>Tusker</option>
            <option>AFC Leopards</option>
            <option>Sofapaka</option>
            <option>Nzoia Sugar</option>
            <option>KCB</option>
            <option>Kakamega Home Boys</option>
            <option>Bandari FC</option>
            <option>Kariobangi Sharks</option>
            <option>SChemelil Sugar</option>
            <option>Vihiga United</option>
            <option>Mathare United</option>
            <option>Zoo Kericho</option>
            <option>Nakumatt</option>
            <option>Western Stima</option>
            <option>Wazito FC</option>
            <option>Mount Kenya United</option>
        </select>
       <select class="form-control" name="awayteam">
            <option disabled selected>-- Select a team --</option>
            <option>Gor Mahia</option>
            <option>Kimathi all stars</option>
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
        <input class="form-control" type="date" name="date" placeholder="date">
      <select class="form-control" name="time">
            <option disabled selected>-- Select time --</option>
            <option>14:00</option>
            <option>14:30</option>
            <option>15:00</option>
            <option>16:00</option>
            <option>16:30</option>
            <option>17:00</option>
            <option>18:00</option>
            <option>18:30</option>
            <option>19:00</option>
            <option>19:30</option>
            <option>20:00</option>
            <option>20:00</option>
            <option>20:30</option>
            <option>20:45</option>
            <option>21:00</option>
        </select>
       <select class="form-control" name="stadium">
            <option disabled selected>-- Select a stadium --</option>
            <option>Moi International Sports Centre, Kasarani</option>
            <option>Nyayo National Stadium</option>
            <option>Moi Stadium Kisumu</option>
            <option>Bukhungu Stadium</option>
            <option>Afraha Stadium</option>
            <option>Muhoroni Stadium</option>
            <option>Moi Kinoru Stadium</option>
            <option>Nairobi City Stadium</option>
            <option>Kenyatta Stadium</option>
            <option>Mombasa Municipal Stadium</option>
            <option>Kipchoge Keino Stadium</option>
            <option>Mumias Sports Complex</option>
            <option>Gusii Stadium</option>
            <option>Awendo Green Stadium</option>
            <option>Narok Stadium</option>
            <option>Western Stima</option>
            <option>Thika Municipal Stadium</option>
            <option>Chemelil Sports Complex</option>
        </select>
<input submit class="btn btn-primary" type="submit" name="Submit" value="Submit">     
<a href="admin/indexa.php">Back</a>
</form>
</div>
</div>

</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $hometeam = $_POST['hometeam'];
    $awayteam = $_POST['awayteam'];
    $stadium = $_POST['stadium'];
    $date = $_POST['date'];
    $time = $_POST['time'];
        $sql = "INSERT INTO fixtures(home_team,away_team,stadium,date,time)
VALUES ('$hometeam', '$awayteam', '$stadium', '$date', '$time')";
    $query = mysqli_query($con, $sql);
    if ($query) {
        echo "New Record Added Successfully";
    } else {
        echo "Error Adding Record" . mysqli_error($con);
    }
}
mysqli_close($con);
?>
<?php include("footer.php") ?> 
<html>
<head>
    <title>Your Website Title</title>
</head>
<body>

    <!-- Load jQuery -->
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>

    <!-- Load Stats FC Fixtures SDK -->
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://statsfc-4f51.kxcdn.com/widget/fixtures-2.0.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'statsfc-fixtures-js'));
    </script>

    <!-- Your fixtures here -->
    <div class="statsfc-fixtures"
        data-key="YOUR STATSFC KEY"
        data-competition="EPL"
        data-show-badges="true"
        data-use-default-css="true">
    </div>

</body>
</html>