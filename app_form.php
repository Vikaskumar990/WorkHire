 

 <!-- ==============================================
	 Banner Login Section
     =============================================== -->
	 <section class="banner-login">
	  <div class="container">
	  		  	
	   <div class="row">
	   
	    <div class="main main-signup col-lg-12">
	     <div class="col-lg-12  text-center">
				
		  <div class="form-sign">
		   
		    <div class="form-head">
			 <h3>Job Application Form</h3>
			</div><!-- /.form-head -->
			<?=form_open_multipart($action);?>
			<?php $usess=$this->session->userdata('work');?>
            <div class="form-body">            	
            	
			<input type="hidden" name="appid" value="<?=$this->input->get('id');?>">
             <div class="row">
             	<div class="col-sm-6">
			  <div class="form-controls">
			  	<label style="float: left;color: white;">USERNAME</label>
			   <input type="text" name="full_name" value="<?=$usess['Name'];?>" class="field" required placeholder="User Name">
			  </div>
             </div>
             
             <div class="col-sm-6">
			  <div class="form-controls">
			  	<label style="float: left;color: white;">EMAIL</label>
			   <input type="text" name="email"  value="<?=$usess['Email'];?>" class="field" placeholder="Email">
			  </div><!-- /.form-controls -->
             </div>
             </div>

		     <div class="row">
		     	<div class="col-sm-6">
		     		<label style="float: left;color: white;">CURRENT COMPANY </label>
		      <div class="form-controls">
			   <input type="text" name="curr_company" class="field" placeholder="Current Company">
			  </div><!-- /.form-controls -->
		     </div>
		     
             <div class="col-sm-6">
             	<label style="float: left;color: white;">CURRENT SALARY</label>
			  <div class="form-controls">
			  	
			   <input type="text" name="curr_salary" class="field" placeholder="Current Salary" required="">
			  </div><!-- /.form-controls -->
             </div>
             </div>

			 <div class="row">
			 	<div class="col-sm-6">
			  <div class="form-controls">
			  	<label style="float: left;color: white;">MOBILE NO</label>
			   <input type="text" name="phone" class="field" placeholder="Phone No">
			  </div><!-- /.form-controls -->
             </div>

             	<div class="col-sm-6">
			  <div class="form-controls">
			  	<label style="float: left;color: white;">UPLOAD YOUR CV</label>
			   <input type="file" name="cv" class="field" required="">
			  </div><!-- /.form-controls -->
             
			 </div>
			 
			 </div>
			 <div class="row">
			 	<div class="col-sm-6">
			  <div class="form-controls">
			  	<label style="float: left;color: white;">APPLICATION CHARGE</label>
			   <input type="text" name="" class="field" placeholder="eg:- 50rs fixed" readonly="">
			  </div>
             </div>
             </div>
			 <div class="form-foot">
			  <div class="form-actions">
               <input type="submit" value="Submit" class="kafe-btn kafe-btn-default col-sm-12 pull-right">
			  </div><!-- /.form-actions -->
			 </div><!-- /.form-foot -->
		   </form>
		   
		  </div><!-- /.form-sign -->
	     </div><!-- /.col-lg-6 -->
        </div>
		</div>
	</div>
</section>
