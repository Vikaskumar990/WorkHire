<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">

			<!-- Page-Title -->
			<div class="row">
				<div class="col-sm-12">
					<h4 class="page-title"><?=$heading;?> Form</h4>
					<ol class="breadcrumb">
						<li>
							<a href="<?=base_url();?>AdminController/dashboard">Dashboard</a>
						</li>
						<li>
							<a href="<?=$cancel;?>">Manage <?=$heading;?></a>
						</li>
						<li class="active">
							<?=$heading;?> Form
						</li>
					</ol>
				</div>
			</div>

			<?php if(!empty($msg)){?>
            <div class="row">
            	<div class="col-sm-12 alert alert-success">
            		<?=$msg;?>
            	</div>
            </div>
        	<?php }?>
            <div class="row">
            	<div class="col-sm-12">
            		<div class="card-box">
            			<h4 class="m-t-0 header-title pull-left"><b>Add New <?=$heading;?></b></h4>
            			<a href="<?=base_url()."AdminController/".$cancel;?>" class="btn btn-danger pull-right">Cancel</a>
            		<br><br>
            		<hr>
            			<div class="row">
            				<div class="col-md-12">
            					<?=form_open_multipart($action);?>                                    
                                    <?=$FormInput;?>
                                    <div class="form-group">
                                            <input type="submit" class="btn btn-info" value="Add New">
									</div>
                                <?=form_close();?>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
        </div>
    </div>
</div>

