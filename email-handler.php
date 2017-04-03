
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alarm Works | Contact</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Sanchez" rel="stylesheet">
  
  <!-- Css Stylesheets -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/responsive.css">
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="images/alarm-works-logo.ico" type="image/x-icon">
  
</head>
<body>
  
  <header class="main-header top">
    <div class="container clearfix">
      <!-- Alarm Works Logo -->
      <a class="img-link" href="index.html"><img class="header-image" src="images/alarm-works-logo.svg" alt="Company Logo"></a>
      <!-- Navigation -->
      <ul class="main-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="pricing.html">Pricing</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="testimonials.html">Testimonials</a></li>
        <li><a href="location.html">Location</a></li>
      </ul>
    </div>
  </header><!--/.main-header-->   

  <div class="banner small">
    <!-- Background Image Included in CSS -->
    <h1 class="headline">Alarm Works</h1>
    <span class="tagline">Jackson, TN</span>
  </div><!--/.banner-->

  <div class="container clearfix">
    
    <div class="primary col try">
      <h2>Thank you!</h2>
      <h2>We love feedback from customers, and inquiries from people who want to use our services!</h2>
      <h2>We will try and get back to you as fast as possible!</h2>
    </div><!--/.secondary-->
  </div><!--/.container-->
  
    <footer class="main-footer clearfix">
      <!-- nav footer -->
      <ul class="footer-nav" id="nonstyle">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="pricing.html">pricing</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="testimonials.html">Testimonials</a></li>
        <li><a href="location.html">Location</a></li>
      </ul>
      <!-- /nav footer -->
      
      <div class="pri-footer col">
        <p class="footer-info"><strong>Saturday &amp; Sunday -</strong> Closed</p>
        <p class="footer-info"><strong>Monday-Friday -</strong> 8:00AM - 5:00PM</p>
      </div>
      
      <div class="sec-footer col">
        <!-- footer information -->
        <p class="footer-info">Our Phone Number: <a href="tel:731-660-7770">(731) 660-7770</a></p>
        <p class="footer-info">Our Address: <a href="location.html">200 Stonebridge Blvd, Jackson, TN 38305</a></p>
        <p class="footer-info">Our E-mail: <a href="mailto:kdbasham@yahoo.com">kdbasham@yahoo.com</a></p>
      </div>
      
      <div class="tert-footer col">
        <p class="hkl">&copy;2017 Alarm Works of Jackson Inc.</p>
        <p class="hkl"><a href="#top">Back to Top &raquo;</a></p>
      </div>
      
    </footer>
</body>


<?php

	/* send the submitted data to gmail */ 
		$name=$_REQUEST['name']; 
		$email=$_REQUEST['email']; 
		$message=$_REQUEST['message']; 
	/* redirects to /try-again.html */
	if (($name=="")||($email=="")||($message=="")) {
			header("Location: /try-again.html"); 
	}
	/* validates email, if not valid redirects to /try-again.html */
	else if(!$email || !preg_match("/^\S+@\S+$/", $email)) {
      header("Location: /try-again.html");
	}
	/* redirects to /submit.html */  
	else {         
				$from="From: $name<$email>\r\nReturn-path: $email"; 
				$subject="Message sent using your contact form"; 
				mail("kdbasham@yahoo.com", $subject, $message, $from); 
				header("Location: /submit.html");
				exit();
	} 

?>