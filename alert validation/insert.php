

origanal code


<?php 
include('connection.php');
//print_r($_POST);die;
$nameError ="";
if(isset($_POST["submit"]) && $_POST["full_name"]!='') 
{
    if(isset($_POST['full_name']) && $_POST['full_name'] !='')
   {
   
   }else{
   		 $nameError = "Name is required";
        echo  $nameError;
    }
     $name=$_POST['full_name'];
    if (!preg_match("/^[a-zA-Z ]*$/",$name)){
	     $nameError = "Only letters and white space allowed";
	     echo $nameError;
	     //print_r($nameError);die;
	}else{
			$name =$_POST['full_name'];
	    } //print_r($name);die;
	

    
	$user =$_POST['user_name'];
	$father =$_POST['father_name'];
    $address =$_POST['address'];
    $contact =$_POST['contact'];

    $email =$_POST['email'];
    $pass =$_POST['password'];
    $cpass =$_POST['con_password'];
    if($name)
	if($pass!=$cpass)
	{
		header("location:http://localhost/school/index.php?msg='passerror'");
	}else{

		
		$sql = "INSERT INTO students (full_name, user_name ,father_name , address ,contact, email) VALUES ('$name', '$user','$father','$address','$contact','$email')";

		if ($conn->query($sql) === TRUE) {
			header("location:http://localhost/school/index.php?msg=success");
		} else {
			header("location:http://localhost/school/index.php?msg='error'");
		}

		$conn->close();
	}	
}else{
	header("location:http://localhost/school/index.php?msg='validation'");
}


?>


<?php
// Starting session
session_start();
 
// Storing session data
$_SESSION["firstname"] = "Peter";
$_SESSION["lastname"] = "Parker";

// Removing session data
if(isset($_SESSION["lastname"])){
    unset($_SESSION["lastname"]);
}
// Destroying session
session_destroy();
?>

<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("location:/index.php"); //to redirect back to "index.php" after logging out
exit();
?>

<?php
session_start();
session_destroy();
echo 'You have been logged out. <a href="/">Go back</a>';


if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['uid']);
    header('location:login.php');
}

