<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-datetimepicker.min.css" type="text/css">
    <link href="<?php echo base_url(); ?>assets/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <style>
    	.error{
    		color:red;
    		font-weight: normal;
    	}
    </style>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>CI</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>e-Healthcare</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                  <i class="fa fa-history"></i>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"> Last Login : <i class="fa fa-clock-o"></i> <?= empty($last_login) ? "First Time Login" : $last_login; ?></li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $name; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $name; ?>
                      <small><?php echo $role_text; ?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>loadChangePass" class="btn btn-default btn-flat"><i class="fa fa-key"></i> Change Password</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="treeview">
              <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>analytics">
                <i class="fa fa-area-chart"></i><span>Analytics</span>
              </a>
            </li>
            <?php
            if($role == ROLE_ADMIN)
            {
            ?>
            <li>
            <a href="#">
            <i class="fa fa-desktop"></i> <span>Scheme</span>
            </a>
            <ul class="treeview-menu">
                <li class="active">
                   <a href="<?php echo site_url('scheme/add');?>"><i class="fa fa-plus"></i> Add</a>
                </li>
                <li>
                   <a href="<?php echo site_url('scheme/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                </li>
              </ul>
            </li>
            <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Scheme Type</span>
                            </a>
                            <ul class="treeview-menu">
                <li class="active">
                                    <a href="<?php echo site_url('scheme_type/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                <li>
                                    <a href="<?php echo site_url('scheme_type/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
              </ul>
                        </li>
            <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>District</span>
                            </a>
                            <ul class="treeview-menu">
                <li class="active">
                                    <a href="<?php echo site_url('district/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                <li>
                                    <a href="<?php echo site_url('district/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
              </ul>
                        </li>
            <?php
            }
            ?>
            <li class="treeview">
              <?php
            if($role == ROLE_HOSPITAL)
            {
            ?>
              <a href="#">
                                <i class="fa fa-desktop"></i> <span>Scheme</span>
                            </a>
                            <ul class="treeview-menu">
                              <li class="active">
                                    <a href="<?php echo site_url('user/schemesList');?>"><i class="fa fa-list-ul"></i> Listing</a>
                              </li> 
                            </ul>
            <?php
            }
            ?>

            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-ticket"></i>
                <span>Programmes</span>
              </a>
            </li>
             <li class="treeview">
               <a href="<?php echo base_url(); ?>profileupdate">
                <i class="fa fa-user"></i>
                <span>Profile</span>
              </a>
            </li>
            <?php
            if($role == ROLE_HOSPITAL || $role == ROLE_ORGANIZATION)
            {
            ?>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>requests" >
                <i class="fa fa-thumb-tack"></i>
                <span>Requests</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>beneficiaries" >
                <i class="fa fa-upload"></i>
                <span>Beneficiaries</span>
              </a>
            </li>
            <?php
            }
            if($role == ROLE_ADMIN)
            {
            ?>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>userListing">
                <i class="fa fa-users"></i>
                <span>Users</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>/reports" >
                <i class="fa fa-files-o"></i>
                <span>Reports</span>
              </a>
            </li>
            <?php
            }
            if($role == ROLE_STATE_ADMIN || $role == ROLE_DISTRICT_ADMIN)
            {
            ?>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>beneficiaries" >
                <i class="fa fa-upload"></i>
                <span>Beneficiaries</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>reports">
                <i class="fa fa-files-o"></i>
                <span>Reports</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>approve/1/1/show" >
                <i class="glyphicon glyphicon-ok"></i>
                <span>Approval</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>notification" >
                <i class="fa fa-bell-o"></i>
                <span>Notification</span>
                <span class="label label-primary pull-right">12</span>
              </a>
            </li>
            <?php
          }
          ?>
           <li>
                <?php if (!$this->session->userdata('site_lang') == 'english'): ?>
                <a href="#">
                    <?php else: ?>
                    <a href="<?= base_url("LanguageSwitcher/switchLang/english") ?>">
                        <?php endif; ?>
                        <i class="fa fa-language"></i> <span>English</span>
                        <span class="pull-right-container"></span>
                        <?php if ($this->session->userdata('site_lang') == 'english'): ?>
                            <i class="fa fa-check pull-right" style="color: green"></i>
                        <?php endif; ?>
                    </a>
            </li>
            <li>
                <?php if ($this->session->userdata('site_lang') == 'hindi'): ?>
                <a href="#">
                    <?php else: ?>
                    <a href="<?= base_url("LanguageSwitcher/switchLang/hindi") ?>">
                        <?php endif; ?>
                        <i class="fa fa-language"></i> <span> हिंदी - (Hindi) </span>
                        <span class="pull-right-container"></span>
                        <?php if ($this->session->userdata('site_lang') == 'hindi'): ?>
                            <i class="fa fa-check pull-right" style="color: green"></i>
                        <?php endif; ?>
                    </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>