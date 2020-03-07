 <?php 
  session_start();
  include '../../backendcodes/connection.php';
if (!isset($_SESSION['staffuser'])) {
         header('location:../index.php');
       }
 ?> 
<?php 
       if (isset($_POST['onestsubmit'])) {
       	$onestenroll = $_POST['onestenroll'];
       	$sel = "SELECT * FROM `student_info` WHERE `enroll_no` = '$onestenroll' ";
       	$val = mysqli_query($conn,$sel);
       	$selres = mysqli_num_rows($val);
       	$selres2 = mysqli_fetch_array($val);

       	if ($selres==1) {
       		
       		$corresadd = "SELECT * FROM `correspondence_address` WHERE `enroll_no` = '$onestenroll' ";
             $caval = mysqli_query($conn,$corresadd);
             $cares = mysqli_fetch_array($caval);
            $peradd = "SELECT * FROM `permanent_address` WHERE `enroll_no` = '$onestenroll' ";
             $paval = mysqli_query($conn,$peradd);
             $pares = mysqli_fetch_array($paval);
            $stdimg = "SELECT * FROM `student_imgsign` WHERE `enroll_no` = '$onestenroll' ";
             $stdimgval = mysqli_query($conn,$stdimg);
             $stdimgres = mysqli_fetch_array($stdimgval);
             $coursel = "SELECT * FROM `courses_info` WHERE `enroll_no` = '$onestenroll' ";
             $courval = mysqli_query($conn,$coursel);
            $qulsel = "SELECT * FROM `qualification_info` WHERE `enroll_no` = '$onestenroll' ";
             $qulval = mysqli_query($conn,$qulsel);
             
          


       	}
       	else {
       		echo "not found";
       	}
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
	}
</style>
</head>
<body>

	<!---main containeur start-->
	
	<div class="container mt-5 pb-5" style="border: 4px solid #00284d;">
		<div class="row text-center"  style="border-bottom : 2px solid #00284d;">
			<div class="col col-md-11 col-lg-11 m-auto form-control-lg ">
				<div class="text-left ">
					<img src="../../images/ess.jpg" alt="logo" height="8%" width="8%">
					<span class="navbar-brand" id="logoname">Eastern Software Solution</span>

				</div>

			</div>
			<div class="col col-md-1 col-lg-1 m-auto form-control-lg ">
				<div class="text-left ">
					<span><a href="#" onclick="myPrint()"><i class="fas fa-print" style="font-size: 30px;"></i></a></span>

				</div>

			</div>
		</div>	
		<div class="row">
			<div class="col-md-12">

				<div class="form-group p-1">
					Personal Details :
				</div>

			</div>

		</div>
		<div class="row">
			<div class="col-md-12">

				<table class="table-bordered w-100 text-left">
					<tbody>

						<tr>
							<td class="p-2" colspan="6" style="width: 170px;">
								<table class="w-100">
										
									<tr class="text-center"> 
										<th class="p-2">Courses :</th>
										<th class="p-2">Total Fees :</th>
										<th class="p-2">Fees Paid :</th>
										<th class="p-2">Fees Registration :</th>
									</tr>
									<!-- php select code -->
                                <?php while ($courres = mysqli_fetch_array($courval)) { ?>

									<tr class="text-center"> 
										<td class="p-1 ">
											<?php echo $courres['courses_name']; ?>
										</td>
										<td class="p-1">
											<?php echo $courres['total_fees']; ?>
										</td>
										<td class="p-1">
											<?php echo $courres['paid_fees']; ?>
								        </td>
										<td class="p-1">
											<?php echo $courres['reg_fees']; ?>
										</td>
									</tr>
								<?php } ?>
								</table>
							</td>

							</tr>
							<tr>
								<td class="p-2">Enrollment No :</td>
								<td class="p-2" colspan="5">
									<?php echo $selres2['enroll_no']; ?>
								</td>

							</tr>
							<tr>
								<td class="p-2" style="width: 170px;"> Name :</td>
								<td class="p-2 text-uppercase" colspan="2"><?php echo $selres2['name']; ?></td>
								<td class="p-2">DOB :</td>
								<td class="p-2"><?php echo $selres2['dob']; ?></td>
								<td class="p-2" rowspan="4" style="width: 10%;">
									<div style="height: 150px;width:130px;border:1px solid black;overflow-y: hidden;overflow-x: hidden;" class="m-auto">
										<img src="../<?php echo $stdimgres['photos']; ?>" alt="photo" height="150" width="130" >
									</div>
								</td>
							</tr>
							<tr>
								<td class="p-2" style="width: 170px;">S/O ,W/O :</td>
								<td class="p-2 text-uppercase" colspan="2"><?php echo $selres2['father_name']; ?></td>
								<td class="p-2">Gender :</td>
								<td class="p-2"><?php echo $selres2['gender']; ?></td>
							</tr>
							<tr>
								<td class="p-2" style="width: 170px;">Mobile :</td>
								<td class="p-2" colspan="2"><?php echo $selres2['mobile']; ?></td>
								<td class="p-2">Status :</td>
								<td class="p-2"><?php echo $selres2['status']; ?></td>
							</tr>
							<tr>
								<td class="p-2" style="width: 170px;">Email :</td>
								<td class="p-2 text-lowercase" colspan="2"><?php echo $selres2['email']; ?></td>
								<td class="p-2">Category :</td>
								<td class="p-2"><?php echo $selres2['category']; ?></td>
							</tr>
							<tr>
								<td class="p-2" style="width: 170px;">Religion :</td>
								<td class="p-2 text-uppercase" colspan="2"><?php echo $selres2['religion']; ?></td>
								<td class="p-2">Nationality :</td>
								<td class="p-2 text-uppercase"><?php echo $selres2['nationality']; ?></td>
								<td>
									<div style="height: 40px;width:150px;border:1px solid black;overflow-y: hidden;overflow-x: hidden;">
										<img src="../<?php echo $stdimgres['sign']; ?>" alt="photo" height="50" width="150">
									</div>
								</td>

							</tr>


						</tbody>
					</table>
				</div>

			</div><!---end student details-->
			<div class="row">
				<div class="col-md-12">

					<div class="form-group p-1">
						Correspondence Address :
					</div>

				</div>
 
			</div>
			<div class="row">
				<div class="col-md-12">

					<table class="table-bordered w-100 text-left">
						<tbody>
							<tr>
								<td class="p-2 w-25" >Address Line 1 :</td>
								<td class="p-2 text-uppercase" colspan="3"><?php echo $cares['caddress1']; ?></td>
							</tr>
							<tr>
								<td class="p-2 w-25" >Address Line 2 :</td>
								<td class="p-2 text-uppercase" colspan="3"><?php echo $cares['caddress2']; ?></td>
							</tr>
							<tr>
								<td class="p-2 w-25" >District :</td>
								<td class="p-2 text-uppercase" colspan="3"><?php echo $cares['district']; ?></td>
							</tr>
							<tr>
								<td class="p-2 w-25" >State :</td>
								<td class="p-2"><?php echo $cares['state']; ?></td>
								<td class="p-2 w-25" >ZIP/ Pincode :</td>
								<td class="p-2"><?php echo $cares['pincode']; ?></td>
							</tr>



						</tbody>
					</table>
				</div>

			</div><!---end Address details-->
			<div class="row">
				<div class="col-md-12">

					<div class="form-group p-1">
						Permanent Address :
					</div>

				</div>

			</div>
			<div class="row">
				<div class="col-md-12">

					<table class="table-bordered w-100 text-left">
						<tbody>
							<tr>
								<td class="p-2 w-25" >Address Line 1 :</td>
								<td class="p-2 text-uppercase" colspan="3"><?php echo $pares['paddress1']; ?></td>
							</tr>
							<tr>
								<td class="p-2 w-25" >Address Line 2 :</td>
								<td class="p-2 text-uppercase" colspan="3"><?php echo $pares['paddress2']; ?></td>
							</tr>
							<tr>
								<td class="p-2 w-25" >District :</td>
								<td class="p-2 text-uppercase" colspan="3"><?php echo $pares['district']; ?></td>
							</tr>
							<tr>
								<td class="p-2 w-25" >State :</td>
								<td class="p-2"><?php echo $pares['state']; ?></td>
								<td class="p-2 w-25" >ZIP/ Pincode :</td>
								<td class="p-2"><?php echo $pares['pincode']; ?></td>
							</tr>



						</tbody>
					</table>
				</div>

			</div><!---end Permanent Address details-->
			<div class="row">
				<div class="col-md-12">

					<div class="form-group p-1">
						Qualification Details :
					</div>

				</div>

			</div>
			<div class="row">
				<div class="col-md-12">

					<table class="table-bordered w-100 text-left">
						<tbody>
							<tr>
								<th class="p-2 w-25" >Board/ University :</th>
								<th class="p-2" colspan="3">Year of Passing :</th>
								<th class="p-2 w-25" >Total Marks :</th>
								<th class="p-2" colspan="3">Obtained Marks :</th>
							</tr>
						<?php while ($qulres = mysqli_fetch_array($qulval)) { ?>

							<tr>
								<td class="p-2 w-25 text-uppercase" >
									<?php echo $qulres['board_university']; ?>
								</td>
								<td class="p-2" colspan="3">
									<?php echo $qulres['passing_year']; ?>
								</td>
								<td class="p-2 w-25" >
									<?php echo $qulres['total_marks']; ?>
								</td>
								<td class="p-2" colspan="3">
									<?php echo $qulres['obtained_marks']; ?>
								</td>
							</tr>
							<?php } ?>
							<tr>
								<td colspan="6" class="p-2">
									<div class="form-check ml-4 ">
										<input type="checkbox" class="form-check-input" checked="checked" disabled="disabled">
										<label class="form-check-label text-dark"><strong><u>Term & Conditions :</u> </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur eligendi dolorum nesciunt non praesentium error ipsa molestias !
										</label>
									</div>
								</td>
							</tr>


						</tbody>

					</table>
				</div>

			</div><!---end Qualification details-->
		</div><!-- end main container -->
		<div class="container text-center p-3">
			<a href="../studentdetails.php" class="btn bg-ess mr-2">Go Back</a>
			<button class="btn bg-ess ml-2" onclick="myPrint()">Print This Page</button>
		</div>
     <script type="text/javascript">
     	   function myPrint(){
     	   	window.print();
     	   }
     </script>



		<!-- include script -->
		<script type="text/javascript" src="../../js/jquery.js"></script>
		<script type="text/javascript" src="../../js/propper.min.js"></script>
		<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	</body>

	</html>