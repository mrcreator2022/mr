<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>

<link rel="stylesheet" type="text/css" href="rcss.css">
<!------ Include the above in your HEAD tag ---------->
<div class="container">
<i class="fal fa-angle-left"></i>

<form class="form-horizontal" role="form"name="myForm"  method="POST" style="margin-top: 130px;">
<h1 style="color:green; text-align:center;">LOGIN FORM </h1>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email* </label>
            <div class="col-sm-9">
                <input type="email" id="email" placeholder="Email" class="form-control" name= "email" required="">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password*</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="Password" class="form-control" name="password" required="">
            </div>
        </div>
        
        <div class="col-sm-4">
        </div> <!-- /.form-group -->
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <!-- <span class="help-block">*Required fields</span> -->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
            <a href="reg.php">Registration</a>
        </div>
        <div class="col-sm-6">
            <button type="submit" name="login" value="login" class="btn btn-primary btn-block">Sign in</button>
        </div>
        </div>

        <div class="col-sm-offset-8"><a href="forgetpass.php">Forget password</a></div>
        <!-- <button type="submit" name="login" value="login" class="btn btn-info btn-block">Sign in</button> -->
    </form> <!-- /form -->
</div> <!-- ./container -->

<?php
session_start();
include('dbcon.php');
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $qry="SELECT * FROM `students` WHERE `email`='$email' and `pass`='$password'";
    $run=mysqli_query($con,$qry);
    
    if(mysqli_num_rows($run))
    { 
         $row=mysqli_fetch_row($run);
         $_SESSION['uid']=$row[0];
         header('location:http://localhost/core_php/admin/admindash.php?status=login');
    }
    else
    { ?>
        <script>
            alert("email  and password not match !!");
            window.open('login.php','_self');
        </script>
    <?php } 


}

?>