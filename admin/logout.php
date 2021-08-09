<?php
session_start()
?>

<?php
session_destroy(); 
//$_SESSION['msg']="you loged out successfully completed";
header('location:http://localhost/core_php/reg.php?status=loggedout');
//header('Location:http://localhost/vvv/reg.php');





?>