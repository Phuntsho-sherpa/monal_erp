<!DOCTYPE html>

<html>

<head>

	<!-- *******  Link To CSS Style Sheet  ******* -->

	<link rel="stylesheet" type="text/css" href="contact.css">

	<link rel="icon" type="image/png" href="icon.png" width="512" height="512"/>

	<!-- *******  Font Awesome Icons Link  ******* -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>



	<!-- *******  Link To Goggle Fonts  *******  -->

	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;1,900&display=swap" rel="stylesheet">



	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Footer iCON  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

 
	<title>Contact Section</title>

</head>

<body>

 


<nav>
  <input id="nav-toggle" type="checkbox">

<div class="company-logo">
<img src="image/Monal-ERP-Logo1.png" alt="">
</div>
  <div id="logo-title" style="color: #26d4bd;  font-size:16px"> <b>Monal</span>-<span style="color: #e8810c; font-size:16px">ERP</span></b></div> 
 
	<ul class="links">
		<b><li><a href="/">Home</a></li></b>
		<b><li><a href="/services">Services</a></li></b>
		<b><li><a href="/about">About</a></li></b>
		<b><li><a href="/contact">Contact</a></li></b>
	</ul>
	<label for="nav-toggle" class="icon-burger">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
	</label>
</nav>

	<div class="container">

		<main class="row">



			<!--  *******   Left Section (Column) Starts   *******  -->



			<section class="col left">

				

				<!--  *******   Title Starts   *******  -->



				<div class="contactTitle">

					<h2>Get In Touch</h2>

					<p>Message us for any inquries</p>

				</div>



				<!--  *******   Title Ends   *******  -->



				<!--  *******   Contact Info Starts   *******  -->



				<div class="contactInfo">

					

					<div class="iconGroup">

						<div class="icon">

							<i class="fa-solid fa-phone"></i>

						</div>

						<div class="details">

							<span>Phone</span>

							<span>+00 110 111 00</span>

						</div>

					</div>



					<div class="iconGroup">

						<div class="icon">

							<i class="fa-solid fa-envelope"></i>

						</div>

						<div class="details">

							<span>Email</span>

							<span>monalerp123@gmail.com</span>

						</div>

					</div>



					<div class="iconGroup">

						<div class="icon">

							<i class="fa-solid fa-location-dot"></i>

						</div>

						<div class="details">

							<span>Location</span>

							<span>Bhutan, Thimphu, Babena</span>

						</div>

					</div>



				</div>



				<!--  *******   Contact Info Ends   *******  -->



				<!--  *******   Social Media Starts   *******  -->



				<div class="socialMedia">

					<a href="#"><i class="fa-brands fa-facebook-f"></i></a>

					<a href="#"><i class="fa-brands fa-twitter"></i></a>

					<a href="#"><i class="fa-brands fa-instagram"></i></a>

					<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>

				</div>



				<!--  *******   Social Media Ends   *******  -->



			</section>



			<!--  *******   Left Section (Column) Ends   *******  -->



			<!--  *******   Right Section (Column) Starts   *******  -->



			<section class="col right">

				

				<!--  *******   Form Starts   *******  -->

				@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
</div>
@endif
				<form  class="messageForm" action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

					<div class="inputGroup halfWidth">

						<input type="text" name="name" required="required">

						<label>Your Name</label>
				

					</div>



					<div class="inputGroup halfWidth">

						<input type="email" name="email" required="required">

						<label>Email</label>
			
					</div>



					<div class="inputGroup fullWidth">

						<input type="text" name="subject" required="required">

						<label>What's the issue?</label>
			

					</div>



					<div class="inputGroup fullWidth">

						<textarea required="required" name="message"></textarea>

						<label>Additional Details</label>
					
      
					</div>
					
					<div class="inputGroup fullWidth">

						<button type="submit">Send Message</button>

					</div>



				</form>



				<!--  *******   Form Ends   *******  -->

			</section>



			<!--  *******   Right Section (Column) Ends   *******  -->



		</main>

	</div>
<div class="bottom">
	
<div class="col-md-8 col-sm-6 col-xs-12">
<hr>
<p>©2005-2023 Athang IC Tech. All Rights Reserved. <p>
      </div>
</div>
</body>

</html>