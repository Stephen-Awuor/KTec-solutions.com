<?php
session_start();

$con = mysqli_connect('127.0.0.1', 'root', '');
if(!$con)
{
	echo 'Not connected to server';
}
if(!mysqli_select_db($con, 'clients'))
{
	echo 'Database not selected';
}
$Service_type = $_POST['service'];
$Payment_mode = $_POST['payment'];
$Cheque_no = $_POST['chequeno'];
$Amount = $_POST['amount'];
$Mpesa_code = $_POST['code'];
$Client_name = $_POST['name'];
$user_id = $_SESSION['id'];


  $sql = "INSERT INTO payments (Service_type, Payment_mode, Cheque_no, Amount, Mpesa_code, Client_name,user_id) VALUES ('$Service_type','$Payment_mode','$Cheque_no','$Amount','$Mpesa_code','$Client_name','$user_id')";
	 if(mysqli_query($con,$sql))
	 {
		?>
		  		<!-- message will pop up in a window and redirect me to the next page -->
		       <script type="text/javascript">
		       alert("Transaction successfully submitted");
		       window.location.href= "welcome.php";
		       </script>
		       <?php
	 }
	 else
	 {
		 ?>
		  		<!-- message will pop up in a window and redirect me to the next page -->
		       <script type="text/javascript">
		       alert("Transaction not submitted, Try again");
		       window.location.href= "Payments.php";
		       </script>
		       <?php
	 }
	
?>