<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <?php $active=$this->uri->segment(2);?>
                <li class="has_sub">
                    <a href="<?=base_url();?>AdminController/dashboard" class="waves-effect 
                        <?php if($active=="dashboard"){ echo "active";}?>">
                        <i class="fa fa-dashboard"></i> 
                        <span>Dashboard</span> 
                    </a>
                </li>
                
                <?php
                //print_r($Menus);
                foreach($Menus as $menu)
                {
                    $menudata=explode(',',$menu);
                    
                ?>


                <li class="has_sub">
                    <a href="<?=base_url();?>AdminController/<?=$menudata[0];?>" class="waves-effect 
                        <?php if($active==$menudata[0]){ echo "active";}?>">
                        <i class="fa fa-<?=$menudata[1];?>"></i> 
                        <span> Manage <?=$menudata[2];?></span> 
                    </a>
                </li>

                <?php }?>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->
