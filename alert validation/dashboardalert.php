
<?php
/*
	include 'dbcon.php'; 
if(isset($_POST["submit"]) && $_POST["fname"]!='') 

	 {

            $firstname = $_POST['fname'];
		    $lastname = $_POST['lname'];
		    $user =$_POST['username'];
			$email =$_POST['email'];
		    $pass =$_POST['password'];
		    $cpass =$_POST['con_password'];

		    if($firstname=='')
		    {
             header("http://localhost/core_php/reg.php");
		    }
		    else
		    {
		    	
		    echo "$firstname";
		    	
		    }
	}

*/
	?>

<?php
include 'dbcon.php';
// Initialize variables to null.
$Error ="";


// On submitting form below function will execute.
if(isset($_POST['submit'])){
if (empty($_POST["fname"])) {
$Error = "Name is required";
} else {
$fname = test_input($_POST["fname"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
$Error = "Only letters and white space allowed";
}
}
if (empty($_POST["lname"])) {
$Error = "last Name is required";
} else {
$lname = test_input($_POST["lname"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
$Error = "Only letters and white space allowed";
}
}
if (empty($_POST["uname"])) {
$Error = "User Name is required";
} else {
$uname = test_input($_POST["uname"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$uname)) {
$Error = "Only letters and white space allowed";
}
}
if (empty($_POST["email"])) {
$Error = "Email is required";
} else {
$email = test_input($_POST["email"]);
// check if e-mail address syntax is valid or not
if (!preg_match("/([w-]+@[w-]+.[w-]+)/",$email)) {
$Error = "Invalid email format";
}
}
if (empty($_POST["password"])) {
$Error = "password is required";
} else {
$pass = test_input($_POST["password"]);
}

if (empty($_POST["con_password"])) {
$Error = "confirm password is required";
} else {
$cpass = test_input($_POST["con_password"]);
}

if (empty($_POST["contact"])) {
$Error = "contact no is required";
} else {
$contact = test_input($_POST["contact"]);
}
}



function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
//php code ends here
?>          
	
<div class="admintitle">
	<h4><a class="aa" href="logout.php">Log out</a></h4>
<h1> Welcome to dashboard</h1>
</div>
<div class="dashboard">
  <table>
		<tr>
		<td>1.</td><td><a href="addstudent.php">Insert student Details</a></td>
		</tr>
		<tr>
		<td>2.</td><td><a href="updatestudent.php">Update student Details</a></td>
		</tr>
		<tr>
		<td>3.</td><td><a href="deletestudent.php">delete student Details</a></td>
		</tr>
  </table>
</div>
