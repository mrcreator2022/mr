<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>

<?php

include 'header.php';
include 'sidebar.php';

?>
<?php
$msg ='';

if(isset($_SESSION['success']))
{
  if($_SESSION['success']!='')
  {
  
  $msg = '<div class="alert alert-success">'.$_SESSION['success'].'      </div>';
  }
  //'<p style="color:green;">'.$_SESSION['success'].'</p>';
}




?>
 


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1><b>
    LIBRARY<span><?php echo $msg;   ?></span>
    </b>
  </h1>
  <h4><a href="listbook.php"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</a></h4>

  <!-- <p><?php echo $msg; ?></p> -->
  
  <ol class="breadcrumb">
    <li><a href="<?php echo $site_url; ?>admin/admindash.php"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Library</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
<form action="bookAction.php" role="form" name="myForm"   method="POST">
      <h3 class="text-center"></h3>
      <div class="form-group">
          <label for="bookname" class="col-sm-3 control-label">Book Name*</label>
          <div class="col-sm-9">
              <input type="text" id="bn" placeholder="Book Name" name="bookname" class="form-control" value=""  autofocus autocomplete="off">
             <span id="bnn" class="error"></span>
          </div>
      </div>
      <div class="form-group">
          <label for="Author Name" class="col-sm-3 control-label">Enter Author Name*</label>
          <div class="col-sm-9">
              <input type="text" id="au" placeholder="Enter Author Name" name="authorname" class="form-control" value="" autofocus autocomplete="off">
          </div>
      </div> 
       <div class="form-group">
          <label for="Quantity" class="col-sm-3 control-label">Quantity*</label>
          <div class="col-sm-9">
              <input type="number" id="sd" placeholder="Quantity "quantity" name="quantity" class="form-control" value="" autofocus autocomplete="off">
          </div>
      </div> 
      <div class="col-sm-offset-3 col-sm-2 pull-left">
      <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
      </div>
  </form> <!-- /form -->

</div> <!-- ./container -->
</div>
  <!-- /.row -->
</section>
<!-- /.content -->
</div>



<?php 
$_SESSION['success']='';
include 'footer.php';
?>
