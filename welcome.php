<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: clientlogin.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Client Portal</title>
		<link rel="stylesheet" href="css/portalhome.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>KANEYA TEC-SOLUTIONS LTD</h1>
		    <p>Welcome, <?=$_SESSION['username']?>!</p>
			<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
			<!--	<a href="reset-password.php"><i class="fas fa-sign-out-alt"></i>Reset Your Password</a>-->
			<br><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			<!--<a href="Home.php"><i class="fas fa-sign-out-alt"></i>Back to Website</a>-->
			</div>
		</nav>
	<div style="margin-top:-45px; padding: 20px;">
            <a href="welcome.php" style="text-decoration:none; color: #c1c4c8">Home</a>&nbsp;&nbsp;&nbsp;
            <a href="profile.php" style="text-decoration:none; color: #c1c4c8">Account</a>&nbsp;&nbsp;&nbsp;
			<a href="portalmessages.php" style="text-decoration:none; color: #c1c4c8">Messages</a>&nbsp;&nbsp;&nbsp;
			<a href="portalcontactus.php" style="text-decoration:none; color: #c1c4c8" target="_blank" rel="noopener noreferrer">Quote</a>&nbsp;&nbsp;&nbsp;
			<a href="profile.php" style="text-decoration:none; color: #c1c4c8">Settings</a>&nbsp;&nbsp;&nbsp;
			<a href="Contactus.php" style="text-decoration:none; color: #c1c4c8">Support</a>
             </div>
		<div class="content">
			<h2>Welcome to the Clients Portal</h2>
			<div style="background-image: url('Images/img10.jpg');">	
		</div>
		 <ul>
        <li>
            <a href="#">Usefull Links &#9662;</a>
            <ul class="dropdown">
                <li><a href="portalmessages.php">Messages</a></li>
				<li><a href="portalcontactus.php" target="_blank" rel="noopener noreferrer">Get A Quote</a>
                <li><a href="Payments.php">Make a Transaction</a></li>
				<li><a href="portaltransactions.php">View Transactions</a></li>
				<li><a href="profile.php">Settings</a></li>
            </ul>
        </li>
    </ul>
  </body>
</html>