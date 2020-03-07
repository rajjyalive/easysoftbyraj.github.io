<?php 
       session_start();
       include '../backendcodes/connection.php';

       if (isset($_POST['go'])) {
        $username = $_POST['staffuser'];
        $password = $_POST['staffpass'];

      $slg = "SELECT * FROM `staff_info` WHERE `username` = '$username' and `password` = '$password' ";
         $query = mysqli_query($conn,$slg);
      $sres = mysqli_num_rows($query);
      echo $sres;
      if ($sres==1) {
        $_SESSION['staffuser']= $username;

        header('location:staffhome.php');
      }
      else{
        echo "Login Failed";
        header('location:../index.php');
      }

       }
 

 ?>