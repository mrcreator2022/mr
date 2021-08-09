<?php
session_start();
include('../dbcon.php');
if(isset($_POST['updatepass']) && !empty($_POST["password"]) && !empty($_POST["con_password"]))
{
	
	
	$pass = $_POST["password"];	
	$cpass = $_POST["con_password"];
	if(($pass!=$cpass))
    { 
     	$_SESSION['pass_cpass']= "confirm password not match";
		header("location:http://localhost/core_php/admin/editprofile.php");
	}else{	
			$id = $_SESSION['uid'];
			$sql = "UPDATE `students` SET `pass` = '$pass', `cpass` = '$cpass' WHERE `students`.`id` = '$id'";

			if ($con->query($sql) === TRUE) 
			{
				$_SESSION['pass_success']='password Successfully';
				header("location:http://localhost/core_php/admin/editprofile.php");
			}else
			{
				$_SESSION['pass_error']='Please try again';
				header("location:http://localhost/core_php/admin/editprofile.php");
			}
	    }

	}else{
		$_SESSION['error']='Please fill required field';
		header("location:http://localhost/core_php/admin/changePassword.php");
	}	
	$con->close();	

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>