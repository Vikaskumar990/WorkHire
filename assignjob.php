<section class="dashboard section-padding">
	  <div class="container">
	   <div class="row">
	   
	    <div class="col-sm-4 col-md-3">
		
		  <ul class="sidebar-menu" data-widget="tree">
			
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-files-o"></i> <span>Jobs</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
				<li><a href="<?=base_url()."dash"?>"><i class="fa fa-circle-o"></i> Jobs Posted</a></li>
				<li><a href="<?=base_url()."assignjob"?>"><i class="fa fa-circle-o"></i>Assign Job</a></li>
				<li><a href="addjob.html"><i class="fa fa-circle-o"></i>Confirm Job</a></li>
			  </ul>
			</li>
			
		 </ul>			 
		       		
	    </div>
		
	    <div class="col-sm-8 col-md-9">
		 
		 
		  
		 	
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Assign Job</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                 <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
								
								<th >Srno.</th>
								<th >Project Name</th>
								<th >Language</th>
								<th >Country</th>
								<th >Experience</th>
								<th >Budget</th>
								<th >Start Date</th>
								<th >Valid Date</th>
								<th >Location</th>
								<th >Discription</th>
                      </tr>
                    </thead>
                   		<tbody>
							<?php if($user_return->num_rows()>0){
								$i=1;
							foreach($user_return->result() as $userdata)
							{
							?>
							<tr>
								<td><?=$i;?></td>
								<td><?=$userdata->project_name;?></td>
								<td><?=$userdata->language;?></td>
								<td><?=$userdata->country;?></td>
								<td><?=$userdata->experience;?></td>
								<td><?=$userdata->budget;?></td>
								<td><?=$userdata->strt_date;?></td>
								<td><?=$userdata->valid_date;?></td>
								<td><?=$userdata->location;?></td>
								<td><?=$userdata->discription;?></td>
								
							<?php $i++;} }else{?>
								<tr >
									<td colspan="12" class="text-center">Not Found data</td>
								</tr>
							<?php }?>
						</tbody>
                  </table>
                 </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->				
			
					
		
		
	    </div><!-- /.col-md-9 -->	
	        </div><!-- /.row -->
	    </div><!-- /.container -->
	</section>