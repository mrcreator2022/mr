<?php

include('header.php');
include('sidebar.php');
?>
 <?php
include('../dbcon.php');  
    
$qry="SELECT * FROM `students`";
          $run=$con->query($qry);
 ?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Library 
        <small>
          <?php
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
        <li class="active">Library tables</li>
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
                  <th>Student Name</th>
                  <th>Father Name</th>
                  <th>Student Id</th>
                  <th>Action</th>
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
                      <td><?php echo $row['id']; ?></td> 
                      <td><a href="editstudent?id=<?php echo $row['id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i>View</a></td>
                     
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