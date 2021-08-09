<?php
session_start();
include('../dbcon.php');

if($_GET['del']>0){

		   $id = $_GET['del'];
		    $qry= "DELETE FROM `books` WHERE `id`='$id'";
		    $run=mysqli_query($con,$qry);

		  if ($run) {
		    //echo "record delete";
		    $_SESSION['MSG']="Your data is deleted";
           Header( 'Location:http://localhost/core_php/admin/listbook.php');
              exit;
		    //header("location:http://localhost/core_php/reg.php?st=1");
	     }
		else

		{
		echo "error";
		}
	}
