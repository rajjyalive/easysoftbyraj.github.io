<?php 

        session_start();
      include '../../backendcodes/connection.php';
     if (isset($_POST['submit'])) {
        

        // correspondence address details
         $caddress1 = $_POST['caddress1'];
         $caddress2 = $_POST['caddress2'];
         $cdistrict = $_POST['cdistrict'];
         $cstate = $_POST['cstate'];
         $cpincode = $_POST['cpincode'];
         $enroll = $_SESSION['enroll'];

         $ok2 = " UPDATE `correspondence_address` SET `caddress1`='$caddress1',`caddress2`='$caddress2',`district`='$cdistrict',`state`='$cstate',`pincode`='$cpincode' WHERE enroll_no = '$enroll' ";
         mysqli_query($conn,$ok2);

         header('location:updateokCorresAdd.php');
     }
  ?>