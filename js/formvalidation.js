
//// form validation of admission.php

function validation()
{
//	// Applicant Name validation
	var user = document.form.fullname.value;
     var fname = document.form.fathername.value;
    var mothername = document.form.mothername.value;
    var mobile = document.form.mobile.value;
    var email = document.getElementById('email');
    var religion = document.form.religion.value;
     var nation = document.form.nation.value;
    var caddress1 = document.form.caddress1.value;
    var caddress2 = document.form.caddress2.value;
    var cdistrict = document.form.cdistrict.value;
    var cpincode = document.form.cpincode.value;
    var paddress1 = document.form.paddress1.value;
    var paddress2 = document.form.paddress2.value;
    var pdistrict = document.form.pdistrict.value;
    var ppincode = document.form.ppincode.value;
    // var gdpass = document.form.gdpass.value;
    // var gdtmarks = document.form.gdtmarks.value;
    // var gdomarks = document.form.gdomarks.value;
    // var ptpass = document.form.ptpass.value;
    // var pttmarks = document.form.pttmarks.value;
    // var ptomarks = document.form.ptomarks.value;
    // var tenpass = document.form.tenpass.value;
    // var tentmarks = document.form.tentmarks.value;
    // var tenomarks = document.form.tenomarks.value;
    // var otpass = document.form.otpass.value;
    // var ottmarks = document.form.ottmarks.value;
    // var otomarks = document.form.otomarks.value;
    
    if(user=="")
	{
		alert("Please fill the Applicant Name field ! ");
		document.getElementById('fullname').style.border = "1px solid red";
		return false;
	}

	  if(user.length<=2 || user.length>=70 )
	{
		alert("Invalid Name, Fill the Applicant Name properly.");
		document.getElementById('fullname').style.border = "1px solid red";
		return false;

	}    
	 if(!user.match(/^[a-zA-Z ]+$/)){
		alert("Invalid Applicant Name, Only Alphabet are allowed !.");
		document.getElementById('fullname').style.border = "1px solid red";
		return false;
	}
    

//// Father's Name validation

//   
    if(fname=="")
   {
	alert("Please fill the Father's/ Guardian's Name field ! ");
	document.getElementById('fathername').style.border = "1px solid red";
	return false;
   }

     if(fname.length<=2 || fname.length>=70 )
  {
	alert("Invalid Name, Fill the father's/ Guardian's name properly.");
	document.getElementById('fathername').style.border = "1px solid red";
	return false;
   }

      if (!fname.match(/^[a-zA-Z ]+$/)) 
   {
	alert("Invalid father's/ Guardian's Name, Only Alphabet are allowed !.");
	document.getElementById('fullname').style.border = "1px solid red";
	return false;
   }
  



//  // Mother's Name Validation
  

   if(mothername=="")
  {
	alert("Please fill the Mother's Name field ! ");
	document.getElementById('mothername').style.border = "1px solid red";
	return false;
 }

    if(mothername.length<=2 || mothername.length>=70 )
 {
	alert("Invalid Name, Fill the Mother's Name properly.");
	document.getElementById('mothername').style.border = "1px solid red";
	return false;

 }    
   if (!mothername.match(/^[a-zA-Z ]+$/)) 
 {
	alert("Invalid Mother's Name, Only Alphabet are allowed !.");
	document.getElementById('mothername').style.border = "1px solid red";
	return false;
 }
    
//
////   // Mobile Number Validation

 

  if(mobile=="")
 {
	alert("Please fill the Mobile Number field ! ");
	document.getElementById('mobile').style.border = "1px solid red";
	return false;
 }

   if(mobile.length!==10 )
 {
	alert("Invalid Mobile No, Fill the Mobile Number properly.");
	document.getElementById('mobile').style.border = "1px solid red";
	return false;

 }
    


// // Email ID Validation


 
 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

 if (!filter.test(email.value)) {
	alert('Please provide a valid email address');
	email.focus;
	return false;
 }
// // Religion Validation
 

 if(religion=="")
 {
	alert("Please fill the Religion field ! ");
	document.getElementById('religion').style.border = "1px solid red";
	return false;
 }

  if(religion.length<=2 || religion.length>=70 )
 {
	alert("Invalid Name, Fill the Religion Field properly.");
	document.getElementById('religion').style.border = "1px solid red";
	return false;

 }    
  if (!religion.match(/^[a-zA-Z]+$/)) 
 {
	alert("Invalid Religion Field, Only Alphabet are allowed !.");
	document.getElementById('religion').style.border = "1px solid red";
	return false;
 }

// // Nationality Validation
 

 if(nation=="")
 {
	alert("Please fill the Nationality field ! ");
	document.getElementById('nation').style.border = "1px solid red";
	return false;
 }

  if(nation.length<=2 || nation.length>=70 )
 {
	alert("Invalid Name, Fill the Nationality Field properly.");
	document.getElementById('nation').style.border = "1px solid red";
	return false;

 }    
  if (!nation.match(/^[a-zA-Z]+$/)) 
 {
	alert("Invalid Nationality Field, Only Alphabet are allowed !.");
	document.getElementById('nation').style.border = "1px solid red";
	return false;
 }

// // Address Section
//  // Correspondence Address Validation

 

 if(caddress1=="")
 {
	alert("Please fill the Address Line 1 field ! ");
	document.getElementById('caddress1').style.border = "1px solid red";
	return false;
 }

  if(caddress1.length<=2 || caddress1.length>=50 )
 {
	alert("Invalid Name, Fill the Address Line 1 properly.");
	document.getElementById('caddress1').style.border = "1px solid red";
	return false;

 }    
  if (!caddress1.match(/^[a-zA-Z ]+$/)) 
 {
	alert("Invalid Address Line 1, Only Alphabet are allowed !.");
	document.getElementById('caddress1').style.border = "1px solid red";
	return false;
 }
//
// // Landmark Validation
  

 if(caddress2=="")
 {
	alert("Please fill the Address Line 2 field ! ");
	document.getElementById('caddress2').style.border = "1px solid red";
	return false;
 }

  if(caddress2.length<=2 || caddress2.length>=50 )
  {
	alert("Invalid Name, Fill the Address Line 2 properly.");
	document.getElementById('caddress2').style.border = "1px solid red";
	return false;

 }    
  if (!caddress2.match(/^[a-zA-Z ]+$/)) 
 {
	alert("Invalid Address Line 2, Only Alphabet are allowed !.");
	document.getElementById('caddress2').style.border = "1px solid red";
	return false;
 }


// // District validation
//
 

  if(cdistrict=="")
 {
	alert("Please fill the District field ! ");
	document.getElementById('cdistrict').style.border = "1px solid red";
	return false;
 }

   if(cdistrict.length<=2 || cdistrict.length>=50 )
 {
	alert("Invalid Name, Fill the District properly.");
	document.getElementById('cdistrict').style.border = "1px solid red";
	return false;

 }    
  if (!cdistrict.match(/^[a-zA-Z ]+$/)) 
 {
	alert("Invalid District, Only Alphabet are allowed !.");
	document.getElementById('cdistrict').style.border = "1px solid red";
	return false;
 }


// // Pincode Validation
//
 

 if(cpincode=="")
 {
	alert("Please fill the Pincode field ! ");
	document.getElementById('cpincode').style.border = "1px solid red";
	return false;
 }

  if(cpincode.length!=6 )
 {
	alert("Invalid Pincode, Fill the Pincode properly.");
	document.getElementById('cpincode').style.border = "1px solid red";
	return false;

 }    

// // Permanent Address Validation

 

 if(paddress1=="")
 {
	alert("Please fill the Address Line 1 field ! ");
	document.getElementById('paddress1').style.border = "1px solid red";
	return false;
 }

  if(paddress1.length<=2 || paddress1.length>=50 )
 {
	alert("Invalid Name, Fill the Address Line 1 properly.");
	document.getElementById('paddress1').style.border = "1px solid red";
	return false;

 }    
  if (!paddress1.match(/^[a-zA-Z ]+$/)) 
 {
	alert("Invalid Address Line 1, Only Alphabet are allowed !.");
	document.getElementById('paddress1').style.border = "1px solid red";
	return false;
 }
//
// // Landmark Validation
 

 if(paddress2=="")
  {
	alert("Please fill the Address Line 2 field ! ");
	document.getElementById('paddress2').style.border = "1px solid red";
	return false;
 }

  if(paddress2.length<=2 || paddress2.length>=50 )
 {
	alert("Invalid Name, Fill the Address Line 2 properly.");
	document.getElementById('paddress2').style.border = "1px solid red";
	return false;

 }    
  if (!paddress2.match(/^[a-zA-Z ]+$/)) 
 {
	alert("Invalid Address Line 2, Only Alphabet are allowed !.");
	document.getElementById('paddress2').style.border = "1px solid red";
	return false;
 }


// // District validation

 

 if(pdistrict=="")
 {
	alert("Please fill the District field ! ");
	document.getElementById('pdistrict').style.border = "1px solid red";
	return false;
 }

  if(pdistrict.length<=2 || pdistrict.length>=50 )
 {
	alert("Invalid Name, Fill the District properly.");
	document.getElementById('pdistrict').style.border = "1px solid red";
	return false;

 }    
  if (!pdistrict.match(/^[a-zA-Z ]+$/)) 
 {
	alert("Invalid District, Only Alphabet are allowed !.");
	document.getElementById('pdistrict').style.border = "1px solid red";
	return false;
 }


// // Pincode Validation

 

 if(ppincode=="")
 {
	alert("Please fill the Pincode field ! ");
	document.getElementById('ppincode').style.border = "1px solid red";
	return false;
 }

  if(ppincode.length!=6 )
 {
	alert("Invalid Pincode, Fill the Pincode properly.");
	document.getElementById('ppincode').style.border = "1px solid red";
	return false;

 }

// // // Qualification Details Validation


// // // Total Marks Field

 

//  if(gdtmarks.length>=9)
//  {
// 	alert("Invalid Total Marks, Fill the Total Marks field properly.");
// 	document.getElementById('gdtmarks').style.border = "1px solid red";
// 	return false;

//  }

// // // Marks Field


//  if(gdomarks.length>=9)
//  {
// 	alert("Invalid Obtained Marks, Fill the Obtained Marks field properly.");
// 	document.getElementById('gdomarks').style.border = "1px solid red";
// 	return false;

//  }

// // // +2 section validation
// // // year of passing field

 

//  if(ptpass.length!=4 )
//   {
// 	alert("Invalid Year, Fill the Year Of Passing field properly.");
// 	document.getElementById('ptpass').style.border = "1px solid red";
// 	return false;

//  }


// // // Total Marks Field

  

//  if(pttmarks.length>=9)
//  {
// 	alert("Invalid Total Marks, Fill the Total Marks field properly.");
// 	document.getElementById('pttmarks').style.border = "1px solid red";
// 	return false;

//  }
// //
// // // Marks Field

 

//  if(ptomarks.length>=9)
//  {
// 	alert("Invalid Obtained Marks, Fill the Obtained Marks field properly.");
// 	document.getElementById('ptomarks').style.border = "1px solid red";
// 	return false;

//   }

// // // 10th section validation
// // // year of passing field
// //
 

//  if(tenpass.length!=4 )
//  {
// 	alert("Invalid Year, Fill the Year Of Passing field properly.");
// 	document.getElementById('tenpass').style.border = "1px solid red";
// 	return false;

//  }


// // // Total Marks Field

 

//  if(tentmarks.length>=9)
//  {
// 	alert("Invalid Total Marks, Fill the Total Marks field properly.");
// 	document.getElementById('tentmarks').style.border = "1px solid red";
// 	return false;

//  }

// // // Marks Field

 

//  if(tenomarks.length>=9)
//  {
// 	alert("Invalid Obtained Marks, Fill the Obtained Marks field properly.");
// 	document.getElementById('tenomarks').style.border = "1px solid red";
// 	return false;

//  }

// // // Other Qualification section validation
// // // year of passing field
// //
 

//  if(otpass.length=4 )
//  {
// 	alert("Invalid Year, Fill the Year Of Passing field properly.");
// 	document.getElementById('otpass').style.border = "1px solid red";
// 	return false;

//  }

// //
// // // Total Marks Field

 

//   if(ottmarks.length>=9)
//  {
// 	alert("Invalid Total Marks, Fill the Total Marks field properly.");
// 	document.getElementById('ottmarks').style.border = "1px solid red";
// 	return false;

//  }

// // // Marks Field
// //
 

//  if(otomarks.length>=9)
// {
// 	alert("Invalid Obtained Marks, Fill the Obtained Marks field properly.");
// 	document.getElementById('otomarks').style.border = "1px solid red";
// 	return false;

//  }


//// // Declaration checkbox validation
if(!form.declare.checked) {
      alert("Please indicate that you accept the Terms and Conditions");
      return false;
    }

 }

// // Address copying to Permanent Address
// // Checkbox Validation
function addresscopyto(f) {
	if(f.copyaddress.checked == true) {
		f.paddress1.value = f.caddress1.value;
		f.paddress2.value=f.caddress2.value;
		f.pdistrict.value = f.cdistrict.value;
		f.ppincode.value = f.cpincode.value;

	}
	else {
		
		f.paddress1.value =" ";
		f.paddress2.value=" ";
		f.pdistrict.value = " ";
		f.ppincode.value = " ";

	}
}