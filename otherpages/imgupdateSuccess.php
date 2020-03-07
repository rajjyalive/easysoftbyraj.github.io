<?php 

        session_start();
      include '../backendcodes/connection.php';
     if (isset($_POST['submit'])) {

          
         $enroll = $_SESSION['enroll'];
         // old photo access
         $isel = "SELECT * FROM `student_imgsign` WHERE enroll_no = '$enroll' ";
         $imgq = mysqli_query($conn,$isel);
         $imgres = mysqli_fetch_array($imgq);
         $ogimg = $imgres['photos'];
         $ogsign = $imgres['sign'];
    
         
        
          
        $size = $_FILES['photo']['size'];
        $temp = $_FILES['photo']['tmp_name'];
        $type = $_FILES['photo']['type'];
        $img_name = $_FILES['photo']['name'];
        // sign
        $ssize = $_FILES['sign']['size'];
        $stemp = $_FILES['sign']['tmp_name'];
        $stype = $_FILES['sign']['type'];
        $sign_name = $_FILES['sign']['name'];
       // for img
        // delete old photos
        unlink($ogimg);
        // insert new image
        $destiphoto = '../uploadimg/stdphoto/'.$img_name;
        move_uploaded_file($temp, $destiphoto);
       // for sign
        // delete old photos
        unlink($ogsign);
        // insert new image
        $destisign = '../uploadimg/stdsign/'.$sign_name;
        move_uploaded_file($stemp, $destisign);
        $ok3 = " UPDATE `student_imgsign` SET `photos`='$destiphoto',`sign`='$destisign' WHERE enroll_no = '$enroll' ";
        mysqli_query($conn,$ok3);
 
       header('location:updateDetails/updateokImgsign.php');
     }
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>
  <body>
    
  </body>
  </html>