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
		<title>Transactions</title>
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
			<h2>My Transactions</h2>
			<div>
			<H4>Username: <?=$_SESSION['username']?></H4>

  <p><strong>View your Transactions below:</strong></p> 
  <!--<button onclick="window.print()">Print</button>-->
			<?php
		$stmt = $con->prepare("SELECT id,user_id,Transaction_date,Service_type,Payment_mode,Cheque_no,Amount,Mpesa_code,Client_name FROM payments WHERE user_id = ?");

		$stmt->bind_param('i', $_SESSION['id']);
		$stmt->execute();
		$stmt->bind_result($id,$user_id,$Transaction_date,$Service_type,$Payment_mode,$Cheque_no,$Amount,$Mpesa_code,$Client_name);
		while ($stmt->fetch()) {
   echo"<table class='table table-striped w-auto'>";
  echo"<thead>";
   echo"<tr>";
     echo"<th>Transaction Date</th>";
     echo"<th>Service Type</th>";
     echo"<th>Payment Mode</th>";
     echo"<th>Cheque No</th>";
     echo"<th>Amount</th>";
     echo"<th>Mpesa Code</th>";
	  echo"<th>Full Names</th>";
	  echo"<th>User id</th>";

    echo"</tr>";
  "</thead>";
  "<tbody>";
  "<tr class='table table-striped'>";
echo"<td>$Transaction_date</td>";
echo"<td>$Service_type</td>";
echo"<td>$Payment_mode</td>";
echo"<td>$Cheque_no</td>";
echo"<td>$Amount</td>";
echo"<td>$Mpesa_code</td>";
echo"<td>$Client_name</td>";
echo"<td>$user_id</td>";

echo"</tr>";
echo"</tbody>";
echo"</table>";
}
$stmt->close();
?>
</body>
</html>
