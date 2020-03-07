
<?php 
       session_start();
       include '../backendcodes/connection.php';
       if (!isset($_SESSION['user'])) {
         header('location:../index.php');
       }

       $data1 = "SELECT * FROM `student_imgsign` WHERE `enroll_no`= '{$_SESSION['id']}' ";
                   $fire1 = mysqli_query($conn,$data1);
                   $stdata1 = mysqli_fetch_array($fire1);




 ?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ESS Group Of Institutions</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="../favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
     
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
	
	

			<div class="conhtainer-fluid">
            <div class="row" style="border-top: 2px solid #ffc107;">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            
                                <ul class="nav float-left">
                    <li class="nav-item"><a href="#" class="nav-link text-success" id="call"><img src="../images/call.gif"
                                alt="call logo " height="8%" width="8%" id="callimage"> +91 0123456789</a></li>
                               
                </ul>
                            
                        </div>


                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 ">
                            
                                <ul class="nav float-right" id="social">
                    <li class="nav-item"><a href="#" class="nav-link" style="color: #405DE6;"><i
                                class="fab fa-facebook"></i></a></li>
                    <li class="nav-item"><a href="#" class="nav-link" style="color: #FD1D1D;"><i
                                class="fab fa-youtube-square"></i></a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-success"><i class="fab fa-whatsapp"></i></a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link " style="color:#E1306C;"><i
                                class="fab fa-instagram"></i></a></li>
                    <li class="nav-item"><a href="#" class="nav-link" style="color: #F56040;"><i
                                class="fas fa-envelope"></i></a></li>
                </ul>
                 
                            
                        </div>
                        
                    </div>
       
              <div class="row " id="logo-wrap">

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center ">
                  <div class="text-center ">
                    <img src="../images/ess.jpg" alt="logo" height="8%" width="8%">
                  </div>
                  <p class="text-primary navbar-brand py-0 my-0" id="logo" >Eastern Software Solution</p>

                </div>

              </div>
            </div>

            <!---logo section end-->

	<!-- navbahr section start -->
	<nav class="navbar navbar-expand-lg bg-warning navbar-dark sticky-top">
		<ul class="nav navbar-nav mr-auto d-md-block d-lg-none" id="sidebar-icon">
      <li class="nav-item"><a href="#" onclick="openNav()"><img src="<?php echo $stdata1['photos']; ?>" style="height: 40px; width: 40px;border:1px solid whitesmoke;border-radius: 50%;overflow-x: hidden;overflow-y: hidden;"><span class="btn btn-warning">Profile</span></a></li>
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
			<a class="dropdown-item borderup" href="#">Action</a>
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
	<li class="nav-item ml-lg-5"><a href="logout.php" class="btn btn-warning text-dark"><i class="fas fa-sign-out-alt"></i>
						Logout</a></li>
</ul>
</div>
</nav>
<!-- navbar-section end -->


<!-- mobile version sidebar section -->
<div id="mySidenav" class="sidenav bg-ess">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="card text-center bg-ess">
		<div class="card-header pb-2">
			<div class="card-img-top">
				<div class="card-img pb-2">

					<img src="<?php echo $stdata1['photos']; ?>" alt="student" height="40%px" width="40%" style="border-radius: 50%; border:1px solid whitesmoke;">
				</div>
				<h6 class="text-uppercase"><?php echo $_SESSION['user']; ?></h6>
			<p style="font-size: 80%;"><?php echo $_SESSION['id']; ?></p>
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
				<li class="nav-item"><a href="otherpages/studentadmissionform.php" class="nav-link mb-1">Application Form</a></li>
			</ul>
		</div>
		
	</div>
</div>

<!-- navbar-section end -->
<!-- main body -->
<div class="container-fluid">
	<div class="row">
		<div class="d-none d-lg-block col-lg-3 bg-warning" ><div class="card text-center bg-ess">
			<div class="card-header">
				<div class="card-img-top">
					<div class="card-img">
						<img src="<?php echo $stdata1['photos']; ?>" alt="student" height="120px" width="120px" style="border-radius: 50%;">
					</div>
				</div>	
			</div>
			<div class="card-body ">
				<h4 class="text-uppercase"><?php  echo $_SESSION['user']; ?></h4>
				<h6>ROLL NO : <?php echo $_SESSION['id']; ?></h6>
			</div>
			<div class="card-footer bg-white">
				<ul class="navbar-nav">
					<li class="nav-item"><a href="#" class="nav-link bg-ess mb-1">Courses</a></li>
					<li class="nav-item"><a href="#" class="nav-link bg-ess mb-1">Address</a></li>
					<li class="nav-item"><a href="#" class="nav-link bg-ess mb-1">Installments</a></li>
					<li class="nav-item"><a href="#" class="nav-link bg-ess mb-1">Notes</a></li>
					<li class="nav-item"><a href="#" class="nav-link bg-ess mb-1">Books</a></li>
					<li class="nav-item"><a href="#" class="nav-link bg-ess mb-1">Certificates</a></li>
					<li class="nav-item"><a href="studentadmissionform.php" class="nav-link bg-ess mb-1">Application Form</a></li>
				</ul>
			</div>
		</div></div>
		<div class=" col col-md-12 col-lg-6 "> 
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam aperiam velit sequi maiores impedit cum quas voluptatum fugit eum perferendis?
			<p>This is an application form and also a Login form</p>
			<h6>To complete this step to provide equal space.....and bydefault correct them...</h6>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse recusandae ipsa magni odio labore alias tenetur vel hic sint, quas animi totam culpa, atque aut aliquam veritatis error? Esse cupiditate, atque earum debitis excepturi harum, voluptates libero adipisci, magni dignissimos quo. Debitis sed est et, consectetur, esse, maxime sunt, sit eligendi illum aperiam voluptatem dolorem obcaecati similique dolor non praesentium accusantium ratione minima quibusdam ex laboriosam cum nam? Vero sit molestias deleniti nostrum delectus illo exercitationem libero suscipit quidem repudiandae, dolorum omnis cumque aliquam nesciunt, nisi sunt numquam. Neque voluptas dolores quia accusamus! Natus, modi atque expedita ratione accusantium saepe.
		 </div>


		<div class="d-none d-lg-block col-lg-3" style="background-color:#ffc107  ;">	
			<div class="card-header bg-ess">
			<h3 style="border-bottom: 2px solid grey;">Write a Feedback ?</h3>
			<div class="card-body">
				<form>


					<div class="form-group">

						<textarea rows="4" cols="20" class="form-control"
						placeholder="Write your query ?"></textarea>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" checked="checked">
						<small class="clearfix">By clicking on send feedback use &
							share my personal data as per the <a href="#">Privacy Policy.</a></small>
						</div>
					</form>
				</div>
				<div class="card-footer text-center">
					<button type="button" class="btn bg-warning">Send Feedback</button>
				</div>
			</div>
		</div>
	</div>
</div><!-- end main body container -->

<!-- footer section start  -->   
<!-- footer section start     -->
<div class="container-fluid">
	<div class="row pt-5 bg-ess mt-1 text-white text-center">
		<div class="col-6 col-md-4">
			<h4 class="textfooter"><u>Address :-</u></h4><br>
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





						<script>
							function openNav() {
								document.getElementById("mySidenav").style.width = "250px";
							}

							function closeNav() {
								document.getElementById("mySidenav").style.width = "0";
							}
						</script>



						<script type="text/javascript" src="../js/jquery.js"></script>
						<script type="text/javascript" src="../js/propper.min.js"></script>
						<script type="text/javascript" src="../js/bootstrap.min.js"></script>
					</body>

					</html>