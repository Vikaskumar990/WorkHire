     <section class="tr-banner section-before bg-image">
      <div class="container">
       <div class="banner-content text-center">
        <h2>Find the best Freelancers in their finest hour</h2>
        <h3>Getting a job done has never been easy.</h3>

        <form class="form-horizontal" action="<?=base_url();?>gowork/"> 
		 <div class="col-md-10 no-padd"> 
		  <div class="input-group"> 
		   <input type="text" placeholder="What do you need to get done?" name="name"class="form-control" />
		  </div>
		 </div>
		 <div class="col-md-2 no-padd"> 
		  <div class="input-group"> 
		   <button type="submit" class="kafe-btn kafe-btn-mint full-width">Let's Go!</button> 
		  </div>
		 </div>
		</form>
		
		<div class="row hidden-xs">
				 
		 <div class="col-lg-4 col-sm-6">
		  <div class="features">
			<span class="fa-stack fa-3x">
			 <i class="fa fa-circle fa-stack-2x"></i>
			 <i class="fa fa-clone fa-stack-1x fa-inverse"></i>
			</span><!-- /span -->
		  <p>Post your job for Free</p>
		  </div><!-- /.features -->
		 </div><!-- /.col-md-4 -->
				 
		 <div class="col-lg-4 col-sm-6">
		  <div class="features">
			<span class="fa-stack fa-3x">
			 <i class="fa fa-circle fa-stack-2x"></i>
			 <i class="fa fa-list-alt fa-stack-1x fa-inverse"></i>
			</span><!-- /span -->
		  <p>Get proposals in minutes</p>
		  </div><!-- /.features -->
		 </div><!-- /.col-md-4 -->
				 
		 <div class="col-lg-4 col-sm-6">
		  <div class="features">
			<span class="fa-stack fa-3x">
			 <i class="fa fa-circle fa-stack-2x"></i>
			 <i class="fa fa-users fa-stack-1x fa-inverse"></i>
			</span><!-- /span -->
		  <p>Choose your freelancer</p>
		  </div><!-- /.features -->
		 </div><!-- /.col-md-4 -->
		 
		</div><!-- /.row -->
		
       </div><!--/. banner-content -->
      </div><!-- /.container -->
     </section>		

	 <!-- ==============================================
	 Category Section
	 =============================================== -->
	 
     <div class="tr-category section-padding">
	  <div class="container">
	   <div class="section-title">
	    <h1>Browse Workhires By Category</h1>
	   </div>
	    <div class="row">	
		 <div class="category-list tr-list">
		 	<?php foreach($cat_return->result() as $cdata){
		 		
		 		?>
			  <div class="col-lg-3">
			   <div class="category-box">
				<a href="<?=base_url();?>gowork/?name=<?=$cdata->name;?>">
				 <span class="icon"><img src="<?=base_url()."Assets/CT_assets/img/".$cdata->icon;?>" height="100px"></span>
				 	
				 <span class="category-title"><?=$cdata->name;?></span>
				 	<span class="category-quantity">( <?php
				 	echo $this->db->query("select * from project_portal_tbl where category_id='$cdata->id'")->num_rows();
				 ?>
				)</span>
				</a>
			   </div><!-- category-box -->
			  </div><!-- col-lg-3 -->
			<?php }?>
				
		</div><!-- row -->
	   </div><!-- /.container -->
	  </div><!-- tr-category -->	 
	
	 <!-- ==============================================
	 Fun Fact Section
	 =============================================== -->
     <section class="tr-fun-fact">
	  <div class="container">
	   <div class="row text-center">
		<div class="col-sm-4">
		 <div class="fun-fact">
		  <i class="fa fa-users fa-3x"></i>
		  <h4 class="counter">
		  	
		  	 <?php
                $num_rows = $this->db->count_all_results('users');
                echo "$num_rows";
             ?>
		  </h4>
		  <span>Total Users</span>
		 </div>
		</div>
		<div class="col-sm-4">
		 <div class="fun-fact">
		  <i class="fa fa-file-text-o fa-3x"></i>
		  <h4 class="counter">
		  	
		  	<?php
                $num_rows = $this->db->count_all_results('project_portal_tbl');
                echo "$num_rows";
             ?>

		  </h4>
		  <span>Job Posts</span>
		 </div>
		</div>
		<div class="col-sm-4">
		 <div class="fun-fact">
		  <i class="fa fa-comments fa-3x"></i>
		  <h4 class="counter">
		  	<?php
                $num_rows = $this->db->count_all_results('feedback_tbl');
                echo "$num_rows";
             ?>

		  </h4>
		  <span>Feedbacks</span>
		 </div>
		</div>
	   </div><!-- /.row -->			
	  </div><!-- /.container -->
	 </section><!-- /.section -->	
	


	 <!-- ==============================================
	 contact Section
	 =============================================== -->

	 <section class="tr-fun-fact ">
	  <div class="container jumbotron">
	  	<h2 class="text-center">Contact Us</h2><br>
	  	<?=form_open(base_url()."ClientController/cont_ins");?>
		  <div class="row">

			<div class="col-sm-6 col-md-4 col-xs-12">
				
				<div class="cntact-information">
				<div class="module-body outer-top-xs">
				<ul class="toggle-footer">
				<li class="media">
				<div class="pull-left">
				<span class="icon fa-stack fa-lg">
				<i class="fa fa-circle fa-stack-2x"></i>
				<i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
				</span>
				</div>
				<div class="media-body">
				<p>WorkHire, India</p>
				</div>
				</li>

				<li class="media">
				<div class="pull-left">
				<span class="icon fa-stack fa-lg">
				<i class="fa fa-circle fa-stack-2x"></i>
				<i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
				</span>
				</div>
				<div class="media-body">
				<p>+91-9909406778<br></p>
				</div>
				</li>

				<li class="media">
				<div class="pull-left">
				<span class="icon fa-stack fa-lg">
				<i class="fa fa-circle fa-stack-2x"></i>
				<i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
				</span>
				</div>
				<div class="media-body">
				<span><a href="#">vikasrana990940@gmail.com</a></span>
				</div>
				</li>
				</ul>
				</div>

					
				</div>		
			</div>
			<div class="col-lg-6 col-md-4">
				<div class="form-group">
						<input type="text" name="name" class="form-control si_text" placeholder="Full Name">
				</div>		
				<div class="form-group">
				<input type="email" name="email" class="form-control si_text" placeholder="Email Address">
			</div>
			<div class="form-group">
				<input type="text" name="mobile_no" class="form-control si_text" placeholder="Moblile or Telephone">
			</div>
			<div class="form-group">
				<input type="text" name="subject" class="form-control si_text" placeholder="Subject">
			</div>
			<div class="form-group">
				<textarea name="message" class="form-control si_text" placeholder="Type your message here...."></textarea>
			</div>
			<div>
				<input type="submit" name="submit" value="Send" class="kafe-btn kafe-btn-mint-small pull-right">
			</div>
			</div>
		  </div><!-- /.row -->
		</form>			
	  </div><!-- /.container -->
	 </section><!-- /.section -->