
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
                                   <a href="<?=base_url();?>AdminController/language_addnew" class="btn btn-success pull-right">Add <?=$heading;?></a><br><br>

                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
							<tr>
								<th >Srno.</th>
								<th >Name</th>
								<th >Status</th>
								<th>Action</th>
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
								<td><?=$userdata->lname;?></td>
								<td><a href="<?=base_url();?>AdminController/status_change/<?=$userdata->id."/".$userdata->status;?>/language_tbl/language"


									class="label label-table label-<?php if($userdata->status=='active'){echo "success";}else{ echo "danger";}?>"><?=$userdata->status;?></a></td>
								<td >
									<a href="<?=base_url();?>AdminController/language_addnew/<?=$userdata->id;?>" class="btn btn-info fa fa-edit">
									
								</a>
									<a href="<?=base_url();?>AdminController/delete/<?=$userdata->id;?>/language_tbl/language" class="btn btn-danger fa fa-trash"></a>
								</td>
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
