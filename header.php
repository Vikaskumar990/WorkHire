<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themashabrand.com/templates/Kafe/Kafe-v4/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Feb 2019 08:27:54 GMT -->
<head>

	    <!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Work Hire</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Add your business website description here">
        <meta name="keywords" content="Add your, business, website, keywords, here">
        <meta name="author" content="Add your business, website, author here">
		
		<!-- ==============================================
		Favicons
		=============================================== --> 
		<link rel="icon" href="<?=base_url();?>Assets/CT_assets/assets/img/logo.jpg">
		<link rel="apple-touch-icon" href="<?=base_url();?>Assets/CT_assets/img/favicons/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url();?>Assets/CT_assets/img/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url();?>Assets/CT_assets/img/favicons/apple-touch-icon-114x114.png">
		
	    <!-- ===============		CSS ========================== -->
        <!-- Style-->
        <link type="text/css" href="<?=base_url();?>Assets/CT_assets/assets/css/style.css" rel="stylesheet" />
				
				 <!-- ==============================================
		CSS
		=============================================== -->
        <!-- Style-->
       
        <link type="text/css" href="<?=base_url();?>Assets/CT_assets/assets/css/login.css" rel="stylesheet" />
				
		
		<!-- ==============================================
		Feauture Detection
		=============================================== -->
		<script src="<?=base_url();?>Assets/CT_assets/assets/js/modernizr-custom.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->	
		<style>
			body {
				font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
				font-size: 14px;
				line-height: 3.428571;
				color: #333;
				background-color: #fff;
			}
			.si_text
			{
				    border: solid;
				    height: 50px;
				    border-radius: 0px;
			}
					</style>		
  </head>

  <body>

     <!-- ==============================================
     Navigation Section
     =============================================== -->  
     <header class="tr-header">
      <nav class="navbar navbar-default">
       <div class="container-fluid">
	    <div class="navbar-header">
		 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
		  <span class="sr-only">Toggle navigation</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		 </button>
		 <a class="navbar-brand" href="<?=base_url().""?>"">WorkHire</a>
		</div><!-- /.navbar-header -->
		<div class="navbar-left">
		 <div class="collapse navbar-collapse" id="navbar-collapse">
		  <ul class="nav navbar-nav">
		   <li><a href="<?=base_url()."gowork/?name=php"?>">Jobs</a></li>
		   <li><a href="<?=base_url()."hire"?>">Work</a></li>
		   <li><a href="<?=base_url()."how"?>">How it works</a></li>
		   <li><a href="#"id="feed" data-target="#modalfed" data-toggle="modal">Feedback</a></li>
		   <!-- <li><a href="<?=base_url()."contact"?>">Contact Us</a></li> -->
		  </ul>
		 </div>
		</div><!-- /.navbar-left -->
		<div class="navbar-right">                          
		 <ul class="nav navbar-nav">
		  <li><i class="fa fa-user"></i></li>
		  <?php if($this->session->has_userdata('work')){
		  	$data=$this->session->userdata('work');
		  	?>
		  	
		  	<li><a href="<?=base_url()."logout";?>">Logout</a></li>
		 	<li class="dropdown mega-avatar">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		   <span class="avatar w-32"><img src="<?=base_url();?>Assets/CT_assets/assets/img/users/<?=$data['image'];?>" class="img-resonsive img-circle" width="25" height="25" alt="..."></span>
		   <!-- hidden-xs hides the username on small devices so only the image appears. -->
		   <span>
				<?= $data['Email'];?>
		   </span>
		  </a>
		  
		  <?php }else{?>
		  <li><a href="<?=base_url()."login";?>">Sign In/ Register </a></li>
		  <?php }?>
		  <div class="dropdown-menu w dropdown-menu-scale pull-right">
		   <!-- <a class="dropdown-item" href="dashboard.html"><span>Dashboard</span></a> --> 
		   <a class="dropdown-item" href="<?=base_url()."dash"?>"><span>Profile</span></a> 
		   <!-- <a class="dropdown-item" href="editprofile.html"><span>Settings</span></a> 
		   <a class="dropdown-item" href="#">Sign out</a> -->
		  </div>
		 </li><!-- /navbar-item -->	
		 
		 </ul><!-- /.sign-in -->   
		 <a href="<?=base_url()."jobpost"?>" class="kafe-btn kafe-btn-mint-small">Post a Job</a>
		</div><!-- /.nav-right -->
       </div><!-- /.container -->
      </nav><!-- /.navbar -->
     </header><!-- Page Header -->   
	

	 <!-- ==============================================
	 Header Section
	 =============================================== -->	
