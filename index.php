<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ESS Group Of Institutions</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/animate.css">

      <style>
  .mobo-sidebar a{
    		font-size: 100%; /*for mobo-sidebar*/
    		color: whitesmoke;
    		opacity: 0.7;
    	}
    .mobo-sidebar a:hover{
    		color: #ffc107; /*for mobo-sidebar*/
    		opacity: 1;
    	}
   .sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  color: whitesmoke;
  font-size: 36px;
  margin-left: 50px;
}
.sidenav .closebtn:hover{
	color:#ffc107;
	text-decoration: none;
}
    </style>
</head>
<body> 
	
	<?php 
	include 'otherpages/logo.php';
	include 'otherpages/navbar.php';
	?>
	<div class="container-fluid">
		<div class="row">
			<div class="d-none d-lg-block col-lg-2 bg-ess" style="height: auto; " id="leftSidebar">
				<div class="pl-2 nav text-center links">
				<li class="list-group-item bg-ess border-light m-auto ">
					<h5 style="padding-bottom: 3px;border-bottom: 2px solid whitesmoke;">Important Links</h5>
				</li>
				<a href="#" class="p-3 w-100 text-white links"
				style="border-bottom: 1px solid grey; text-decoration: none;">Link One <i
				class="fas fa-external-link-alt pl-2"></i></a>
				<a href="#" class="p-3 w-100 text-white links"
				style="border-bottom: 1px solid grey; text-decoration: none;">Link Two <i
				class="fas fa-external-link-alt pl-2"></i></a>
				<a href="#" class="p-3 w-100 text-white links"
				style="border-bottom: 1px solid grey; text-decoration: none;">Link Three <i
				class="fas fa-external-link-alt pl-2"></i></a>
				<a href="#" class="p-3 w-100 text-white links"
				style="border-bottom: 1px solid grey; text-decoration: none;">Link Four <i
				class="fas fa-external-link-alt pl-2"></i></a>
				<a href="#" class="p-3 w-100 text-white links"
				style="border-bottom: 1px solid grey; text-decoration: none;">Link Five <i
				class="fas fa-external-link-alt pl-2"></i></a>
				<a href="#" class="p-3 w-100 text-white links"
				style="border-bottom: 1px solid grey; text-decoration: none;">Link Six <i
				class="fas fa-external-link-alt pl-2"></i></a>
				<a href="#" class="p-3 w-100 text-white links"
				style="border-bottom: 1px solid grey; text-decoration: none;">Link Seven <i
				class="fas fa-external-link-alt pl-2"></i></a>
				<a href="#" class="p-3 w-100 text-white links"
				style="border-bottom: 1px solid grey; text-decoration: none;">Link Eight <i
				class="fas fa-external-link-alt pl-2"></i></a>
				
			</div>
		<!-- sidebar section end -->




			</div><!-- First column end -->
			<div class="col col-md-12 col-lg-7 ">
                 <marquee style="color: #00284d;">Welcome To ESS Computer. We are Offering wide range of Computer courses
			from basic to advance and focus on the pursuit of excellence.......</marquee>
			<!-- end marquee line -->

			<!-- carousel start -->
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="images/basic.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="images/OFFICE.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="images/basic1.jpg" alt="Third slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			</div><!-- Main body end -->
			
			<div class="d-none d-lg-block col-lg-3 p-0">
				<div class="card-header bg-ess">
				<div class="card-title text-center font-weight-bold">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link active text-warning" data-toggle="tab" href="#studentLogin">Student
								Login</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link text-warning" data-toggle="tab" href="#InstituteLogin">Staff
								Login</a>
						</li>

					</ul>
					<!-- tab section -->
					<p class="text-center py-1">eerrrrr</p>
				</div>
			</div>
			<div class="tab-content">
				<div class="card-body bg-ess tab-pane active" id="studentLogin">
					<form action="otherpages/login.php" method="post">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-user"></i></span>

								</span>
								<input type="text" class="form-control" placeholder="Enter Name" name="name">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-key"></i></span>

								</span>
								<input type="number" class="form-control" placeholder="Mobile Number" name="mob">
							</div>
						</div>
						

						<div class="div text-center">
							<input type="submit" class="btn btn-warning text-dark" value="Login" name="done">
						</div>
					</form>
				</div>
			
				<!-- Institute Login Section -->

				<div id="InstituteLogin" class="card-body tab-pane fade bg-ess">
					<form action="otherpages/staflogin.php" method="post">
							
						
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-user"></i></span>

							</span>
							<input type="text" class="form-control" placeholder="Enter Your Username" name="staffuser">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>

							</span>
							<input type="password" class="form-control" placeholder="Enter Your Password" name="staffpass">
						</div>
					</div>
					
					<div class="div text-center">
						<input type="submit" value="Login" class="btn btn-warning" name="go">
					</div>
                  </form>
				</div>
				<!-- login section end -->
				<!-- updates -->

				<ul class="nav nav-tabs bg-dark mt-1" role="tablist text-center">
					<li class="nav-item">
						<a class="nav-link bg-warning border-white"><strong><i class="fa fa-bullhorn"></i> New
								Updates</strong></a>
					</li>

				</ul>
				<div">
					<div class=" container-fluid " style="border-left: 1px solid black;border-bottom: 1px solid black;">
						<ul class="nav">
							<marquee behavior="slide" direction="up" delayamount="3">
								<li><strong class="text-danger">09-09-2019</strong> | <a href='/docs/notices/'
										title="Download"> <i class="fa fa-download"></i></a> <a class="text-black"
										href="#">Holiday on 10-09-2019 on Muharram 2019</a></li>


								<li><strong class="text-danger">22-08-2019</strong> | <a href='/docs/notices/'
										title="Download"> <i class="fa fa-download"></i></a> <a class="text-black"
										href="#">Holiday on 24-08-2019 on Krishna Janmashtami 2019</a></li>


								<li><strong class="text-danger">14-08-2019</strong> | <a href='/docs/notices/'
										title="Download"> <i class="fa fa-download"></i></a> <a class="text-black"
										href="#">Holiday on 15-08-2019 on 73rd Independence Day of India</a></li>


								<li><strong class="text-danger">09-08-2019</strong> | <a href='/docs/notices/'
										title="Download"> <i class="fa fa-download"></i></a> <a class="text-black"
										href="#">Holiday on 12-08-2019</a></li>


								<li><strong class="text-danger">01-07-2019</strong> | <a
										href='/docs/notices/Online Regstration Forms of  Jan 2020 NIELIT Examination.doc'
										title="Download"> <i class="fa fa-download"></i></a> <a class="text-black"
										href="#">Online Regstration on 24/3/2019</a></li>
								<li><strong class="text-danger">14-08-2019</strong> | <a href='/docs/notices/'
										title="Download"> <i class="fa fa-download"></i></a> <a class="text-black"
										href="#">Holiday on 15-08-2019 on 73rd Independence Day of India</a></li>


								<li><strong class="text-danger">09-08-2019</strong> | <a href='/docs/notices/'
										title="Download"> <i class="fa fa-download"></i></a> <a class="text-black"
										href="#">Holiday on 12-08-2019</a></li>


								<li><strong class="text-danger">01-07-2019</strong> | <a
										href='/docs/notices/Online Regstration Forms of  Jan 2020 NIELIT Examination.doc'
										title="Download"> <i class="fa fa-download"></i></a> <a class="text-black"
										href="#">Online Regstration on 24/3/2019</a></li>
						</ul>
						</marquee>
					</div><!-- updates section end -->
                      
			</div><!-- Right sidebar end -->
		</div><!-- first row end -->

									<!-- feedback gif image in right down corner -->
									<div class="pull-right">
									</div>
									<a class="scrollup" href="#exampleModalCenter" data-toggle="modal"
									style="height: 80px;width:80px; line-height: 70px; "><img src="images/q70.gif" alt="quotes" height="70%"
									width="70%" style="border-radius:40px;border:2px solid #00284d;"></a>


									<!-- Modal -->
									<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
									aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content bg-ess">
											<div class="modal-header">
												<h4 class="modal-title" id="exampleModalLongTitle"> <img src="images/qm.gif" alt="query"
													height="40" width="40" style="border-radius:5px;"> &nbsp;Write A Query ?</h4>
													<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
														<i class="fas fa-window-close"></i>
													</button>
												</div>
												<div class="modal-body">
													<form>

														<div class="form-group">
															<div class="input-group">
																<span class="input-group-prepend">
																	<span class="input-group-text"><i class="fa fa-user"></i></span>

																</span>
																<input class="form-control" placeholder="Enter Your Name" />
															</div>
														</div>
														<div class="form-group">
															<div class="input-group">
																<span class="input-group-prepend">
																	<span class="input-group-text"><i class="fa fa-envelope"></i></span>

																</span>
																<input class="form-control" placeholder="Enter Your Email" />
															</div>
														</div>
														<div class="form-group">
															<div class="input-group">
																<span class="input-group-prepend">
																	<span class="input-group-text"><i class="fa fa-phone-alt"></i></span>

																</span>
																<input type="text" class="form-control" placeholder="Enter Your Mobile No" />
															</div>
														</div>
														<div class="form-group">

															<textarea rows="2" cols="20" class="form-control"
															placeholder="Write your query ?"></textarea>
														</div>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" checked="checked">
															<small class="clearfix">By clicking on Request Callback, I allow ESS Computer to contact , use &
																share my personal data as per the <a href="#">Privacy Policy.</a></small>
															</div>
														</form>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														<button type="button" class="btn btn-warning">Send Query & Request Callback</button>
													</div>
												</div>
											</div>
										</div>
										<!-- feedback modal section end -->

										<!-- student feed back section start -->
										<div class="container-fluid text-center bg-warning text-ess mt-1">
											<h3 class="pt-4" id="fbtext"><u>Our Students Says...</u></h3>

											<div class="carousel slide py-4" data-ride="carousel" id="feedback">

												<div class="carousel-inner">
													<div class="carousel-item active">
														<img src="images/user.png" alt="user" height="10%" width="10%"><span class="pl-3 fb-para">" Lorem
														ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum! "</span>
													</div>
													<div class="carousel-item ">
														<img src="images/user2.png" alt="user" height="10%" width="10%"><span class="pl-3 fb-para">" Lorem
														ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum! "</span>
													</div>
													<div class="carousel-item ">
														<img src="images/user.png" alt="user" height="10%" width="10%"><span class="pl-3 fb-para">" Lorem
														ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum! "</span>
													</div>
												</div>
											</div>
										</div>
										<!-- feedback section end -->
										<!-- footer section start     -->
										<div class="container-fluid">
											<div class="row pt-5 bg-ess mt-1 text-white text-center">
												<div class="col-6 col-md-4">
													<h4 class="textfooter"><u>Address</u> :-</h4><br>
													<p class="textfooter">Neheru Gali Chhowk,<br>
														Padampur.<br>
														Dist : Bargarh (ODISHA)<br>
														Pin : 768036<br><br>
														Mob : +91 0123456789<br></p>
													</div>
													<!-- second column -->
													<div class="col-6 col-md-4">
														<h3 class="textfooter"><u>Menu</u></h3>

														<ul class=" navbar-nav">
															<li class="nav-item"><a href="#" class="nav-link text-white textfooter">Home</a></li>
															<li class="nav-item"><a href="#" class="nav-link text-white textfooter">About</a></li>
															<li class="nav-item"><a href="#" class="nav-link text-white textfooter">Courses</a></li>
															<li class="nav-item"><a href="#" class="nav-link text-white textfooter">Admission</a></li>
															<li class="nav-item"><a href="#" class="nav-link text-white textfooter">Contact Us</a></li>
														</ul>
													</div>
													<!-- third column -->
													<div class="col-md-4 px-5">

														<ul class="nav pt-5">
															<li class="nav-item"><a href="#" class="nav-link" style="color: #405DE6;"><i
																class="fab fa-facebook fa-2x s-link"></i></a></li>
																<li class="nav-item"><a href="#" class="nav-link" style="color: #FD1D1D;"><i
																	class="fab fa-youtube-square fa-2x s-link"></i></a></li>
																	<li class="nav-item"><a href="#" class="nav-link text-success"><i
																		class="fab fa-whatsapp fa-2x s-link"></i></a></li>
																		<li class="nav-item"><a href="#" class="nav-link " style="color:#E1306C;"><i
																			class="fab fa-instagram fa-2x s-link"></i></a></li>
																			<li class="nav-item"><a href="#" class="nav-link" style="color: #F56040;"><i
																				class="fas fa-envelope fa-2x s-link"></i></a></li>
																			</ul>
																		</div>
																	</div>
																</div>
   
	<!-- footer section end -->
		<div class="container-fluid text-white copyright" >
			<p class="copytext pb-2"> &copy;copyright at ess computer padampur. All rights reserved.</p>
		</div>
	</div><!-- first container end -->



       
	<script>
		function openNav() {
			document.getElementById("mySidenav").style.width = "250px";
							}

		function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
							}
	</script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/propper.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>

	</html>