<?php 

        session_start();
      include '../../backendcodes/connection.php';


      if (isset($_POST['proceedData'])) {
       	// course details
      	 $firstcourse = $_POST['firstcourse'];
         $ftotalfee = $_POST['ftotalfee'];
         $fpaidfee = $_POST['fpaidfee'];
         $fregfees = $_POST['fregfees'];
        
         $secondcourse = $_POST['secondcourse'];
         $stotalfee = $_POST['stotalfee'];
         $spaidfee = $_POST['spaidfee'];
         $sregfees = $_POST['sregfees'];
         $thirdcourse = $_POST['thirdcourse'];
         $ttotalfee = $_POST['ttotalfee'];
         $tpaidfee = $_POST['tpaidfee'];
         $tregfees = $_POST['tregfees'];
         $vl = $_SESSION['a1'];
         $vl2 = $_SESSION['a2'];
         $vl3 = $_SESSION['a3'];
         $ok = "UPDATE `courses_info` SET `courses_name`='$firstcourse',`total_fees`='$ftotalfee',`paid_fees`='$fpaidfee',`reg_fees`='$fregfees' WHERE csl_no=$vl ";
         mysqli_query($conn,$ok);
         $upins1 = "UPDATE `courses_info` SET `courses_name`= '$secondcourse',`total_fees`='$stotalfee',`paid_fees`='$spaidfee',`reg_fees`='$sregfees' WHERE csl_no = $vl2";
         mysqli_query($conn,$upins1);
         $upins2 = "UPDATE `courses_info` SET `courses_name`= '$thirdcourse',`total_fees`='$ttotalfee',`paid_fees`='$tpaidfee',`reg_fees`='$tregfees' WHERE csl_no = $vl3";
         mysqli_query($conn,$upins2);
         header('location:updateok.php');
       }
?>