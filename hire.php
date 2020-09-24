 <!-- ==============================================
	 Feautured Car Section
	 =============================================== -->
     <section class="featured-users">	
      <div class="container">
			<div class="section-title" style="padding-top: 20px;">
				<h1>Jobs</h1>
			</div>

	  <div class="row"> 
      <div class="col-lg-9">	
	<?php foreach($pdata as $jobpost){?>
	   <div class="work">
	   
		 <div class="job">	
		  
		  <div class="row top-sec">
		   <div class="col-lg-12">
			<div class="col-lg-12 col-xs-12"> 
			 <h4><a href="pagename/<?=$jobpost->title?>"><?=$jobpost->title?></a></h4>
			 <h5><?=$this->input->get('name');?></h5>
			 <h6><?=$jobpost->hours_per_week?> hours per week</h6>
			 <p><small>valid upto date</small></p>


			</div><!-- /.col-lg-10 -->
		   </div><!-- /.col-lg-12 -->
		  </div><!-- /.row -->
		  
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

		  
		  	<div class="row bottom-sec">
			   	<div class="col-lg-12">
				
				<div class="col-lg-12">
				 <hr class="small-hr">
				 
				</div> 
				
				<div class="col-lg-6">
				 <div class="pull-left">
				  <a href="profile.html">
				   <img class="img-responsive" src="<?=base_url();?>Assets/CT_assets/assets/img/users/5.jpg?>" alt="Image">
				  </a>
				 </div><!-- /.col-lg-2 -->
				 <h5> Vanessa Wells </h5>
				</div>
				<div class="col-lg-6">
				 <div class="pull-right">
				  <br>	
				  <a href="<?=base_url()."app_form/?id=".$jobpost->id;?>" class="kafe-btn kafe-btn-mint-small"><i class="fa fa-align-left"></i> Apply</a>

				 </div>
				</div>
				
			   	</div><!-- /.col-lg-12 -->
				</div><!-- /.row -->
			</div><!-- /.job -->	   
		</div><!-- ./work -->		
	<?php }?>
	  
	  
       </div><!-- col-md-9 -->	
	   
		<div class="col-sm-4 col-md-3">
			
		 <div class="widget">
		    <h3 class="widget_title">Category</h3>
		    <?php foreach($cat_return->result() as $cdata){
		    		?>
			<ul class="tr-list">
				
			 	<li>
			 		<a href="<?=base_url();?>gowork/?name=<?=$cdata->name;?>" class="active"><i class="fa fa-code"></i> <?=$cdata->name;?>
					</a>
				</li>

							 
			</ul>
		<?php } ?>
		  		   
		 </div><!-- /.widget --> 
		
	    </div>
      </div>		
	   
      </div>	
     </section>
	





