
<!-- important -->
1.certificate upload






// course details
      	 // $firstcourse = $_POST['firstcourse'];
        //  $ftotalfee = $_POST['ftotalfee'];
        //  $fpaidfee = $_POST['fpaidfee'];
        //  $secondcourse = $_POST['secondcourse'];
        //  $stotalfee = $_POST['stotalfee'];
        //  $spaidfee = $_POST['spaidfee'];
        //  $thirdcourse = $_POST['thirdcourse'];
        //  $ttotalfee = $_POST['ttotalfee'];
        //  $tpaidfee = $_POST['tpaidfee'];
      	
 // correspondence address details
         // $chn_no = $_POST['chn_no'];
         // $cvillage = $_POST['cvillage'];
         // $clandmark = $_POST['clandmark'];
         // $cpost = $_POST['cpost'];
         // $cpolice = $_POST['cpolice'];
         // $cdistrict = $_POST['cdistrict'];
         // $cstate = $_POST['cstate'];
         // $ccontry = $_POST['ccontry'];
         // $cpincode = $_POST['cpincode'];
         // permanent Address details
         // $phn_no = $_POST['phn_no'];
         // $pvillage = $_POST['pvillage'];
         // $plandmark = $_POST['plandmark'];
         // $ppost = $_POST['ppost'];
         // $ppolice = $_POST['ppolice'];
         // $pdistrict = $_POST['pdistrict'];
         // $pstate = $_POST['pstate'];
         // $pcontry = $_POST['pcontry'];
         // $ppincode = $_POST['ppincode'];
           // Photo upload
           
         $photo = $_FILES['photo'];
          
         $photoname = $photo['name'];
         $phototmp = $photo['tmp_name'];
         $photoext = explode('.',$photoname);
         $photocheck = strtolower(end($photoext));
         $photostored = array('png','jpg','jpeg');
         if (in_array($photocheck,$photostored)) {
            $destiphoto = '../uploadimg/stdphoto/'.$photoname;
            move_uploaded_file($phototmp,$destiphoto);

         }

      // Qualification Details
         
         // $gboard = $_POST['gboard'];
         // $gdpass = $_POST['gdpass'];
         // $gdtmarks = $_POST['gdtmarks'];
         // $gdomarks = $_POST['gdomarks'];
         // $pboard = $_POST['pboard'];
         // $ptpass = $_POST['ptpass'];
         // $pttmarks = $_POST['pttmarks'];
         // $ptomarks = $_POST['ptomarks'];
         // $tenboard = $_POST['tenboard'];
         // $tenpass = $_POST['tenpass'];
         // $tentmarks = $_POST['tentmarks'];
         // $tenomarks = $_POST['tenomarks'];
         // $totboard = $_POST['otboard'];
         // $otpass = $_POST['otpass'];
         // $ottmarks = $_POST['ottmarks'];
         // $otomarks = $_POST['otomarks'];

        // photo and sign 
         $photo = $_FILES['photo'];
         // $sign = $_FILES['sign'];
         // $signname = $sign['name'];
         // $signtmpname = $sign['tmp_name'];
         // converting photo
          $photoname = $photo['name'];
        $phototmpname = $photo['tmp_name'];
     
     $photoext = explode('.', $photoname);
     $photocheck = strtolower(end($photoext));

     $photostore = array('png','jpg','jpeg');

     if (in_array($photocheck, $photostore)) {
       
       $destinationphoto = 'photos/' .$photoname;
       move_uploaded_file($phototmpname,$destinationphoto );
       $ph = "INSERT INTO `student_info`(`photo`) VALUES ('$destinationphoto')";
       mysqli_query($conn,$ph);
     }
       // converting signature

     
     // $signext = explode('.', $signname);
     // $signcheck = strtolower(end($signext));

     // $signstore = array('png','jpg','jpeg');

     // if (in_array($filecheck, $signstore)) {
       
     //   $destinationsign = 'photos/' .$signname;
     //   move_uploaded_file($signtmpname,$destinationsign );

     //     }

         // Insert in student table

         // $std = "INSERT INTO `student_info`( `name`, `father_name`, `mother_name`, `dob`, `gender`, `mobile`, `category`, `status`, `email`, `religion`, `nationality`, , `signature`) VALUES ('$fullname','$fathername','$mothername','dob','$gender','$mobile','$category','$status','$email','$religion','$nation','','$destinationsign')";

         //   mysqli_query($conn,$std);
         //    // Insert in courses table




         //     // generating student enrollment id

         //   $last_id = mysqli_insert_id($conn);
         //   if ($last_id) {
         //   	$enroll = "ESS".$last_id;
         //   	$idquery = "UPDATE `student_info` SET `enroll_no`='".$enroll."' WHERE 'reg_no'= '".$last_id."'";
         //   	mysqli_query($conn,$idquery);
         //   }
