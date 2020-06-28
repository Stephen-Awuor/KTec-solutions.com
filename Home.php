<!DOCTYPE html>
<html>
<body>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap-theme.css" rel="stylesheet" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/skin.css">
<link rel="stylesheet" href="css/main.css">
</head>
<header class="header-basic-light">
	<div class="header-limiter">
		<h1><a href="#"style="color:#0074D9; margin-left: -27px; font-size: 35px; font-family: montserrat;">Kaneya Tec-Solutions Ltd</span></a></h1>
		<nav><!--
			<a href="#">Home</a>
			<a href="#" class="selected">Blog</a>
			<a href="#">Pricing</a>
			<a href="#"></a>|-->
			<a href="#"style="color:#0074D9; font-size: 12px; font-family: montserrat;">Call: +254729952303, +254770985233</a>|
			<a href="#"style="color:#0074D9; font-size: 12px; font-family: montserrat;">Email: stevekaneya@gmail.com</a>
		</nav>
	</div>
</header>
<div class="topnav">
<a class="active"
			<a href="Home.php">HOME</a>
			<a href="AboutUs.php">ABOUT US</a>
			<a href="Services.php">SERVICES AND SOLUTIONS</a>
			<a href="clients.php">CLIENTS</a>
			<a href="news.php">NEWS AND ICT TRENDS</a>
			<a href="careers.php">CAREERS</a>
			<a href="contactus.php">CONTACT US</a>
			<a href="clientregistration.php" style="color:#0074D9; margin-left: 330px; font-size: 15px; font-family: montserrat;">Client Portal</a>	
</div>
<br>
</head>
<br>
<br>
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="Images/img6.jpg" style="width:1300px;height:400px">
    <div class="text">Caption One</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="Images/img7.jpg" style="width:1300px;height:400px">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="Images/img8.jpg" style="width:1300px;height:400px">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
</script>

<!--Paragraphs after slide-show-->
<div id="Welcome">
<div id="Welcome-left" style="float:left">
<p id="quote-left" style="font-family:Century Gothic; color:#006600;text-align:center; font-size:25px"><b>Welcome to Kaneya Tec-Solutions</b></p>
<p id="Welcome-paragraph-1" style="font-family:Georgia; margin-left:30px">Kaneya Tec-Solutions is a business solutions company focused on resource<br> efficiency. By assesing your infranstructure, We can provide you with a <br>roadmap to maximise your resource efficiency, develop effective IT systems,<br> and minimise IT costs.
</div>
<div id="Welcome-right" style="float:right">
<p id="quote-right" style="font-family:Century Gothic; color:#006600; text-align:center; font-size:25px"><b> Why Us</b></p>
<p id="Paragrapht-2" style="font-family:Georgia; margin-right:30px">We combine a leading-edge business strategy and IT knowledge to develop efficient <br>and effective solutions that keep businesses one-step ahead.</p>
</div>
<br>
<h5 style="margin-top:150px; font-family:Century Gothic; font-size:25px; color:#006600; margin-left:500px;">Inside Kaneya Tec-Solutions</h5>
<div class="vertical_images">
    <div class="image">
	    <p style="font-weight: bold;"> Software solutions </p>
        <a href="AboutUs.php"><img src="Images/software.jpg" style="width:100%; height:71%;"/></a>
		<p> We are a software development company in Kenya that delivers business applications, application management, and comprehensive web solutions developed on several platforms including PHP,.NET, Ajax JAVA <a href="Services.php">Read more</a></p>
    </div>
     <div class="image">
	     <p style="font-weight: bold;"> Networks and Infrastructure </p>
         <a href="AboutUs.php"><img class="middle-img" src="Images/copper.png" style="width:100%; height:71%;"/><a/>
		 <p> We build robust network infranstructure capable of supporting your growing communication needs and maintaining high performance throughout while meeting your business objectives <a href="Services.php">Read more</a></p>
    </div>
     <div class="image">
	     <p style="font-weight: bold;"> CCTV and Cloud Surveillance </p>
         <a href="AboutUs.php"><img src="Images/cctv8.jpg" style="width:100%; height:71%;"/><a/>
		 <p> Secure your home and business premises with reliable CCTV and surveillance systems. We install and configure CCTV cameras for businesses and individuals to offer 24hrs security protection with no staff overheads <a href="Services.php">Read more</a></p>	
    </div>
</div>
<br>
<br>
<!--our partners start-->
<script>
$(document).ready(function(){
    $('.partner-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
  <h2 style="font-family:Century Gothic; font-size:25px; color:#006600; text-align: center; ">OUR PARTNERS</h2>
  <div class="vertical_images">
    <div class="image">
        <a href="AboutUs.php"><img src="Images/partner1.jpg" style="width: 250px; height:200px; margin-left: 100px;"/></a>
    </div>
     <div class="image">
         <a href="AboutUs.php"><img class="middle-img" src="Images/partner2.jpg" style="width:250px; height:200px; margin-left: 50px;"/><a/>
    </div>
     <div class="image"> 
         <a href="AboutUs.php"><img src="Images/partner3.jpg" style="width:250px; height:200px;"/><a/>
    </div>
</div>



	<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Kaneya Tec-Solutions Limited</span></h3>

				<p class="footer-links">
					<a href="Home.php">Home</a>
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

	</body>

</html>
