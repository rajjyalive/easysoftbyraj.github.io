<?php 
  session_start();
  include '../../backendcodes/connection.php';

         if (isset($_POST['gocat'])) {

         	$selCate = $_POST['selCate'];
            $_SESSION['selCate'] = $selCate;
          switch ($selCate) {
		case "DUALO&PGDCA":		         
		         header('location:viewByCategory.php');                
		break;
		case "O LEVEL":
		          header('location:viewByCategory.php');
		break;
		case "PGDCA":
		          header('location:viewByCategory.php');
		break;
		case 4:
		          header('location:viewByCategory.php');
		break;
		case 5:
		          header('location:viewByCategory.php');
		break;
		case 6:
		          header('location:viewByCategory.php');
		break;
		case 7:
		          header('location:viewByCategory.php');
		break;
		default:
		echo "Invalid!";
	}
        	
        
       
       }