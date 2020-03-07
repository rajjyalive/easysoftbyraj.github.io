    <?php 

    session_start();
      include '../../backendcodes/connection.php';

      if (isset($_POST['updateSubmit'])) {
        	$en = $_POST['updateEnroll'];
        	$select = $_POST['updateSelect'];
        	$_SESSION['enroll'] = $en;

        	switch ($select) {
		case "ALL":		         
		         header('location:viewByCategory.php');                
		break;
		case "StudentInfo":
		          header('location:updateStudent.php');
		break;
		case "CoursesInfo":
		          header('location:courseUpdate.php');
		break;
		case "CorrespondenceAddress":
		          header('location:updateCorrespondenceAdd.php');
		break;
		case "PermanentAddress":
		          header('location:updatePermanentAdd.php');
		break;
		case "ImageandSign":
		          header('location:../updateImageSign.php');
		break;
		case "QualificationInfo":
		          header('location:updateQualification.php');
		break;
		default:
		echo "Invalid!";
	}

       }
 ?>

  