<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
	<link rel="stylesheet" href="https://stactpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QKPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
</head>
<body>
	<section class="cot">
		
		<nav>
		<div class="nav-links" id="navLinks">
				
				<ul>

					<li><a href="index.php">HOME</a></li>
					<li><a href="login.html">LOGIN</a></li>
					

				</ul>
			</div>
		</nav>
		<div class="content">
			<h2>Contact Us</h2>
			<p> Please contact us for more information. </p>
			
		</div>
	</section>

	<section class="contact">
		

		
		<div class="container">
			<div class="contactInfo">
				<div class="box">
					<div class="icon"><img src="visit/loc.jpg"></div>
					<div class="text">
						<h3>Address</h3>
						<p>Northern-Rwanda <br> Kamuhoza-Musanze<br>Opposite University Of Kigali.</p>
					</div>
											
				</div>
				<div class="box">
					<div class="icon"><img src="visit/ph.jpg"></div>
					<div class="text">
						<h3>Phone</h3>
						<p>0783177672-0780532185</p>
					</div>
											
				</div>
				<div class="box">
					<div class="icon"><img src="visit/env.png"></i></div>
					<div class="text">
						<h3>Email</h3>
						<p>derrickkabanda70@gmail.com<br>kananifulgence44@gmail.com</p>
					</div>
											
				</div>
				
			</div>

			<div class="contactForm">
				
				<form action="centimeter.php" method="POST"  class="fr">
					<h2>Send Message</h2>
					<div class="inputBox">
						
						<input class="name" type="text" id="fullname" name="Fullname" required="required" placeholder="Full Name">
						
						
					</div>
					<div class="inputBox">
						
						<input class="email" type="email" id="email" name="Email" required="required" placeholder="Email">
						
						
					</div>
					<div class="inputBox">
					
						<textarea class="message" id="message" name="Message" required="required" placeholder="Type your Message..."></textarea>
						
						
					</div>
					<div class="inputBox">
						<button type="submit" >Send Message</button>
												
					</div>

				</form>
			</div>

			
		</div>
		
	</section>
	
</body>
</html>