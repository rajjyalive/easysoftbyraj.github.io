
 <?php 

 //   Admission Form php code to insert data into Database
     session_start();
     include 'connection.php';
     
      if (isset($_POST['done'])) {

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

       // correspondence address details
         $caddress1 = $_POST['caddress1'];
         $caddress2 = $_POST['caddress2'];
         $cdistrict = $_POST['cdistrict'];
         $cstate = $_POST['cstate'];
         $cpincode = $_POST['cpincode'];

        // permanent Address details

         $paddress1 = $_POST['paddress1'];
         $paddress2 = $_POST['paddress2'];
         $pdistrict = $_POST['pdistrict'];
         $pstate = $_POST['pstate'];
         $ppincode = $_POST['ppincode'];

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

          // photo and sign 
         $photo = $_FILES['photo'];
         $sign = $_FILES['sign'];
         
         // converting photo
         $photoname = $photo['name'];
         $phototmp = $photo['tmp_name'];
         $photoext = explode('.',$photoname);
         $photocheck = strtolower(end($photoext));
         $photostored = array('png','jpg','jpeg');
        // sign
         $signname = $sign['name'];
         $signtmp = $sign['tmp_name'];
         $signext = explode('.',$signname);
         $signcheck = strtolower(end($signext));
         $signstored = array('png','jpg','jpeg');

         // roll no generate
         $a = "ESS";
         $qm = "SELECT * FROM `student_info`";
    $getsid = mysqli_query($conn,$qm);
    $getsid1 = mysqli_num_rows($getsid);
    $invl = str_pad($getsid1, 4,'0',STR_PAD_LEFT);
    $sid = $a.$invl;
    // end roll no generator code
           
        

        $std_info = "INSERT INTO `student_info`(`enroll_no`,`name`, `father_name`, `mother_name`, `dob`, `gender`, `mobile`, `category`, `status`, `email`, `religion`, `nationality`) VALUES ('$sid','$fullname','$fathername','$mothername','$dob','$gender','$mobile','$category','$status','$email','$religion','$nation')";
         mysqli_query($conn,$std_info);
 
       $add_que = "INSERT INTO `correspondence_address`(`enroll_no`, `caddress1`, `caddress2`, `district`, `state`, `pincode`) VALUES ('$sid','$caddress1','$caddress2','$cdistrict','$cstate','$cpincode')";
         mysqli_query($conn,$add_que);

        $padd_query = "INSERT INTO `permanent_address`(`enroll_no`, `paddress1`, `paddress2`, `district`, `state`, `pincode`) VALUES ('$sid','$paddress1','$paddress2','$pdistrict','$pstate','$ppincode')";
         mysqli_query($conn,$padd_query);

        $grad_query = "INSERT INTO `qualification_info`( `enroll_no`,`board_university`, `passing_year`, `total_marks`, `obtained_marks`) VALUES ('$sid','$gboard','$gdpass','$gdtmarks','$gdomarks')";
         mysqli_query($conn,$grad_query);
        
          $plustwo_query = "INSERT INTO `qualification_info`(`enroll_no`,`board_university`, `passing_year`, `total_marks`, `obtained_marks`) VALUES ('$sid','$pboard','$ptpass','$pttmarks','$ptomarks')";
         mysqli_query($conn,$plustwo_query);

         $ten_query = "INSERT INTO `qualification_info`(`enroll_no`,`board_university`, `passing_year`, `total_marks`, `obtained_marks`) VALUES ('$sid','$tenboard','$tenpass','$tentmarks','$tenomarks')";
         mysqli_query($conn,$ten_query);

         $otedu_query = "INSERT INTO `qualification_info`( `enroll_no`,`board_university`, `passing_year`, `total_marks`, `obtained_marks`) VALUES ('$sid','$totboard','$otpass','$ottmarks','$otomarks')";
         mysqli_query($conn,$otedu_query);
         // courses section
           $cour_info = "INSERT INTO `courses_info`(`enroll_no`, `courses_name`, `total_fees`, `paid_fees`,`reg_fees`) VALUES ('$sid','$firstcourse','$ftotalfee','$fpaidfee','$fregfees')";
         mysqli_query($conn,$cour_info);
         $scour_info = "INSERT INTO `courses_info`(`enroll_no`, `courses_name`, `total_fees`, `paid_fees`,`reg_fees`) VALUES ('$sid','$secondcourse','$stotalfee','$spaidfee','$sregfees')";
         mysqli_query($conn,$scour_info);
         $tcour_info = "INSERT INTO `courses_info`(`enroll_no`, `courses_name`, `total_fees`, `paid_fees`,`reg_fees`) VALUES ('$sid','$thirdcourse','$ttotalfee','$tpaidfee','$tregfees')";
         mysqli_query($conn,$tcour_info);

         // global variable
           $_SESSION['sid']= $sid;
           $_SESSION['sname']= $fullname;
           $_SESSION['fathername']= $fathername;
           $_SESSION['mobile']= $mobile;
           $_SESSION['dob']= $dob;
           $_SESSION['gender']= $gender;
           $_SESSION['category']= $category;
           $_SESSION['status']= $status;
           $_SESSION['email']= $email;
           $_SESSION['religion']= $religion;
           $_SESSION['nation']= $nation;
           // correspondence address
           $_SESSION['caddress1']= $caddress1;
           $_SESSION['caddress2']= $caddress2;
           $_SESSION['cdistrict']= $cdistrict;
           $_SESSION['cpincode']= $cpincode;
           $_SESSION['cstate']= $cstate;
           // permanent_address
           $_SESSION['paddress1']= $paddress1;
           $_SESSION['paddress2']= $paddress2;
           $_SESSION['pdistrict']= $pdistrict;
           $_SESSION['ppincode']= $ppincode;
           $_SESSION['pstate']= $pstate;
            // Qualification Details
         
         $_SESSION['gboard']= $gboard ;
         $_SESSION['gdpass']= $gdpass ;
          $_SESSION['gdtmarks']= $gdtmarks ;
          $_SESSION['gdomarks']= $gdomarks ;
          $_SESSION['pboard']= $pboard ;
          $_SESSION['ptpass']= $ptpass ;
          $_SESSION['pttmarks']= $pttmarks ;
          $_SESSION['ptomarks']= $ptomarks ;
          $_SESSION['tenboard']= $tenboard ;
          $_SESSION['tenpass']= $tenpass  ;
          $_SESSION['tentmarks']= $tentmarks ;
          $_SESSION['tenomarks']= $tenomarks ;
          $_SESSION['totboard']= $totboard ;
          $_SESSION['otpass']= $otpass ;
          $_SESSION['ottmarks']= $ottmarks ;
          $_SESSION['otomarks']= $otomarks ;
          // course details
         $_SESSION['firstcourse']= $firstcourse ;
         $_SESSION['ftotalfee']= $ftotalfee ;
         $_SESSION['fpaidfee']= $fpaidfee ;
         $_SESSION['fregfees']= $fregfees ;
         $_SESSION['secondcourse']= $secondcourse ;
         $_SESSION['stotalfee']= $stotalfee ;
         $_SESSION['spaidfee']= $spaidfee ;
         $_SESSION['sregfees']= $sregfees ;
         $_SESSION['thirdcourse']= $thirdcourse ;
         $_SESSION['ttotalfee']= $ttotalfee ;
         $_SESSION['tpaidfee']= $tpaidfee ;
         $_SESSION['tregfees']= $tregfees ;
        
           
           
       if (in_array($photocheck,$photostored) && in_array($signcheck,$signstored)) {
            $destiphoto = '../uploadimg/stdphoto/'.$photoname;
            move_uploaded_file($phototmp,$destiphoto);
             $destisign = '../uploadimg/stdsign/'.$signname;
            move_uploaded_file($signtmp,$destisign);
          $photo_info = "INSERT INTO `student_imgsign`(`enroll_no`,`photos`, `sign`) VALUES ('$sid','$destiphoto','$destisign')";
          mysqli_query($conn,$photo_info);

         }


       // photo and sign as global
         $_SESSION['destiphoto']=$destiphoto ;
         $_SESSION['destisign']=$destisign ;






          header('location:../otherpages/admissionsuccess.php');
      }


 ?>