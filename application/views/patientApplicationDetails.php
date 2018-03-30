<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>e-Healthcare : Your Application Status</title>
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

 <div class="content-wrapper">
    <!-- Con<section class="content-header">
     content Header (Page header) -->
    
    <section class="content-header">
      <h1>
        Your Application Status
      </h1>
        
     
    </section>
    <!-- Main content -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="treeview">
              <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>
            <li class="treeview">
            
              <a href="#">
                                <i class="fa fa-desktop"></i> <span>Scheme</span>
                            </a>
                            <ul class="treeview-menu">
                              <li class="active">
                                    <a href="<?php echo site_url('user/schemesList');?>"><i class="fa fa-list-ul"></i> Listing</a>
                              </li> 
                            </ul>
           
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
            <li class="treeview">
              <a href="<?php echo base_url(); ?>beneficiaries" >
                <i class="fa fa-upload"></i>
                <span>Beneficiaries</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>notification" >
                <i class="fa fa-bell-o"></i>
                <span>Notification</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table no-margin">                
                 
                  <thead>
                  <tr>
                    <th>Application Reference.</th>
                    <th>Patient Name</th>
                    <th>Availed For</th>
                    <th>Scheme Name</th>
                    <th>Hospital Name</th>  
                    <th>Status</th>                  
                    <th>Amount Credited</th>
                  </tr>
                  </thead>
                   <tbody>
                   
                    <tr>
                      <td><?php echo $result->application_reference ?></td>
                      <td><?php echo $result->patientName ?></td>
                      <td><?php echo $result->disease_name ?></td>
                      <td><?php echo $result->scheme_name ?></td>
                      <td><?php echo $result->hospital_name ?></td> 
                      <td><?php 
                        if($result->status = "approved")
                        {
                          ?>
                          <span class="label label-success">Approved</span>
                          <?php 
                        }
                        else if($result->status == "rejected")
                        {
                          ?>
                          <span class="label label-danger">Rejected</span>
                          <?php
                        }
                        else
                        {
                          ?>
                          <span class="label label-info">Pending</span>
                        <?php 
                        } ?></td> 
                      <td><?php echo $result->amount_credited ?></td>
                       
                     
                    </tr>
                                  
                  </tbody>
                 
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
           </div>
            <!-- /.box-footer -->
          </div>
        </section>
          <!-- /.box -->
        </div>
</div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  
<footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>e-Healthcare</b> 
        </div>
        <strong>Copyright &copy; 2018-2019 <a href="<?php echo base_url(); ?>">e-Healthcare</a>.</strong> All rights reserved.
    </footer>
    
    <!-- jQuery UI 1.11.2 -->
    <!-- <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script> -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/validation.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/fastclick.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/demo.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/moment.js"  type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.min.js"  type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/global.js"  type="text/javascript"></script>
    <script src="<?php echo base_url()?>js/ajaxfileupload.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/moment.min.js"  type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/select2.min.js"  type="text/javascript"></script>
    <script type="text/javascript">
        var windowURL = window.location.href;
        pageURL = windowURL.substring(0, windowURL.lastIndexOf('/'));
        var x= $('a[href="'+pageURL+'"]');
            x.addClass('active');
            x.parent().addClass('active');
        var y= $('a[href="'+windowURL+'"]');
            y.addClass('active');
            y.parent().addClass('active');
            $(document).ready(function() {
    $('.js-example-basic-multiple').select2({
    placeholder: "Select one"
});
});
    </script>
  </body>
</html>