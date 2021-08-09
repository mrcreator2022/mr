
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
  <?php
   session_start();
   //print_r($_SESSION);

$msg = '';
//$nameError ='';
   //$_SESSION=array();

   
/*  
if(isset($_GET['st'])){
  $msg = '<p style="color:green;">Your profile successfully removed</p>';
}*/

if(isset($_SESSION['success']))
{
  if($_SESSION['success']!='')
  {
  
  $msg = '<div class="alert alert-success">'.$_SESSION['success'].'      </div>';
  }
  //'<p style="color:green;">'.$_SESSION['success'].'</p>';
}


if(isset($_SESSION['error1']))
{


  $msg = '<div class="alert alert-danger">'.$_SESSION['error1'].'      </div>';
  

  //'<p style="color:red;">'.$_SESSION['error'].'</p>';
}

if(isset($_SESSION['pass']))
{
  $msg = '<p style="color:red;">'.$_SESSION['pass'].'</p>';
}


if(isset($_SESSION['cpass']))
{
  $msg = '<div class="alert alert-danger">'.$_SESSION['cpass'].'      </div>';

  //'<p style="color:red;">'.$_SESSION['cpass'].'</p>';
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
   
              <form class="form-horizontal" role="form"name="myForm" action="regAction.php"  method="POST">
                    <h2 style="color:green;">Registration </h2>
                    <h3 align="center" ><small>
               <?php
                      if(isset($_SESSION['MSG']))
                   {
                      echo $_SESSION['MSG']; $_SESSION['MSG']='';
                   }
                      echo $msg; 
                 ?>

                     <!-- logout successfully -->
              <?php 
                   if(!empty($_GET['status']))
                    { 
                      echo '<div class="alert alert-success">
                        <strong>Success!</strong> You have been logged out!<a href="login.php"class="alert-link">login page!</a>.
                       </div>';
                    }
                  ?>
                            <!--  -->
                </h3></small>
                  <div class="form-group">
                      <label for="firstName" class="col-sm-3 control-label">First Name*</label>
                      <div class="col-sm-9">
                          <input type="text" id="firstName" placeholder="First Name" name="fname" class="form-control" value="<?php 
                          if(!empty($_SESSION["fname"])){ echo $_SESSION["fname"]; } ?>"  autofocus>
                         <span id="fnn" class="error"><?php if(isset($_SESSION['fnameError'])) echo $_SESSION['fnameError'];?></span>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="lastName" class="col-sm-3 control-label">Last Name*</label>
                      <div class="col-sm-9">
                          <input type="text" id="lastName" placeholder="Last Name" name="lname" class="form-control" value="<?php 
                          if(!empty($_SESSION["lname"])){ echo $_SESSION["lname"]; } ?>" autofocus>
                          <span id="lnn" class="lerror"><?php if(isset($_SESSION['lnameError'])) echo $_SESSION['lnameError']; ?></span>
                      </div>
                  </div>
  				 <div class="form-group">
                      <label for="userName" class="col-sm-3 control-label">Username* </label>
                      <div class="col-sm-9">
                          <input type="text" id="userName" placeholder="User Name" class="form-control" name= "username" value="<?php 
                          if(!empty($_SESSION["username"])){ echo $_SESSION["username"]; } ?>" autofocus>
                          <span id="unn" class="lerror"><?php if(isset($_SESSION['unameError'])) echo $_SESSION['unameError']; ?></span>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="email" class="col-sm-3 control-label">Email* </label>
                      <div class="col-sm-9">
                          <input type="text" id="email" placeholder="Email" class="form-control" name= "email" value="<?php 
                          if(!empty($_SESSION["email"])){ echo $_SESSION["email"]; } ?>">
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
                          <input type="text" id="contact" placeholder="Contact" class="form-control" name="contact" value="<?php 
                          if(!empty($_SESSION["contact"])){ echo $_SESSION["contact"]; } ?>">
                          <span id="con"><?php if(isset($_SESSION['contactError'])) echo $_SESSION['contactError']; ?></span>
                      </div>
                 </div>
                      <div class="col-sm-4">
       
                  </div> <!-- /.form-group -->
                  <div class="form-group">
                      <div class="col-sm-9 col-sm-offset-3">
                          <!-- <span class="help-block">*Required fields</span> -->
                      </div>
                  </div>
                  <div class="col-sm-6">
                  <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                 <div class="col-sm-6">
                  <button  class="btn btn-info btn-block"><a href="login.php">Sign in</a></button>
                </div>
              </form> <!-- /form -->
          </div> <!-- ./container -->
		
		
<?php 
$_SESSION['success']='';
$_SESSION['error']='';
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





    	/*		 (fname.length<3)
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




