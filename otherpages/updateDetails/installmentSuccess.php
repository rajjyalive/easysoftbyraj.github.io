 <?php 
     session_start();
     include '../../backendcodes/connection.php';
     if (!isset($_SESSION['staffuser'])) {
         header('location:../../index.php');
       }
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ESS Group Of Institutions</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../../style.css">
	<link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
	<link rel="icon" href="../../favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../../css/animate.css">


</head>
<body>
	
	
			<div class="conhtainer-fluid">
            <div class="row" style="border-top: 2px solid #ffc107;">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            
                                <ul class="nav float-left">
                    <li class="nav-item"><a href="#" class="nav-link text-success" id="call"><img src="../../images/call.gif"
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
                    <img src="../../images/ess.jpg" alt="logo" height="8%" width="8%">
                  </div>
                  <p class="text-primary navbar-brand py-0 my-0" id="logo" >Eastern Software Solution</p>

                </div>

              </div>
            </div>

            <!---logo section end-->



	<!-- navbahr section start -->
	<nav class="navbar navbar-expand-lg bg-warning navbar-dark sticky-top">
		
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
	<li class="nav-item ml-lg-5"><a href="../otherpages/logout.php" class="btn btn-warning text-dark"><i class="fas fa-sign-out-alt"></i>
						Logout</a></li>
</ul>
</div>
</nav>
<!-- navbar-section end -->




<!-- navbar-section end -->
<!-- main body -->
<div class="container-fluid mt-5">
	<div class="row">
		
		<div class=" col col-md-12 col-lg-8 m-auto m-5"> 
			 
			 <div class="card p-5 bg-ess">
			 	<div class="card-header text-center">
			 		<h1 class=" p-4 "><u>PAYMENT SUCCESSFUL</u></h1>
			 		<h4>Name :<span class="text-uppercase"> <?php echo $_SESSION['insName']; ?></span></h4>
			 		<h6>Enrollment No : <?php echo $_SESSION['insEnroll']; ?></h6>
			 		<br>
			 		<h6>Fee Paid Successfully :  <?php echo $_SESSION['insFees']; ?> /-</h6>
			 	</div>
			 	<div class="card-header text-center">
			 	 <a href="installmentpage.php" class="btn btn-success m-2">Close</a>
			 	 <a href="printaddmissionpage.php" class="btn btn-success m-2">Print Index</a>
			 	 </div>
			 </div>


		 </div>


	</div>	
</div><!-- end main body container -->





	<script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/propper.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
</body>

</html>