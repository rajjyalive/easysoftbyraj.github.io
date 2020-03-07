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
 	<script type="text/javascript" src="js/formvalidation.js"></script>

</head>
<body>

	

	<div class="conhtainer-fluid ">
		<div class="row">
			<div class="col">
				<ul class="nav float-left">
					<li class="nav-item"><a href="otherpages/staffhome.php" class="nav-link bg-ess" ><i class="fas fa-home"></i> Home</a></li>

				</ul>
			</div>
		</div>
		<div class="row ">

			<div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center ">
				<div class="text-center ">
					<img src="images/ess.jpg" alt="logo" height="8%" width="8%">
				</div>
				<p class=" navbar-brand py-0 my-0" id="logo" >Eastern Software Solution</p>

			</div>

		</div>
	</div>

	<!---logo section end-->
	
	<div class="container">
		<div class="row text-center">
			<div class="col col-md-8 col-lg-10 text-white bg-ess m-auto form-control-lg">ADMISSION FORM</div>
		</div>	
		<div class="row">
			<div class="col col-md-8 col-lg-10 m-auto text-dark" style="background-color: #00284d !important;" >
				<form action="backendcodes/admissionform.php" method="post" name="form" enctype="multipart/form-data" onsubmit="return validation()" >
					<div class="card">
						<div class="card-title bg-ess form-control pl-3 py-1">Registration for Courses :</div>
						<div class="card-header">
							<label for="name">First Course :</label>
							<div class="input-group mb-3">

								<select class="custom-select" name="firstcourse">
									<option selected disabled="disabled">Select First Course</option>
									<option value="O LEVEL">'O' LEVEL</option>
									<option value="PGDCA">PGDCA</option>
									<option value="O LEVEL & PGDCA"> 'O' LEVEL & PGDCA</option>
									<option value="ADCA">ADCA</option>
								</select>
								<input type="text" class="form-control" placeholder="Total fees" name="ftotalfee">
								<input type="text" class="form-control" placeholder="Fees Paid" name="fpaidfee">
								<input type="text" class="form-control" placeholder="Fees for reg." name="fregfees">

							</div>
							<label for="name">Second Course:</label>
							<div class="input-group mb-3">

								<select class="custom-select" name="secondcourse">
									<option selected disabled="disabled">Select second Course</option>
								<option value="DCA">DCA</option>
									<option value="C++">C++</option>
									<option value="C">C Programming</option>
								</select>
								<input type="text" class="form-control" placeholder="Total fees" name="stotalfee">
								<input type="text" class="form-control" placeholder="Fees Paid" name="spaidfee">
								<input type="text" class="form-control" placeholder="Fees for reg." name="sregfees">

							</div>
							<label for="name">Third Course :</label>
							<div class="input-group mb-3">

								<select class="custom-select" name="thirdcourse">
									<option selected disabled="disabled">Select Third Course</option>
									<option value="TALLY">TALLY</option>
									<option value="KIDz">KIDz</option>
									<option value="CB">C.B</option>
									<option value="Photoshop">Photoshop</option>
								</select>
								<input type="text" class="form-control" placeholder="Total fees" name="ttotalfee">
								<input type="text" class="form-control" placeholder="Fees Paid" name="tpaidfee">
								<input type="text" class="form-control" placeholder="Fees for reg." name="tregfees">

							</div>
						</div>
						<!-- student d5etails -->
						<div class="card-title bg-ess form-control pl-3 py-1">Student Details :</div>

						<div class="card-header">

							<label for="name"><span class="text-danger font-weight-bold">*</span>Applicant Name : </label>

							<div class="form-group mb-3">
								<input type="text" class="form-control text-uppercase" placeholder="Full Name" name="fullname" id="fullname" autocomplete="off">
								
							</div>
							
							<label for="name"><span class="text-danger font-weight-bold">*</span>Father's/ Guardian's Name : </label>
							<div class="form-group mb-3">

								<input type="text" class="form-control text-uppercase" placeholder="Full Name" name="fathername" id="fathername" autocomplete="off">
							</div>
							<label for="name">Mother's Name :</label>
							<div class="input-group mb-3">

								<input type="text" class="form-control text-uppercase" placeholder="Full Name" name="mothername" id="mothername" autocomplete="off">
							</div>

							<div class="row">
								<div class="col-6 col-md-6">
									<label for="name"><span class="text-danger font-weight-bold">*</span>Date of Birth :</label>
									<input type="date" class="form-control" placeholder="Middle Name" name="dob" id="dob">
								</div>
								<div class="col-6 col-md-6">
									<label for="name"><span class="text-danger font-weight-bold">*</span>Gender :</label>
									<select class="custom-select" name="gender">
										<option selected disabled="disabled">Select</option>
										<option value="MALE">MALE</option>
										<option value="FEMALE">FEMALE</option>
										<option value="TRANS GENDER">TRANS GENDER</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-6 col-md-6">
									<label for="name"><span class="text-danger font-weight-bold">*</span>Category :</label>
									<select class="custom-select" name="category">
										<option selected disabled="disabled">Select</option>
										<option value="ST">ST</option>
										<option value="SC">SC</option>
										<option value="OBC">OBC</option>
										<option value="General">GENERAL</option>
									</select>
								</div>
								<div class="col-6 col-md-6">
									<label for="name"><span class="text-danger font-weight-bold">*</span>Material Status :</label>
									<select class="custom-select" name="status">
										<option selected disabled="disabled">Select</option>
										<option value="SINGLE">SINGLE</option>
										<option value="MARRIED">MARRIED</option>
										<option value="WIDOW">WIDOW</option>
										<option value="SEPARATED">SEPARATED</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-6 col-md-6">
									<div class="form-group mb-3">
										<label for="pwd"><span class="text-danger font-weight-bold">*</span>Mobile No :</label>
										<div class="input-group-prepend">
											<span class="input-group-text p-ess">+91</span>

											<input type="text" class="form-control p-ess" name="mobile" id="mobile" autocomplete="off">
										</div>
									</div>
								</div>
								<div class="col-6 col-md-6">
									<div class="form-group">
										<label for="pwd">Email ID :</label>
										<input type="email" class="form-control" placeholder="email id" name="email" id="email" autocomplete="off">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-6 col-md-6">
									<div class="form-group">
										<label for="pwd"><span class="text-danger font-weight-bold">*</span>Religion :</label>
										<input type="text" class="form-control text-uppercase" placeholder="Religion" name="religion" id="religion" autocomplete="off">
									</div>
								</div>
								<div class="col-6 col-md-6">
									<div class="form-group">
										<label for="pwd"><span class="text-danger font-weight-bold">*</span>Nationality :</label>
										<input type="text" class="form-control text-uppercase" placeholder="Nationality" name="nation" id="nation" autocomplete="off">
									</div>
								</div>
							</div>
							
						</div>
						<!-- Address Section -->
						<div class="card-title bg-ess form-control pl-3 py-1">Address Details :</div>

						<div class="card-header">
							<div class="row">
								<div class="col col-sm-6 col-md-6">
									<div class="card-title text-center"><p><u><strong>Correspondence Address</strong></u>
										<label class="form-check-label pb-1" style="visibility: hidden;">Same as correspondence address.</label></p>
									</div>
									
									<div class="form-group">
										<label for="pwd"><span class="text-danger font-weight-bold">*</span>Address Line 1 :</label>
										<input type="text" class="form-control text-uppercase" placeholder="Street, Village, Landmark" id="caddress1" name="caddress1" autocomplete="off">
									</div>
									<div class="form-group">
										<label for="pwd"><span class="text-danger font-weight-bold">*</span>Address Line 2 :</label>
										<input type="text" class="form-control text-uppercase" placeholder="Post office, Police Station" name="caddress2" id="caddress2" autocomplete="off">
									</div>
									
									<div class="form-group">
										<label for="pwd"><span class="text-danger font-weight-bold">*</span>District :</label>
										<input type="text" class="form-control text-uppercase" placeholder="District" name="cdistrict" id="cdistrict" autocomplete="off">
									</div>
									<div class="form-group mb-3">
										<label for="pwd"><span class="text-danger font-weight-bold">*</span>State :</label>
										<select class="custom-select" name="cstate">
											<option value="Andhra Pradesh">Andhra Pradesh</option>
											<option value="Arunachal Pradesh">Arunachal Pradesh</option>
											<option value="Assam">Assam</option>
											<option value="Bihar">Bihar</option>
											<option value="Chhattisgarh">Chhattisgarh</option>
											<option value="Goa">Goa</option>
											<option value="Gujarat">Gujarat</option>
											<option value="Haryana">Haryana</option>
											<option value="Himachal Pradesh">Himachal Pradesh</option>
											<option value="Jharkhand">Jharkhand</option>
											<option value="Karnataka">Karnataka</option>
											<option value="Kerala">Kerala</option>
											<option value="Madhya Pradesh">Madhya Pradesh</option>
											<option value="Maharashtra">Maharashtra</option>
											<option value="Manipur">Manipur</option>
											<option value="Meghalaya">Meghalaya</option>
											<option value="Mizoram">Mizoram</option>
											<option value="Nagaland">Nagaland</option>
											<option selected>ODISHA</option>
											<option value="Panjab">Panjab</option>
											<option value="Rajasthan">Rajasthan</option>
											<option value="Sikkim">Sikkim</option>
											<option value="Tamil Nadu">Tamil Nadu</option>
											<option value="Telangana">Telangana</option>
											<option value="Tripura">Tripura</option>
											<option value="Uttaranchal">Uttaranchal</option>
											<option value="Uttar Pradesh">Uttar Pradesh</option>
											<option value="West Bengal">West Bengal</option>
										</select>
									</div>
									
									<div class="form-group">
										<label><span class="text-danger font-weight-bold">*</span>ZIP/ Pincode :</label>
										<input type="number" class="form-control" name="cpincode" id="cpincode" placeholder="Pincode">  
									</div>

								</div>
								<div class="col col-sm-6 col-md-6">
									<div class="card-title text-center">
										<p><u><strong>Permanent Address</strong></u></p>
									</div>
									<div class="form-check">
										<input type="checkbox" class="form-check-input" name="copyaddress" onclick="addresscopyto(this.form)">
										<label class="form-check-label pb-1" for="exampleCheck1">Same as correspondence address.</label>
									</div>
									
									<div class="form-group">
										<label for="pwd"><span class="text-danger font-weight-bold">*</span>Address Line 1 :</label>
										<input type="text" class="form-control text-uppercase" placeholder="Street, Village, Landmark" id="paddress1" name="paddress1" autocomplete="off">
									</div>
									<div class="form-group">
										<label for="pwd"><span class="text-danger font-weight-bold">*</span>Address Line 2 :</label>
										<input type="text" class="form-control text-uppercase" placeholder="Post office, Police Station" name="paddress2" id="paddress2" autocomplete="off">
									</div>
									
									<div class="form-group">
										<label for="pwd"><span class="text-danger font-weight-bold">*</span>District :</label>
										<input type="text" class="form-control text-uppercase" placeholder="District" name="pdistrict" id="pdistrict" autocomplete="off">
									</div>
									<div class="form-group mb-3">
										<label for="pwd"><span class="text-danger font-weight-bold">*</span>State :</label>
										<select class="custom-select" name="pstate">
											<option value="Andhra Pradesh">Andhra Pradesh</option>
											<option value="Arunachal Pradesh">Arunachal Pradesh</option>
											<option value="Assam">Assam</option>
											<option value="Bihar">Bihar</option>
											<option value="Chhattisgarh">Chhattisgarh</option>
											<option value="Goa">Goa</option>
											<option value="Gujarat">Gujarat</option>
											<option value="Haryana">Haryana</option>
											<option value="Himachal Pradesh">Himachal Pradesh</option>
											<option value="Jharkhand">Jharkhand</option>
											<option value="Karnataka">Karnataka</option>
											<option value="Kerala">Kerala</option>
											<option value="Madhya Pradesh">Madhya Pradesh</option>
											<option value="Maharashtra">Maharashtra</option>
											<option value="Manipur">Manipur</option>
											<option value="Meghalaya">Meghalaya</option>
											<option value="Mizoram">Mizoram</option>
											<option value="Nagaland">Nagaland</option>
											<option selected>ODISHA</option>
											<option value="Panjab">Panjab</option>
											<option value="Rajasthan">Rajasthan</option>
											<option value="Sikkim">Sikkim</option>
											<option value="Tamil Nadu">Tamil Nadu</option>
											<option value="Telangana">Telangana</option>
											<option value="Tripura">Tripura</option>
											<option value="Uttaranchal">Uttaranchal</option>
											<option value="Uttar Pradesh">Uttar Pradesh</option>
											<option value="West Bengal">West Bengal</option>
										</select>
									</div>
									
									<div class="form-group">
										<label><span class="text-danger font-weight-bold">*</span>ZIP/ Pincode :</label>
										<input type="number" class="form-control" name="ppincode" id="ppincode" placeholder="Pincode">  
									</div>

								</div>
							</div>
						</div>

						<!-- Qualification -->
						<div class="card-title bg-ess form-control pl-3 py-1">Qualification Details :</div>

						<div class="card-header">
							<div class="row">
								<div class="col col-md-12 col-lg-12">

									<label for="name">+3 Examination :</label>
									<div class="input-group mb-3">
										<input type="text" class="form-control text-uppercase" placeholder="Board/ University" autocomplete="off" name="gboard">
										<input type="number" class="form-control" placeholder="Year of Passing" name="gdpass" id="gdpass" autocomplete="off">
										<input type="text" class="form-control" placeholder="Total Marks" name="gdtmarks" id="gdtmarks" autocomplete="off">
										<input type="text" class="form-control" placeholder="Marks" name="gdomarks" id="gdomarks" autocomplete="off">
									</div>
									<label for="name">+2 Examination :</label>
									<div class="input-group mb-3">
										<input type="text" class="form-control text-uppercase" placeholder="Board/ University" autocomplete="off" name="pboard">
										<input type="number" class="form-control" placeholder="Year of Passing" autocomplete="off" name="ptpass">
										<input type="text" class="form-control" placeholder="Total Marks" name="pttmarks" id="pttmarks" autocomplete="off">
										<input type="text" class="form-control" placeholder="Marks" name="ptomarks" id="ptomarks" autocomplete="off">
									</div>
									<label for="name">10th Examination :</label>
									<div class="input-group mb-3">
										<input type="text" class="form-control text-uppercase" placeholder="Board/ University" autocomplete="off" name="tenboard">
										<input type="number" class="form-control" placeholder="Year of Passing" name="tenpass" id="tenpass" autocomplete="off">
										<input type="text" class="form-control" placeholder="Total Marks" name="tentmarks" id="tentmarks" autocomplete="off">
										<input type="text" class="form-control" placeholder="Marks" name="tenomarks" id="tenomarks" autocomplete="off">
									</div>
									<label for="name">Other Qualification :</label>
									<div class="input-group mb-3">
										<input type="text" class="form-control text-uppercase" placeholder="Board/ University" autocomplete="off" name="otboard">
										<input type="number" class="form-control" placeholder="Year of Passing" name="otpass" id="otpass">
										<input type="text" class="form-control" placeholder="Total Marks" name="ottmarks" id="ottmarks" autocomplete="off">
										<input type="text" class="form-control" placeholder="Marks" name="otomarks" id="otomarks" autocomplete="off">
									</div>
								</div>
							</div>
						</div>

						<!-- Photo and Signature Section -->
						<div class="card-title bg-ess form-control pl-3 py-1"><p>Upload Photo And Signature <span style="font-size:80%;">(only jpg, jpeg & png images)</span> :</p>
						</div>

						<div class="card-header">
							<div class="row">
								<div class="col-6 col-md-6">
									<label><span class="text-danger font-weight-bold">*</span>Upload Photo :</label>
									<div class="form-group">
										<input type="file" class="form-control-file"  name="photo">
									</div>
								</div>
								<div class="col-6 col-md-6">
									<label><span class="text-danger font-weight-bold">*</span>Upload Signature :</label>
									<div class="form-group">
										<input type="file" class="form-control-file" name="sign">
									</div>
								</div>
							</div>

						</div>
						<div class="card-footer">
							<div class="form-check ml-4 ">
								<input type="checkbox" class="form-check-input" checked="checked" name="declare" id="declare">
								<label class="form-check-label" for="exampleCheck1"><strong><u>Term & Conditions :</u> </strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur eligendi dolorum nesciunt non praesentium error ipsa molestias !</label>
							</div> 
						</div>
						<div class="card-header text-center mb-3 bg-white">
							<button type="reset" class="btn bg-ess mr-2" id="resubmit">Reset</button>
							<button type="submit" class="btn bg-ess ml-2" id="resubmit" name="done">Submit</button>
						</div>
					</div>

				</form><!-- end form tag -->
			</div> <!-- End main column -->

		</div><!-- end main row -->
		<div class="row text-center">
			<div class="col col-md-8 col-lg-10 text-white bg-ess m-auto form-control-lg"><span style="visibility: hidden;">ADMISSION FORM</span></div>
		</div>
	</div><!-- end main container -->

     <!-- include script -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/propper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>