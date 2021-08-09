<?php 
session_start();
include('../dbcon.php');
$username = $_POST["username"];
$email = $_POST["email"];
$sql="select * from teachers where (user_name='$username' or email='$email')";

$run=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($run);
//print_r($row);die;
if(!empty($row))
{   
	$_SESSION['error']='Email or username already register.';
	header("location:http://localhost/core_php/admin/addteacher.php");
	die;
}


if(isset($_POST['submit']) && !empty($_POST["fname"]) && !empty($_POST["lname"]) && !empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["con_password"]) && !empty($_POST["contact"]))
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
	if (empty($_POST["password"])) {
	$_SESSION['passError'] = "password is required";
	$error=1;
	} else {
	$pass = test_input($_POST["password"]);
	$_SESSION['passError'] = "";
	}

	if (empty($_POST["con_password"])) {
	$_SESSION['cpassError'] = "confirm password is required";
	$error=1;
	} else {
	$cpass = test_input($_POST["con_password"]);
	$_SESSION['cpassError'] = "";
    }

    if(($pass!=$cpass)){ 
    	$_SESSION['pass']= "password not match";
    	header("location:http://localhost/core_php/reg.php");
    }

	if (empty($_POST["contact"])) {
	$_SESSION['contactError'] = "contact no is required";
	$error=1;
	} else {
	$contact = $_SESSION['contact'] = test_input($_POST["contact"]);
	$_SESSION['contactError'] = "";
	}

	if($error)
	{ $_SESSION['cpass']= "confirm password not match";
		header("location:http://localhost/core_php/reg.php");
	}
	else{	

			$sql = "INSERT INTO teachers (first_name, last_name, user_name ,email,pass,cpass, contact) VALUES ('$fname', '$lname','$username','$email','$pass','$cpass','$contact')";
			//print_r($sql);die;

			if ($con->query($sql) === TRUE) {

				$_SESSION['fname']='';
				$_SESSION['lname']='';
				$_SESSION['username']='';
				$_SESSION['email']='';
				$_SESSION['contact']='';
				
				$_SESSION['success']='Registration Successfully';
				header("location:http://localhost/core_php/admin/addteacher.php");
			} else {
				$_SESSION['error']='Please try again';
				header("location:http://localhost/core_php/admin/addteacher.php?msg");
			}
	    }

	}else{
		$_SESSION['error']='Please fill required field';
		header("location:http://localhost/core_php/admin/addteacher.php");
	}	
	$con->close();		

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

?>
  
