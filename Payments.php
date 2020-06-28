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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payments</title>

    <!-- Font Icon -->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style3.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<nav class="navtop">
			<div>
				<h1 style="text-align: center; color: white; font-size: 25px;">KANEYA TEC-SOLUTIONS LTD</h1>
			
			</div>
		</nav>
<body>
    <div class="main">

        <div class="container">
            <div class="signup-content">
                
                <div class="signup-form">
                    <form action="portalpayments.php" method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            
                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="service">TYPE OF SERVICE</label>
                                        <a href="Services.php" class="form-link" target="_blank" rel="noopener noreferrer">Service Deatils</a>
                                    </div>
                                    <div class="btn btn-secondary dropdown-toggle">
                                        <select name="service" id="services">
                                            <option selected>Select Service</option>
                                            <option value="Software">Software solutions</option>
                                            <option value="Networks">Networks and Infrastructure</option>
                                            <option value="CCTV">CCTV and Cloud Surveillance</option>
											<option value="Cloud Services">Cloud Services and Solutions</option>
											<option value="Communication">Unified Communication</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-radio">
                                    <div class="label-flex">
                                        <label for="payment">Payment Mode</label>
                                    </div>
                                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" value="cash" id="cash" checked>
                                            <label for="cash">Cash</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" value="cheque" id="cheque">
                                            <label for="cheque">Cheque</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" value="mpesa" id="demand">
                                            <label for="demand">Mpesa</label>
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <label for="chequeno">DD / Cheque No.</label>
                                    <input type="text" name="chequeno" id="chequeno" />
                                </div>
                                <div class="form-input">
                                    <label for="blank_name">AMOUNT IN FIGURES</label>
                                    <input type="text" name="amount" id="blank_name" />
                                </div>
                                <div class="form-input">
                                    <label for="payable">MPESA TRANSACTION CODE</label>
                                    <input type="text" name="code" id="payable" />
                                </div>
                                <div class="form-input">
                                    <label for="payable">CLIENT's FULL NAME</label>
                                    <input type="text" name="name" id="name" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" /><br>
							<br>
							<br><a href="logout.php" style="color: red; text-align: center;"><i class="fas fa-sign-out-alt"></i>Logout</a>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>