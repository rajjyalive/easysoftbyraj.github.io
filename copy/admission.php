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
					<li class="nav-item"><a href="index.php" class="nav-link bg-ess" ><i class="fas fa-home"></i> Home</a></li>

				</ul>
			</div>
		</div>
		<div class="row ">

			<div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center ">
				<div class="text-center ">
					<img src="images/ess.jpg" alt="logo" height="8%" width="8%">
				</div>
				<p class="text-primary navbar-brand py-0 my-0" id="logo" >Eastern Software Solution</p>

			</div>

		</div>
	</div>

	<!---logo section end-->
	
	<div class="container">
		<div class="row text-center">
			<div class="col col-md-8 col-lg-10 text-white bg-ess m-auto form-control-lg">ADMISSION FORM</div>
		</div>
		<div class="row">
			<div class="col col-md-8 col-lg-10 m-auto">
				<form >
					<div class="card">
						<div class="card-title bg-ess form-control pl-3 py-1">Registration for Courses :</div>
						<div class="card-header">
							<label for="name">First Course :</label>
							<div class="input-group mb-3">

								<select class="custom-select" >
									<option selected>Select First Course</option>
									<option value="1">O LEVEL</option>
									<option value="2">PGDCA</option>
									<option value="3">O LEVEL & PGDCA</option>
									<option value="3">A LEVEL</option>
								</select>
								<input type="text" class="form-control" placeholder="Total fees">
								<input type="text" class="form-control" placeholder="Fees Paid">
							</div>
							<label for="name">Second Course:</label>
							<div class="input-group mb-3">

								<select class="custom-select" >
									<option selected>Select First Course</option>
									<option value="1">O LEVEL</option>
									<option value="2">PGDCA</option>
									<option value="3">O LEVEL & PGDCA</option>
									<option value="3">A LEVEL</option>
								</select>
								<input type="text" class="form-control" placeholder="Total fees">
								<input type="text" class="form-control" placeholder="Fees Paid">
							</div>
							<label for="name">Third Course :</label>
							<div class="input-group mb-3">

								<select class="custom-select" >
									<option selected>Select First Course</option>
									<option value="1">O LEVEL</option>
									<option value="2">PGDCA</option>
									<option value="3">O LEVEL & PGDCA</option>
									<option value="3">A LEVEL</option>
								</select>
								<input type="text" class="form-control" placeholder="Total fees">
								<input type="text" class="form-control" placeholder="Fees Paid">
							</div>
						</div>
						<!-- student d5etails -->
						<div class="card-title bg-ess form-control pl-3 py-1">Student Details :</div>

						<div class="card-header">

							<label for="name"><span class="text-danger font-weight-bold">*</span>Applicant Name : <span id="namespan"></span></label>
							<div class="form-group mb-3">
								<input type="text" class="form-control" placeholder="Full Name" id="name" name="name">
							</div>
							
							<label for="name"><span class="text-danger font-weight-bold">*</span>Father's/ Guardian's Name : </label>
							<div class="form-group mb-3">

								<input type="text" class="form-control" placeholder="Full Name">
							</div>
							<label for="name">Mother's Name :</label>
							<div class="input-group mb-3">

								<input type="text" class="form-control" placeholder="Full Name">
							</div>

							<div class="row">
								<div class="col-6 col-md-6">
									<label for="name"><span class="text-danger font-weight-bold">*</span>Date of Birth :</label>
									<input type="date" class="form-control" placeholder="Middle Name">
								</div>
								<div class="col-6 col-md-6">
									<label for="name"><span class="text-danger font-weight-bold">*</span>Gender :</label>
									<select class="custom-select" >
										<option selected>Male</option>
										<option value="1">Female</option>
										<option value="2">Trans Gender</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-6 col-md-6">
									<label for="name"><span class="text-danger font-weight-bold">*</span>Category :</label>
									<select class="custom-select" >
										<option selected>ST</option>
										<option value="1">SC</option>
										<option value="2">OBC</option>
										<option value="3">General</option>
									</select>
								</div>
								<div class="col-6 col-md-6">
									<label for="name"><span class="text-danger font-weight-bold">*</span>Material Status :</label>
									<select class="custom-select" >
										<option selected>Single</option>
										<option value="1">Married</option>
										<option value="2">Widow</option>
										<option value="3">Separated</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-6 col-md-6">
									<div class="form-group mb-3">
										<label for="pwd"><span class="text-danger font-weight-bold">*</span>Mobile No :</label>
										<div class="input-group-prepend">
											<span class="input-group-text p-ess">+91</span>

											<input type="text" class="form-control p-ess" maxlength="10">
										</div>
									</div>
								</div>
								<div class="col-6 col-md-6">
									<div class="form-group">
										<label for="pwd">Email ID :</label>
										<input type="email" class="form-control" placeholder="email id">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-6 col-md-6">
									<div class="form-group">
										<label for="pwd"><span class="text-danger font-weight-bold">*</span>Religion :</label>
										<input type="text" class="form-control" placeholder="Religion">
									</div>
								</div>
								<div class="col-6 col-md-6">
									<div class="form-group">
										<label for="pwd"><span class="text-danger font-weight-bold">*</span>Nationality :</label>
										<input type="text" class="form-control" placeholder="Nationality">
									</div>
								</div>
							</div>
							
						</div>
						<!-- Address Section -->
						<div class="card-title bg-ess form-control pl-3 py-1">Address Details :</div>

						<div class="card-header">
							<div class="row">
								<div class="col-12 col-sm-6 col-md-6">
									<div class="card-title text-center"><u><strong>Correspondence Address</strong></u>
										<label class="form-check-label pb-1" style="visibility: hidden;">Same as correspondence address.</label>
									</div>
									<div class="form-group">
										<label for="pwd">House/Flat No :</label>
										<input type="email" class="form-control" placeholder="House/Flat No ">
									</div>
									<div class="form-group">
										<label for="pwd"><span class="text-danger font-weight-bold">*</span>Village/Town :</label>
										<input type="email" class="form-control" placeholder="Village/Town">
									</div>
									<div class="form-group">
										<label for="pwd"><span class="text-danger font-weight-bold">*</span>Landmark :</label>
										<input type="email" class="form-control" placeholder="Landmark">
									</div>
									<div class="form-group">
										<label for="pwd"><span class="text-danger font-weight-bold">*</span>Post Office :</label>
										<input type="email" class="form-control" placeholder="Post Office">
									</div>
									<div class="form-group">
										<label for="pwd"><span class="text-danger font-weight-bold">*</span>Police Station :</label>
										<input type="email" class="form-control" placeholder="Police Station">
									</div>
									<div class="form-group">
										<label for="pwd"><span class="text-danger font-weight-bold">*</span>District :</label>
										<input type="email" class="form-control" placeholder="District">
									</div>
									<div class="form-group mb-3">
										<label for="pwd"><span class="text-danger font-weight-bold">*</span>State :</label>
										<select class="custom-select">
											<option value="1">Andhra Pradesh</option>
											<option value="2">Arunachal Pradesh</option>
											<option value="3">Assam</option>
											<option value="4">Bihar</option>
											<option value="5">Chhattisgarh</option>
											<option value="6">Goa</option>
											<option value="7">Gujarat</option>
											<option value="8">Haryana</option>
											<option value="9">Himachal Pradesh</option>
											<option value="10">Jharkhand</option>
											<option value="11">Karnataka</option>
											<option value="12">Kerala</option>
											<option value="13">Madhya Pradesh</option>
											<option value="14">Maharashtra</option>
											<option value="15">Manipur</option>
											<option value="16">Meghalaya</option>
											<option value="17">Mizoram</option>
											<option value="18">Nagaland</option>
											<option selected>Odisha</option>
											<option value="19">Panjab</option>
											<option value="20">Rajasthan</option>
											<option value="21">Sikkim</option>
											<option value="22">Tamil Nadu</option>
											<option value="23">Telangana</option>
											<option value="24">Tripura</option>
											<option value="25">Uttaranchal</option>
											<option value="26">Uttar Pradesh</option>
											<option value="27">West Bengal</option>
										</select>
									</div>
									<div class="form-group">
										<label><span class="text-danger font-weight-bold">*</span>Country :</label>
										<input type="text" class="form-control" placeholder="INDIA" disabled="disabled">  
									</div>
									<div class="form-group">
										<label><span class="text-danger font-weight-bold">*</span>Pincode :</label>
										<input type="number" class="form-control" maxlength="6">  
									</div>

								</div>
								<div class="col-12 col-sm-6 col-md-6">
									<div class="card-title text-center">
										<u><strong>Permanent Address</strong></u></div>
										<div class="form-check">
											<input type="checkbox" class="form-check-input" >
											<label class="form-check-label pb-1" for="exampleCheck1">Same as correspondence address.</label>
										</div>
										
										<div class="form-group">
											<label for="pwd">House/Flat No :</label>
											<input type="email" class="form-control" placeholder="House/Flat No ">
										</div>
										<div class="form-group">
											<label for="pwd"><span class="text-danger font-weight-bold">*</span>Village/Town :</label>
											<input type="email" class="form-control" placeholder="Village/Town">
										</div>
										<div class="form-group">
											<label for="pwd"><span class="text-danger font-weight-bold">*</span>Landmark :</label>
											<input type="email" class="form-control" placeholder="Landmark">
										</div>
										<div class="form-group">
											<label for="pwd"><span class="text-danger font-weight-bold">*</span>Post Office :</label>
											<input type="email" class="form-control" placeholder="Post Office">
										</div>
										<div class="form-group">
											<label for="pwd"><span class="text-danger font-weight-bold">*</span>Police Station :</label>
											<input type="email" class="form-control" placeholder="Police Station">
										</div>
										<div class="form-group">
											<label for="pwd"><span class="text-danger font-weight-bold">*</span>District :</label>
											<input type="email" class="form-control" placeholder="District">
										</div>
										<div class="form-group mb-3">
											<label for="pwd"><span class="text-danger font-weight-bold">*</span>State :</label>
											<select class="custom-select">
												<option value="1">Andhra Pradesh</option>
												<option value="2">Arunachal Pradesh</option>
												<option value="3">Assam</option>
												<option value="4">Bihar</option>
												<option value="5">Chhattisgarh</option>
												<option value="6">Goa</option>
												<option value="7">Gujarat</option>
												<option value="8">Haryana</option>
												<option value="9">Himachal Pradesh</option>
												<option value="10">Jharkhand</option>
												<option value="11">Karnataka</option>
												<option value="12">Kerala</option>
												<option value="13">Madhya Pradesh</option>
												<option value="14">Maharashtra</option>
												<option value="15">Manipur</option>
												<option value="16">Meghalaya</option>
												<option value="17">Mizoram</option>
												<option value="18">Nagaland</option>
												<option selected>Odisha</option>
												<option value="19">Panjab</option>
												<option value="20">Rajasthan</option>
												<option value="21">Sikkim</option>
												<option value="22">Tamil Nadu</option>
												<option value="23">Telangana</option>
												<option value="24">Tripura</option>
												<option value="25">Uttaranchal</option>
												<option value="26">Uttar Pradesh</option>
												<option value="27">West Bengal</option>
											</select>
										</div>
										<div class="form-group">
											<label><span class="text-danger font-weight-bold">*</span>Country :</label>
											<input type="text" class="form-control" placeholder="INDIA" disabled="disabled">  
										</div>
										<div class="form-group">
											<label><span class="text-danger font-weight-bold">*</span>Pincode :</label>
											<input type="number" class="form-control" max-length="6">  
										</div>                             		
									</div>
								</div>
							</div>
							<!-- Qualification -->
							<div class="card-title bg-ess form-control pl-3 py-1">Qualification Details :</div>

							<div class="card-header">

								<label for="name">+3 Examination :</label>
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="Board/ University">
									<input type="text" class="form-control" placeholder="Year of Passing">
									<input type="text" class="form-control" placeholder="Total Marks">
									<input type="text" class="form-control" placeholder="Marks">
								</div>
								<label for="name">+2 Examination :</label>
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="Board/ University">
									<input type="text" class="form-control" placeholder="Year of Passing">
									<input type="text" class="form-control" placeholder="Total Marks">
									<input type="text" class="form-control" placeholder="Marks">
								</div>
								<label for="name">10th Examination :</label>
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="Board/ University">
									<input type="text" class="form-control" placeholder="Year of Passing">
									<input type="text" class="form-control" placeholder="Total Marks">
									<input type="text" class="form-control" placeholder="Marks">
								</div>
								<label for="name">Other Qualification :</label>
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="Board/ University">
									<input type="text" class="form-control" placeholder="Year of Passing">
									<input type="text" class="form-control" placeholder="Total Marks">
									<input type="text" class="form-control" placeholder="Marks">
								</div>
							</div>
							<!-- Photo and Signature Section -->
							<div class="card-title bg-ess form-control pl-3 py-1">Upload Photo And Signature <span style="font-size:80%;">(only jpg, jpeg & png images)</span> :</div>

							<div class="card-header">
								<div class="row">
									<div class="col-6 col-md-6">
										<label><span class="text-danger font-weight-bold">*</span>Upload Photo :</label>
										<div class="form-group">
											<input type="file" class="form-control-file">
										</div>
									</div>
									<div class="col-6 col-md-6">
										<label><span class="text-danger font-weight-bold">*</span>Upload Signature :</label>
										<div class="form-group">
											<input type="file" class="form-control-file">
										</div>
									</div>
								</div>
								
							</div>
							<div class="card-footer">
								<div class="form-check ml-4 ">
									<input type="checkbox" class="form-check-input" checked="checked">
									<label class="form-check-label" for="exampleCheck1"><strong>Declareation : </strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur eligendi dolorum nesciunt non praesentium error ipsa molestias !</label>
								</div> 
							</div>

						</div>
						<div class="card-body text-center mb-5">
							<button type="reset" class="btn bg-ess mr-2" id="resubmit">Reset</button>
							<button type="reset" class="btn bg-ess ml-2" id="resubmit">Submit</button>
						</div>
					</form>
				</div>

			</div>
		</div>






		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/propper.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>

	</html>