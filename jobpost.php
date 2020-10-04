
  <section class="pull-right" >
    <style type="text/css">
      .red
      {
         border:solid 2px red;
      }
      .green
      {
         border:solid 2px green;
      }
    </style>
 <div class="container">
  <?=form_open($action);?>
	   <div class="row pull-right">

    <div class="col-sm-12 col-md-10">		

		  <div class="job-box">
		   <div class="job-header">
		    <h4>Add Job</h4>
		   </div>
           <form method="post" id="addform">
		   	<div class="col-lg-6">
              <div class="form-group">	
			    <label>Project Name</label>
                <input type="text" name="project_name" id="pname" class="form-control" placeholder="Project Name" value="" required="" />
              </div>   
            </div>   
            
            

            <div class="col-lg-6 job-sec">
              <div class="form-group">	
			    <label>Language</label>
                <input type="text" name="language" id="lname" class="form-control" placeholder="Language (eg:-php,.Net etc)" value="" required="" />
              </div> 
            </div> 		
            
            
			
			<div class="col-lg-6">
              <div class="form-group">	
			    <label>Country</label>
				<select class="form-control" name="country" id="cname">
				<option>Select country</option>
				 <option value="india">INDIA</option>	
				</select>
              </div> 
              </div> 
		   
   
                 
			  <div class="col-lg-6 job-sec">
              <div class="form-group">	
			    <label>Experience</label>
                <input type="text" name="experience" id="exp" class="form-control" placeholder="Experience" value="" required="" />
              </div>   
              </div>

		   		<div class="col-lg-6">
              <div class="form-group">	
			    <label>Budget</label>
                <input type="text" name="budget" id="bgt" class="form-control" required="" placeholder="enter your project budget" value=""/>
              </div>   
              </div>

              <div class="col-lg-6 job-sec">
              <div class="form-group">	
			    <label>Start Date</label>
                <input type="date" name="strt_date" id="strt" class="form-control" placeholder="Start Date" value=""/>
              </div>   
              </div>

		   		<div class="col-lg-6">
              <div class="form-group">	
			    <label>Valid UpTo</label>
                <input type="date" name="valid_date" id="vld" class="form-control" required="" placeholder="Valid Date" value=""/>
              </div>   
              </div>
             
				<div class="col-lg-6 job-sec">
              <div class="form-group">	
			    <label>Location/Address</label>
                <input type="text" name="location" id="loc" class="form-control" placeholder="Location/Address...." value=""/>
              </div>   
              </div>

              <div class="col-lg-12 ">
			  <div class="form-group">	
			   <label>Description</label>
			   <textarea name="discription" id="disc" class="form-control" rows="5" required="" placeholder="Provide a more detailed description of your job to get better proposals."></textarea>
			  </div> 
			  </div>
              <button class="kafe-btn kafe-btn-mint-small full-width">Submit</button>
           </form>
          </div><!-- /.job-box -->		
		
	    </div><!-- /.col-md-9 -->	
	        </div><!-- /.row -->
        </form>
	    </div><!-- /.container -->
	</section>