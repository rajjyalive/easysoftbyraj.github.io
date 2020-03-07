 <?php 
  session_start();
  include '../../backendcodes/connection.php';
if (!isset($_SESSION['staffuser'])) {
         header('location:../../index.php');
       }
      
       $idata1 = "SELECT * FROM `student_imgsign` WHERE enroll_no = '{$_SESSION['enroll']}'";
       $ifire = mysqli_query($conn,$idata1);
       $ires = mysqli_fetch_array($ifire);

       $selname = "SELECT * FROM `student_info` WHERE enroll_no = '{$_SESSION['enroll']}'";
       $namefire = mysqli_query($conn,$selname);
       $nameres = mysqli_fetch_array($namefire);
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
                   	<th class="text-center" colspan="4"><h3 class="text-danger"><u>UPDATE SUCCESSFUL</u></h3></th>
                   	  </tr>
                     <tr>
                       <th scope="col">Enroll No</th>
                       <th scope="col">Name</th>
                       <th scope="col">Photo</th>
                       <th scope="col">Signature</th>                       
                     </tr>
                 
                   </thead>
                   <tbody>
                  
                     <tr>
                       <td scope="row" class="align-middle"><?php echo $ires['enroll_no']; ?></td>
                       <td class="align-middle"><?php echo $nameres['name']; ?></td>
                       <td><img src="../<?php echo $ires['photos']; ?>" alt="photo" height="150" width="130"></td>
                       <td class="align-middle"><img src="../<?php echo $ires['sign']; ?>" alt="photo" height="50" width="150"></td>
                       
                     </tr>
                    
                   </tbody>
                </table>
			</div>
		</div>
		
	</div><!-- end main container -->
		<div class="container text-center p-3">
			<a href="updateStudentDetails.php" class="btn bg-ess mr-2">Close</a>
		</div>


		<!-- include script -->
		<script type="text/javascript" src="../../js/jquery.js"></script>
		<script type="text/javascript" src="../../js/propper.min.js"></script>
		<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	</body>

	</html>