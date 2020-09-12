<div id="modalfed" class="modal fade text-xs-left" role="dialog" aria-hiden="true">
	<div class="modal-dialog modal-xs">
		<?=form_open(base_url()."ClientController/feed_ins");?>
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title pull-left">Feedback</h4><br>
					<h5 class="pull-left">Enter your message</h5>
					<input type="text" name="message" class="form-control" id="feed">
					your feedbck will be benificial for our company,This feedback we will see on our website.
					<input type="submit" name="btn btn-success" id="feed" name="action" value="Submit" class="kafe-btn kafe-btn-mint-small pull-right">
				</div>
			</div>
		<?=form_close();?>
	</div>
</div>
 <!-- ==============================================
	 Footer Section
	 =============================================== -->
	 <footer class="footerWhite">

      <!-- COPY RIGHT -->
      <div class="clearfix copyRight">
       <div class="container">
        <div class="row">
         
		 <div class="col-xs-12">
          <div class="copyRightWrapper">
           <div class="row">
		   
            <div class="col-sm-5 col-sm-push-7 col-xs-12">
			 <ul class="list-inline socialLink">
			  <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			  <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
			  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			 </ul>
            </div><!-- /col-sm-5 -->
			
		    <div class="col-sm-7 col-sm-pull-6 col-xs-12">
			 <div class="copyRightText">
			  <p>Copyright © 2019. All Rights Reserved</p>
			 </div>
		    </div><!-- /col-sm-7 -->
		  
           </div><!-- /row -->
          </div><!-- /copyRightWrapper -->
         </div><!-- /col-xs-2 -->

        </div><!-- /row -->
       </div><!-- /container -->
      </div><!-- /copyRight -->
	  
    </footer>	

     <a id="scrollup">Scroll</a>

	 
	 <!-- ==============================================
	 Scripts
	 =============================================== -->
	 <script src="<?=base_url();?>Assets/CT_assets/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?=base_url();?>Assets/CT_assets/assets/js/bootstrap.min.js"></script>
	<script src="<?=base_url();?>Assets/CT_assets/assets/js/kafe.js"></script>
	<script src="<?=base_url();?>Assets/AD_assets/js/swal.js"></script>
	<script type="text/javascript">
		$("#pname").blur(function(){
			var pn=$("#pname").val();
			
			if(pn=="")
			{

				$(this).addClass("red");	
				$(this).removeClass("green");	
			}
			else
			{
				$(this).removeClass("red");
				$(this).addClass("green");		
			}
			
		});
		$("#lname").blur(function(){
			var ln=$("#lname").val();
			
			if(ln=="")
			{

				$(this).addClass("red");	
				$(this).removeClass("green");	
			}
			else
			{
				$(this).removeClass("red");
				$(this).addClass("green");		
			}
			
		});
		$("#cname").blur(function(){
			var cn=$("#cname").val();
			
			if(cn=="")
			{

				$(this).addClass("red");	
				$(this).removeClass("green");	
			}
			else
			{
				
				$(this).removeClass("red");
				$(this).addClass("green");		
			}
		});
		$("#exp").blur(function(){
			var ex=$("#exp").val();
			
			if(ex=="")
			{

				$(this).addClass("red");	
				$(this).removeClass("green");	
			}
			else
			{
				$(this).removeClass("red");
				$(this).addClass("green");		
			}
		});
		$("#bgt").blur(function(){
			var bg=$("#bgt").val();
			
			if(bg=="")
			{

				$(this).addClass("red");	
				$(this).removeClass("green");	
			}
			else
			{
				$(this).removeClass("red");
				$(this).addClass("green");		
			}
		});
		$("#strt").blur(function(){
			var st=$("#strt").val();
			
			if(st=="")
			{

				$(this).addClass("red");	
				$(this).removeClass("green");	
			}
			else
			{
				$(this).removeClass("red");
				$(this).addClass("green");		
			}	
		});
		$("#vld").blur(function(){
			var vd=$("#vld").val();
			
			if(vd=="")
			{

				$(this).addClass("red");	
				$(this).removeClass("green");	
			}
			else
			{
				$(this).removeClass("red");
				$(this).addClass("green");		
			}
		});
		$("#loc").blur(function(){
			var lc=$("#loc").val();
			
			if(lc=="")
			{

				$(this).addClass("red");	
				$(this).removeClass("green");	
			}
			else
			{
				$(this).removeClass("red");
				$(this).addClass("green");		
			}	
		});
		$("#disc").blur(function(){
			var dc=$("#disc").val();
			
			if(dc=="")
			{

				$(this).addClass("red");	
				$(this).removeClass("green");	
			}
			else
			{
				$(this).removeClass("red");
				$(this).addClass("green");		
			}
			
		});
		$("#name").blur(function(){
			var nm=$("#name").val();
			
			if(nm=="")
			{

				$(this).addClass("red");	
				$(this).removeClass("green");	
			}
			else
			{
				$(this).removeClass("red");
				$(this).addClass("green");		
			}
			
		});
		

		<?php $value=$this->session->flashdata('value');
		if($value=="p"){?>
			swal("Not Valid","Your Password","error");
		<?php }elseif($value=="e"){?>
			swal("Not Valid","Your Email","error");
		<?php }elseif($value=="login"){?>
			swal("Welcome","login Successfully","success");
		<?php }elseif($value=="ca"){?>
			swal("Successfully","Your account was created","success");
		<?php }elseif($value=="lc"){?>
			swal("Login First","You have not login","error");
		<?php }elseif($value=="apply_job"){?>
			swal("Apply Successfully","Your Request is submited","success");
		<?php }elseif($this->session->flashdata('uper')!=""){?>
			swal("Uploading CV","<?= $this->session->flashdata('uper');?>","error");
		<?php }elseif($value=="feed_ins"){?>
			swal("Thanks","For Your Feedback","success");
		<?php }elseif($value=="pricing_ins"){?>
			swal("Thanks","For bid","success");
		<?php }?>		
	</script>
  </body>

<!-- Mirrored from themashabrand.com/templates/Kafe/Kafe-v4/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Feb 2019 08:27:54 GMT -->
</html>