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
			 <h4><a href="pagename/<?=base_url().$jobpost->project_name."jobpostdetail"?>"><?=$jobpost->project_name?></a></h4>
			 <h5><?=$this->input->get('name');?></h5>
			 <h6>Language - <?=$jobpost->language?></h6>
			 <h6>start date - <?=$jobpost->strt_date?></h6>
			 <h6>valid upto date - <?=$jobpost->valid_date?></h6>

			</div><!-- /.col-lg-10 -->
			
		   </div><!-- /.col-lg-12 -->
		  </div><!-- /.row -->
		  
		  
		  	<div class="row bottom-sec">
			   	<div class="col-lg-12">
				
				<div class="col-lg-12">
				 <hr class="small-hr">
				 <p></p>
				</div> 
				
				<div class="col-lg-6">
				 
				 
				</div>
				<div class="col-lg-6">
				 <div class="pull-right">
				  
				  <a href="<?=base_url()."jobpostdetail/?id=".$jobpost->id;?>" class="kafe-btn kafe-btn-mint-small"><i class="fa fa-align-left"></i>quick view</a>

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
		    <h3 class="widget_title">Company</h3>
			<?php 
				foreach ($cat_return->result() as  $cdata) {
					
				?>
			
			<ul class="tr-list">
			 <li><a href="" class="active"><?=$cdata->c_name;?> </a></li>
			 
			</ul> 
			<?php }?>
		   
		   
		   
		 </div><!-- /.widget --> 
		
	    </div>
      </div>		
	   
      </div>	
      </div>	
      </div>	
     </section>