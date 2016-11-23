<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="<?=base_url();?>/public/assets/images/favicon_1.ico">

<?php

  if(!empty($meta))
  foreach($meta as $name=>$content){
    echo "\n\t\t";
    ?><meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" /><?php
  }
  echo "\n";

  foreach($css as $file){
    echo "\n\t\t";
    ?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
  } echo "\n\t";

?>
    
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?=base_url();?>public/assets/plugins/morris/morris.css">

    <link href="<?=base_url();?>public/assets/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url();?>public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>public/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>public/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>public/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>public/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>public/assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <script src="<?=base_url();?>public/assets/js/modernizr.min.js"></script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-69506598-1', 'auto');
          ga('send', 'pageview');
    </script>

</head>
<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">
   <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <div class="text-center">
                <a href="<?php echo site_url('admin');?>" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Ub<i class="md md-album"></i>ld</span></a>
            </div>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="">
                    <div class="pull-left">
                        <button class="button-menu-mobile open-left">
                            <i class="ion-navicon"></i>
                        </button>
                        <span class="clearfix"></span>
                    </div>


                    <ul class="nav navbar-nav navbar-right pull-right">
                        <li class="dropdown hidden-xs">
                            <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">3</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg">
                                <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                                <li class="list-group nicescroll notification-list">
                                   <!-- list item-->
                                   <a href="javascript:void(0);" class="list-group-item">
                                      <div class="media">
                                         <div class="pull-left p-r-10">
                                            <em class="fa fa-diamond fa-2x text-primary"></em>
                                         </div>
                                         <div class="media-body">
                                            <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                            <p class="m-0">
                                                <small>There are new settings available</small>
                                            </p>
                                         </div>
                                      </div>
                                   </a>

                                   <!-- list item-->
                                   <a href="javascript:void(0);" class="list-group-item">
                                      <div class="media">
                                         <div class="pull-left p-r-10">
                                            <em class="fa fa-cog fa-2x text-custom"></em>
                                         </div>
                                         <div class="media-body">
                                            <h5 class="media-heading">New settings</h5>
                                            <p class="m-0">
                                                <small>There are new settings available</small>
                                            </p>
                                         </div>
                                      </div>
                                   </a>

                                   <!-- list item-->
                                   <a href="javascript:void(0);" class="list-group-item">
                                      <div class="media">
                                         <div class="pull-left p-r-10">
                                            <em class="fa fa-bell-o fa-2x text-danger"></em>
                                         </div>
                                         <div class="media-body">
                                            <h5 class="media-heading">Updates</h5>
                                            <p class="m-0">
                                                <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                            </p>
                                         </div>
                                      </div>
                                   </a>

                                   <!-- list item-->
                                   <a href="javascript:void(0);" class="list-group-item">
                                      <div class="media">
                                         <div class="pull-left p-r-10">
                                            <em class="fa fa-user-plus fa-2x text-info"></em>
                                         </div>
                                         <div class="media-body">
                                            <h5 class="media-heading">New user registered</h5>
                                            <p class="m-0">
                                                <small>You have 10 unread messages</small>
                                            </p>
                                         </div>
                                      </div>
                                   </a>

                                   <!-- list item-->
                                   <a href="javascript:void(0);" class="list-group-item">
                                      <div class="media">
                                         <div class="pull-left p-r-10">
                                            <em class="fa fa-diamond fa-2x text-primary"></em>
                                         </div>
                                         <div class="media-body">
                                            <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                            <p class="m-0">
                                                <small>There are new settings available</small>
                                            </p>
                                         </div>
                                      </div>
                                   </a>

                                   <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                             <em class="fa fa-cog fa-2x text-custom"></em>
                                            </div>
                                            <div class="media-body">
                                              <h5 class="media-heading">New settings</h5>
                                              <p class="m-0">
                                                <small>There are new settings available</small>
                                            </p>
                                            </div>
                                      </div>
                                   </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="list-group-item text-right">
                                        <small class="font-600">See all notifications</small>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="hidden-xs">
                            <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                        </li>
                        <li class="hidden-xs">
                            <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="icon-settings"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?=base_url();?>public/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- ========== Left Sidebar Start ========== -->

    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <!--- Divider -->
            <div id="sidebar-menu">
                <ul>

                  <!-- <li class="text-muted menu-title">Navigation</li> -->

              <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect active"><i class="ti-home"></i> <span> Dashboard </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="http://localhost:2222/lucky-star-computer-php/" target="_new">View Page</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i> <span> Users </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo site_url('admin/user/viewuser');?>">Users List</a></li>
                            <li><a href="<?php echo site_url('admin/user/adduser');?>">Add Users</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-truck"></i> <span> Suppliers </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo site_url('admin/supplier/viewsupplier');?>">Suppliers List</a></li>
                            <li><a href="<?php echo site_url('admin/supplier/addsupplier');?>">Add Suppliers</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-pencil-alt"></i> <span> Categories </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo site_url('admin/viewcategory');?>">Categories List</a></li>
                            <li><a href="<?php echo site_url('admin/viewbrand');?>">Brands List</a></li>
                            <li><a href="<?php echo site_url('admin/addcategory');?>">Add New</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class=" ti-briefcase"></i> <span> Products </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo site_url('admin/viewproduct');?>">Products List</a></li>
                            <li><a href="<?php echo site_url('admin/addproduct');?>">Add Products</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-shopping-cart"></i> <span> Selling </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo site_url('admin/viewsell');?>">Selling List</a></li>
                            <li><a href="<?php echo site_url('admin/addsell');?>">Add Selling</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="<?php echo site_url('admin/sellhistory');?>" class="waves-effect"><i class=" ti-check-box"></i> <span> Sell History </span></a>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class=" ti-receipt"></i> <span> Invoices </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo site_url('admin/invoice');?>">Sale Invoice</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-settings"></i> <span> Settings </span> <span class="menu-arrow"></span></a>
                        <!--<ul class="list-unstyled">
                            <li><a href="<?php //echo site_url('admin/invoice');?>">Slider</a></li>
                        </ul>-->
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Left Sidebar End --> 

    <?php echo $output;?>

    <!-- footer -->
    <footer class="footer text-right">
        © 2016. All rights reserved.
    </footer>
    
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

</body>
  <script>
      var resizefunc = [];
  </script>

  <!-- jQuery  -->
  <script src="<?=base_url();?>/public/assets/js/jquery.min.js"></script>
  <script src="<?=base_url();?>/public/assets/js/bootstrap.min.js"></script>
  <script src="<?=base_url();?>/public/assets/js/detect.js"></script>
  <script src="<?=base_url();?>/public/assets/js/fastclick.js"></script>
  <script src="<?=base_url();?>/public/assets/js/jquery.slimscroll.js"></script>
  <script src="<?=base_url();?>/public/assets/js/jquery.blockUI.js"></script>
  <script src="<?=base_url();?>/public/assets/js/waves.js"></script>
  <script src="<?=base_url();?>/public/assets/js/wow.min.js"></script>
  <script src="<?=base_url();?>/public/assets/js/jquery.nicescroll.js"></script>
  <script src="<?=base_url();?>/public/assets/js/jquery.scrollTo.min.js"></script>

  <script src="<?=base_url();?>/public/assets/js/jquery.core.js"></script>
  <script src="<?=base_url();?>/public/assets/js/jquery.app.js"></script>

  <script src="<?=base_url();?>/public/assets/plugins/sweetalert/dist/sweetalert.min.js"></script>

  
<?php
  /** -- Copy from here -- */

  if(!empty($canonical))
  {
    echo "\n\t\t";
    ?><link rel="canonical" href="<?php echo $canonical?>" /><?php

  }
  echo "\n\t";

  foreach($js as $file){
      echo "\n\t\t";
      ?><script src="<?php echo $file; ?>"></script><?php
  } echo "\n\t";

  /** -- to here -- */
?>

</html>

<script>
    
</script>
