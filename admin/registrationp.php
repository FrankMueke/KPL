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
	<h2>Player Registration Form</h2>
		<input class="form-control" type="email" name="email" placeholder="Email" required="">
		<input class="form-control" type="text" name="firstname" placeholder="Firstname" required="">
		<input class="form-control" type="text" name="lastname" placeholder="Lastname" required="">
		<select class="form-control" name="nationality" required="">
      <option disabled selected>-- Select the home country --
      <option value="AF">Afghanistan</option>
      <option value="AX">Åland Islands</option>
      <option value="AL">Albania</option>
      <option value="DZ">Algeria</option>
      <option value="AS">American Samoa</option>
      <option value="AD">Andorra</option>
      <option value="AO">Angola</option>
      <option value="AI">Anguilla</option>
      <option value="AQ">Antarctica</option>
      <option value="AG">Antigua and Barbuda</option>
      <option value="AR">Argentina</option>
      <option value="AM">Armenia</option>
      <option value="AW">Aruba</option>
      <option value="AU">Australia</option>
      <option value="AT">Austria</option>
      <option value="AZ">Azerbaijan</option>
      <option value="BS">Bahamas</option>
      <option value="BH">Bahrain</option>
      <option value="BD">Bangladesh</option>
      <option value="BB">Barbados</option>
      <option value="BY">Belarus</option>
      <option value="BE">Belgium</option>
      <option value="BZ">Belize</option>
      <option value="BJ">Benin</option>
      <option value="BM">Bermuda</option>
      <option value="BT">Bhutan</option>
      <option value="BO">Bolivia, Plurinational State of</option>
      <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
      <option value="BA">Bosnia and Herzegovina</option>
      <option value="BW">Botswana</option>
      <option value="BV">Bouvet Island</option>
      <option value="BR">Brazil</option>
      <option value="IO">British Indian Ocean Territory</option>
      <option value="BN">Brunei Darussalam</option>
      <option value="BG">Bulgaria</option>
      <option value="BF">Burkina Faso</option>
      <option value="BI">Burundi</option>
      <option value="KH">Cambodia</option>
      <option value="CM">Cameroon</option>
      <option value="CA">Canada</option>
      <option value="CV">Cape Verde</option>
      <option value="KY">Cayman Islands</option>
      <option value="CF">Central African Republic</option>
      <option value="TD">Chad</option>
      <option value="CL">Chile</option>
      <option value="CN">China</option>
      <option value="CX">Christmas Island</option>
      <option value="CC">Cocos (Keeling) Islands</option>
      <option value="CO">Colombia</option>
      <option value="KM">Comoros</option>
      <option value="CG">Congo</option>
      <option value="CD">Congo, the Democratic Republic of the</option>
      <option value="CK">Cook Islands</option>
      <option value="CR">Costa Rica</option>
      <option value="CI">Côte d'Ivoire</option>
      <option value="HR">Croatia</option>
      <option value="CU">Cuba</option>
      <option value="CW">Curaçao</option>
      <option value="CY">Cyprus</option>
      <option value="CZ">Czech Republic</option>
      <option value="DK">Denmark</option>
      <option value="DJ">Djibouti</option>
      <option value="DM">Dominica</option>
      <option value="DO">Dominican Republic</option>
      <option value="EC">Ecuador</option>
      <option value="EG">Egypt</option>
      <option value="SV">El Salvador</option>
      <option value="GQ">Equatorial Guinea</option>
      <option value="ER">Eritrea</option>
      <option value="EE">Estonia</option>
      <option value="ET">Ethiopia</option>
      <option value="FK">Falkland Islands (Malvinas)</option>
      <option value="FO">Faroe Islands</option>
      <option value="FJ">Fiji</option>
      <option value="FI">Finland</option>
      <option value="FR">France</option>
      <option value="GF">French Guiana</option>
      <option value="PF">French Polynesia</option>
      <option value="TF">French Southern Territories</option>
      <option value="GA">Gabon</option>
      <option value="GM">Gambia</option>
      <option value="GE">Georgia</option>
      <option value="DE">Germany</option>
      <option value="GH">Ghana</option>
      <option value="GI">Gibraltar</option>
      <option value="GR">Greece</option>
      <option value="GL">Greenland</option>
      <option value="GD">Grenada</option>
      <option value="GP">Guadeloupe</option>
      <option value="GU">Guam</option>
      <option value="GT">Guatemala</option>
      <option value="GG">Guernsey</option>
      <option value="GN">Guinea</option>
      <option value="GW">Guinea-Bissau</option>
      <option value="GY">Guyana</option>
      <option value="HT">Haiti</option>
      <option value="HM">Heard Island and McDonald Islands</option>
      <option value="VA">Holy See (Vatican City State)</option>
      <option value="HN">Honduras</option>
      <option value="HK">Hong Kong</option>
      <option value="HU">Hungary</option>
      <option value="IS">Iceland</option>
      <option value="IN">India</option>
      <option value="ID">Indonesia</option>
      <option value="IR">Iran, Islamic Republic of</option>
      <option value="IQ">Iraq</option>
      <option value="IE">Ireland</option>
      <option value="IM">Isle of Man</option>
      <option value="IL">Israel</option>
      <option value="IT">Italy</option>
      <option value="JM">Jamaica</option>
      <option value="JP">Japan</option>
      <option value="JE">Jersey</option>
      <option value="JO">Jordan</option>
      <option value="KZ">Kazakhstan</option>
      <option value="KE">Kenya</option>
      <option value="KI">Kiribati</option>
      <option value="KP">Korea, Democratic People's Republic of</option>
      <option value="KR">Korea, Republic of</option>
      <option value="KW">Kuwait</option>
      <option value="KG">Kyrgyzstan</option>
      <option value="LA">Lao People's Democratic Republic</option>
      <option value="LV">Latvia</option>
      <option value="LB">Lebanon</option>
      <option value="LS">Lesotho</option>
      <option value="LR">Liberia</option>
      <option value="LY">Libya</option>
      <option value="LI">Liechtenstein</option>
      <option value="LT">Lithuania</option>
      <option value="LU">Luxembourg</option>
      <option value="MO">Macao</option>
      <option value="MK">Macedonia, the former Yugoslav Republic of</option>
      <option value="MG">Madagascar</option>
      <option value="MW">Malawi</option>
      <option value="MY">Malaysia</option>
      <option value="MV">Maldives</option>
      <option value="ML">Mali</option>
      <option value="MT">Malta</option>
      <option value="MH">Marshall Islands</option>
      <option value="MQ">Martinique</option>
      <option value="MR">Mauritania</option>
      <option value="MU">Mauritius</option>
      <option value="YT">Mayotte</option>
      <option value="MX">Mexico</option>
      <option value="FM">Micronesia, Federated States of</option>
      <option value="MD">Moldova, Republic of</option>
      <option value="MC">Monaco</option>
      <option value="MN">Mongolia</option>
      <option value="ME">Montenegro</option>
      <option value="MS">Montserrat</option>
      <option value="MA">Morocco</option>
      <option value="MZ">Mozambique</option>
      <option value="MM">Myanmar</option>
      <option value="NA">Namibia</option>
      <option value="NR">Nauru</option>
      <option value="NP">Nepal</option>
      <option value="NL">Netherlands</option>
      <option value="NC">New Caledonia</option>
      <option value="NZ">New Zealand</option>
      <option value="NI">Nicaragua</option>
      <option value="NE">Niger</option>
      <option value="NG">Nigeria</option>
      <option value="NU">Niue</option>
      <option value="NF">Norfolk Island</option>
      <option value="MP">Northern Mariana Islands</option>
      <option value="NO">Norway</option>
      <option value="OM">Oman</option>
      <option value="PK">Pakistan</option>
      <option value="PW">Palau</option>
      <option value="PS">Palestinian Territory, Occupied</option>
      <option value="PA">Panama</option>
      <option value="PG">Papua New Guinea</option>
      <option value="PY">Paraguay</option>
      <option value="PE">Peru</option>
      <option value="PH">Philippines</option>
      <option value="PN">Pitcairn</option>
      <option value="PL">Poland</option>
      <option value="PT">Portugal</option>
      <option value="PR">Puerto Rico</option>
      <option value="QA">Qatar</option>
      <option value="RE">Réunion</option>
      <option value="RO">Romania</option>
      <option value="RU">Russian Federation</option>
      <option value="RW">Rwanda</option>
      <option value="BL">Saint Barthélemy</option>
      <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
      <option value="KN">Saint Kitts and Nevis</option>
      <option value="LC">Saint Lucia</option>
      <option value="MF">Saint Martin (French part)</option>
      <option value="PM">Saint Pierre and Miquelon</option>
      <option value="VC">Saint Vincent and the Grenadines</option>
      <option value="WS">Samoa</option>
      <option value="SM">San Marino</option>
      <option value="ST">Sao Tome and Principe</option>
      <option value="SA">Saudi Arabia</option>
      <option value="SN">Senegal</option>
      <option value="RS">Serbia</option>
      <option value="SC">Seychelles</option>
      <option value="SL">Sierra Leone</option>
      <option value="SG">Singapore</option>
      <option value="SX">Sint Maarten (Dutch part)</option>
      <option value="SK">Slovakia</option>
      <option value="SI">Slovenia</option>
      <option value="SB">Solomon Islands</option>
      <option value="SO">Somalia</option>
      <option value="ZA">South Africa</option>
      <option value="GS">South Georgia and the South Sandwich Islands</option>
      <option value="SS">South Sudan</option>
      <option value="ES">Spain</option>
      <option value="LK">Sri Lanka</option>
      <option value="SD">Sudan</option>
      <option value="SR">Suriname</option>
      <option value="SJ">Svalbard and Jan Mayen</option>
      <option value="SZ">Swaziland</option>
      <option value="SE">Sweden</option>
      <option value="CH">Switzerland</option>
      <option value="SY">Syrian Arab Republic</option>
      <option value="TW">Taiwan, Province of China</option>
      <option value="TJ">Tajikistan</option>
      <option value="TZ">Tanzania, United Republic of</option>
      <option value="TH">Thailand</option>
      <option value="TL">Timor-Leste</option>
      <option value="TG">Togo</option>
      <option value="TK">Tokelau</option>
      <option value="TO">Tonga</option>
      <option value="TT">Trinidad and Tobago</option>
      <option value="TN">Tunisia</option>
      <option value="TR">Turkey</option>
      <option value="TM">Turkmenistan</option>
      <option value="TC">Turks and Caicos Islands</option>
      <option value="TV">Tuvalu</option>
      <option value="UG">Uganda</option>
      <option value="UA">Ukraine</option>
      <option value="AE">United Arab Emirates</option>
      <option value="GB">United Kingdom</option>
      <option value="US">United States</option>
      <option value="UM">United States Minor Outlying Islands</option>
      <option value="UY">Uruguay</option>
      <option value="UZ">Uzbekistan</option>
      <option value="VU">Vanuatu</option>
      <option value="VE">Venezuela, Bolivarian Republic of</option>
      <option value="VN">Viet Nam</option>
      <option value="VG">Virgin Islands, British</option>
      <option value="VI">Virgin Islands, U.S.</option>
      <option value="WF">Wallis and Futuna</option>
      <option value="EH">Western Sahara</option>
      <option value="YE">Yemen</option>
      <option value="ZM">Zambia</option>
      <option value="ZW">Zimbabwe</option>
</select>
<select class="form-control" name="club">
            <option disabled selected>-- Select the team --</option>
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
		<select class="form-control" name="position" required="">
            <option disabled selected>-- Select Player Position --</option>
            <option>GK</option>
            <option>RB</option>
            <option>CB</option>
            <option>LB</option>
            <option>DM</option>
            <option>CM</option>
            <option>LM</option>
            <option>RM</option>
            <option>AM</option>
            <option>CF</option>
            <option>WF</option>
        </select>
		<input class="form-control" type="number" name="gscored" min="0" max="100" placeholder="Goals Scored" required="">
		<input  class="form-control" type="password" name="password1" placeholder="Password" required="">
		<input  class="form-control" type="password" name="password2" placeholder="Confirm Password" required="">
		<input submit class="btn btn-primary" type="submit" name="Submit" value="Submit">
<a href="indexa.php">Back</a>
</form>
</div>
</div>

</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Email = $_POST['email'];
    $Password = $_POST['password1'];
    $Firstname = $_POST['firstname'];
    $Lastname = $_POST['lastname'];
    $Nationality = $_POST['nationality'];
    $Club = $_POST['club'];
    $Position = $_POST['position'];
    $Gscored = $_POST['gscored'];



    if ($_POST['password1'] == $_POST['password2']) {
        $hash_pass = md5($Password);
        $sql = "INSERT INTO `players` (`player_id`, `email`, `password`, `first_name`, `last_name`, `nationality`, `club`, `position`, `gscored`) VALUES (NULL, '$Email', '$hash_pass', '$Firstname', '$Lastname', '$Nationality', '$Club', '$Position', '$Gscored')";
       //$sql = "INSERT INTO `players`(`email`, `password`, `first_name`, `last_name`, `nationality`, `club`, `position`, `gscored`, `team_id`) VALUES('$Email', '$hash_pass',`$Firstname`, `$Lastname`, `$Nationality`,'$Club','$Position','Gscored')";
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