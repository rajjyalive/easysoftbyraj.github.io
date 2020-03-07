<?php 

        session_start();
      include '../../backendcodes/connection.php';
     if (isset($_POST['submit'])) {
        
          // Qualification Details
         
         $gboard = $_POST['gboard'];
         $gdpass = $_POST['gdpass'];
         $gdtmarks = $_POST['gdtmarks'];
         $gdomarks = $_POST['gdomarks'];
         $pboard = $_POST['pboard'];
         $ptpass = $_POST['ptpass'];
         $pttmarks = $_POST['pttmarks'];
         $ptomarks = $_POST['ptomarks'];
         $tenboard = $_POST['tenboard'];
         $tenpass = $_POST['tenpass'];
         $tentmarks = $_POST['tentmarks'];
         $tenomarks = $_POST['tenomarks'];
         $totboard = $_POST['otboard'];
         $otpass = $_POST['otpass'];
         $ottmarks = $_POST['ottmarks'];
         $otomarks = $_POST['otomarks'];

          $enroll = $_SESSION['enroll'];
           $ql1 =$_SESSION['b1'];
           $ql2 = $_SESSION['b2'];
          $ql3 =  $_SESSION['b3'];
           $ql4 = $_SESSION['b4'];
        
         $ok3 = "UPDATE `qualification_info` SET `board_university`='$gboard',`passing_year`='$gdpass',`total_marks`='$gdtmarks',`obtained_marks`='$gdomarks' WHERE sl_no = $ql1 ";
         mysqli_query($conn,$ok3);
         $ok4 = "UPDATE `qualification_info` SET `board_university`='$pboard',`passing_year`='$ptpass',`total_marks`='$pttmarks',`obtained_marks`='$ptomarks' WHERE sl_no = $ql2 ";
         mysqli_query($conn,$ok4);
         $ok5 = "UPDATE `qualification_info` SET `board_university`='$tenboard',`passing_year`='$tenpass',`total_marks`='$tentmarks',`obtained_marks`='$tenomarks' WHERE sl_no = $ql3 ";
         mysqli_query($conn,$ok5);
         $ok6 = "UPDATE `qualification_info` SET `board_university`='$totboard',`passing_year`='$otpass',`total_marks`='$ottmarks',`obtained_marks`='$otomarks' WHERE sl_no = $ql4 ";
         mysqli_query($conn,$ok6);

         header('location:updateokqual.php');
     }
  ?>