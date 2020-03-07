<?php 
       session_start();
       include '../backendcodes/connection.php';

       if (isset($_POST['done'])) {
        $name = $_POST['name'];
        $mob = $_POST['mob'];
       
      $lg = "SELECT * FROM `student_info` WHERE name = '$name' and mobile = '$mob' ";
         $query = mysqli_query($conn,$lg);
      $res = mysqli_num_rows($query);
      $sr = "SELECT * FROM `student_info` WHERE name = '$name' and mobile = '$mob' ";
         $query2 = mysqli_query($conn,$sr);
         $res2 = mysqli_fetch_array($query2);
         $id = $res2['enroll_no'];
      if ($res==1) {

        $_SESSION['user']= $name;
        $_SESSION['id']= $id;

        header('location:profile.php');

      }
      else{
        
        header('location:../index.php');
      }

       }
 

 ?>


