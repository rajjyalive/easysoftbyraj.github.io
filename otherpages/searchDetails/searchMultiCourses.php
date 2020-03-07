<?php 
  session_start();
  include '../../backendcodes/connection.php';
if (!isset($_SESSION['staffuser'])) {
         header('location:../../index.php');
       }
  
       
       $cdata1 = "SELECT * FROM `courses_info` WHERE `enroll_no` = '{$_SESSION['ids']}'";
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
                       <td scope="row"><?php echo $cres['enroll_no']; ?></td>
                       <td><?php echo $_SESSION['mulname']; ?></td>
                       <td><?php echo $cres['courses_name']; ?></td>
                       <td><?php echo $cres['total_fees']; ?></td>
                       <td><?php echo $cres['paid_fees']; ?></td>
                       <td><?php echo $cres['reg_fees']; ?></td>   
                     </tr>
                    <?php } ?>
                   </tbody>
                </table>
			</div>
		</div>
		
	</div><!-- end main container -->
		<div class="container text-center p-3">
			<a href="../studentdetails.php" class="btn bg-ess mr-2">Go Home</a>
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