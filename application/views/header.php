<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SM System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>dist/css/AdminLTE.min.css">
  <!-- Material Design -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>dist/css/bootstrap-material-design.min.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>dist/css/ripples.min.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>dist/css/MaterialAdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>dist/css/skins/all-md-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url(); ?>index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">M<b>A</b>L</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">SM System</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="<?php echo base_url(); ?>#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="<?php echo base_url(); ?>#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="<?php echo base_url(); ?>#">
                      <div class="pull-left">
                        <img src="<?php echo base_url().'assets/'; ?>dist/img/user-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="<?php echo base_url(); ?>#">
                      <div class="pull-left">
                        <img src="<?php echo base_url().'assets/'; ?>dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>#">
                      <div class="pull-left">
                        <img src="<?php echo base_url().'assets/'; ?>dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="<?php echo base_url(); ?>#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="<?php echo base_url(); ?>#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="<?php echo base_url(); ?>#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="<?php echo base_url(); ?>#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="<?php echo base_url(); ?>#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="<?php echo base_url(); ?>#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="<?php echo base_url(); ?>#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="<?php echo base_url(); ?>#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="<?php echo base_url(); ?>#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="<?php echo base_url(); ?>#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="<?php echo base_url(); ?>#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url().'assets/'; ?>dist/img/user-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">User</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url().'assets/'; ?>dist/img/user-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  User - Post
                  <small>Member since Date</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="<?php echo base_url(); ?>#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="<?php echo base_url(); ?>#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="<?php echo base_url(); ?>#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url(); ?>#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <!-- <a href="<?php echo base_url(); ?>#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> -->
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url().'assets/'; ?>dist/img/user-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>User</p>
          <a href="<?php echo base_url(); ?>#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->      
      <!-- /.search form -->
	  
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
		<li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
		
        <li><a href="<?php echo base_url(); ?>"><i class="fa fa-star"></i>Birthday List</a></li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Administration</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Admin List</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Add Admin</a></li>            
          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-wrench"></i>
            <span>Setup</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>School Details</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Group / Class / Subject</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Class Sections</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Caste Categories</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Student Pick-Up Point</a></li>  
          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i>
            <span>Certificate</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Transfer Certificate</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Bonafied Certificate</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Character Certificate</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Experience Certificate</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Attempt Certificate</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Fees Notice</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Undertaking Letter</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Holiday Notice</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Eligibility Certificate</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Student Absentee Notice</a></li>  
			
          </ul>
        </li>
		
		
		<li><a href="<?php echo base_url(); ?>"><i class="fa fa-user"></i>Admission Form</a></li>
		
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Students</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Sections / Roll Numbers</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Search Student Record</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Update class record</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Search Boy-Girl Student</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Transferred student details</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Caste Categories wise details</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Age wise Student details</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Class wise student list</a></li>  
          </ul>
        </li>
		
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-inr"></i>
            <span>Fee Payment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Add Fee</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Fee Details</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Pay / Taken Fee</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Print Receipts</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Generate Student Fee Card</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Class wise Students Fee status</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Check Paid Fee List with date range</a></li>  			
          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Study Material</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Add Unit under Unit management</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Add Topics</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Add Tutorial</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Add Booklet</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Question Bank</a></li>
          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-user-circle-o"></i>
            <span>Staff</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Assign Teacher In-charge For Class</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Add Department</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Add Staff</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Complete Staff report</a></li>  			
          </ul>
        </li>
		
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-user-circle-o"></i>
            <span>Payroll Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Create Pay slip</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>SearchPay slip List</a></li>  			
          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-clock-o"></i>
            <span>Time table</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Student wise time table</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Staff wise time table</a></li>  			
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Check free staff details</a></li>  			
          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Examination</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Term wise Add Exam</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Create Exam for classes</a></li>  			
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Export exam details</a></li>  			
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Subject Wise Marks Search</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Student wise marks search</a></li>  			
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Student report card</a></li>  			
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Class wise report</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Academic Year wise report</a></li>  			
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Student Rank</a></li>  			
          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Attendance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Students wise Attendance</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Staff wise Attendance</a></li>  			
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Edit Students Attendance</a></li>  			
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Edit Staff Attendance</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Student wise report</a></li>  			
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Class wise Report</a></li>  			
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Staff wise Report</a></li>            
          </ul>
        </li>
		
		
		
		
		
		<!--
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url(); ?>pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url(); ?>#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url(); ?>#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url(); ?>#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url(); ?>#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url().'assets/'; ?>pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url().'assets/'; ?>pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url(); ?>#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url(); ?>#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="<?php echo base_url().'assets/'; ?>#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url().'assets/'; ?>#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="<?php echo base_url().'assets/'; ?>#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo base_url().'assets/'; ?>#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="<?php echo base_url().'assets/'; ?>#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="<?php echo base_url(); ?>#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url().'assets/'; ?>https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="<?php echo base_url().'assets/'; ?>#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="<?php echo base_url().'assets/'; ?>#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="<?php echo base_url().'assets/'; ?>#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
		
		  -->
	  
	  
      </ul>
	  
	
    </section>
    <!-- /.sidebar -->
  </aside>