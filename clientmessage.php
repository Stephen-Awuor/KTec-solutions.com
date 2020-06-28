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
$Name = $_POST['name'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$Company = $_POST['company'];
$Subject = $_POST['subject'];
$Message = $_POST['message'];

  $sql = "INSERT INTO client_message (Name, Email, Phone, Company, Subject, Message) VALUES ('$Name','$Email','$Phone','$Company','$Subject','$Message')";
	 if(mysqli_query($con,$sql))
	 {
		?>
		  		<!-- message will pop up in a window and redirect me to the next page -->
		       <script type="text/javascript">
		       alert("Message successfully submitted");
		       window.location.href= "Contactus.php";
		       </script>
		       <?php
	 }
	 else
	 {
		 ?>
		  		<!-- message will pop up in a window and redirect me to the next page -->
		       <script type="text/javascript">
		       alert("Message not submitted, Try again");
		       window.location.href= "Contactus.php";
		       </script>
		       <?php
	 }
	
?>