
<?php

include 'header.php';
include 'sidebar.php';
?>
<?php
include('../dbcon.php');  

$id= $_GET['id'];
$qry="SELECT * FROM `teachers` WHERE  `id`='$id'";
//  $qry="SELECT * FROM `teachers`";
    $run=$con->query($qry);
        // while($row = mysqli_fetch_assoc($run))
         // print_r($row);die;
        


 

 ?>


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Teacher Details
      </h1>
      <h4><a href="listteacher.php"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</a></h4>
      <ol class="breadcrumb">
        <li><a href="admindash.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active"> Teachers View table</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tbody>
                  <?php 
                  if (mysqli_num_rows($run) > 0) {
                  // output data of each rowi
                   
                  while($row = mysqli_fetch_assoc($run)) {

        // print_r($row);die;
                  ?>

                <tr>
                  <th colspan="2"><span style="margin:250px;">Teacher Details </span></th>
                </tr>
                <tr>
                      <tr>
                        <th>Full Name</th>
                      <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
                    </tr>
                    <tr>
                      <th>Father Name</th>
                      <td><?php echo $row['father_name']; ?></td>
                    </tr>
                    <tr>
                      <th>User Name</th>
                      <td><?php echo $row['user_name']; ?></td>
                    </tr>
                    <tr>
                      <th>Education</th>
                      <td><?php echo $row['education']; ?></td>
                    </tr>
                    <tr>
                      <th>Staff Id</th>
                      <td><?php echo $row['staff_id']; ?></td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td><?php echo $row['email']; ?></td>
                    </tr>
                    <tr>
                      <th>Contact</th>
                      <td><?php echo $row['contact']; ?></td>
                    </tr>
                    <tr>
                      <th>Address</th>
                      <td><?php echo $row['address']; ?></td>
                    </tr>
                    <tr>
                      <th>Image</th>
                      <td><img height="100" width="100" src="<?php echo $site_url; ?>admin/teacher/<?php echo $row['image']; ?>"</td>
                    </tr>
                  <?php }}else{ ?> 
                    <tr><th></th>
                      <td colspan="7">Record not found</td></tr>
                  <?php } ?>
                </thead>
                
                  


                    
                </tbody>
              </table>
            </div>
          </div>
          </div>
          </div>
          <!-- /.box -->
        </section>
    </div>      




















