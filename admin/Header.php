<?php
  $session=$this->session->userdata('adwork');
?>


<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/ubold_1.2/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Jan 2016 04:51:19 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?=base_url();?>Assets/AD_assets/images/favicon_1.ico">

        <title>Admin</title>

        <link href="<?=base_url();?>Assets/AD_assets/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">

        <!-- DataTables -->
        <link href="<?=base_url();?>Assets/AD_assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>Assets/AD_assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>Assets/AD_assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>Assets/AD_assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>Assets/AD_assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />



        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="<?=base_url();?>Assets/AD_assets/plugins/morris/morris.css">

        <link href="<?=base_url();?>Assets/AD_assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>Assets/AD_assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>Assets/AD_assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>Assets/AD_assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>Assets/AD_assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>Assets/AD_assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="<?=base_url();?>Assets/AD_assets/js/modernizr.min.js"></script>

<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-69506598-1', 'auto');
      ga('send', 'pageview');
</script>


    </head>


    <body class="fixed-left">

        <div class="animationload">
            <div class="loader"></div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index-2.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Work<i class="md md-album"></i>Hire</span></a>
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

                            <!-- <form role="search" class="navbar-left app-search pull-left hidden-xs">
			                     <input type="text" placeholder="Search..." class="form-control">
			                     <a href="#"><i class="fa fa-search"></i></a>
			                </form> -->


                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="icon-bell"></i> <span class="badge badge-xs badge-danger"><?php
                                                $num_rows = $this->db->count_all_results('contact_us_tbl');
                                                echo "$num_rows";
                                            ?></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="notifi-title"><span class="label label-default pull-right">New <?php
                                                $num_rows = $this->db->count_all_results('contact_us_tbl');
                                                echo "$num_rows";
                                            ?></span>Notification</li>
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
                               
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?=base_url();?>Assets/AD_assets/images/users/<?=$session['image'];?>" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><i class="ti-user m-l-5"> </i><?=$session['Name'];
                                        ?></a></li>
                                        <li><i class="fa fa-envelope-o m-l-5"></i> <?=$session['Email'];?></li>
                                        
                                        <li><a href="<?=base_url();?>AdminController/logout"><i class="ti-power-off m-l-5"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
          