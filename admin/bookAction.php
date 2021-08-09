<?php
session_start();
include('../dbcon.php');
?>
<?php
if(isset($_POST['submit'])){

        $name = $_POST['bookname'];
             
        $authorname = $_POST['authorname'];
        
        $quantity = $_POST['quantity'];

}
 $sql = "INSERT INTO books (name, book_author ,quantity) VALUES ('$name', '$authorname','$quantity')";

if ($con->query($sql) === TRUE) {
        
        $_SESSION['success']='Book added successfully';
        header("location:http://localhost/core_php/admin/addbook.php");
      } else {
        $_SESSION['error1']='Please try again';
        header("location:http://localhost/core_php/admin/addbook.php?msg");
      }
     
  $con->close();  


?>