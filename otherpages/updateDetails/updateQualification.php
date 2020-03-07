 <?php 
  session_start();
  include '../../backendcodes/connection.php';
  if (!isset($_SESSION['staffuser'])) {
         header('location:../../index.php');
       }

       $qdata1 = "SELECT * FROM `qualification_info` WHERE `enroll_no` = '{$_SESSION['enroll']}'";
       $qfire = mysqli_query($conn,$qdata1);

       $qstd2 = "SELECT * FROM `student_info` WHERE `enroll_no` = '{$_SESSION['enroll']}'";
       $qfire2 = mysqli_query($conn,$qstd2);
       $queryres = mysqli_fetch_array($qfire2);
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
                     	<th scope="col">SL No</th>
                       <th scope="col">Enroll No</th>
                       <th scope="col">Name</th>
                       <th scope="col">Board/ University</th>
                       <th scope="col">Passing Year</th>
                       <th scope="col">Total Marks</th>
                       <th scope="col">Obtained Marks</th>
                      
                       
                     </tr>
                   </thead>
                   <tbody>
                   	<?php while ($qres = mysqli_fetch_array($qfire)) { ?>
                     <tr>
                     	<td scope="row"><?php echo $qres['sl_no']; $arr[] = $qres['sl_no']; ?></td>
                       <td scope="row"><?php echo $qres['enroll_no']; ?></td>
                       <td><?php echo $queryres['name']; ?></td>
                       <td><?php echo $qres['board_university']; ?></td>
                       <td><?php echo $qres['passing_year']; ?></td>
                       <td><?php echo $qres['total_marks']; ?></td>
                       <td><?php echo $qres['obtained_marks']; ?></td>   
                     </tr>
                    <?php } ?>
                     <?php 
                     $_SESSION['b1']=$arr[0]; 
                     $_SESSION['b2']=$arr[1];
                     $_SESSION['b3']=$arr[2];
                     $_SESSION['b4']=$arr[3];
                    
                    ?>
                   </tbody>
                </table>
			</div>
		</div>
		
	</div><!-- end main container -->
		<div class="container text-center p-3">
			<a href="updateStudentDetails.php" class="btn bg-ess mr-2">Go Back</a>
			<button class="btn bg-ess ml-2" data-toggle="collapse" data-target="#collqual">Update</button>
		</div>
   <!-- update section -->
   <!-- Qualification -->
<div class="container collapse mt-3 mb-5" id="collqual">
	
						<div class="card-title bg-ess form-control text-center"><h3><u>EDIT QUALIFICATION DETAILS</u></h3></div>

						<div class="card-header">
							<form action="qupdateSuccess.php" method="post">
							<div class="card-title bg-ess form-control pl-3 py-1">Update Qualification Details :</div>
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
							<div class="form-group text-center py-2">
								<input type="submit" class="btn bg-ess" value="Update" name="submit">
							</div>
							<div class="card-title bg-ess form-control pl-3 py-3"></div>
						   </form>
						</div>
</div>



		<!-- include script -->
		<script type="text/javascript" src="../../js/jquery.js"></script>
		<script type="text/javascript" src="../../js/propper.min.js"></script>
		<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	</body>

	</html>