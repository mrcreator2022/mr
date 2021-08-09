
<?php

include 'header.php';
include 'sidebar.php';
?>
<?php
include('../dbcon.php');  

$id= $_GET['id'];
//print_r($id);die;
$qry="SELECT * FROM `books` WHERE  `id`='$id'";
//  $qry="SELECT * FROM `teachers`";
    $run=$con->query($qry);
        // while($row = mysqli_fetch_assoc($run))
        // print_r($row);die;
        


 

 ?>


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Book Details
      </h1>
      <h4><a href="listbook.php"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</a></h4>
      <ol class="breadcrumb">
        <li><a href="admindash.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Table</a></li>
        <li class="active">Book View table</li>
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

         //print_r($row);die;
                  ?>

                <tr>
                  <th colspan="2"><span style="margin:250px;">Book Details </span></th>
                </tr>
                <tr>
                      <tr>
                        <th>Book Name</th>
                      <td><?php echo $row['name']; ?></td>
                    </tr>
                    <tr>
                      <th>Book Author</th>
                      <td><?php echo $row['book_author']; ?></td>
                    </tr>
                    <tr>
                      <th>Quantity</th>
                      <td><?php echo $row['quantity']; ?></td>
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




















