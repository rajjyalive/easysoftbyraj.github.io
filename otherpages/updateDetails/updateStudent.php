<?php 
session_start();
include '../../backendcodes/connection.php';
if (!isset($_SESSION['staffuser'])) {
	header('location:../../index.php');
}
$data = "SELECT * FROM `student_info` WHERE `enroll_no` = '{$_SESSION['enroll']}' ";
$fire = mysqli_query($conn,$data);


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
	<script type="text/javascript" src="../../js/formvalidation.js"></script>
	<style>
		#logoname{
			font-family: esslogo2;
			font-size: 170%;
			color: #00284d !important;
			font-weight: 300;
			text-shadow: 3px 2px 5px;
			text-decoration: underline;
		}
		#tb th{

			text-align: center;
		}
		#tb td{
			padding:2px !important;
			text-align: center;
		}
	}
</style>
</head>
<body>

	<!---main containeur start-->
	
	<div class="container-fluid mt-5 pb-5" style="border: 4px solid #00284d;">
		<div class="row text-center"  style="border-bottom : 2px solid #00284d;">
			<div class="col col-md-12 col-lg-12 m-auto form-control-lg ">
				<div class="text-left ">
					<img src="../../images/ess.jpg" alt="logo" height="8%" width="8%">
					<span class="navbar-brand" id="logoname">Eastern Software Solution</span>

				</div>

			</div>
			
		</div>	

		<div class="row">
			<div class="col col-md-12">
				<table class="table table-bordered" id="tb">
					<thead>
						<tr>
							<th scope="col">Enroll No</th>
							<th scope="col">Name</th>
							<th scope="col">Father's Name</th>
							<th scope="col">Mother's Name</th>
							<th scope="col">DOB</th>
							<th scope="col">Gender</th>
							<th scope="col">Mobile</th>
							<th scope="col">Email</th>
							<th scope="col">Category</th>
							<th scope="col">Status</th>

						</tr>
					</thead>
					<tbody>
						<?php while ($res = mysqli_fetch_array($fire)) { ?>
							<tr>
								<td scope="row"><?php echo $res['enroll_no']; ?></td>
								<td class="text-capitalize"><?php echo $res['name']; ?></td>
								<td class="text-capitalize"><?php echo $res['father_name']; ?></td>
								<td class="text-capitalize"><?php echo $res['mother_name']; ?></td>
								<td><?php echo $res['dob']; ?></td>
								<td><?php echo $res['gender']; ?></td>
								<td><?php echo $res['mobile']; ?></td>
								<td><?php echo $res['email']; ?></td>
								<td><?php echo $res['category']; ?></td>
								<td><?php echo $res['status']; ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		
	</div><!-- end main container -->
	<div class="container text-center p-3">
		<a href="updateStudentDetails.php" class="btn bg-ess mr-2">Go Back</a>
		<button class="btn bg-ess ml-2" data-toggle="collapse" data-target="#contain">Update</button>
	</div>

	<!-- update section -->
	<!-- student d5etails -->
	<div class="container mb-5 mt-3 collapse" id="contain">

		<div class="card-title bg-ess form-control pl-3 py-1 text-center"><h3>EDIT STUDENT INFORMATION</h3></div>
		<div class="card">
			<div class="card-title bg-ess form-control pl-3 py-1">Student Details :</div>
			<div class="card-header">
				<form action="supdateSuccess.php" method="post">
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
					<div class="container text-center py-2">
						<input type="submit" class="btn bg-ess" name="submit">
					</div>
				</form>
			</div>
			<div class="card-title bg-ess form-control pl-3 py-3"></div>

		</div>
	</div>


	<!-- include script -->
	<script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/propper.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
</body>

</html>