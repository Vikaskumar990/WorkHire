

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
							<!-- bid_tbl =id	price	user_id	Project_id	status -->
							<tr>
								<th >Srno.</th>
								<th >Price</th>
								<th >User id</th>
								<th >Project id</th>
								<th >Status</th>
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
								<td><?=$userdata->price;?></td>
								<td><?=$userdata->user_id;?></td>
								<!-- <td><?=$userdata->username;?></td>
								<td><?=$userdata->project_name;?></td> -->
								<td><?=$userdata->Project_id;?></td>
								<td><a href="<?=base_url();?>AdminController/confirm/<?=$userdata->id."/".$userdata->status;?>/bid_tbl/assignproject"


									class="label label-table label-<?php if($userdata->status=='confirm'){echo "success";}else{ echo "danger";}?>"><?=$userdata->status;?></a></td>
							</tr>
							<?php $i++;} }else{?>
								<tr >
									<td colspan="7" class="text-center">Not Found data</td>
								</tr>
							<?php }?>
						</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
