 

 
 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $site_url; ?>admin/upload/<?php echo $img; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $fname; ?> <span><?php echo $lname; ?></span></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <?php
            $link = $_SERVER['PHP_SELF'];
            $link_array = explode('/',$link);
            $page = end($link_array);
      ?>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if($page=='admindash.php'){ echo 'active'; }?>">
          <a href="<?php echo $site_url; ?>admin/admindash.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li class="<?php if($page=='editprofile.php'){ echo 'active'; }?>">
          <a href="<?php echo $site_url; ?>admin/editprofile.php">
            <i class="fa fa-user-circle-o"></i> <span> Profile</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users ex-icon"></i> <span> TEACHER</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addteacher.php"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="listteacher.php"><i class="fa fa-circle-o"></i> All Teacher</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>More</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-child"></i> <span> STUDENTS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addstudent.php"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="liststudent.php"><i class="fa fa-circle-o"></i>All Students</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Library </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>LIBRARY</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="listbook.php"><i class="fa fa-book"></i> Book List</a></li>
            <li><a href="#"><i class="fa fa-child"></i>Students</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>more </a></li>
          </ul>
        </li>
        <li class="">
          <a href="calendar.php">
            <i class="fa fa-book"></i> <span>CALENDAR</span>
            <span class="">
              <i class=""></i>
            </span>
          </a>
          
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>