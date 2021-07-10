<!DOCTYPE html>
<html>
<body>
<head>
<title>Contact Us</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/skin.css">
<link rel="stylesheet" href="css/main.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap-theme.css" rel="stylesheet" />

</head>
<div class="topnav">
<a class="navbar-brand" href="index.php">
					<img src="images/logow.jpg" alt="" width="50px" height="30px"/>
				</a>
			<a href="index.php">HOME</a>
			<a href="AboutUs.php">ABOUT US</a>
			<a href="Services.php">SERVICES AND SOLUTIONS</a>
			<a href="clients.php">CLIENTS</a>
			<a href="News.php">NEWS AND ICT TRENDS</a>
			<a href="careers.php">CAREERS</a>
			<a href="Contactus.php">CONTACT US</a>
      <a href="clientregistration.php">Clients Portal</a>
</div>
</head>
<div class="w3-display-container w3-animate-opacity">
  <img src="Images/contact2.jpg"  style="width:1333px; height:300px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
  </div>
</div>

 <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                         <h4>Contact <span>Us</span></h4>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6" style="text-align:right;">Home<span class="sep"> / </span><span class="current">Contact</span></div>
                </div>
            </div>
        </div>

    </section>
    <section id="contact-page">
        <div class="container">
            <div class="section-heading text-center">
                <h2>Drop your <span>Message</span></h2>
                <p class="subheading">Swing by for a cup of coffee, or leave us a message.</p>
            </div>
            <div class="row contact-wrap">
 
                <form action="clientmessage.php" method="POST" >
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" name="company" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                             <input type="submit" value="SUBMIT MESSAGE"><br>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="overlay">
            <div class="gmap-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="gmap">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.942499960333!2d36.897357314274274!3d-1.2005397358760894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f3e47f0dc9b9d%3A0xc830d5ac9599719b!2sKahawa%20West!5e0!3m2!1sen!2ske!4v1579868322764!5m2!1sen!2ske" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <div class="col-sm-7 map-content">
                            <ul class="row">
                                <li class="col-sm-6">
                                    <address>
									<h5>Head Office</h5>
									<p>Kaneya Tec-Solutions <br>
									00100, Nairobi,<br>
									Lungalunga Road,<br>
									Industrial Area,<br>
									Lumgalunga, Kenya. </p>
										<p>Phone:+254729952303 <br>
									Email Address:  stevekaneya@gmail.com</p>
								</address>

                                </li>
                                <li class="col-sm-6">
                                    <address>
									<h5>Zone#2 Office</h5>
									<p>Kaneya Tec-Solutions <br>
									00100, Nairobi,<br>
									Kasarani Constituency,<br>
									Roysambu Division,<br>
									Kahawa West Location. </p>
									<p>Phone:+254770985233 <br>
									Email Address:  stevekaneya@gmail.com</p>
								</address>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Kaneya Tec-Solutions Limited</span></h3>

				<p class="footer-links">
					<a href="index.php">Home</a>
					·
					<a href="AboutUs.php">About Us</a>
					·
					<a href="Services.php">Services</a>
					·
					<a href="clients.php">clients</a>
					·
					<a href="News.php">Trends</a>
					·
					<a href="careers.php">careers</a>
					.
					<a href="ContactUs.php">Contact Us</a>
				</p>

				<p class="footer-company-name">Steve &copy; 2020</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

			<div class="footer-right">

				<p>Contact Us</p>

				<form action="footermessage.php" method="post">

					<input type="text" name="email" placeholder="Email" class="form-control" required="required" />
					<textarea name="message" placeholder="Message" class="form-control" required="required"></textarea>
					 <input type="submit" value="SEND"><br>

				</form>

			</div>

		</footer>
<script>
	window.fwSettings={
	'widget_id':61000000510
	};
	!function(){if("function"!=typeof window.FreshworksWidget){var n=function(){n.q.push(arguments)};n.q=[],window.FreshworksWidget=n}}() 
</script>
<script type='text/javascript' src='https://widget.freshworks.com/widgets/61000000510.js' async defer></script>

	</body>

</html>
