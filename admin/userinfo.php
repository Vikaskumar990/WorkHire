
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
                                   
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
							<!--	id	full_name	email	username	password	confirm_pass	city	state	country	profile_img	status
 -->
											<tr>
												<th >PROFILE IMAGE</th>
												<th >Name</th>
												<th >Email</th>
												<th >City</th>
												<th >State</th>
												<th >Country</th>
												<th >Status</th>
											</tr>
						</thead>
						
						<tbody>
											<?php if($user_return->num_rows()>0){

											foreach($user_return->result() as $userdata)
											{
											?>
											<tr>
												<td><img src="<?=base_url()."Assets/CT_assets/assets/img/users/".$userdata->img;?>" height="50px"></td>
												<td><?=$userdata->full_name;?></td>
												<td><?=$userdata->email;?></td>
												<td><?=$userdata->city;?></td>
												<td><?=$userdata->state;?></td>
												<td><?=$userdata->country;?></td>
												<td><a href="<?=base_url();?>AdminController/status_change/<?=$userdata->id."/".$userdata->status;?>/users/userinfo" 

													class="label label-table label-<?php if($userdata->status=='active'){echo "success";}else{ echo "danger";}?>"><?=$userdata->status;?></a></td>
											</tr>
											<?php } }else{?>
												<tr>
													<td colspan="7" class="text-center">Not Found data</td>
												</tr>
											<?php }?>
										</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
