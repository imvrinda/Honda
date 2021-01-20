﻿<?php
if (isset($_POST['submit'])) {
$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
	$message = $_POST['message'];
	$type = $_POST['type'];
	$phone = $_POST['phone'];

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }


    if (empty($errors)) {
        $toEmail = 'vrindavyas10@gmail.com';
        $emailSubject = 'To Shriniwas Honda';
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

        $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message , "Type: {$type}","Phone: {$phone}",];
        $body = join(PHP_EOL, $bodyParagraphs);

        if (mail($toEmail, $email, $Subject, $body, $headers)) {
            header('Location: thank-you.html');
        } else {
            $errorMessage = 'Oops, something went wrong. Please try again later';
        }
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
}
}
?>


<!doctype html>
<html>

<head>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="icon" href="resources/honda/img/Honda_32.png" type="image/x-icon">
<title>Best Honda Motorcycle and Scooter
	Showroom|Shriniwas Honda|Buldana</title>

<link rel="stylesheet" href="resources/honda/assets/css/style-import.css">

	<link rel="stylesheet" href="resources/honda/assets/css/logo.css">






<style type="text/css">
#loader {
	display: none;
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	width: 100%;
	background: rgba(0, 0, 0, 0.75)
		url('resources/honda/assets/images/ajax-loader.gif') no-repeat center
		center;
	z-index: 10000;
}

#player {
	width: 100%;
	height: 400px;
}
.image-logo img{
	height: 57px;
	width: auto;
	float: right;
    padding: 5px 0px 0px 0px;
    margin: 0px;
}
@media screen and (max-width: 480px) {
	#player {
		width: 100%;
		height: 180px;
	}
        .image-logo img{
	   height: 30px;
        }
}

@media screen and (min-width: 768px) {
	#player {
		width: 100%;
		height: 325px;
	}
        .image-logo img{
	   height: 40px;
        }
}
.navbar-light .navbar-nav .nav-link {
    padding: 15px 27px !important;
}
</style>
</head>
<body>
	<!-- Hearder Section -->
	<header>
		<!-- Top Bar Section Start-->
		<div class="topbar" id="top-bar">
			<div class="container">
				<div class="row d-flex flex-column flex-md-row align-items-center text-center text-md-center">

					<div class="col-md-8 mr-auto ">
						<ul class="topbar-left text-left">
							<li><i class="ft-phone-call"></i><strong>9372788999</strong></li>
								<li><i class="ft-mail"></i><strong>sales.shriniwashonda@gmail.com</strong></li>
								<li><i class="ft-mail"></i><strong>services.shriniwashonda@gmail.com</strong></li>
						</ul>
					</div>

					<div class="col-md-4 ml-auto ">
						<div class="text-right top-right-logo">
							<img src="resources/honda/assets/images/honda-power.png">
						</div>
					</div>


				</div>
			</div>
		</div>
		<!-- Top Bar Section End-->

		<!-- Navigation Section -->

		<div id="nav-sticky">
			<div id="sticky-header">
				<!-- Logo Section Start-->
				<div class="logo-sec">
					<div class="container p-0">
						<div class="logo mr-auto">
							<a href="#"><img src="resources/honda/assets/images/logo.png" class="img-responsive"></a>
						</div>
						
						<div class="om-logo">
							<a href="contact.html"><h1>Shriniwas Honda</h1></a>
						</div>
						
						
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- Logo Section End-->
			</div>


			<!-- Nav Section Start-->
			<nav class="navbar navbar-expand-lg navbar-light bg-danger res-menu">
				<div class="container p-0">

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sideBarContent" aria-controls="sideBarContent" aria-expanded="false" aria-label="Toggle navigation">
						<i class="ft-menu"></i>
					</button>

					<div class="collapse navbar-collapse" id="sideBarContent">
						<button class="navbar-toggler res-close" type="button" data-toggle="collapse" data-target="#sideBarContent" aria-controls="sideBarContent" aria-expanded="false" aria-label="Toggle navigation">
							<i class="ft-x"></i>
						</button>

						<div class="om-logo">
							<a href="index.htm"><h1>Shriniwas Honda</h1></a>
						</div>

							<ul class="social-icons">
							<li class="fixed-facebook "><a href="https://www.facebook.com/shriniwashonda/"><i class="fa fa-facebook "></i></a></li>
							
							<li class="fixed-whatsapp "><a href="https://api.whatsapp.com/send?phone=918378999830"><i class="fa fa-whatsapp"></i></a></li>
							
						</ul>

						<div class="res-phone">
							<h4>
								<i class="ft-phone-call"></i> 9372788999
							</h4>
						</div>
						<ul class="navbar-nav mr-auto main-menu">

							<li id="home" class="nav-item active"><a class="nav-link" href="contact.html">Home</a></li>

							<li id="models" class="nav-item"><a class="nav-link" href="models.html">Models</a></li>

							<li id="services" class="nav-item dropdown"><a href="javascript:void(0)" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">Services</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="service_booking.html">Book For
										Service</a> <a class="dropdown-item" href="amc.html">AMC</a> <a class="dropdown-item" href="extended_warranty.html">Extended
										Warranty</a>
									<!-- <a class="dropdown-item" href="insurance.html">Insurance</a> -->
								</div></li>

							<li id="finance" class="nav-item"><a class="nav-link" href="finance.html">Finance</a></li>
							
								<li id="network" class="nav-item"><a class="nav-link" href="network.html">Networks</a></li>
							
							
							<li id="aboutus" class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
							<li id="contact" class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
							<!-- <li id="about" class="nav-item">
                <a class="nav-link" href="contact.html">About</a>
              </li> -->
							<li id="offer" class="nav-item"><a class="nav-link" href="offers.html">Offers</a></li>

						</ul>
					</div>
				</div>
			</nav>
			<!-- Nav Section End-->

		</div>
	</header>

	
	<section>
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="col-md-12">
					<div class="breadcrumbs">
						<ul>
							<li><a href="contact.html">Home</a></li>
							<li>Contact</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Content Section  Product Type Display -->
	<section class="section-gap contact-bg">

		<div class="container">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<h4>Get in touch</h4>
							<hr>
						</div>
						<div class="col-md-5 contact-txt">
							<div class="address">

								<h5>Address</h5>
								<ul class="list-unstyled">
									<i class="ft-map"></i>
									<li>Botha Road</li>
									<li>Buldana,Maharashtra</li>
								</ul>
							</div>
							<div class="email">
								<h5>Email</h5>
								<ul class="list-unstyled">
									<i class="ft-mail"></i>
									<li>sales.Shriniwashonda@gmail.com</li>
								</ul>
							</div>
							<div class="phone">
								<h5>Phone</h5>
								<ul class="list-unstyled">
									<i class="ft-phone-call"></i>
									<li>9372788999</li>
									<li>9422324157</li>
								</ul>
							</div>
						</div>

            <div class="col-md-7 contact-form">
			  <form action="" id="contactForm" method="post">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 form-group icon-form">
                    <label class="label">Your Name</label>
                    <i class="ft-user"></i>
                    <input type="text" class="form-control transparent-tb" placeholder="Your Name" id="name" name="name">
                    <small class="form-text text-danger" id="name-error"></small>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12 form-group icon-form">
                    <label class="label">Email Address</label>
                    <i class="ft-mail"></i>
                    <input type="text" class="form-control transparent-tb" placeholder="Email Address" id="email" name="email">
                    <small class="form-text text-danger" id="email-error"></small>
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12 form-group icon-form">
                    <label class="label">Contact Number</label>
                    <i class="ft-phone-call"></i>
                    <input type="text" class="form-control transparent-tb" placeholder="Contact Number" id="phone" name="phone">
                    <small class="form-text text-danger" id="phone-error"></small>
                  </div>




                  <div class="col-lg-6 col-md-12 col-sm-12 form-group icon-form">
                    <label class="label">Reason</label>
                    <i class="ft-help-circle"></i>
                    <select id="inputState" class="form-control transparent-tb" id="type" name="type">
                      <option value="Not Provided">Choose ...</option>
                      <option value="complaint">Complaint</option>
                      <option value="feedback">Feedback</option>
                      <option value="suggestion">Suggestion</option>
                      <option value="other">Other</option>
                    </select>
                    <small class="form-text text-danger" id="type-error"></small>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12 form-group icon-form">
                    <label class="label">Your Message for us</label>
                    <i class="ft-edit-3"></i>
                    <textarea class="form-control transparent-tb" placeholder="Write your message here" id="message" name="message"></textarea>
                    <small class="form-text text-danger" id="message-error"></small>
                  </div>


                  <div class="text-left col-md-12">
                    <button type="button" class="btn btn-md btn-danger rounded-pill" onclick="sendFeedback();">Submit</button>
                  </div>
                </div>
              </div>
			  </form>
            </div>





						<!-- <div class="col-md-7 contact-form">
							<div class="card">
								<div class="card-body">
									<form id="contactForm">
										<div class="form-row">
											<div class="form-group col-md-6">
												<input id="name" name="name" placeholder="Full Name"
													class="form-control" type="text" minlength="10">
											</div>
											<div class="form-group col-md-6">
												<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<input id="phone" name="phone" minlength="10"
													placeholder="Mobile No." class="form-control"
													required="required" type="text" required>
											</div>
											<div class="form-group col-md-6">

												<select id="type" name="type" class="form-control">
													<option value="" selected>Choose ...</option>
													<option value="New Buyer">New Buyer</option>
													<option value="Service Request">Service Request</option>
													<option value="Complaint">Complaint</option>
													<option value="Feedback">Feedback</option>
												</select>
											</div>
											<div class="form-group col-md-12">
												<textarea id="message" name="message" cols="40" rows="5"
													placeholder="Your Message" class="form-control" required></textarea>
											</div>
										</div>

										<div class="form-row">
											<button type="button" id="action_btn"
												class="btn btn-md btn-danger rounded-pill"
												onclick="sendFeedback();">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div> -->





					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- Content Section  Product Type Display -->
	<div id="loader"></div>

	<script type="text/javascript">
		var pageName = "contact";

		function sendFeedback() {
			
			$("#contactForm").validate({rules:{name: {required: true, minlength: 5},
					email: {required: true},
					type: {required: true},
					phone: {required: true, minlength: 10},
					message : {required: true}
				},
				messages: {
					name: "Please enter name",
					email: "Please enter a valid email id",
					type: "Please choose one of the category above",
					phone: "Please enter a valid phone number",
					message : "Please enter message"
				},
				errorPlacement : function(error, element) {
					  var placement = $("#"+element.attr("name")+"-error");
				      if (placement) {
				        $(placement).text(error.text());
				      } else {
				        error.insertAfter(element);
				      }
				},
				onfocusout: function(element) { $(element).valid(); }
			});
			
			if(!$("#contactForm").valid()){
				return false;
			}
			var spinner = $('#loader');
			spinner.show();
			var data = getFormData();
			console.log(data);
			// send ajax
			$.ajax({
				url : 'send_feedback', // url where to submit the request
				type : "POST", // type of action POST || GET
				dataType : 'json', // data type
				data : data, // post data || get data
				success : function(result) {
					// you can see the result from the console
					// tab of the developer tools
					console.log(result);
					spinner.hide();
					$("#success-modal").modal("show");
				},
				error : function(xhr, resp, text) {
					console.log(xhr, resp, text);
					spinner.hide();
					$("#reject-modal").modal("show");
				}
			});
		}

		function getFormData() {
			var unindexed_array = $("#contactForm").serializeArray();
			var indexed_array = {};

			$.map(unindexed_array, function(n, i) {
				indexed_array[n['name']] = n['value'];
			});

			return indexed_array;
		}
	</script>



	<!-- Footer Section -->
	<footer>
		<div class="container text-left text-md-left">
			<div class="row">


				<div class="col-md-4 col-sm-12 col-xs-12">
					<!-- <div class="text-center foot-logo"><img src="assets/images/fppter-logo.png"></div> -->
					<address>
						<ul>
							<li><i class="ft-map"></i>
								<h6>Shriniwas Honda</h6>
								<p>Gokul Nagar,Near Reliance Petrol Pump, Nanadura Road Khamgaon</p> 
								<p>Buldana, Maharashtra</p></li>

							<li><i class="ft-phone-call"></i>
								<h4>9372788999</h4></li>

							<!-- <li>
                <i class="ft-grid"></i>
                <h4>Opens @ 09:30 AM</h4>
              </li> -->
						</ul>
					</address>


				</div>



				<div class=" col-md-8 col-sm-12">

					<div class="row">
						<div class="col-sm-12 col-md-3 col-lg-3">
							<div class="foot-head mb-3">Quick Links</div>
							<ul class="points">
								<!-- <li class=""> <a href="download-center.html"> Download Center</a></li> -->
								<li class=""><a href="models.html"> Explore Models</a></li>
								<li class=""><a href="finance.html"> Finance</a></li>
								<li class=""><a href="finance-1.html?emi=show"> EMI Calculator</a></li>
								<li class=""><a href="network.html"> Explore Networks</a></li>
								<li class=""><a href="contact.html"> Contact Us</a></li>
								<li class=""><a href="about.html"> About Us</a></li>
							</ul>
						</div>

						<div class="col-sm-12 col-md-5 col-lg-5">
							<div class="foot-head mb-3">Services</div>
							<ul class="points">
								<li class=""><a href="service_booking.html"> Book your Service appointment</a></li>
								<li class=""><a href="amc.html"> Book your AMC</a></li>
								<li class=""><a href="extended_warranty.html"> Book your Extended Warranty</a></li>
								<!-- <li class=""> <a href="insurance.html"> Insurance</a></li> -->
							</ul>
						</div>
						<!-- <div class="col-sm-12 col-md-4 col-lg-4">
							<div class="foot-head mb-3">Payment Details</div>
							
						</div> -->
					</div>
				</div>

			</div>
		</div>
		<div class="footer-two ">
			<div class="container">
				<div class="row d-flex flex-column flex-md-row align-items-center text-left text-md-left">
					<div class="col-lg-6 col-md-6 mr-auto">
						&copy; Shriniwashonda All Rights Reserved.
						2020.
					</div>
					<div class="col-lg-6 col-md-6 mr-auto">
						<ul class="foot-link">
							<li><a href="#"> Sitemap</a></li>
							<li><a href="#"> Location</a></li>
							<li><a href="#"> Disclaimer</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>


	
	<div id="fixed-social">
		<div>
			<a href="https://www.facebook.com/shriniwashonda/" class="fixed-facebook" target="_blank"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
		</div>
		
		<div>
			<a href="https://api.whatsapp.com/send?phone=918378999830" class="fixed-whatsapp" target="_blank"><i class="fa fa-whatsapp"></i>
				<span>Whatsapp</span></a>
		</div>
		
	</div>

	<script src="resources/honda/assets/js/popper.min.js" type="text/javascript"></script>
	<script src="resources/honda/assets/js/jquery-3.4.1.min.js" type="text/javascript"></script>
	<script src="resources/honda/assets/js/jquery.scrolling-tabs.min.js" type="text/javascript"></script>
	<script src="resources/honda/assets/js/jquery.flexslider.js" type="text/javascript"></script>
	<script src="resources/honda/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="resources/honda/assets/js/jquery-validator.js" type="text/javascript"></script>
	<script src="resources/honda/assets/js/custom.js" type="text/javascript"></script>
	<script src="resources/honda/assets/js/custom-dev.js" type="text/javascript"></script>
	<script src="resources/honda/assets/js/jquery.magnify.js"></script>
	<script src="resources/honda/assets/js/jquery.magnify-mobile.js"></script>
	<script src="resources/honda/assets/ImageGalaryData/jquery.fancybox.min.js" type="text/javascript"></script>
	<a href="#" class="scroll-to-top"></a>
	<script type="text/javascript">
  $(document).ready(function () {
	  if(typeof pageName === 'undefined'){
		  return;
	  }
	  
	  var menus = $(".main-menu li");
	  $.each(menus, function() {
		  $(this).removeClass("active");
	  });
	  
	  $("#"+pageName).addClass("active");
	  if("finance" == pageName){
		  calculateEMI();
	  }
	  
	  if("models" == pageName){
		$('#bike-tabs').scrollingTabs();
		$('#scooter-tabs').scrollingTabs();
	  }	  
	  if("contact" == pageName){


	  }
	  if("aboutus" == pageName){
	     
	  }
	    $("input[name$='vehicles']").click(function () {
	        var color = $(this).val();

	        $("div.desc").hide();
	        $("#vech_" + color).show();
	      });

	      // Magnifier
	      $('.zoom').magnify({
	        afterLoad: function () {
	          //console.log('Magnification powers activated!');
	        }
	      });
	  
  });
  </script>
</body>


<div id="success-modal" class="modal fade">
	<div class="modal-dialog  modal-dialog-centered modal-md">
		<div class="modal-content modal-confirm">
			<div class="modal-header">
				<div class="icon-box">
					<i class="fa fa-check"></i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
			</div>
			<div class="modal-body text-center">
				<h4>Thank You</h4>
				<p class="text-success">Your Request has delivered successfully</p>
				<p>Our concern person will revert back shortly</p>
				<button class="btn btn-success  rounded-pill" data-dismiss="modal">
					OK<i class="ft-chevron-right"></i>
				</button>
			</div>
		</div>
	</div>
</div>

<div id="reject-modal" class="modal fade">
	<div class="modal-dialog  modal-dialog-centered modal-md">
		<div class="modal-content modal-reject">
			<div class="modal-header">
				<div class="icon-box">
					<i class="fa fa-close"></i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
			</div>
			<div class="modal-body text-center">
				<h4>Ooooops!!!</h4>
				<p class="text-danger">We are experiencing some technical
					difficulties</p>
				<p>Please try again later</p>
				<button class="btn btn-danger rounded-pill" data-dismiss="modal">
					Let Me try again<i class="ft-chevron-right"></i>
				</button>
			</div>
		</div>
	</div>
</div>
</html>
