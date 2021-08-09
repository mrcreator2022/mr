<?php
include 'header.php';
include 'sidebar.php';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Update Profile
  </h1>
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
$id = $_SESSION['uid'];
$qry="SELECT * FROM `students` WHERE  `id`='$id'";
    $run=mysqli_query($con,$qry);
    //echo mysqli_num_rows($run);die;
    $row=mysqli_fetch_row($run);
    //print_r($row);
?>
<form action="upAction.php" role="form" name="myForm"   method="POST" enctype="multipart/form-data">
      <h3 class="text-center"><?php echo $msg; ?></h3>
      <div class="form-group">
          <label for="firstName" class="col-sm-3 control-label">First Name*</label>
          <div class="col-sm-9">
              <input type="text" id="firstName" placeholder="First Name" name="fname" class="form-control" value="<?php if($row[1]!=''){ echo $row[1]; }else{
              if(!empty($_SESSION["fname"])){ echo $_SESSION["fname"]; }} ?>"  autofocus autocomplete="off">
             <span id="fnn" class="error"><?php if(isset($_SESSION['fnameError'])) echo $_SESSION['fnameError'];?></span>
          </div>
      </div>
      <div class="form-group">
          <label for="lastName" class="col-sm-3 control-label">Last Name*</label>
          <div class="col-sm-9">
              <input type="text" id="lastName" placeholder="Last Name" name="lname" class="form-control" value="<?php if($row[2]!=''){ echo $row[2]; }else
              if(!empty($_SESSION["lname"])){ echo $_SESSION["lname"]; } ?>" autofocus autocomplete="off">
              <span id="lnn" class="lerror"><?php if(isset($_SESSION['lnameError'])) echo $_SESSION['lnameError']; ?></span>
          </div>
      </div>
      <div class="form-group">
          <label for="fathername" class="col-sm-3 control-label">Father Name*</label>
          <div class="col-sm-9">
              <input type="text" id="fathername" placeholder="fathername" name="fathername" class="form-control" value="<?php if($row[3]!=''){ echo $row[3]; }else
              if(!empty($_SESSION["fathername"])){ echo $_SESSION["fathername"]; } ?>" autofocus autocomplete="off">
              <span id="fathername" class="firstname"><?php if(isset($_SESSION['fathernameError'])) echo $_SESSION['fathernameError']; ?></span>
          </div>
      </div>
      <div class="form-group">
          <label for="userName" class="col-sm-3 control-label">Username* </label>
          <div class="col-sm-9">
              <input type="text" id="userName" placeholder="User Name" class="form-control" name= "username" value="<?php if($row[4]!=''){ echo $row[4]; }else
              if(!empty($_SESSION["username"])){ echo $_SESSION["username"]; } ?>" autofocus autocomplete="off">
              <span id="unn" class="lerror"><?php if(isset($_SESSION['unameError'])) echo $_SESSION['unameError']; ?></span>
          </div>
      </div>
      <div class="form-group">
          <label for="standard" class="col-sm-3 control-label">Standard* </label>
          <div class="col-sm-9">
              <input type="text" id="standard" placeholder="standard" class="form-control" name= "standard" value="<?php if($row[5]!=''){ echo $row[5]; }else
              if(!empty($_SESSION["standard"])){ echo $_SESSION["standard"]; } ?>" autofocus autocomplete="off">
              <span id="standard" class="standarderror"><?php if(isset($_SESSION['standardError'])) echo $_SESSION['standardError']; ?></span>
          </div>
      </div>
      <div class="form-group">
          <label for="rollno" class="col-sm-3 control-label">Roll No* </label>
          <div class="col-sm-9">
              <input type="text" id="rollno" placeholder="rollno" class="form-control" name= "rollno" value="<?php if($row[6]!=''){ echo $row[6]; }else
              if(!empty($_SESSION["rollno"])){ echo $_SESSION["rollno"]; } ?>" autofocus autocomplete="off">
              <span id="rollno" class="rollnoerror"><?php if(isset($_SESSION['rollnoError'])) echo $_SESSION['rollnoError']; ?></span>
          </div>
      </div>
      <div class="form-group">
          <label for="email" class="col-sm-3 control-label">Email* </label>
          <div class="col-sm-9">
              <input type="text" id="email" placeholder="Email" class="form-control" name= "email" value="<?php if($row[7]!=''){ echo $row[7]; }else
              if(!empty($_SESSION["email"])){ echo $_SESSION["email"]; } ?>" autocomplete="off">
              <span id="em" class="lerror"><?php if(isset($_SESSION['emailError'])) echo $_SESSION['emailError']; ?></span>
          </div>
      </div>     
     <div class="form-group">
          <label for="contact" class="col-sm-3 control-label">Contact*</label>
          <div class="col-sm-9">
              <input type="text" id="contact" placeholder="Contact" class="form-control" name="contact" value="<?php if($row[10]!=''){ echo $row[10]; }else
              if(!empty($_SESSION["contact"])){ echo $_SESSION["contact"]; } ?>" autocomplete="off">
              <span id="con"><?php if(isset($_SESSION['contactError'])) echo $_SESSION['contactError']; ?></span>
          </div>
     </div>
     <div class="form-group">
          <label for="address" class="col-sm-3 control-label">Address*</label>
          <div class="col-sm-9">
              <input type="text" id="address" placeholder="address" class="form-control" name="address" value="<?php if($row[11]!=''){ echo $row[11]; }else
              if(!empty($_SESSION["address"])){ echo $_SESSION["address"]; } ?>" autocomplete="off">
              <span id="address"><?php if(isset($_SESSION['addressError'])) echo $_SESSION['addressError']; ?></span>
          </div>
     </div>
     <div class="form-group">
          <label for="image" class="col-sm-3 control-label">Image*</label>
          <div class="col-sm-9">
              <input type="file" id="image" class="form-control" name="image" autocomplete="off">
              <span id="image"><?php if(isset($_SESSION['imageError'])) echo $_SESSION['imageError']; ?></span>
          </div>
     </div>

     <!-- /.form-group -->
      <div class="form-group">
          <div class="col-sm-9 col-sm-offset-3">
              <!-- <span class="help-block">*Required fields</span> -->
          </div>
      </div>
      
      <div class="col-sm-offset-3 col-sm-2 pull-left">
      <button type="submit" name="update" value="submit" class="btn btn-primary">Update</button>
      
      </div>
       <!-- <div class=" pull-left">
      <button type="submit" name="delete" value="submit" class="btn btn-primary">Profile Delete</button>
      </div> -->
      
    
  </form> <!-- /form -->

</div> <!-- ./container -->
    
<?php 



$_SESSION['success']='';
$_SESSION['error']='';

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
    




     // console.log(fname.length); 
      /*});
      function validate() {
      
         if( document.myForm.fname.value == "" ) {
            alert( "Please provide your first name!" );
            document.myForm.fname.focus() ;
            return false;
         }else
         {
           var fname = document.myForm.fname.value;
           consol.log(fname); return false;}
         }
         if(!isNaN(fname))
         {

         }*/





      /*     (fname.length<3)
           {
             alert( "Please provide valid name length more then 3 charecter!" );
             
            document.myForm.fname.focus() ;
            return false;
           }
           if(!isNaN(fname)){
             alert( "Please provide only alphabet name!" );
            document.myForm.fname.focus() ;
            return false;
           }
           return true;
     }
     if( document.myForm.lname.value == "" ) {
            alert( "Please provide your last name!" );
            document.myForm.lname.focus() ;
            return false;
         }
     
     if( document.myForm.username.value == "" ) {
            alert( "Please provide your user name!" );
            document.myForm.username.focus() ;
            return false;
         }
     
         if( document.myForm.email.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
         }else
     {
       validateEmail(document.myForm.email.value);
     }
         if( document.myForm.Zip.value == "" || isNaN( document.myForm.Zip.value ) ||
            document.myForm.Zip.value.length != 5 ) {
            
            alert( "Please provide a zip in the format #####." );
            document.myForm.Zip.focus() ;
            return false;
         }
         if( document.myForm.Country.value == "-1" ) {
            alert( "Please provide your country!" );
            return false;
         }
         return( true );
      }*/
   //-->
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
<!-- /.content-wrapper -->

<?php 
include 'footer.php';
?>

