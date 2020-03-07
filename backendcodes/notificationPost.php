 <?php 
       session_start();
       include 'connection.php';
       if (!isset($_SESSION['staffuser'])) {
         header('location:../index.php');
       }

       if (isset($_POST['post'])) {
       	$noti_date = $_POST['noti_date'];
       	$write_noti = $_POST['write_noti'];
       $noti = "INSERT INTO `notification`(`date`, `notification`) VALUES ('$noti_date','$write_noti')";
       mysqli_query($conn,$noti);

       header('location:../otherpages/staffhome.php');


       }
 ?>