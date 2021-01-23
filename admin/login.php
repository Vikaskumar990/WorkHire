
<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/ubold_1.2/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Jan 2016 04:58:25 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?=base_url();?>Assets/AD_assets/images/favicon_1.ico">

        <title>WORKHIRE - Login</title>

        <link href="<?=base_url();?>Assets/AD_assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>Assets/AD_assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>Assets/AD_assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>Assets/AD_assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>Assets/AD_assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>Assets/AD_assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?=base_url();?>Assets/AD_assets/js/modernizr.min.js"></script>

<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-69506598-1', 'auto');
      ga('send', 'pageview');
</script>
        
    </head>
    <body>

        <div class="animationload">
            <div class="loader"></div>
        </div>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
        	<div class=" card-box">
            <div class="panel-heading"> 
                <h3 class="text-center"> Sign In to <strong class="text-custom">WorkHire</strong> </h3>
            </div> 


            <div class="panel-body">
            <form class="form-horizontal m-t-20" action="<?=$action;?>" method="post">
                <div class="form-group ">
                    <label>Email</label>
                    <div class="<?php $val=$this->input->get('value');if($val=="e"){ echo "has-error";}?>">
                        <input class="form-control " type="text" name="user" required="" placeholder="Email">
                    </div>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <div class="<?php if($val=="p"){ echo "has-error";}?>">
                        <input class="form-control" type="password" name="pass" required="" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <label>Select User</label>
                    <select class="form-control" name="use">
                        <option value="CL">Client</option>
                        <option value="AD">Admin</option>
                    </select>
                </div>
			    <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                    </div><br><br>
                    <h4>New user?<a href="<?=base_url()."register"?>">Create Account</a></h4>
                </div>
    </form> 
            
            </div>   
            </div>                              
            
        </div>
        
<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?=base_url();?>Assets/AD_assets/js/jquery.min.js"></script>
        <script src="<?=base_url();?>Assets/AD_assets/js/bootstrap.min.js"></script>
        <script src="<?=base_url();?>Assets/AD_assets/js/detect.js"></script>
        <script src="<?=base_url();?>Assets/AD_assets/js/fastclick.js"></script>
        <script src="<?=base_url();?>Assets/AD_assets/js/jquery.slimscroll.js"></script>
        <script src="<?=base_url();?>Assets/AD_assets/js/jquery.blockUI.js"></script>
        <script src="<?=base_url();?>Assets/AD_assets/js/waves.js"></script>
        <script src="<?=base_url();?>Assets/AD_assets/js/wow.min.js"></script>
        <script src="<?=base_url();?>Assets/AD_assets/js/jquery.nicescroll.js"></script>
        <script src="<?=base_url();?>Assets/AD_assets/js/jquery.scrollTo.min.js"></script>


        <script src="<?=base_url();?>Assets/AD_assets/js/jquery.core.js"></script>
        <script src="<?=base_url();?>Assets/AD_assets/js/jquery.app.js"></script>
	

        <script src="<?=base_url();?>Assets/AD_assets/js/swal.js"></script>

        



        <script type="text/javascript">
            <?php $value=$this->session->flashdata('value');
            if($value=="p"){?>
                swal("Not Valid","Your Password","error");
            <?php }elseif($value=="e"){?>
                swal("Not Valid","Your Email","error");
            <?php }?>

        </script>

        
	</body>

<!-- Mirrored from coderthemes.com/ubold_1.2/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Jan 2016 04:58:25 GMT -->
</html>