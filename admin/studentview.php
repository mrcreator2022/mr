
<?php

include 'header.php';
include 'sidebar.php';
?>
<?php
include('../dbcon.php');  

$id= $_GET['id'];
//print_r($id);die;
$qry="SELECT * FROM `students` WHERE  `id`='$id'";
//  $qry="SELECT * FROM `teachers`";
    $run=$con->query($qry);
        // while($row = mysqli_fetch_assoc($run))
        // print_r($row);die;
        


 

 ?>


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student Details
      </h1>
      <h4><a href="liststudent.php"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</a></h4>
      <ol class="breadcrumb">
        <li><a href="admindash.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Table</a></li>
        <li class="active">Student View table</li>
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
                  <th colspan="2"><span style="margin:250px;">Student Details </span></th>
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
                      <th>Standard</th>
                      <td><?php echo $row['standard']; ?></td>
                    </tr>
                    <tr>
                      <th>Roll No</th>
                      <td><?php echo $row['rollno']; ?></td>
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
                      <td><img height="100" width="100" src="<?php echo $site_url; ?>admin/upload/<?php echo $row['image']; ?>"</td>
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




















