 <!-- ==============================================
	 Frelance Post Section
	 =============================================== -->
     <section class="jobpost">	
      <div class="container">
	   <div class="row"> 
	   
        <div class="card-box-profile">
		  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
		   <?php foreach($pdata as $jobpost){?>
		  <div class="row bottom-sec">
		   <div class="col-lg-12">
		   <h3><?=$jobpost->project_name?></h3>
		   <h3>Language - <?=$jobpost->language?></h3>
		   <h4></h4>
			
			<div class="col-lg-12">
			 <hr class="small-hr">
			</div> 
			
			<div class="col-lg-2">
			 <h5> Posted </h5>
			 <p>4 Hours Ago</p>
			</div>
			<div class="col-lg-2">
			 <h5> Location </h5>
			 <p><i class="fa fa-map-marker"></i><?=$jobpost->location?></p>
			</div>
			<div class="col-lg-2">
			 <h5> Budget </h5>
			 <p><?=$jobpost->budget?></p>
			</div>
			<!-- <div class="col-lg-2">
			 <h5> Duration </h5>
			 <p>Not Sure</p>
			</div> -->
			<div class="col-lg-2">
			 <h5> Applicants </h5>
			 <p>15</p>
			</div>
			<div class="col-lg-2">
			 <a href="<?=base_url()."pricing"?>" class="kafe-btn kafe-btn-mint-small"><i class="fa fa-align-left"></i>Bid Now</a>
			</div>
			
		   </div><!-- /.col-lg-12 -->
		  </div><!-- /.row -->
		 	   <?php }?>
		  </div><!-- .col-lg-12 -->
		</div><!-- .card-box-profile --> 
		
       </div><!-- .row -->	  
      </div><!-- .container -->	
     </section>	

			
     <!-- ==============================================
	 Post Section
	 =============================================== -->
     <section class="profile-details">
	  <div class="container">
	   <div class="row">
	   
	    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
		  <div class="card-box-profile-details">
		 	
		   <div class="description-profile">
		   
		    <ul class="tr-list resume-info">			
		   
             <li>
			  <div class="icon">
			   <p class="tr-title"><i class="fa fa-black-tie" aria-hidden="true"></i> Job Description</p>
			  </div>  
			  <div class="media-body">
			   <p><?=$jobpost->discription?></p>
			  </div>
		     </li><!-- /.career-objective-->			
		   	
			 
            </ul><!-- /.ul -->			
			 
		   </div><!-- /.description-profile -->	
				
		</div><!-- .card-box-profile-details -->

	   		 
		
		
       </div><!-- .col-lg-9 -->
	   
	    <div class="col-lg-5 col-md-5 col-sm-8 col-xs-12">
		
		 <div class="stats">
		   <div class="row">
		     <h5>Requirements</h5>
		    <div class="col-sm-6">
			 <h6><?=$jobpost->experience?></h6>
			 <p class="bottom">Required Level</p>
			</div>
		    </div>
		</div><!-- .stats -->	
		
		 <!-- <div class="stats">
		   <div class="row">
		     <h5>Activity</h5>
		    <div class="col-sm-4">
			 <h6>3</h6>
			 <p class="bottom">Proposals</p>
			</div>
		    <div class="col-sm-4">
			 <h6>0</h6>
			 <p class="bottom">Interviewing</p>
			</div>
		    <div class="col-sm-4">
			 <h6>0</h6>
			 <p class="bottom">Hired</p>
			</div>
			 <p class="bottom"> Last viewed by client: <b> 3 days ago </b></p>
		   </div>
		</div> --><!-- .stats -->	
		
         <div class="card-box text-center">
		  <div class="clearfix"></div>
		  <div class="member-card">
		  
		   <div class="thumb-xl member-thumb m-b-10 center-block">
		   	<?php if($this->session->has_userdata('work'))
		   		{
		   			$userimg=$this->session->userdata('work')
		   	 ?>
		   	
		   	
		    <img src="<?=base_url();?>Assets/CT_assets/assets/img/users/<?=$userimg['image'];?>" class="img-circle img-thumbnail" alt="profile-image">
			<i class="fa fa-star member-star text-success" title="verified user"></i>
		   </div>
		<?php }else{}?>
			<h5></h5>
		   
		   <div class="row">
		    <div class="col-sm-6">
			 <h4 class="top">1</h4>
			 <p class="bottom">Jobs Posted</p>
			</div>
		    <div class="col-sm-6">
			 <h4 class="top">$0.00</h4>
			 <p class="bottom">Spent</p>
			</div>
		   </div>
		  
		  </div>
		 </div>
			
		
		
       </div><!-- .col-lg-3 -->
	   
      </div><!-- .row -->	  
	 </div><!-- .container -->
    </section>