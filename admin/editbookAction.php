<?php
session_start();
include('../dbcon.php');
 $id =$_POST['id'];
if(isset($_POST['submit'])) 
{
  $error=0;
  if (empty($_POST["bookname"])) {
  $_SESSION['booknameError'] = "Book Name is required";
  $error=1;
  }else {
  $bookname = $_SESSION['bookname']= $_POST["bookname"];
    $_SESSION['booknameError'] = "";
   //print_r($bookname);die;
  // check name only contains letters and whitespace
  if (!preg_match("/^[a-zA-Z ]*$/",$bookname)) {
  $_SESSION['booknameError'] = "Only letters and white space allowed";
  $error=1;
  }
  }
  if (empty($_POST["authorname"])) {
  $_SESSION['authornameError'] = " Name is required";
  $error=1;
  } else {
  $authorname = $_SESSION['authorname'] = $_POST["authorname"];
  $_SESSION['authornameError'] = "";
  // check name only contains letters and whitespace
  if (!preg_match("/^[a-zA-Z ]*$/",$authorname)) {
  $_SESSION['authornameError'] = "Only letters and white space allowed";
  $error=1;
  }
  }
  if (empty($_POST["quantity"])) {
  $_SESSION['quantityError'] = "Author Name is required";
  $error=1;
  } else {
  $quantity = $_SESSION['quantity'] = $_POST["quantity"];
  $_SESSION['quantityError'] = "";
}
if($error==1){
  $_SESSION['error']='All field required';
  header("location:http://localhost/core_php/admin/editbook.php?id=$id");
  die;
}
  $sql = "Update books set name='$bookname', book_author='$authorname',quantity='$quantity' where id='$id'";
  

      if ($con->query($sql) === TRUE) {
        //print_r($sql);die;
        
        $_SESSION['success']='Updated Successfully';
        header("location:http://localhost/core_php/admin/editbook.php?id=$id");
      }else {
        $_SESSION['error']='Please try again';
        header("location:http://localhost/core_php/admin/editbook.php?id=$id");
      } 
    }
  
  else{
    $_SESSION['error']='Please fill required field';
    header("location:http://localhost/core_php/admin/editbook.php?id=$id");
  } 
    
    

?>