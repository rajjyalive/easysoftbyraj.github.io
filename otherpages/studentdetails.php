 <?php 
       session_start();
       include '../backendcodes/connection.php';
       if (!isset($_SESSION['staffuser'])) {
         header('location:../index.php');
       }
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
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<link rel="icon" href="../favicon.ico" type="../image/x-icon">
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


		@media screen and (max-width: 592px) {
		
		#stSearch{
			width:100% !important;
		}
		#sth5{
			font-size: 100%;
		}
		}
		

	</style>
</head>
<body>  
      <div class="conhtainer-fluid">
      	 <div class="row" style="border-top: 2px solid #ffc107;">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">

				<ul class="nav float-left">
					<li class="nav-item">
						<a href="#" class="nav-link text-success" id="call">
							<img src="../images/call.gif" alt="call logo " height="8%" width="8%" id="callimage"> +91 0123456789
						</a>
					</li>

				</ul>

			</div> <!---end first column-->
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 ">

					<ul class="nav float-right" id="social">
						<li class="nav-item">
							<a href="#" class="nav-link" style="color: #405DE6;"><i
							class="fab fa-facebook"></i>
						    </a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link" style="color: #FD1D1D;"><i
								class="fab fa-youtube-square"></i>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-success"><i class="fab fa-whatsapp"></i>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link " style="color:#E1306C;"><i class="fab fa-instagram"></i>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link" style="color: #F56040;"><i class="fas fa-envelope"></i>
							</a>
						</li>
					</ul>


			</div> <!---end second column-->

          </div><!-- end first row -->
           <div class="row " id="logo-wrap">

				<div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center ">
					<div class="text-center ">
						<img src="../images/ess.jpg" alt="logo" height="8%" width="8%">
					</div>
					<p class="text-primary navbar-brand py-0 my-0" id="logo" >Eastern Software Solution</p>

				</div>

		   </div>
		   <!---logo section end-->
           <!-- navbahr section start -->
	<nav class="navbar navbar-expand-lg bg-warning navbar-dark sticky-top">
		<ul class="nav navbar-nav mr-auto d-md-block d-lg-none" id="sidebar-icon">
           <li class="nav-item">
           	  <a href="#" onclick="openNav()"><img src="" style="height: 40px; width: 40px;border:1px solid whitesmoke;border-radius: 50%;overflow-x: hidden;overflow-y: hidden;"><span class="btn btn-warning">Profile</span>
           	  </a>
          </li>
       </ul>
	 <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarmenu2"
		aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

 	<div class="collapse navbar-collapse" id="navbarmenu2">
		<ul class="nav navbar-nav text-center pl-md-5">
			<li class="nav-item">
				<a href="staffhome.php" class="btn btn-warning text-dark"><i class="fas fa-home"></i> Home</a>
			</li>
			<li class="nav-item">
				<a href="#" class="btn btn-warning"><i class="fas fa-bookmark"></i> Why Us</a>
			</li>
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

         <li class="nav-item">
     	    <a href="#" class="btn btn-warning text-dark"><i class="fas fa-camera"></i>Gallery</a>
         </li>
	    <li class="nav-item">
		    <a href="#" class="btn btn-warning text-dark"><i class="fas fa-map-marker-alt"></i>Contact</a>
        </li>
	    <li class="nav-item">
		    <a href="#" class="btn btn-warning text-dark"><i class="fas fa-question"></i>FAQ</a>
	    </li>
	    <li class="nav-item ml-lg-5">
		    <a href="logout.php" class="btn btn-warning text-dark"><i class="fas fa-sign-out-alt"></i>Logout</a>
	    </li>
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

					<img src="images/user.png" alt="student" height="40%px" width="40%">
				</div>
				<h6>Name</h6>
			<p style="font-size: 80%;">ROLL</p>
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
</div><!-- mobile version sidebar end -->

 </div><!-- first container end -->
<div class="container-fluid">
	<div class="row">
       <div class="d-none d-lg-block col-lg-2 bg-ess" style="height: auto; " id="leftSidebar">
			<div class="pl-2 nav text-center links">
				<li class="list-group-item bg-ess border-light m-auto ">
					<h5 style="padding-bottom: 3px;border-bottom: 2px solid whitesmoke;">Important Links</h5>
				</li>
				    <a href="#" class="p-3 w-100 text-white links" style="border-bottom: 1px solid grey; text-decoration: none;">Link One <i class="fas fa-external-link-alt pl-2"></i>
				    </a>
				    <a href="#" class="p-3 w-100 text-white links" style="border-bottom: 1px solid grey; text-decoration: none;">Link Two <i class="fas fa-external-link-alt pl-2"></i>
				    </a>
				    <a href="#" class="p-3 w-100 text-white links" style="border-bottom: 1px solid grey; text-decoration: none;">Link Three <i class="fas fa-external-link-alt pl-2"></i>
				    </a>
				    <a href="#" class="p-3 w-100 text-white links" style="border-bottom: 1px solid grey; text-decoration: none;">Link Four <i class="fas fa-external-link-alt pl-2"></i>
				    </a>
				    <a href="#" class="p-3 w-100 text-white links" style="border-bottom: 1px solid grey; text-decoration: none;">Link Five <i class="fas fa-external-link-alt pl-2"></i>
				    </a>
				    <a href="#" class="p-3 w-100 text-white links" style="border-bottom: 1px solid grey; text-decoration: none;">Link Six <i class="fas fa-external-link-alt pl-2"></i>
				    </a>
				    <a href="#" class="p-3 w-100 text-white links" style="border-bottom: 1px solid grey; text-decoration: none;">Link Seven <i class="fas fa-external-link-alt pl-2"></i>
				    </a>
				    <a href="#" class="p-3 w-100 text-white links" style="border-bottom: 1px solid grey; text-decoration: none;">Link Eight <i class="fas fa-external-link-alt pl-2"></i>
				    </a>

			</div>
	   </div><!-- First column end-->
	   <div class="col col-md-12 col-lg-8 ">
			<marquee style="color: #00284d;">
				Welcome To ESS Computer. We are Offering wide range of Computer courses from basic to advance and focus on the pursuit of excellence.......
			</marquee><!-- end marquee line -->
	
			<div class="container-fluid my-5 bg-ess py-4">
				<div class="form-group text-uppercase text-center">
					<h3><u>Search Student Details</u></h3>
				</div>

				<form action="searchDetails/printonestudentdetails.php" method="post" class="form-inline rounded my-4" style="border:1px solid white;">
					<h5 class="ml-5 pt-4 pb-2" id="sth5">1. View Student Profile :</h5>
                  <div class="form-group mb-2 pb-4 bg-ess w-100 rounded">
                  	
                    <input type="text" class="form-control my-4 my-sm-0 ml-sm-3 ml-md-5 w-50 p-1" placeholder="Enter Enrollment No" id="stSearch" name="onestenroll">
                    <input type="submit" name="onestsubmit" value="View" class="form-control ml-sm-3 px-sm-5" style="background-color: #ffc107; color:#00284d; cursor: pointer;">           
                  </div>
                  
                </form>
                <form action="searchDetails/search.php" method="post" class="form-inline rounded my-4" style="border:1px solid white;">
					<h5 class="ml-5 pt-4 pb-2" id="sth5">2. Search Multiple Student Details :</h5>
                  <div class="form-group mb-2 pb-4 bg-ess w-100 rounded">
                  	
                    <input type="text" class="form-control my-4 my-sm-0 ml-sm-3 ml-md-5 w-25 p-1" placeholder="Enter Student Name" id="stSearch" name="mulname">
                    <select class="form-control my-4 my-sm-0 ml-sm-3 ml-md-3 w-25" id="stSearch" name="mulvalue">
                          <option disabled="disabled" selected="">Select</option>
                          <option value="all">ALL</option>
                          <option value="studentInfo">Student Info</option>
                          <option value="coursesInfo">Courses Info</option>
                          <option value="correspondenceAddress">Correspondence Address</option>
                          <option value="permanentAddress">Permanent Address</option>
                          <option value="imageSign">Image and Sign</option>
                          <option value="qualificationInfo">Qualification Info</option>
                          <option value="feedbackInfo">Feedback Info</option>
                        </select>
                    <input type="submit" name="mulview" value="View" class="form-control ml-sm-3 px-sm-5" style="background-color: #ffc107; color:#00284d; cursor: pointer;">           
                  </div>
                  
                </form>
                
                <form action="searchDetails/searchCate.php" method="post" class="form-inline rounded my-4" style="border:1px solid white;">
                  <div class="form-group mb-2 p-4 bg-ess w-100 rounded">
                  	<h5 class="ml-4 pb-2" id="sth5">3. View Student Details by Category : </h5>
                        <select name="selCate" class="form-control my-4 my-sm-0 ml-sm-3 ml-md-5 w-50" id="stSearch">
                          <option disabled="disabled" selected>Select</option>
                          <option value="DUAL O & PGDCA">DUAL O LEVEL & PGDCA</option>
                          <option value="O LEVEL">O LEVEL</option>
                          <option value="PGDCA">PGDCA</option>
                          <option value="DUAL O & PGDCA">DUAL O & PGDCA</option>
                          <option value="DCA">DCA</option>
                          <option value="ADCA">ADCA</option>
                          <option value="TALLY">TALLY</option>
                          <option value="ALL">ALL STUDENT DETAILS</option>
                        </select>
                     
                    <input type="submit" name="gocat" value="View" class="form-control ml-sm-3 px-sm-5" style="background-color: #ffc107; color:#00284d; cursor: pointer;">           
                  </div>
                  
                </form> 
                <form class="form-inline rounded my-4" style="border:1px solid white;">
					<h5 class="ml-5 pt-4 pb-2" id="sth5">4. Search Details By Date :</h5>
                  <div class="form-group mb-2 pb-4 bg-ess w-100 rounded">
                  	
                    <input type="date" class="form-control my-4 my-sm-0 ml-sm-3 ml-md-5 w-25 p-1" id="stSearch">
                    <select class="form-control my-4 my-sm-0 ml-sm-3 ml-md-3 w-25" id="stSearch">
                          <option disabled="disabled" selected>Select</option>
                          <option value="DUAL O & PGDCA">DUAL O LEVEL & PGDCA</option>
                          <option value="O LEVEL">O LEVEL</option>
                          <option value="PGDCA">PGDCA</option>
                          <option value="DUAL O & PGDCA">DUAL O & PGDCA</option>
                          <option value="DCA">DCA</option>
                          <option value="ADCA">ADCA</option>
                          <option value="TALLY">TALLY</option>
                          <option value="ALL">ALL STUDENT DETAILS</option>option>
                        </select>
                    <input type="submit" value="View" class="form-control ml-sm-3 px-sm-5" style="background-color: #ffc107; color:#00284d; cursor: pointer;">           
                  </div>
                  
                </form>
                <form class="form-inline rounded my-4" style="border:1px solid white;">
					<h5 class="ml-5 pt-4 pb-2" id="sth5">5. Date wise Admission Report :</h5>
                  <div class="form-group mb-2 pb-4 bg-ess w-100 rounded">
                  	<label class="mx-3">From</label>
                   <input type="date" class="form-control my-4 my-sm-0  w-25 p-1" placeholder="Enter Student Name" id="stSearch">
                   <label class="mx-3">To</label>
                   <input type="date" class="form-control my-4 my-sm-0  w-25 p-1" placeholder="Enter Student Name" id="stSearch">
                    <select class="form-control my-4 my-sm-0 ml-sm-3 ml-md-5 w-25" id="stSearch">
                          <option disabled="disabled" selected>Select</option>
                          <option value="DUAL O & PGDCA">DUAL O LEVEL & PGDCA</option>
                          <option value="O LEVEL">O LEVEL</option>
                          <option value="PGDCA">PGDCA</option>
                          <option value="DUAL O & PGDCA">DUAL O & PGDCA</option>
                          <option value="DCA">DCA</option>
                          <option value="ADCA">ADCA</option>
                          <option value="TALLY">TALLY</option>
                          <option value="ALL">ALL STUDENT DETAILS</option>
                        </select>
                        <div class="form-group m-auto">
                    <input type="submit" value="View" class="form-control ml-sm-3 px-sm-5 mt-4" style="background-color: #ffc107; color:#00284d; cursor: pointer;">
                        </div>           
                  </div>
                  
                </form>

			</div>
		
			
		</div><!-- Main body end-->
		<div class="d-none d-lg-block col-lg-2 p-0">

		    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laborum recusandae eum in sapiente tempore quidem quibusdam, impedit quas beatae quasi, dolorum eius libero sunt numquam at cupiditate! Impedit reprehenderit voluptas consectetur amet animi ducimus consequuntur tenetur, quae, ipsam error suscipit iste eligendi at provident praesentium odit deleniti necessitatibus nam!
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur numquam delectus quae nulla libero excepturi unde facilis tempore sequi! Dolore impedit fugit quibusdam eveniet distinctio officiis aliquid at eos dolorum.
		</div><!-- Right sidebar end-->
						
	</div><!-- Body row end -->
</div><!-- body container end -->
    <div class="container-fluid">
		<div class="row pt-5 bg-ess mt-1 text-white text-center">
			<div class="col-6 col-md-4">
				<h4 class="textfooter"><u>Address</u> :-</h4><br>
				<p class="textfooter">Neheru Gali Chhowk,<br>Padampur.<br>Dist : Bargarh (ODISHA)<br>Pin : 768036<br><br>Mob : +91 0123456789<br>
				</p>
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
					<li class="nav-item">
						<a href="#" class="nav-link" style="color: #405DE6;"><i class="fab fa-facebook fa-2x s-link"></i>
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link" style="color: #FD1D1D;"><i class="fab fa-youtube-square fa-2x s-link"></i>
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link text-success"><i class="fab fa-whatsapp fa-2x s-link"></i>
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link " style="color:#E1306C;"><i class="fab fa-instagram fa-2x s-link"></i>
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link" style="color: #F56040;"><i class="fas fa-envelope fa-2x s-link"></i>
						</a>
					</li>
				</ul>
			</div>
		</div> <!-- footer row end -->
		<!-- footer section end -->
		<div class="row bg-ess">
			<div class="col col-md-12">
				<p class="copytext pb-2"> &copy;copyright at ess computer padampur. All rights reserved.</p>

			</div>
		</div><!-- copy right row end -->
	</div><!-- footer container end -->



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