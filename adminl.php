<?php 
session_start();
?>
<?php 

require('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>AdminLogin</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<style >
.form {
  margin: 20px auto;
  width: 300px;
  padding: 30px 25px;
  background: white;
  border: 1px solid #c4c4c4;
}

h2{
  margin: -28px -25px 25px;
  padding: 15px 25px;
  line-height: 20px;
  font-size: 20px;
  font-weight: bold;
  color: green;
  text-align:center;
  background: #f7f7f7;
 
}

.form-control {
  width: 250px;
  height: 50px;
  margin-bottom: 25px;
  padding-left:10px;
  font-size: 15px;
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.login-input:focus {
    border-color:#6e8095;
    outline: none;
  }
.btnlogin{
  width: 100%;
  height: 50px;
  padding: 0;
  font-size: 20px;
  color: #fff;
  text-align: center;
  background: #f0776c;
  border: 0;
  border-radius: 5px;
  cursor: pointer; 
  outline:0;
}
</style>
<body>
<nav class="navbar navbar-expand-lg white">
        
        <a class="navbar-brand" href="#">
        <img src="image/icon.jpeg" width="50" height="50" class="d-inline-block align-top" alt="">
      </a>
      <!--links-->
                <button class="navbar-toggler dropdown-toggle" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse float-md-right" id="navbarNavDropdown">
                        <ul class="navbar-nav" style="background-color: rgb(238, 130, 238); width: 100%;text-transform: uppercase;font-weight: bold;font-size: 18px;>
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aboutus.php">About Us</a>
                            </li>    
                            <li class="nav-item">
                                <a class="nav-link" href="fixtures.php">Fixtures</a>
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
                    
                         </ul>
                     </div>
         </nav>
<div class="wrapper">
<form method="POST" action="" class="form">
<h2>Admin Login Form</h2>

<input class="form-control" type="text" name="email" placeholder="Email">
<input class="form-control" type="password" name="password" placeholder="Password">
<input submit class="btnlogin" type="submit" name="Submit" value="Login">
</form>
</div>
 <p><br/></p>
         <p><br/></p>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password =$_POST['password'];
    $sql = "SELECT *FROM admin WHERE email='$email' AND password='$password' ";
    $results = mysqli_query($con, $sql);
    $rows = mysqli_num_rows($results);

    if ($rows == 1) {
        $_SESSION['email'] = $email;
        header('Location:admin/indexa.php') ;
    } else {
        echo "<font color='red'>Login failed!</font>";
    }
    mysqli_close($con);
}
?>
        
<?php include("footer.php") ?> 