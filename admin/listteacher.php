<?php

include('header.php');
include('sidebar.php');
?>
 <?php
include('../dbcon.php');  
    
$qry="SELECT * FROM `teachers`";
          $run=$con->query($qry);

          /*$row=mysqli_fetch_assoc($run);
          print_r($row);die;*/
 ?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Teachers Staff List 
        <small><?php
                 if(isset($_SESSION['MSG']))
                   {
                      echo $_SESSION['MSG'];
                       $_SESSION['MSG']='';
                   }
                ?>
         </small> 
    
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">teacher staff table</li>
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
                <tr>
                  <th>Teacher Name</th>
                  <th>Father Name</th>
                  <th>Education</th>
                  <th>Staff Id</th>
                  <th>Image</th>
                  <th>Contact</th>
                  <th>Address</th>
                  <th  colspan="3" ><span style="margin:50px;">Action</span></th>
                 
                </tr>
                </thead>
                <tbody>
                  <?php 
                  if (mysqli_num_rows($run) > 0) {
                  // output data of each rowi
                  while($row = mysqli_fetch_assoc($run)) {
        
                  ?>
                    <tr>
                      <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
                      <td><?php echo $row['father_name']; ?></td>
                      <td><?php echo $row['education']; ?></td>
                      <td><?php echo $row['staff_id']; ?> </td>
                      <td ><img height="100" width="100" src="<?php echo $site_url; ?>admin/teacher/<?php echo $row['image']; ?>"</td>
                      <td><?php echo $row['contact']; ?></td>
                      <td><?php echo $row['address']; ?></td>
                      <td><a href="editteacher.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></td>
                      <td><a href="deleteteacher.php?del=<?php echo $row['id']; ?>" onclick="return confirm('You want to Delete profile?');"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></td>
                      <td><a href="teacherview.php?id=<?php echo $row['id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i>view</a></td>
                    </tr>
                  <?php }}else{ ?> 
                    <tr><td colspan="7">Record not found</td></tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          </div>
          </div>
          <!-- /.box -->
        </section>
    </div>      
  <?php
include'footer.php';
  ?>