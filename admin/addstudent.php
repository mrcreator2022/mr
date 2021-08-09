<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>

<?php

include 'header.php';
include 'sidebar.php';

?>


<?php
 $msg = '';
   //print_r($_SESSION);

   
if(isset($_SESSION['success']))
{
  if($_SESSION['success']!='')
  {
  
  $msg = '<div class="alert alert-success">'.$_SESSION['success'].'      </div>';
  }
  //'<p style="color:green;">'.$_SESSION['success'].'</p>';
}


if(isset($_SESSION['error']))
{
if($_SESSION['error']!='')
  {

  $msg = '<div class="alert alert-danger">'.$_SESSION['error'].'      </div>';
  

  //'<p style="color:red;">'.$_SESSION['error'].'</p>';
}
}

if(isset($_SESSION['pass']))
{
  if($_SESSION['pass']!='')
  {

  $msg = '<p style="color:red;">'.$_SESSION['pass'].'</p>';
}
}


if(isset($_SESSION['cpass']))
{
  if($_SESSION['cpass']!='')
  {
  $msg = '<div class="alert alert-danger">'.$_SESSION['cpass'].'      </div>';

  //'<p style="color:red;">'.$_SESSION['cpass'].'</p>';
}
}

if(isset($_SESSION['error']))
{
  if($_SESSION['error']!='')
  {
  $msg = '<div class="alert alert-danger">'.$_SESSION['error'].'      </div>';
  }

  //'<p style="color:red;">'.$_SESSION['error'].'</p>';
}

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Add Students
  </h1>
  <!-- <p><?php echo $msg; ?></p> -->
  
  <ol class="breadcrumb">
    <li><a href="<?php echo $site_url; ?>admin/admindash.php"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Student Profile</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
<form action="addAction.php" role="form" name="myForm"   method="POST" enctype="multipart/form-data">
      <h3 class="text-center"><?php echo $msg ; ?></h3>
      <div class="form-group">
          <label for="firstName" class="col-sm-3 control-label">First Name*</label>
          <div class="col-sm-9">
              <input type="text" id="firstName" placeholder="First Name" name="fname" class="form-control" value="<?php if(!empty($_SESSION["fname"])){ echo $_SESSION["fname"]; } ?>"  autofocus autocomplete="off">
             <span id="fnn" class="error"><?php if(isset($_SESSION['fnameError'])) echo $_SESSION['fnameError'];?></span>
          </div>
      </div>
      <div class="form-group">
          <label for="lastName" class="col-sm-3 control-label">Last Name*</label>
          <div class="col-sm-9">
              <input type="text" id="lastName" placeholder="Last Name" name="lname" class="form-control" value="<?php  if(!empty($_SESSION["lname"])){ echo $_SESSION["lname"]; } ?>" autofocus autocomplete="off">
              <span id="lnn" class="lerror"><?php if(isset($_SESSION['lnameError'])) echo $_SESSION['lnameError']; ?></span>
          </div>
      </div>
      <div class="form-group">
          <label for="userName" class="col-sm-3 control-label">Username* </label>
          <div class="col-sm-9">
              <input type="text" id="userName" placeholder="User Name" class="form-control" name= "username" value="<?php if(!empty($_SESSION["username"])){ echo $_SESSION["username"]; } ?>" autofocus autocomplete="off">
              <span id="unn" class="lerror"><?php if(isset($_SESSION['unameError'])) echo $_SESSION['unameError']; ?></span>
          </div>
      </div>
      <div class="form-group">
          <label for="email" class="col-sm-3 control-label">Email* </label>
          <div class="col-sm-9">
              <input type="text" id="email" placeholder="Email" class="form-control" name= "email" value="<?php 
              if(!empty($_SESSION["email"])){ echo $_SESSION["email"]; } ?>" autocomplete="off">
              <span id="em" class="lerror"><?php if(isset($_SESSION['emailError'])) echo $_SESSION['emailError']; ?></span>
          </div>
      </div> 
       <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password*</label>
            <div class="col-sm-9">
            <input type="password" id="password" placeholder="Password" class="form-control" name="password">
           <span id="pass" class="perror"><?php if(isset($_SESSION['passError'])) echo $_SESSION['passError']; ?></span>
            </div>
      </div> 
       <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
            <div class="col-sm-9">
            <input type="password" id="con_password" placeholder="Password" class="form-control" name="con_password">
            <span id="passmes" class="cperror"><?php if(isset($_SESSION['cpassError'])) echo $_SESSION['cpassError']; ?></span>
            </div>
       </div>    
     <div class="form-group">
          <label for="contact" class="col-sm-3 control-label">Contact*</label>
          <div class="col-sm-9">
              <input type="text" id="contact" placeholder="Contact" class="form-control" name="contact"  value="<?php 
                if(!empty($_SESSION["contact"])){ echo $_SESSION["contact"]; } ?>" autocomplete="off">
              <span id="con"><?php if(isset($_SESSION['contactError'])) echo $_SESSION['contactError']; ?></span>
          </div>
     </div>

     <!-- /.form-group -->
      <div class="form-group">
          <div class="col-sm-9 col-sm-offset-3">
              <!-- <span class="help-block">*Required fields</span> -->
          </div>
      </div>
      
      <div class="col-sm-offset-3 col-sm-2 pull-left">
      <button type="submit" name="addstudent" value="submit" class="btn btn-primary">Submit</button>
      
      </div>
       <!-- <div class=" pull-left">
      <button type="submit" name="delete" value="submit" class="btn btn-primary">Profile Delete</button>
      </div> -->
      
    
  </form> <!-- /form -->

</div> <!-- ./container -->
    
<?php 



$_SESSION['success']='';
$_SESSION['error']='';
$_SESSION['pass']='';
$_SESSION['cpass']='';


/*if(isset($_POST['update']))
{
  echo 'test';
}*/
?>    
    
    
    
    
  <script type = "text/javascript">
   <!--
      // Form validation code will come here.
      
      $(document).on('keypress', '#firstName',function()
      {
       var fname = $('#firstName').val();
       var errormsg = 'valide'; 
       var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
      if(fname.length<3)
      {
         var errormsg = 'error';
        $('#fnn').html("<span style='color:red;'> firstname Invalid</span>");    console.log(errormsg);
       }
       else{
            $('#fnn').html("");
              console.log(errormsg);
            }
        if(!isNaN(fname)){
            var errormsg = 'error';
          $('#fnn').html("<span style='color:red;'> Please provide only alphabet name!</span>");   
           console.log(errormsg);
        }
        // else{
        //     $('#fnn').html("");
        //      }
        if(format.test(fname)){
            var errormsg = 'error';
        $('#fnn').html("<span style='color:red;'> special charecter not allowed</span>");   
         console.log(errormsg);
       }
          //    }else{
          //   $('#fnn').html("");
          // }


});

 $(document).on('keypress', '#lastName',function()
      {

       var lname = $('#lastName').val();
       var errormsg = 'valide'; 
       var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;

      if(lname.length<3)
            {
             var errormsg = 'error';
            $('#lnn').html("<span style='color:red;'> Last Name Invalid</span>");    console.log(errormsg);
       }else{
            $('#lnn').html("");
              console.log(errormsg);
            }if(!isNaN(lname)){
              var errormsg = 'error';
            $('#lnn').html("<span style='color:red;'> Please provide only alphabet name!</span>");   
             console.log(errormsg);
            }
          if(format.test(lname))
            {
                var errormsg = 'error';
            $('#lnn').html("<span style='color:red;'> special charecter not allowed</span>");   
             console.log(errormsg);

            }
});


     
 $(document).on('keypress', '#userName',function()
      {

       var uname = $('#userName').val();
       var errormsg = 'valide'; 
       var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;

      if(uname.length<3)
            {
             var errormsg = 'error';
            $('#unn').html("<span style='color:red;'> User Name Invalid</span>");    console.log(errormsg);
       }else{
            $('#unn').html("");
              //console.log(errormsg);
            }if(!isNaN(uname)){
              var errormsg = 'error';
            $('#unn').html("<span style='color:red;'> Please provide only alphabet name!</span>");   
             console.log(errormsg);
            }
          if(format.test(uname))
            {
                var errormsg = 'error';
            $('#unn').html("<span style='color:red;'> special charecter not allowed</span>");   
             console.log(errormsg);

            }
});
     
      $(document).on('keypress', '#email',function()
         {
           var em = $('#email').val();
           var errormsg = 'valide'; 
          var reEmail =/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!\.)){0,61}[a-zA-Z0-9]?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!$)){0,61}[a-zA-Z0-9]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/;

            if(!em.match(reEmail))  {
                var errormsg = 'error';
            $('#em').html("<span style='color:red;'> Email not validate</span>");   
             console.log(errormsg);

             }
             else{
            $('#em').html("");
              //console.log(errormsg);
            }
   

});



       $(document).ready(function(){
       $('#con_password').blur(function()
       {
       $pass = $('#password').val();
       $cpass = $('#con_password').val();
       
       if($pass==$cpass)
       {
        $('#passmes').html('<p style="color:green;">Password Match</p>');
       }else{
         $('#con_password').val('');
         $('#passmes').html('<p style="color:red;">Confirm Password Not Match</p>');
            }
        }); //console.log()
   });


      
      $(document).on('keypress', '#contact',function()
         {
           var conn = $('#contact').val();
           var errormsg = 'valide'; 
           var phoneno = /^[0-9]+$/;
           if(conn=="")
           {
               var errormsg = 'error';

                $('#con').html("<span style='color:red;'>Please provide contact no!</span>");   
                 console.log(errormsg);
             }else{
                   $('#con').html("");
                   console.log(errormsg);
                  }
         if(isNaN(conn))
                   {
                     var errormsg = 'error';
                    $('#con').html("<span style='color:red;'>Please provide only Numarial value!</span>");   
                     console.log(errormsg);
                    }
                    else{
                   $('#con').html("");
                   console.log(errormsg);
                          }
         if(!conn.match(phoneno)) 
                {
                  // alert("Invalid email address");
                   var errormsg = 'error';
                $('#con').html("<p style='color:red;'>phone no Invalid</p>");
                console.log(errormsg);
                }else{
                   $('#con').html("");
                   console.log(errormsg);

         if((conn.length < 9) || (conn.length > 9))
                {
                 var errormsg = 'error';
                  $('#con').html("<span style='color:red;'>Please provide 10 digit no.</span>");   
                   console.log(errormsg);
                }else{
                   $('#con').html("");
                   console.log(errormsg);
                          }
        if(!(conn.charAt(0)=="9" || conn.charAt(0)=="8"||conn.charAt(0)=="7"
          ||conn.charAt(0)=="6" ) )
                {
                 var errormsg = 'error';
                  $('#con').html("<span style='color:red;'>Mobile No. should be start with 9 or 8 or 7  or 6</span>");   
                   console.log(errormsg);
                }
              }
            
 });

</script>


<script type = "text/javascript">
   <!--
      function validateEmail(emailID) {
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.myForm.email.focus() ;
            return false;
         }
         return( true );
      }
   //-->
</script>

</div>
  <!-- /.row -->
</section>
<!-- /.content -->
</div>
<?php 
include 'footer.php';
?>
