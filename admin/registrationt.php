
<?php
require('../connection.php');
?>
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
    <h2>Team Registration Form</h2>
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
        <input class="form-control" type="file" name="logo" placeholder="Logo" required="">
        <input class="form-control" type="text" name="coachname" placeholder="Coach Name" required="">
        <input class="form-control" type="text" name="ownername" placeholder="Owner Name" required="">
        <input class="form-control" type="text" name="admin" placeholder="Admin" required="">
          <select class="form-control" name="stadium" required="">
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
        <select class="form-control" name="homecounty" required="">
            <option value="" disabled selected>-- Select the home county --
            <option value='Baringo'>Baringo</option>
            <option value='Bomet'>Bomet</option>
            <option value='Bungoma'>Bungoma</option>
            <option value='Busia'>Busia</option>
            <option value='Elgeyo-Marakwet'>Elgeyo-Marakwet</option>
            <option value='Embu'>Embu</option>
            <option value='Garissa'>Garissa</option>
            <option value='Homa Bay'>Homa Bay</option>
            <option value='Isiolo'>Isiolo</option>
            <option value='Kajiado'>Kajiado</option>
            <option value='Kakamega'>Kakamega</option>
            <option value='Kericho'>Kericho</option>
            <option value='Kiambu'>Kiambu</option>
            <option value='Kilifi'>Kilifi</option>
            <option value='Kirinyaga'>Kirinyaga</option>
            <option value='Kisii'>Kisii</option>
            <option value='Kisumu'>Kisumu</option>
            <option value='Kitui'>Kitui</option>
            <option value='Kwale'>Kwale</option>
            <option value='Laikipia'>Laikipia</option>
            <option value='Lamu'>Lamu</option>
            <option value='Machakos'>Machakos</option>
            <option value='Makueni'>Makueni</option>
            <option value='Mandera'>Mandera</option>
            <option value='Marsabit'>Marsabit</option>
            <option value='Meru'>Meru</option>
            <option value='Migori'>Migori</option>
            <option value='Mombasa'>Mombasa</option>
            <option value='Murang'a'>Murang'a</option>
            <option value='Nairobi City'>Nairobi City</option>
            <option value='Nakuru'>Nakuru</option>
            <option value='Nandi'>Nandi</option>
            <option value='Narok'>Narok</option>
            <option value='Nyamira'>Nyamira</option>
            <option value='Nyandarua'>Nyandarua</option>
            <option value='Nyeri'>Nyeri</option>
            <option value='Samburu'>Samburu</option>
            <option value='Siaya'>Siaya</option>
            <option value='Taita-Taveta'>Taita-Taveta</option>
            <option value='Tana River'>Tana River</option>
            <option value='Tharaka-Nithi'>Tharaka-Nithi</option>
            <option value='Trans Nzoia'>Trans Nzoia</option>
            <option value='Turkana'>Turkana</option>
            <option value='Uasin Gishu'>Uasin Gishu</option>
            <option value='Vihiga'>Vihiga</option>
            <option value='West Pokot'>West Pokot</option>
            <option value='wajir'>wajir</option>
        </select>
        <input class="form-control" type="email" name="email" placeholder="Email" required="">
        <input  class="form-control" type="password" name="password1" placeholder="Password" required="">
        <input  class="form-control" type="password" name="password2" placeholder="Confirm Password">
        <input submit class="btn btn-primary" type="submit" name="Submit" value="Submit">



<a href="indexa.php">Back</a>
</form>
</div>
</div>

</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $logo = $_POST['logo'];
    $coachname = $_POST['coachname'];
    $ownername = $_POST['ownername'];
    $stadium = $_POST['stadium'];
    $admin = $_POST['admin'];
    $email = $_POST['email'];
    $password = $_POST['password1'];
    $homecounty = $_POST['homecounty'];
    if ($_POST['password1'] == $_POST['password2']) {
        $hash_pass = md5($password);
        $sql = "INSERT INTO teams(name,logo,coach,owner,stadium,admin,email,password,home_county)
VALUES ('$name', '$logo', '$coachname', '$ownername', '$stadium', '$admin', '$email', '$hash_pass', '$homecounty')";
    } else {
        echo "Passwords do not match";
    }
    $query = mysqli_query($con, $sql);
    if ($query) {
        echo "New Record Added Successfully";
    } else {
        echo "Error Adding Record" . mysqli_error($con);
    }
}
mysqli_close($con);
?>
<?php include("../footer.php") ?> 