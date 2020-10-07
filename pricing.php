<div id="modalfedd" class="modal fade text-xs-left" role="dialog" aria-hiden="true">
  <div class="modal-dialog modal-sm">
    <?= form_open($action);?>
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title pull-left"></h4>
          <h5 class="pull-left">Your price</h5>
          <input type="text" name="price" class="form-control" id="fedd">
          <h5></h5>
          <input type="submit" name="btn btn-success" id="fedd" name="action" value="OK" class="kafe-btn kafe-btn-mint-small pull-right">

        </div>
      </div>
    <?=form_close();?>
  </div>
  
</div>



 <!-- ==============================================
	 Pricing Section
	 =============================================== -->
     <section class="pricing pricing-plan">	
      <div class="container">
	   <div class="section-title" style="padding-top: 20px;">
	    <h1>Pricing for Workhires</h1>
	   </div>
	   <div class="row"> 

        <div class="col-lg-4">
            <div class="pricing-box">
              <h6>Basic Package</h6>
              <div class="price">
                <sup><i class="fa fa-rupee"></i></sup><?=$pdata[0]->budget;?>
                <!-- <span>per month</span> -->
              </div>
              <hr>
			  
              <p>Total Bids - <strong><?=$bitdata;?></strong></p>
              <!-- <p>Job Fee - <strong>8.95%</strong></p> -->
              <br>
              <a class="kafe-btn kafe-btn-mint-small full-width" href="#"id="fedd" data-target="#modalfedd" data-toggle="modal">Bid</a>
            </div>
		</div> 	

         <div class="col-lg-4">
            <div class="pricing-box">
              <h6>Work Description</h6>
                <?php 
                  //echo $pdata[0]->project_name;
                  echo $pdata[0]->project_name."<br>";
                  echo $pdata[0]->language."<br>";
                  echo $pdata[0]->valid_date."<br>";
                  echo $pdata[0]->discription."<br>";
                 //print_r($pdata[0]);
                ?>      
            </div>
		</div> 	

       <!-- <div class="col-lg-4">
            <div class="pricing-box">
              <h6>Ultimate Package</h6>
              <div class="price">
                <sup>$</sup>20
                <span>per month</span>
              </div>
              <hr>
              <p>Bids - <strong>100</strong></p>
              <p>Job Fee - <strong>7.20%</strong></p>
              <br>
              <a class="kafe-btn kafe-btn-mint-small full-width" href="#">Select plan</a>
            </div>
		</div> --> 	

            
	   
       </div><!-- /.row -->	
      </div><!-- /.container -->	
     </section><!-- /.pricing -->

