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
	<link rel="icon" href="../favicon.ico" type="image/x-icon">
	<script type="text/javascript" src="../js/formvalidation.js"></script>
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
					<img src="../images/ess.jpg" alt="logo" height="8%" width="8%">
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
                                   
									<tr class="text-center"> 
										<td class="p-1 ">
											<p><?php echo $_SESSION['firstcourse'];?></p>
											<p><?php echo $_SESSION['secondcourse'];?></p>
											<p><?php echo $_SESSION['thirdcourse'];?></p>
										</td>
										<td class="p-1">
											<p><?php echo $_SESSION['ftotalfee'];?></p>
											<p><?php echo $_SESSION['stotalfee'];?></p>
											<p><?php echo $_SESSION['ttotalfee'];?></p>
										</td>
										<td class="p-1">
											<p><?php echo $_SESSION['fpaidfee'];?></p>
										    <p><?php echo $_SESSION['spaidfee'];?></p>
									        <p><?php echo $_SESSION['tpaidfee'];?></p>
								        </td>
										<td class="p-1">
											<p><?php echo $_SESSION['fregfees'];?></p>
										    <p><?php echo $_SESSION['sregfees'];?></p>
									        <p><?php echo $_SESSION['tregfees'];?></p>
										</td>
									</tr>
								</table>
							</td>

							</tr>
							<tr>
								<td class="p-2">Enrollment No :</td>
								<td class="p-2" colspan="5"><?php echo $_SESSION['sid'];?></td>

							</tr>
							<tr>
								<td class="p-2" style="width: 170px;"> Name :</td>
								<td class="p-2 text-uppercase" colspan="2"><?php echo $_SESSION['sname'];?></td>
								<td class="p-2">DOB :</td>
								<td class="p-2"><?php echo $_SESSION['dob'];?></td>
								<td class="p-2" rowspan="4" style="width: 10%;">
									<div style="height: 150px;width:130px;border:1px solid black;overflow-y: hidden;overflow-x: hidden;" class="m-auto">
										<img src="<?php echo $_SESSION['destiphoto'] ;?>" alt="photo" height="150" width="130" >
									</div>
								</td>
							</tr>
							<tr>
								<td class="p-2" style="width: 170px;">S/O ,W/O :</td>
								<td class="p-2 text-uppercase" colspan="2"><?php echo $_SESSION['fathername'];?></td>
								<td class="p-2">Gender :</td>
								<td class="p-2"><?php echo $_SESSION['gender'];?></td>
							</tr>
							<tr>
								<td class="p-2" style="width: 170px;">Mobile :</td>
								<td class="p-2" colspan="2"><?php echo $_SESSION['mobile'];?></td>
								<td class="p-2">Status :</td>
								<td class="p-2"><?php echo $_SESSION['status'];?></td>
							</tr>
							<tr>
								<td class="p-2" style="width: 170px;">Email :</td>
								<td class="p-2" colspan="2"><?php echo $_SESSION['email'];?></td>
								<td class="p-2">Category :</td>
								<td class="p-2"><?php echo $_SESSION['category'];?></td>
							</tr>
							<tr>
								<td class="p-2" style="width: 170px;">Religion :</td>
								<td class="p-2 text-uppercase" colspan="2"><?php echo $_SESSION['religion'];?></td>
								<td class="p-2">Nationality :</td>
								<td class="p-2 text-uppercase"><?php echo $_SESSION['nation'];?></td>
								<td>
									<div style="height: 40px;width:150px;border:1px solid black;overflow-y: hidden;overflow-x: hidden;">
										<img src="<?php echo $_SESSION['destisign'] ;?>" alt="photo" height="50" width="150">
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
								<td class="p-2 text-uppercase" colspan="3"><?php echo $_SESSION['caddress1'];?></td>
							</tr>
							<tr>
								<td class="p-2 w-25" >Address Line 2 :</td>
								<td class="p-2 text-uppercase" colspan="3"><?php echo $_SESSION['caddress2'];?></td>
							</tr>
							<tr>
								<td class="p-2 w-25" >District :</td>
								<td class="p-2 text-uppercase" colspan="3"><?php echo $_SESSION['cdistrict'];?></td>
							</tr>
							<tr>
								<td class="p-2 w-25" >State :</td>
								<td class="p-2"><?php echo $_SESSION['cstate'];?></td>
								<td class="p-2 w-25" >ZIP/ Pincode :</td>
								<td class="p-2"><?php echo $_SESSION['cpincode'];?></td>
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
								<td class="p-2 text-uppercase" colspan="3"><?php echo $_SESSION['paddress1'];?></td>
							</tr>
							<tr>
								<td class="p-2 w-25" >Address Line 2 :</td>
								<td class="p-2 text-uppercase" colspan="3"><?php echo $_SESSION['paddress2'];?></td>
							</tr>
							<tr>
								<td class="p-2 w-25" >District :</td>
								<td class="p-2 text-uppercase" colspan="3"><?php echo $_SESSION['pdistrict'];?></td>
							</tr>
							<tr>
								<td class="p-2 w-25" >State :</td>
								<td class="p-2"><?php echo $_SESSION['cstate'];?></td>
								<td class="p-2 w-25" >ZIP/ Pincode :</td>
								<td class="p-2"><?php echo $_SESSION['ppincode'];?></td>
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
							<tr>
								<td class="p-2 w-25" >
									<p class="text-uppercase"><?php echo $_SESSION['gboard'];?></p>
									<p class="text-uppercase"><?php echo $_SESSION['pboard'];?></p>
									<p class="text-uppercase"><?php echo $_SESSION['tenboard'];?></p>
									<p class="text-uppercase"><?php echo $_SESSION['totboard'];?></p>
								</td>
								<td class="p-2" colspan="3">
									<p><?php echo $_SESSION['gdpass'];?></p>
									<p><?php echo $_SESSION['ptpass'];?></p>
									<p><?php echo $_SESSION['tenpass'];?></p>
									<p><?php echo $_SESSION['otpass'];?></p>
								</td>
								<td class="p-2 w-25" >
									<p><?php echo $_SESSION['gdtmarks'];?></p>
									<p><?php echo $_SESSION['pttmarks'];?></p>
									<p><?php echo $_SESSION['tentmarks'];?></p>
									<p><?php echo $_SESSION['ottmarks'];?></p>
								</td>
								<td class="p-2" colspan="3">
									<p><?php echo $_SESSION['gdomarks'];?></p>
									<p><?php echo $_SESSION['ptomarks'];?></p>
									<p><?php echo $_SESSION['tenomarks'];?></p>
									<p><?php echo $_SESSION['otomarks'];?></p>
								</td>
							</tr>
							<tr>
								<td class="p-2" colspan="6"> </td>
							</tr>
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
			<a href="closesession.php" class="btn bg-ess mr-2">Go Home</a>
			<button class="btn bg-ess ml-2" onclick="myPrint()">Print This Page</button>
		</div>
     <script type="text/javascript">
     	   function myPrint(){
     	   	window.print();
     	   }
     </script>



		<!-- include script -->
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/propper.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	</body>

	</html>