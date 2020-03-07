

<!-- navbahr section start -->
<nav class="navbar navbar-expand-lg bg-warning navbar-dark sticky-top">
	<ul class="nav navbar-nav mr-auto d-md-block d-lg-none" id="sidebar-icon">
		<li class="nav-item"><a href="#" class="btn btn-warning" onclick="openNav()"><i class="fas fa-external-link-alt"></i>Links</a></li>
	</ul>
	<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarmenu"
	aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarmenu">
	<ul class="nav navbar-nav text-center pl-md-5">
		<li class="nav-item"><a href="#" class="btn btn-warning text-dark active"><i class="fas fa-home"></i> Home</a>
		</li>
		<li class="nav-item"><a href="#" class="btn btn-warning"><i class="fas fa-bookmark"></i> Why Us</a></li>
		<li>
			<div class="dropdown">
				<button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton"
				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-chalkboard-teacher"></i> Courses
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item borderup" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
			</div>
		</div>
	</li>
	<!-- second -->
	<div class="dropdown">
		<button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton"
		data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<i class="fas fa-graduation-cap"></i> Academics
	</button>
	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		<a class="dropdown-item borderup" href="#">Admission Form</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div>



<li class="nav-item"><a href="#" class="btn btn-warning text-dark"><i class="fas fa-camera"></i>
Gallery</a></li>
<li class="nav-item"><a href="#" class="btn btn-warning text-dark"><i class="fas fa-map-marker-alt"></i>
Contact</a></li>
<li class="nav-item"><a href="#" class="btn btn-warning text-dark"><i class="fas fa-question"></i>
FAQ</a></li>
<li class="nav-item ml-lg-5"><a href="#moboLogin" data-toggle="modal" class="btn btn-warning text-dark d-lg-none"><i class="fas fa-sign-in-alt"></i>
Login</a></li>
</ul>
</div>
</nav>
<!-- navbar-section end -->


<!-- sidebar section -->
<div id="mySidenav" class="sidenav bg-ess">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="card text-center bg-ess">
		<div class="card-header">
			<div class="card-img-top">
				<div class="card-img pb-2">
					<img src="images/user.png" alt="student" height="120px" width="120px">
				</div>
				
				<p style="font-size: 80%;">ROLL NO : 012345</p>
			</div>	
		</div>
		<div class="card-header">
			<ul class="navbar-nav mobo-sidebar">
				<li class="nav-item"><a href="#" class="nav-link mb-1">Courses</a></li>
				<li class="nav-item"><a href="#" class="nav-link mb-1">Address</a></li>
				<li class="nav-item"><a href="#" class="nav-link mb-1">Installments</a></li>
				<li class="nav-item"><a href="#" class="nav-link mb-1">Notes</a></li>
				<li class="nav-item"><a href="#" class="nav-link mb-1">Books</a></li>
				<li class="nav-item"><a href="#" class="nav-link mb-1">Certificates</a></li>
				<li class="nav-item"><a href="#" class="nav-link mb-1">Results</a></li>
			</ul>
		</div>
	</div>
</div>

<!-- navbar-section end -->
<!-- Modal -->
<div class="modal fade" id="moboLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content bg-ess">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLongTitle">
					<i class="fas fa-user"></i> &nbsp;LOGIN</h4>
					<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
						<i class="fas fa-window-close"></i>
					</button>
				</div>
				<div class="modal-body">
					<div class="card-header bg-ess">
						<div class="card-title text-center font-weight-bold">
							<ul class="nav nav-tabs">
								<li class="nav-item">
									<a class="nav-link active text-warning" data-toggle="tab" href="#studentmoboLogin">Student
									Login</a>
								</li>
								<li class="nav-item ">
									<a class="nav-link text-warning" data-toggle="tab" href="#InstitutemoboLogin">Staff
									Login</a>
								</li>

							</ul>
							<!-- tab section -->
							<p class="text-center py-1">eerrrrr</p>
						</div>
					</div>
					<div class="tab-content">
						<div class="card-body bg-ess tab-pane active" id="studentmoboLogin">
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

						<div id="InstitutemoboLogin" class="card-body tab-pane fade bg-ess">
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
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-warning">Send Query & Request Callback</button>
					</div>
				</div>
			</div>
		</div>
	</div>
										<!-- feedback modal section end -->