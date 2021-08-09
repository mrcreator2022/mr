<?php

include('header.php');
include('sidebar.php');
?>
 <?php
include('../dbcon.php');  
    
$qry="SELECT * FROM `books`";
          $run=$con->query($qry);


          //$row=mysqli_fetch_assoc($run);


          //print_r($row);
 ?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Books Lists 
        <small><?php
                 if(isset($_SESSION['MSG']))
                   {
                      echo $_SESSION['MSG'];
                       $_SESSION['MSG']='';
                   }
                ?>
         </small> 
    
      </h1>

      <h4><a href="addbook.php"><i class="fa fa-plus" aria-hidden="true"></i> Add Book</a></h4>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">book list table</li>
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
                  <th>Book Name</th>
                  <th>Book authore</th>
                  <th>Quantity</th>
                  <th  colspan="3" ><span style="margin:130px;">Action</span></th>
                </tr>
                </thead>
                <tbody>
                  <?php 

                 /* $row = mysqli_fetch_assoc($run)
                  print_r($row);die;*/
                  if (mysqli_num_rows($run) > 0) {
                  // output data of each rowi

                  while($row = mysqli_fetch_assoc($run)) {
                   //print_r($row);die;
                  ?>
                    <tr>
                      <td><?php echo $row['name'] ?></td>
                      <td><?php echo $row['book_author']; ?></td>
                      <td><?php echo $row['quantity']; ?> </td>
                      <td><a href="editbook.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></td>
                      <td><a href="deletebook.php?del=<?php echo $row['id']; ?>" onclick="return confirm('You want to Delete profile?');"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></td>
                      <td><a href="bookview.php?id=<?php echo $row['id']; ?>"<i class="fa fa-eye" aria-hidden="true"></i>view</a></td>
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