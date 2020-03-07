<?php 

        session_start();
      include '../../backendcodes/connection.php';
     if (isset($_POST['submit'])) {
        

        // correspondence address details
         $paddress1 = $_POST['paddress1'];
         $paddress2 = $_POST['paddress2'];
         $pdistrict = $_POST['pdistrict'];
         $pstate = $_POST['pstate'];
         $ppincode = $_POST['ppincode'];
         $enroll = $_SESSION['enroll'];

         $ok3 = " UPDATE `permanent_address` SET `paddress1`='$paddress1',`paddress2`='$paddress2',`district`='$pdistrict',`state`='$pstate',`pincode`='$ppincode' WHERE enroll_no = '$enroll' ";
         mysqli_query($conn,$ok3);

         header('location:updateokPerAdd.php');
     }
  ?>