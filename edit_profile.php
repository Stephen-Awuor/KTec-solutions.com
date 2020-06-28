<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: clientlogin.php');
	exit();
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'clients';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$id=$_SESSION['id'];
extract($_REQUEST);
if(isset($update))
{
mysqli_query($con,"update client_portal_user_register SET username = '$username', email = '$email', fname = '$fname', lname = '$lname', company = '$company' where id = ?");
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Edit Profile</title>
		<link rel="stylesheet" href="css/portalhome.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>KANEYA TEC-SOLUTIONS LIMITED</h1>
				<a href="welcome.php"><i class="fas fa-user-circle"></i>Back</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Edit Your Profile</h2>	
			<?php		
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT username, email, fname, lname, company FROM client_portal_user_register WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($username, $email, $fname, $lname, $company);
$stmt->fetch();
$stmt->close();	
?>		
   <div class="container">
   <form action="edit_profile.php" method="post">
    <div class="form-group">
      <label for="username">Username:</label>
    <input type="text" name="username" value="<?=$_SESSION['username']?>"class="form-control"/>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" name="email" value="<?=$email?>"class="form-control"/>
    </div>
	<div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" name="fname" value="<?=$fname?>"class="form-control"/>
    </div>
	<div class="form-group">
      <label for="lname">Last Name:</label>
     <input type="text" name="lname" value="<?=$lname?>"class="form-control"/>
    </div>
	<div class="form-group">
      <label for="company">Company:</label>
      <input type="text" name="company" value="<?=$company?>"class="form-control"/>
    </div>
<!--    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>-->
    <input type = "submit" name = "update" value = "SAVE CHANGES"/>
  </form>
</div>
</div>
</body>
</html>