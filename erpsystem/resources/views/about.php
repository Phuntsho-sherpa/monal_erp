<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="icon.png" width="512" height="512"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Footer iCON  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="about.css">

    <title>About</title>
</head>

<body>
 
<nav>
  <input id="nav-toggle" type="checkbox">

<div class="company-logo">
<img src="image/Monal-ERP-Logo1.png" alt="">
</div>
  <div id="logo-title" style="color: #26d4bd;"> <b>Monal</span>-<span style="color: #e8810c; ">ERP</span></b></div> 
 
	<ul class="links">
		<li><a href="/">Home</a></li>
		<li><a href="/about">About</a></li>
		<li><a href="/services">Services</a></li>
		<li><a href="/contact">Contact</a></li>
	</ul>
	<label for="nav-toggle" class="icon-burger">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
	</label>
</nav>

<section class="about-section">

      <div class="read-more-container">

          <div class="row clearfix">
              
                <!--Content Column-->

                <div class="content-column col-md-6 col-sm-12 col-xs-12">

                  <div class="inner-column">

                      <div class="sec-title">

                        <div class="title">About Us</div>

                          <h2>We Are The Leader In <br> The Interiores</h2>

                        </div>
<?php include('home/about.html'); ?>

                </div>
                
                <?php include('home/years.html'); ?>

            </div>

        </div>

    </section>

<?php include('home/FAQ.html') ?>

     <script type="text/javascript">

      $(".faq-plus").on('click',function(){
        $(this).parent().parent().find('.faq-body').slideToggle();
      });
      

    </script>

<!-- Site footer -->
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <h6>About</h6>
        <p class="text-justify"> Learn about Athang services, products, view online updates, get the latest resource downloads, and more. Connect with Athang employees, or get services, supports, and professional advice from Athang. <br> ERP systems tie together a multitude of business processes and enable the 
          flow of data between them. By collecting an organization’s shared transactional data from multiple sources,
           ERP systems eliminate data duplication and provide data integrity with a single source of truth.</p>
      </div>

      <div class="col-xs-6 col-md-3">
        <h6>Location</h6>
        <ul class="footer-links">
          <li>Babena, Below Dechen Phodrang Monastery.</li>
          <li>Thimphu: Bhutan</li>
          <li>Phone: +975 02 333849/333655</li>
          <li>Mobile: +975 17110989/17115890</li>
          <li>Post Box: 1456</li>
          <li>Email: info@athang.com / karma@athang.com</li>
        </ul>
      </div>

      <div class="col-xs-6 col-md-3">
        <h6>Quick Links</h6>
        <ul class="footer-links">
          <li><a href="https://www.athang.com/public/w">About Us</a></li>
          <li><a href="/contact">Contact Us</a></li>
          <li><a href="#">Contribute</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Sitemap</a></li>
        </ul>
      </div>
    </div>
    <hr>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-12">
        <p class="copyright-text"> ©2005-2023  &copy; Athang IC Tech. All Rights Reserved. 
        </p>
      </div>
      
    </div>
  </div>
</footer> 

</body>
</html>