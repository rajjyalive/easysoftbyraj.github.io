<?php 

        session_start();
      include '../../backendcodes/connection.php';
     if (isset($_POST['submit'])) {

             //    // student details

         $fullname = $_POST['fullname'];
         $fathername = $_POST['fathername'];
         $mothername = $_POST['mothername'];
         $mobile = $_POST['mobile'];
         $dob = $_POST['dob'];
         $gender = $_POST['gender'];
         $category = $_POST['category'];
         $status = $_POST['status'];
         $email = $_POST['email'];
         $religion = $_POST['religion'];
         $nation = $_POST['nation'];
         $enroll = $_SESSION['enroll'];
        $ok = " UPDATE `student_info` SET `name`='$fullname',`father_name`='$fathername',`mother_name`='$mothername',`dob`='$dob',`gender`='$gender',`mobile`='$mobile',`category`='$category',`status`='$status',`email`='$email',`religion`='$religion',`nationality`='$nation' WHERE `enroll_no`= '$enroll' ";
        mysqli_query($conn,$ok);

         header('location:updateokStudent.php');
     }
  ?>