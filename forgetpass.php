

<?php
echo "Welcome to Forget Password";
include('dbcon.php');

if(isset($_POST['email'])){
	
	$select=mysql_query("select email,password from user where email='$email'");
  if(mysql_num_rows($select)==1)
  {
    while($row=mysql_fetch_array($select))
    {
      $email=md5($row['email']);
      $pass=md5($row['password']);
    }
}
	
	$sql = "SELECT * FROM `students` WHERE user_name = '$username'";
	$res = mysqli_query($con, $sql);
	
	$count = mysqli_num_rows($res);
	if($count == 1){
		echo "Send email to user with password";
	}else{
		echo "User name does not exist in database";
	}
}


$r = mysqli_fetch_assoc($res);
$password = $r['password'];
$to = $r['email'];
$subject = "Your Recovered Password";

$message = "Please use this password to login " . $password;
$headers = "From : vivek@codingcyber.com";
if(mail($to, $subject, $message, $headers)){
	echo "Your Password has been sent to your email id";
}else{
	echo "Failed to Recover your password, try again";
}




?>

