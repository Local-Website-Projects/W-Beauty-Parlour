<!doctype html>
<html lang="en">
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
				
  		<!-- SITE TITLE -->
		<title>Reine - Beauty Salon</title>
							
		<!-- FAVICON AND TOUCH ICONS -->
		<?php include ('include/css.php');?>

	</head>



	<body>




		<!-- PRELOADER SPINNER
		============================================= -->	
		<?php include ('include/preloader.php');?>




		<!-- STYLE SWITCHER
		============================================= -->
		<div id="stlChanger">
			<div class="blockChanger bgChanger">
            	<a href="#" class="chBut ico-35">
            		<p class="switch">
            			<span class="drk-mode flaticon-moon"></span>
            			<span class="lgt-mode flaticon-sum"></span>
            		</p>
            	</a>
			</div>
		</div>	  <!-- END SWITCHER -->




		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">




			<!-- HEADER
			============================================= -->
			<?php include ('include/header.php');?>
            <!-- END HEADER -->




			<!-- INNER PAGE HERO
			============================================= -->	
			<section id="booking-page" class="inner-page-hero division">
				<div class="container">	
					<div class="row">	
						<div class="col">
							<div class="page-hero-txt color--white">
								<h2>Contact Us</h2>
								<p>Please fill out the appointment form below to make appointment</p>
							</div>	
						</div>
					</div>
				</div>	   <!-- End container --> 
			</section>	<!-- END INNER PAGE HERO -->




			<!-- BOOKING-1
			============================================= -->
			<div id="booking-1" class="pt-8 pb-7 booking-section division">
				<div class="container">


					<!-- BOOKING FORM -->
					<div class="row justify-content-center">	
						<div class="col-lg-10 col-xl-9">
							<form name="bookinkform" class="row booking-form">

								<!-- Form Input -->
				                <div class="col-lg-6">
				                	<input type="text" name="firstname" class="form-control firstname" placeholder="Full Name*" required>
				                </div>

                                <!-- Form Input -->
                                <div class="col-lg-6">
                                    <input type="tel" name="phone" class="form-control phone" placeholder="Phone Number*" required>
                                </div>
				                  
				                <!-- Form Input -->        
				                <div class="col-lg-6">
				                	<input type="email" name="email" class="form-control email" placeholder="Email Address*" required> 
				                </div>

				                <!-- Form Select -->
				                <div class="col-lg-6">
				                	<select name="service" class="form-select service" aria-label="Service Select">
				                		<option selected>Select Service</option>
				                      	<option>Hair Cut & Styling</option>
				                      	<option>Hair Coloring</option>
				                      	<option>Hair Treatments</option>
				                      	<option>Hair Extensions</option>
				                      	<option>Skin Care & Facials</option>
				                      	<option>Body Waxing</option>
				                      	<option>Makeup & Eyebrows</option>
				                      	<option>Manicure & Pedicure</option>
				                    </select>
				                </div>

				                <!-- Form Input -->
				                <div class="col-md-12">
				                	<input id="datetimepicker" type="text" name="date" class="form-control date" placeholder="Appointment Date*" required>
				                </div>
				                                            
				                <!-- Form Button -->
				                <div class="col-md-12 text-center">  
				                	<button type="submit" class="btn btn--tra-black hover--black submit">Book Appointment</button> 
				                </div>
				                                                              
				                <!-- Form Message -->
				                <div class="col-md-12 booking-form-msg">
				                	<div class="sending-msg"><span class="loading"></span></div>
				                </div>	
																						
							</form>
						</div>	
					</div>    <!-- END BOOKING FORM -->


				</div>     <!-- End container -->
			</div>	<!-- END BOOKING-1 -->




			<!-- GALLERY-3
			============================================= -->		
			<section id="gallery-3" class="bg--stone py-8 gallery-section division">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row justify-content-center">	
						<div class="col-lg-10 col-xl-8">
							<div class="section-title">
								<h3 class="h3-lg color--black">Follow: <a href="#">@reine_studio</a></h3>	
							</div>	
						</div>
					</div>


					<!-- IMAGES WRAPPER -->
					<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6">


						<!-- IMAGE #1 -->
					  	<div class="col">
					  		<div id="img-3-1" class="gallery-image">
						  		<div class="hover-overlay"> 

						  			<!-- Image -->
									<img class="img-fluid" src="images/gallery/woman_08.jpg" alt="gallery-image">			
									<div class="item-overlay"></div>				
									
									<!-- Image Zoom -->
									<div class="image-data">
										<div class="gallery-link ico-40 color--white">
											<a class="image-link" href="images/gallery/woman_08.jpg">
												<span class="flaticon-visibility"></span>
											</a>
										</div>																					 
									</div> 

						  		</div>
							</div>
						</div>


						<!-- IMAGE #2 -->
					  	<div class="col">
					  		<div id="img-3-2" class="gallery-image">
						  		<div class="hover-overlay"> 

						  			<!-- Image -->
									<img class="img-fluid" src="images/gallery/beauty_01.jpg" alt="gallery-image">			
									<div class="item-overlay"></div>				
									
									<!-- Image Zoom -->
									<div class="image-data gallery-video">
										<div class="gallery-link ico-40 color--white">
											<a class="video-popup1" href="https://www.youtube.com/embed/SZEflIVnhH8">
												<span class="flaticon-play"></span>
											</a>
										</div>																						 
									</div> 

						  		</div>
							</div>
						</div>	


						<!-- IMAGE #3 -->
					  	<div class="col">
					  		<div id="img-3-3" class="gallery-image">
						  		<div class="hover-overlay"> 

						  			<!-- Image -->
									<img class="img-fluid" src="images/gallery/woman_07.jpg" alt="gallery-image">			
									<div class="item-overlay"></div>				
									
									<!-- Image Zoom -->
									<div class="image-data">
										<div class="gallery-link ico-40 color--white">
											<a class="image-link" href="images/gallery/woman_07.jpg">
												<span class="flaticon-visibility"></span>
											</a>
										</div>																						 
									</div> 

						  		</div>
							</div>
						</div>


						<!-- IMAGE #4 -->
					  	<div class="col">
					  		<div id="img-3-4" class="gallery-image">
						  		<div class="hover-overlay"> 

						  			<!-- Image -->
									<img class="img-fluid" src="images/gallery/beauty_02.jpg" alt="gallery-image">			
									<div class="item-overlay"></div>				
									
									<!-- Image Zoom -->
									<div class="image-data">
										<div class="gallery-link ico-40 color--white">
											<a class="image-link" href="images/gallery/beauty_01.jpg">
												<span class="flaticon-visibility"></span>
											</a>
										</div>																						 
									</div> 

						  		</div>
							</div>
						</div>


						<!-- IMAGE #5 -->
					  	<div class="col">
					  		<div id="img-3-5" class="gallery-image">
						  		<div class="hover-overlay"> 

						  			<!-- Image -->
									<img class="img-fluid" src="images/gallery/beauty_03.jpg" alt="gallery-image">			
									<div class="item-overlay"></div>				
									
									<!-- Image Zoom -->
									<div class="image-data gallery-video">
										<div class="gallery-link ico-40 color--white">
											<a class="video-popup2" href="https://www.youtube.com/watch?v=7e90gBu4pas">
												<span class="flaticon-play"></span>
											</a>
										</div>																						 
									</div> 

						  		</div>
							</div>
						</div>


						<!-- IMAGE #6 -->
					  	<div class="col">
					  		<div id="img-3-6" class="gallery-image">
						  		<div class="hover-overlay"> 

						  			<!-- Image -->
									<img class="img-fluid" src="images/gallery/woman_09.jpg" alt="gallery-image">			
									<div class="item-overlay"></div>				
									
									<!-- Image Zoom -->
									<div class="image-data">
										<div class="gallery-link ico-40 color--white">
											<a class="image-link" href="images/gallery/woman_09.jpg">
												<span class="flaticon-visibility"></span>
											</a>
										</div>																						 
									</div> 

						  		</div>
							</div>
						</div>


					</div>	<!-- END IMAGES WRAPPER -->


				</div>	   <!-- End container -->
			</section>	<!-- END GALLERY-3 -->




			<!-- FOOTER-5
			============================================= -->
			<?php include ('include/footer.php');?>
            <!-- END FOOTER-5 -->




		</div>	<!-- END PAGE CONTENT -->	




		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<?php include ('include/js.php');?>


	</body>

</html>