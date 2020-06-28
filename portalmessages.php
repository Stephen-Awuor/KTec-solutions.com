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

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Messages</title>
		<link rel="stylesheet" href="css/portalhome.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		 <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
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
			<h2>Messages</h2>
			<div>
			<H4>Username: <?=$_SESSION['username']?></H4>
  <p>View your messages below:</p> 
			<?php
		$stmt = $con->prepare("SELECT id,Message,Date_created,Subject FROM client_message WHERE email = ?");
		$email = $_SESSION['email'];
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($id,$Message,$Date_created,$Subject);
		while ($stmt->fetch()) {

			echo "<div class='panel panel-primary'>";
			echo "<div class='panel-heading'>$Subject</div>";
			echo "<div class='panel-body'><h4>$Message</h4> $Date_created</div>";
			echo  "</div>";
		?>
		
	<?php
}
$stmt->close();
?>
			</div>
</div>
		</div>

	</body>
</html>
