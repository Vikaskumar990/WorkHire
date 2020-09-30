 <!-- ==============================================
	 Banner Login Section
     =============================================== -->
	 <section class="banner-login">
	  <div class="container">
	  	
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
	  		  	
	   <div class="row">
	   
	    <div class="main main-signup col-lg-12">
	     <div class="col-lg-12  text-center">
				
		  <div class="form-sign">
		   
		    <div class="form-head">
			 <h3>Register</h3>
			</div><!-- /.form-head -->
			<?=form_open_multipart($action);?>
            <div class="form-body">            	
            	
			
             <div class="row">
             	<div class="col-sm-6">
			  <div class="form-controls">
			   <input type="text" name="full_name" class="field" placeholder="Full Name" id="name" required="">
			  </div>
             </div>
             
             <div class="col-sm-6">
			  <div class="form-controls">
			   <input type="text" name="email" class="field" id="mail" placeholder="Email" required="">
			  </div><!-- /.form-controls -->
             </div>
             </div><br>

		     <div class="row">
		     	<div class="col-sm-6">
		      <div class="form-controls">
			   <input type="text" name="username" class="field" placeholder="Username">
			  </div><!-- /.form-controls -->
		     </div>
		     
             <div class="col-sm-6">
			  <div class="form-controls">
			   <input type="password" name="password" class="field" id="pass"placeholder="Password" required="" id="pd">
			  </div><!-- /.form-controls -->
             </div>
             </div><br>

			 <div class="row">
			 	<div class="col-sm-6">
			  <div class="form-controls">
			   <input type="password" name="confirm_pass" id="cpass" class="field" placeholder="Confirm Password" required="" id="cpd">
			  </div><!-- /.form-controls -->
             </div>

              <div class="col-sm-6">
			  <div class="form-controls">
			   <select name="city" class="field" id="cty">
			   	<option>Select city</option>
			   	<option>Surat</option>
			   	<option>Banglore</option>
			   	<option>Pune</option>
			   </select>
			  </div><!-- /.form-controls -->
             </div>
			 </div><br>


             <div class="row">
             	<div class="col-sm-6">
			  <div class="form-controls">
			   <select name="state" class="field" id="std">
			   	<option>Select state</option>
			   	<option>Gujarat</option>
			   	<option>Karnatka</option>
			   	<option>Maharastra</option>
			   </select>
			  </div><!-- /.form-controls -->
             </div>

             <div class="col-sm-6">
			  <div class="form-controls">
			   <select name="country" class="field" id="cname">
			   	<option>Select country</option>
			   	<option>India</option>
			   </select>
			  </div><!-- /.form-controls -->
             </div>
             </div><br>

             <div class="form-row">
			  <div class="form-controls">
			  	<label style="float: left;color: white;">Select your profile</label>
			   <input type="file" name="img" class="field" id="ig" required="">
			  </div><!-- /.form-controls -->
             </div><!-- /.form-row -->

			 <div class="checkbox"> 
			  <label> <input type="checkbox" name="chkp" value="done"> Agree to the <a href="#">terms and policy</a> </label> 
			 </div>
		   
			 </div><!-- /.form-body -->
	
			 <div class="form-foot">
			  <div class="form-actions">
               <input type="submit" value="Register" class="kafe-btn kafe-btn-default full-width">
			  </div><!-- /.form-actions -->
			 </div><!-- /.form-foot -->
		   </form>
		   
		  </div><!-- /.form-sign -->
	     </div><!-- /.col-lg-6 -->
        </div>
		</div>
	</div>
</section>

<script type="text/javascript">
	/*function check_pass() {
			var pd = document.getElementById("pd");
		  	var cpd = document.getElementById("cpd");

			  if(pd.value != cpd.value) {
			    alert("Yours passwords do not match");
			  } else {
			    curatio.webdb.check_pass(pd.value);
			    pd.value = "";
			    alert("Your Registration was successfull");
			    setTimeout(function () {
			    window.location.href = "login.php"; 
			    }, 1000);
			}
		}
*/
		 $("#cpass").blur(function(){ 
		        password = $("#pass").val(); 
		        cpassword = $("#cpass").val(); 
        		if(password==cpassword)
        		{
        			alert("good");
        		}
        		else
        		{
        			alert("not Valid");
        		}
         
            });
</script>