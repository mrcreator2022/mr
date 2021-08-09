<?php 
error_reporting(0);
session_start();
include('../dbcon.php');
$id = $_SESSION['uid'];
if(!isset($_SESSION['uid']))
{
  header('location:http://localhost/core_php/login.php');
}
$site_url = 'http://localhost/core_php/';
$user = "SELECT * FROM `students` WHERE  `id`='$id'";
$run=mysqli_query($con,$user);
$row=mysqli_fetch_assoc($run);
//print_r($row);die;
$img = $row['image'];
$fname =$row['first_name'];
$lname =$row['last_name'];
$contact =$row['contact'];

//print_r($name);die;
 

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Yaduwanshi foundation</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="<?php echo $site_url; ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo $site_url; ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="<?php echo $site_url; ?>assets/bower_components/Ionicons/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo $site_url; ?>assets/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="<?php echo $site_url; ?>assets/dist/css/skins/_all-skins.min.css">
<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<header class="main-header">
  <!-- Logo -->
  <a href="<?php echo $site_url; ?>admin/admindash.php" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>N</b>GO</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Yaduwanshi</b> Welfare</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo $site_url; ?>admin/upload/<?php echo $img; ?>" class="user-image" alt="User Image">
            <span class="hidden-xs"><?php echo $fname.' '.$lname; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?php echo $site_url; ?>admin/upload/<?php echo $img; ?>" class="img-circle" alt="User Image">
              <!--  -->
              <a href="profiledelete.php?del=1" class="btn btn-primary" onclick="return confirm('You want to deactive profile?');">Profile Deactivate <i class="fa fa-warning"></i></a>


              <p>
                <?php echo $fname.' '.$lname; ?>

                 <!-- Virendra Yadav - Web Developer -->
                 <small><b><?php echo "Contact no" .' '.$contact; ?></b></small>
                <!-- <small>Member since Jan. 2019</small> -->
              </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">


              <!-- <div class="row">
                <div class="col-xs-4 text-center">
                  <a href="#">Profile delete</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Sales</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Friends</a>
                </div>
              </div> --> 
              <!-- /.row -->
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="javascript:void(0);" class="btn btn-default btn-flat" data-toggle="modal" data-target="#changePassword">Change password</a>
              </div>
              <div class="pull-right">
                <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
              </div>

            </li>
          </ul>
        </li>          
      </ul>
    </div>
  </nav>

</header>
<?php
  $msg1 = '';
  if(isset($_SESSION['pass_cpass']))
  {
    if($_SESSION['pass_cpass']!='')
    {
       $msg1 = '<span style="color:red;">'.$_SESSION['pass_cpass'].'</span>';
    }
    
  }
  if(isset($_SESSION['pass_success']))
  {
    if($_SESSION['pass_success']!='')
    {
      $msg1 = '<span style="color:green;">'.$_SESSION['pass_success'].'</span>';
    }
  }
  if(isset($_SESSION['pass_error']))
  {
    if($_SESSION['pass_cpass']!='')
    {
      $msg1 = '<span style="color:red;">'.$_SESSION['pass_cpass'].'</span>';
    }
  }

  $_SESSION['pass_cpass']='';
  $_SESSION['pass_success']='';
  $_SESSION['pass_cpass']='';
  ?>
<!-- Modal -->
  <div class="modal fade" id="changePassword" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Change Password</h4>
          <h4 class="modal-title"><?php echo $msg1; ?></h4>
        </div>
        <div class="modal-body">
          <form method="post" action="changePassword.php">
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <span id="pass" class="perror"><?php if(isset($_SESSION['passError'])) echo $_SESSION['passError']; ?></span>
              </div>
              <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" id="con_password" name="con_password" placeholder="Confirm password" required>
                <span id="passmes" class="cperror"><?php if(isset($_SESSION['cpassError'])) echo $_SESSION['cpassError']; ?></span>
              </div>
              <button type="submit" name="updatepass" class="btn btn-primary">Update</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

