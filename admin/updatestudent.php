<?php 
session_start();
include('../dbcon.php');
if(isset($_POST['update']) && !empty($_POST["fname"]) && !empty($_POST["lname"]) && !empty($_POST["fathername"]) && !empty($_POST["username"]) && !empty($_POST["standard"]) && !empty($_POST["rollno"]) && !empty($_POST["email"]) && !empty($_POST["contact"]))
{
	$error=0;
	if (empty($_POST["fname"])) {
	$_SESSION['fnameError'] = "Name is required";
	$error=1;
	} else {
	$fname = $_SESSION['fname']= test_input($_POST["fname"]);
    $_SESSION['fnameError'] = "";
	// check name only contains letters and whitespace
	if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
	$_SESSION['fnameError'] = "Only letters and white space allowed";
	$error=1;
	}
	}
	if (empty($_POST["lname"])) {
	$_SESSION['lnameError'] = "last Name is required";
	$error=1;
	} else {
	$lname = $_SESSION['lname'] = test_input($_POST["lname"]);
	$_SESSION['lnameError'] = "";
	// check name only contains letters and whitespace
	if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
	$_SESSION['lnameError'] = "Only letters and white space allowed";
	$error=1;
	}
	}
	if (empty($_POST["fathername"])) {
	$_SESSION['fathernameError'] = "father Name is required";
	$error=1;
	} else {
	$fathername = $_SESSION['fathername'] = test_input($_POST["fathername"]);
	$_SESSION['fathernameError'] = "";
	// check name only contains letters and whitespace
	if (!preg_match("/^[a-zA-Z ]*$/",$fathername)) {
	$_SESSION['lnameError'] = "Only letters and white space allowed";
	$error=1;
	}
	}
	if (empty($_POST["username"])) {
	$_SESSION['unameError'] = "User Name is required";
	$error=1;
	} else {
	$username = $_SESSION['username'] = test_input($_POST["username"]);
	$_SESSION['unameError'] = "";
	// check name only contains letters and whitespace
	if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
	$_SESSION['unameError'] = "Only letters and white space allowed";
	$error=1;
	}
	}
	if (empty($_POST["standard"])) {
	$_SESSION['standardError'] = "Standard is required";
	$error=1;
	} else {
	$standard = $_SESSION['standard'] = test_input($_POST["standard"]);
	$_SESSION['standardError'] = "";
	}
	if (empty($_POST["rollno"])) {
	$_SESSION['rollnoError'] = "Roll No is required";
	$error=1;
	} else {
	$rollno = $_SESSION['rollno'] = test_input($_POST["rollno"]);
	$_SESSION['rollnoError'] = "";
	}
	if (empty($_POST["email"])) {
	$_SESSION['emailError'] = "Email is required";
	$error=1;
	} else {
	$email = $_SESSION['email'] = test_input($_POST["email"]);
	$_SESSION['emailError'] = "";
	// check if e-mail address syntax is valid or not
	if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email)) {
	$_SESSION['emailError'] = "Invalid email format";
	$error=1;
	}
	}
	if (empty($_POST["contact"])) {
	$_SESSION['contactError'] = "contact no is required";
	$error=1;
	} else {
	$contact = $_SESSION['contact'] = test_input($_POST["contact"]);
	$_SESSION['contactError'] = "";
	}
	if (empty($_POST["address"])) {
	$_SESSION['addressError'] = "Address is required";
	$error=1;
	} else {
	$address = $_SESSION['address'] = test_input($_POST["address"]);
	$_SESSION['addressError'] = "";
	}

	if($error)
	{ $_SESSION['cpass']= "confirm password not match";
		header("location:http://localhost/core_php/admin/editprofile.php");
	}else{	
			$id = $_POST['id'];

			if(isset($_FILES['image'])){
		      $errors='';
		      $file_name = $_FILES['image']['name'];
		      $file_size =$_FILES['image']['size'];
		      $file_tmp =$_FILES['image']['tmp_name'];
		      $file_type=$_FILES['image']['type'];
		      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
		      
		      $extensions= array("jpeg","jpg","png");
		      
		      if(in_array($file_ext,$extensions)=== false){
		         $errors .='<div class="alert alert-danger">
                   <strong>Warning!</strong> Extension not allowed, please choose a JPEG or PNG file.
                           </div>';
		      }
		      
		      if($file_size > 2097152){
		      	if($errors!='')
		      	{
		         $errors .=', File size must be excately 2 MB';
		      	}else{
		      		$errors .='File size must be excately 2 MB';
		      	}
		      }
		      
		      if($errors=='')
		      {
		      	$qry="SELECT * FROM `students` WHERE  `id`='$id'";
			    $run=$con->query($qry);
			    $row=mysqli_fetch_assoc($run);
			    $img = $row['image'];
			    if($img!='')
			    {
			    	unlink('upload/'.$img);
			    }

		         move_uploaded_file($file_tmp,"upload/".$file_name);
		         $sql1 = "Update students set image='$file_name' where id='$id'";
		         $con->query($sql1);
		      }else{
		         $_SESSION['error']=$errors;
				 header("location:http://localhost/core_php/admin/editprofile.php");
		      }
		   }

			$sql = "Update students set first_name='$fname', last_name='$lname',father_name='$fathername', user_name='$username',standard='$standard',rollno='$rollno' ,email='$email',contact='$contact',address='$address' where id='$id'";

			if ($con->query($sql) === TRUE) {
				
				$_SESSION['success']='Updated Successfully';
				header("location:http://localhost/core_php/admin/editprofile.php");
			} else {
				$_SESSION['error']='Please try again';
				header("location:http://localhost/core_php/admin/editprofile.php");
			}
	    }

	}else{
		$_SESSION['error']='Please fill required field';
		header("location:http://localhost/core_php/admin/editprofile.php");
	}	
	$con->close();	

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

?>
  
