<?php 
  session_start();
  include '../../backendcodes/connection.php';

         if (isset($_POST['mulview'])) {
             $mulname = $_POST['mulname'];
             $mulvalue = $_POST['mulvalue'];
              $_SESSION['mulname'] = $mulname;
              $stdata = "SELECT * FROM `student_info` WHERE `name` = '$mulname'";
              $stfire = mysqli_query($conn,$stdata);
              $stres = mysqli_fetch_array($stfire);
              $id = $stres['enroll_no'];
              $_SESSION['ids'] = $id;
          
          switch ($mulvalue) {
		case "studentInfo":
		         
		         header('location:searchmultidetails.php');
                  
		break;
		case "coursesInfo":
		          header('location:searchMultiCourses.php');
		break;
		case "correspondenceAddress":
		          header('location:searchMultiCorrespondenceAdd.php');
		break;
		case "permanentAddress":
		          header('location:searchMultiPermanentAdd.php');
		break;
		case "imageSign":
		          header('location:searchMultiImagesign.php');
		break;
		case "qualificationInfo":
		          header('location:searchMultiQualification.php');
		break;
		case "feedbackInfo":
		          header('location:searchMultiFeedback.php');
		break;
		default:
		echo "Invalid!";
	}
        	
        
       
       }