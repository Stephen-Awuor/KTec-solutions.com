<?php
$con = mysqli_connect('127.0.0.1', 'root', '');
if(!$con)
{
	echo 'Not connected to server';
}
if(!mysqli_select_db($con, 'clients'))
{
	echo 'Database not selected';
}
$Email = $_POST['email'];
$Message = $_POST['message'];

  $sql = "INSERT INTO footer_message (Email, Message) VALUES ('$Email', '$Message')";
	 if(mysqli_query($con,$sql))
	 {
		 ?>
		  		<!-- message will pop up in a window and redirect me to the next page -->
		       <script type="text/javascript">
		       alert("Message sent successfully!");
		       window.location.href= "Home.php";
		       </script>
		       <?php
	 }
	 else
	 {
		?>
		  		<!-- message will pop up in a window and redirect me to the next page -->
		       <script type="text/javascript">
		       alert("Message not sent, Try again!");
		       window.location.href= "Home.php";
		       </script>
		       <?php
	 }
	
?>