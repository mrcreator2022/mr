<?php
session_start();
include('../dbcon.php');

		if($_GET['del']==1){

		    $id = $_SESSION['uid'];
		    $qry= "DELETE FROM `students` WHERE `id`='$id';";
		    $run=mysqli_query($con,$qry);

		  if ($run) {
		    //echo "record delete";
		    $_SESSION['MSG']="Your data is deleted";
           Header( 'Location:http://localhost/core_php/reg.php');
              exit;
		    //header("location:http://localhost/core_php/reg.php?st=1");
	     }
		else

		{
		echo "error";
		}
	}

?>