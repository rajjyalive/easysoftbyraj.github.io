<?php 
  session_start();
  include '../../backendcodes/connection.php';
if (!isset($_SESSION['staffuser'])) {
         header('location:../../index.php');
       }
  
        
        	$cdata2 = "SELECT * FROM `student_info` WHERE `enroll_no` = '{$_SESSION['enroll']}'";
       $cfire2 = mysqli_query($conn,$cdata2);
       $cres2 = mysqli_fetch_array($cfire2);
        	$cdata1 = "SELECT * FROM `courses_info` WHERE `enroll_no` = '{$_SESSION['enroll']}'";
       $cfire = mysqli_query($conn,$cdata1);
       
       

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
			<div class="col col-md-12">
				<table class="table table-bordered" id="tb">
                   <thead>
                     <tr>
                     	<th scope="col">SL_No</th>
                       <th scope="col">Enroll No</th>
                       <th scope="col">Name</th>
                       <th scope="col">Courses Name</th>
                       <th scope="col">Total Fees</th>
                       <th scope="col">Paid Fees</th>
                       <th scope="col">Reg. Fees</th>
                      
                       
                     </tr>
                   </thead>
                   <tbody>
                   	
                   		<?php while ($cres = mysqli_fetch_array($cfire)) { ?>
                   			
                   	
                     <tr>
                          
                        <td scope="row"><?php echo $cres['csl_no'];$cars[] = $cres['csl_no']; ?></td>
                       <td scope="row"><?php echo $cres['enroll_no']; ?></td>
                       <td><?php echo $cres2['name'];?></td>
                       <td><?php echo $cres['courses_name']; ?></td>
                       <td><?php echo $cres['total_fees']; ?></td>
                       <td><?php echo $cres['paid_fees']; ?></td>
                       <td><?php echo $cres['reg_fees']; ?></td>  
                      
                     </tr>
                    <?php } ?>
                    <?php 
                     $_SESSION['a1']=$cars[0]; 
                     $_SESSION['a2']=$cars[1];
                     $_SESSION['a3']=$cars[2];
                     
                    ?>

                    

                   </tbody>
                </table>
			</div>
		</div>
		
	</div><!-- end main container -->
		<div class="container text-center p-3">
			<a href="updateStudentDetails.php" class="btn bg-ess mr-2">Go Back</a>
			<a href="#UpdateData" class="btn bg-ess mr-2" data-toggle="collapse">Update New</a>
		</div>	
      <!-- update section -->
      <div class="container mt-3 mb-5 collapse" id="UpdateData">
		<div class="row text-center">
			<div class="col col-md-11 col-lg-11 text-white bg-ess m-auto form-control-lg">EDIT COURSES DETAILS</div>
		</div>	
		<div class="row">
			<div class="col col-md-11 col-lg-11 m-auto text-dark" style="background-color: #00284d !important;" >
				<form action="cupdateSuccess.php" method="post" >
					<div class="card">
						<div class="card-title bg-ess form-control pl-3 py-1">Update Courses :</div>
						<div class="card-header text-left">
							<label for="name">First Course :</label>
							<div class="input-group mb-3">

								<select class="custom-select" name="firstcourse">
									<option selected disabled="disabled">Select First Course</option>
									<option value="O LEVEL">O LEVEL</option>
									<option value="PGDCA">PGDCA</option>
									<option value="O LEVEL & PGDCA">O LEVEL & PGDCA</option>
									<option value="A LEVEL">A LEVEL</option>
								</select>
								<input type="text" class="form-control" placeholder="Total fees" name="ftotalfee">
								<input type="text" class="form-control" placeholder="Fees Paid" name="fpaidfee">
								<input type="text" class="form-control" placeholder="Fees for reg." name="fregfees">

							</div>
							<label for="name">Second Course:</label>
							<div class="input-group mb-3">

								<select class="custom-select" name="secondcourse">
									<option selected disabled="disabled">Select second Course</option>
								<option value="O LEVEL">O LEVEL</option>
									<option value="PGDCA">PGDCA</option>
									<option value="O LEVEL & PGDCA">O LEVEL & PGDCA</option>
									<option value="A LEVEL">A LEVEL</option>
								</select>
								<input type="text" class="form-control" placeholder="Total fees" name="stotalfee">
								<input type="text" class="form-control" placeholder="Fees Paid" name="spaidfee">
								<input type="text" class="form-control" placeholder="Fees for reg." name="sregfees">

							</div>
							<label for="name">Third Course :</label>
							<div class="input-group mb-3">

								<select class="custom-select" name="thirdcourse">
									<option selected disabled="disabled">Select Third Course</option>
									<option value="O LEVEL">O LEVEL</option>
									<option value="PGDCA">PGDCA</option>
									<option value="O LEVEL & PGDCA">O LEVEL & PGDCA</option>
									<option value="A LEVEL">A LEVEL</option>
								</select>
								<input type="text" class="form-control" placeholder="Total fees" name="ttotalfee">
								<input type="text" class="form-control" placeholder="Fees Paid" name="tpaidfee">
								<input type="text" class="form-control" placeholder="Fees for reg." name="tregfees">

							</div>
						</div>
                           <div class="container text-center p-3">
			                     <input type="submit" class="btn bg-ess mr-2" name="proceedData" value="Proceed">
		                   </div>
			              

					</div>
					    <div class="card-title bg-ess form-control pl-3 py-3"></div>
				</form>
			</div>
		</div>
	  </div>


		<!-- include script -->
		<script type="text/javascript" src="../../js/jquery.js"></script>
		<script type="text/javascript" src="../../js/propper.min.js"></script>
		<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	</body>

	</html>