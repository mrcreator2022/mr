<?php
include 'header.php';
include 'sidebar.php';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Update Book table
  </h1>
  <h4><a href="listbook.php"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</a></h4>
  <ol class="breadcrumb">
    <li><a href="<?php echo $site_url; ?>admin/admindash.php"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Update Profile</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
<?php

$msg = '';
//$nameError ='';
   //$_SESSION=array();
//print_r($_SESSION);
if(isset($_SESSION['success'])){

if($_SESSION['success']!='')
{
  $msg = '<div class="alert alert-success">'.$_SESSION['success'].'      </div>';
  //$msg = '<p style="color:green;">'.$_SESSION['success'].'</p>';
}
}
if(isset($_SESSION['error'])){
if($_SESSION['error']!='')
{
  $msg = '<p style="color:red;">'.$_SESSION['error'].'</p>';
}
}

include('../dbcon.php');
$id = $_GET['id'];
 //print_r($id);die;
$qry="SELECT * FROM `books` WHERE  `id`='$id'";
    $run=mysqli_query($con,$qry);
    //echo mysqli_num_rows($run);die;
    $row=mysqli_fetch_row($run);
    //print_r($row);
?>
<form  role="form" action="editbookAction.php" name="myForm"   method="POST">
      <h3 class="text-center"><?php echo $msg; ?></h3>
      <div class="form-group">
          <label for="bookname" class="col-sm-3 control-label">Book Name*</label>
          <div class="col-sm-9">
              <input type="text" id="bn" placeholder="Book Name" name="bookname" class="form-control" value="<?php echo $row[1]?>"  autofocus autocomplete="off">
             <span id="bnn" class="error"><?php if(isset($_SESSION['booknameError'])) echo $_SESSION['booknameError'];?></span>
          </div>
      </div>
      <div class="form-group">
          <label for="Author Name" class="col-sm-3 control-label">Enter Author Name*</label>
          <div class="col-sm-9">
              <input type="text" id="au" placeholder="Enter Author Name" name="authorname" class="form-control" value="<?php echo $row[2]?>" autofocus autocomplete="off">
              <span id="bnn" class="error"><?php if(isset($_SESSION['authornameError'])) echo $_SESSION['authornameError'];?></span>
          </div>
      </div> 
       <div class="form-group">
          <label for="Quantity" class="col-sm-3 control-label">Quantity*</label>
          <div class="col-sm-9">
              <input type="number" id="sd" placeholder="Quantity "quantity" name="quantity" class="form-control" value="<?php echo $row[3]?>" autofocus autocomplete="off"><span id="bnn" class="error"><?php if(isset($_SESSION['quantityError'])) echo $_SESSION['quantityError'];?></span>
          </div>
      </div> 
      <div class="col-sm-offset-3 col-sm-2 pull-left">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
      <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
      </div>
  </form> <!-- /form -->
</div> <!-- ./container -->
    
<?php 



$_SESSION['success']='';
$_SESSION['error']='';


?>    
    
    
 

  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->




<?php 
include 'footer.php';
?>

