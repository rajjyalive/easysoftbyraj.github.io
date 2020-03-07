
<?php 
       session_start();
       include '../backendcodes/connection.php';
       if (!isset($_SESSION['name'])) {
         header('location:../index.php');
       }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 

	<title>bootstrap</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

</head>
<body>
       <!---Write code here--->
       <div class="container">
       	<div class="row mt-5" >
       		<div class="col-md-6 m-auto">
       			<div class="card bg-light">
       				<div class="bg-success text-center">
       				<h2 class=" text-white">Home Page</h2>
       				</div>
       				<div class="card-header p-2 bg-warning">
       					      <h4 class="text-white">Hi My Name Is <?php echo $_SESSION['name']; ?>.</h4>


                      <a href="logout.php" class="text-primary">Logout</a>


       				</div>
       			</div>
       		</div>
       	</div>
       </div>




    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/propper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>