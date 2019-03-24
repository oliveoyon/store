<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GIZ-RoL Store Management</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="<?=base_url('assets/dashboard/img/favicon.ico');?>" />
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/bootstrap-select.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/bootstrap-datepicker.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/_all-skins.min.css">

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
    <a href="<?=site_url('dashboard');?>" class="logo" style="background-color:white">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini" style="color:red;"><b>g</b>iz</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img width="180" src="<?=base_url('assets/dashboard/img/giz-logo.gif');?>" /></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      
      
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url();?>assets/dashboard/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
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
      <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Category Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('dashboard/add_category');?>"><i class="fa fa-circle-o"></i> Add Category</a></li>
            <li><a href="<?=site_url('dashboard/view_category');?>"><i class="fa fa-circle-o"></i> View Category</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Unit Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('dashboard/add_unit');?>"><i class="fa fa-circle-o"></i> Add Unit</a></li>
            <li><a href="<?=site_url('dashboard/view_unit');?>"><i class="fa fa-circle-o"></i> View Unit</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Store Room Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('dashboard/add_store');?>"><i class="fa fa-circle-o"></i> Add Store Room</a></li>
            <li><a href="<?=site_url('dashboard/view_store');?>"><i class="fa fa-circle-o"></i> View Store Room</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Vendor Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('dashboard/add_vendor');?>"><i class="fa fa-circle-o"></i> Add Vendor</a></li>
            <li><a href="<?=site_url('dashboard/view_vendor');?>"><i class="fa fa-circle-o"></i> View Vendor</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Product Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('dashboard/add_product');?>"><i class="fa fa-circle-o"></i> Add Product</a></li>
            <li><a href="<?=site_url('dashboard/view_product');?>"><i class="fa fa-circle-o"></i> View Product</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Purchase Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('dashboard/new_purchase');?>"><i class="fa fa-circle-o"></i> New Purchase</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Recipient Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('dashboard/add_recipient');?>"><i class="fa fa-circle-o"></i> Add Recipient</a></li>
            <li><a href="<?=site_url('dashboard/view_recipient');?>"><i class="fa fa-circle-o"></i> View Recipient</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Issue Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('dashboard/issue_product');?>"><i class="fa fa-circle-o"></i> Issue Product</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('dashboard/view_product');?>"><i class="fa fa-circle-o"></i> View All Product</a></li>
            <li><a href="<?=site_url('report/min_stock_report');?>"><i class="fa fa-circle-o"></i> Minimum Stock Report</a></li>
            <li><a href="<?=site_url('report/cat_wise_min_stock');?>"><i class="fa fa-circle-o"></i> Category Wise Stock</a></li>
            <li><a href="<?=site_url('report/product_issue_report');?>"><i class="fa fa-circle-o"></i> Product Issue Report</a></li>
            <li><a href="<?=site_url('dashboard/issue_product');?>"><i class="fa fa-circle-o"></i> Cost Compirison Report</a></li>
            <li><a href="<?=site_url('report/recipient_report');?>"><i class="fa fa-circle-o"></i> Recipient Wise Report</a></li>
            <li><a href="<?=site_url('report/recipient_wise_report');?>"><i class="fa fa-circle-o"></i> Recipient Wise Report (Advance)</a></li>
          </ul>
        </li>
        <li><a href="<?=site_url('dashboard/logout');?>"><i class="fa fa-lock"></i> Logout</a></li>


        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">