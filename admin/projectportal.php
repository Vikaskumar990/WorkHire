
	<!-- Start right Content here -->
			<!-- ============================================================== -->
			<div class="content-page">
				<!-- Start content -->
				<div class="content">
					<div class="container">

						<!-- Page-Title -->
						<div class="row">
							<div class="col-sm-12">
								<h4 class="page-title"><?=$heading;?> Tables</h4>
								<ol class="breadcrumb">
									<li>
										<a href="<?=base_url();?>AdminController/dashboard">Dashboard</a>
									</li>
									<li class="active">
										<?=$heading;?>
									</li>
								</ol>
							</div>
						</div>

                        <!--Basic Columns-->
						<!--===================================================-->
						
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b><?=$heading;?></b></h4>
                                   	<a href="<?=base_url();?>AdminController/projectportal_addnew" class="btn btn-success pull-right">Add <?=$heading;?></a><br><br>

                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
							<!-- project_portal_tbl =id	title	category_id	language_id	country	pay_rate	budget	hours_per_week	experience_level	job_duration	discription	status -->
							<tr>
								<th >Srno.</th>
								<!-- <th >Category</th>
								<th >Language</th>
								 --><th >Title</th>
								<th >Country</th>
								<th >Pay Rate</th>
								<th >Budget</th>
								<th >Hours per week</th>
								<th >Experience</th>
								<th >Duration</th>
								<th >Discription</th>
								<th >Status</th>
								<th>Edit</th>
								<th>Delete</th>
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
								<!-- <td><?=$userdata->category_id;?></td>
								<td><?=$userdata->language_id;?></td> -->
								<td><?=$userdata->title;?></td>
								<td><?=$userdata->country;?></td>
								<td><?=$userdata->pay_rate;?></td>
								<td><?=$userdata->budget;?></td>
								<td><?=$userdata->hours_per_week;?></td>
								<td><?=$userdata->experience_level;?></td>
								<td><?=$userdata->job_duration;?></td>
								<td><?=$userdata->discription;?></td>
								<td ><a href="<?=base_url();?>AdminController/status_change/<?=$userdata->id."/".$userdata->status;?>/project_portal_tbl/projectportal"


									class="label label-table label-<?php if($userdata->status=='active'){echo "success";}else{ echo "danger";}?>"><?=$userdata->status;?></a></td>
								<td >


									<a href="<?=base_url();?>AdminController/projectportal_addnew/<?=$userdata->id;?>" class="btn btn-info fa fa-edit ">
								</td >
								<td >
								</a>
									<a href="<?=base_url();?>AdminController/delete/<?=$userdata->id;?>/project_portal_tbl/projectportal" class="btn btn-danger fa fa-trash"></a>
								</td>
							</tr>
							<?php $i++;} }else{?>
								<tr >
									<td colspan="14" class="text-center">Not Found data</td>
								</tr>
							<?php }?>
						</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
