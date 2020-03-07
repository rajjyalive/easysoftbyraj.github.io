 <?php 
  session_start();
  include '../../backendcodes/connection.php';
if (!isset($_SESSION['staffuser'])) {
         header('location:../../index.php');
       }

       $padata1 = "SELECT * FROM `permanent_address` WHERE `enroll_no` = '{$_SESSION['enroll']}'";
       $pafire = mysqli_query($conn,$padata1);

       $selName = "SELECT * FROM `student_info` WHERE `enroll_no` = '{$_SESSION['enroll']}'";
       $selquery = mysqli_query($conn, $selName);
       $selres = mysqli_fetch_array($selquery);
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
	
	<div class="container mt-5 pb-5" style="border: 4px solid #00284d;">
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
                       <th scope="col">Address Line 1</th>
                       <th scope="col">Address Line 2</th>
                       <th scope="col">District</th>
                       <th scope="col">State</th>
                       <th scope="col">Pincode</th>
                      
                       
                     </tr>
                   </thead>
                   <tbody>
                   	<?php while ($pares = mysqli_fetch_array($pafire)) { ?>
                     <tr>
                       <td scope="row"><?php echo $pares['enroll_no']; ?></td>
                       <td><?php echo $selres['name']; ?></td>
                       <td><?php echo $pares['paddress1']; ?></td>
                       <td><?php echo $pares['paddress2']; ?></td>
                       <td><?php echo $pares['district']; ?></td>
                       <td><?php echo $pares['state']; ?></td>
                       <td><?php echo $pares['pincode']; ?></td>   
                     </tr>
                    <?php } ?>
                   </tbody>
                </table>
			</div>
		</div>
		
	</div><!-- end main container -->
		<div class="container text-center p-3">
			<a href="updateStudentDetails.php" class="btn bg-ess mr-2">Go Back</a>
			<button class="btn bg-ess ml-2" data-toggle="collapse" data-target="#colladd">Update</button>
		</div>
    
     <!-- update section -->
         <!-- Address Section -->
         <div class="container collapse mt-3 mb-5" id="colladd">
         	          
						 <div class="card-title bg-ess form-control text-center"> <h3><u>EDIT PERMANENT ADDRESS</u></h3></div>

						<div class="card-header">
							<div class="card-title bg-ess form-control pl-3 py-1"> Update Permanent Address  :</div>
							<div class="row">
								<div class="col col-sm-6 col-md-6 m-auto">
							     <form action="paupdateSuccess.php" method="post">
									
									<div class="form-group mt-2">
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
									<div class="form-group text-center">
									<input type="submit" class="btn bg-ess my-3" name="submit" value="Update">
                                    </div>
                                 </form>
								</div>
								
							</div>
						</div>
						<div class="card-title bg-ess form-control pl-3 py-3"></div>
         </div>



		<!-- include script -->
		<script type="text/javascript" src="../../js/jquery.js"></script>
		<script type="text/javascript" src="../../js/propper.min.js"></script>
		<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	</body>

	</html>