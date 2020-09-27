 <!-- ==============================================
	 Header Section
	 =============================================== -->	
     <section class="how-banner">
      <div class="container">
        <h4>How it works</h4>
      </div><!-- /.container -->
     </section>		

	 <!-- ==============================================
	 How Section
	 =============================================== -->	
     <section class="how">
      <div class="container">
	   <div class="col-lg-3 text-center">
	    <i class="fa fa-file fa-5x"></i>
        <h4>Post projects to tell us what you need done.</h4>
	   </div>	
	   <div class="col-lg-3 text-center">
	    <i class="fa fa-users fa-5x"></i>
        <h4>Browse profiles, reviews, then hire your most favorite and start project.</h4>
	   </div>	
	   <div class="col-lg-3 text-center">
	    <i class="fa fa-briefcase fa-5x"></i>
        <h4>Use The Kafe platform to chat and share files</h4>
	   </div>	
	   <div class="col-lg-3 text-center">
	    <i class="fa fa-usd fa-5x"></i>
        <h4>With our protection, money is only paid for work you authorize.</h4>
	   </div>
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
			 <span class="icon"><i class="fa fa-code fa-2x"></i></span>
			 <span class="category-title"><?=$cdata->name;?></span>
			 <span class="category-quantity">( <?php
				 	echo $this->db->query("select * from project_portal_tbl where category_id='$cdata->id'")->num_rows();
				 ?>
				)</span>
			</a>
		   </div><!-- category-box -->
		  </div><!-- col-lg-3 -->
		 <?php }?>
		  
		 </div><!-- category-list -->
			
		</div><!-- row -->
	   </div><!-- /.container -->
	  </div><!-- tr-category -->	
