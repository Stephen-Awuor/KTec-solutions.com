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
$ID_NO = $_POST['idno'];
$Phone = $_POST['phone'];
$Email = $_POST['email'];
$Company = $_POST['company'];
$Username = $_POST['uname'];
$Password = md5($_POST['password']);

  $sql = "INSERT INTO client_portal_user_register (Name, ID_NO, Phone, Email, Company, Username, Password) VALUES ('$Name','$ID_NO','$Phone','$Email','$Company','$Username', '$Password')";
	 if(!mysqli_query($con,$sql))
	 {
		?>
		  		<!-- message will pop up in a window and redirect me to the next page -->
		       <script type="text/javascript">
		       alert("Registration failed, Try again!");
		       window.location.href= "clientregistration.php";
		       </script>
		       <?php
	 }
	 else
	 {
		?>
		  		<!-- message will pop up in a window and redirect me to the next page -->
		       <script type="text/javascript">
		       alert("Registration successfull!");
		       window.location.href= "clientlogin.php";
		       </script>
		       <?php
	 }
	
?>
