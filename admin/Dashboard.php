


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">Dashboard</h4>
                                <p class="text-muted page-title-alt">Welcome to WorkHire admin panel !</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="widget-bg-color-icon card-box fadeInDown animated">
                                    <div class="bg-icon bg-icon-info pull-left">
                                        <i class="md md-attach-money text-info"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">31,570</b></h3>
                                        <p class="text-muted">Total Revenue</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-pink pull-left">
                                        <i class="md md-add-shopping-cart text-pink"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">280</b></h3>
                                        <p class="text-muted">Confirm Projects</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-purple pull-left">
                                        <i class="md md-equalizer text-purple"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">0.16</b>%</h3>
                                        <p class="text-muted">Feedback Conversion</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-success pull-left">
                                        <i class="md md-remove-red-eye text-success"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">64,570</b></h3>
                                        <p class="text-muted">Today's Visits</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            
                            <div class="col-lg-4">
                                <div class="card-box">
                                    <h4 class="text-dark header-title m-t-0 m-b-30">Total Project</h4>

                                    <div class="widget-chart text-center">
                                        <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#fb6d9d" value="<?php
                                                $num_rows = $this->db->count_all_results('project_portal_tbl');
                                                echo "$num_rows";
                                            ?>" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>
                                       
                                        <ul class="list-inline m-t-15">
                                            <li>
                                                <h5 class="text-muted m-t-20">Today</h5>
                                                <h4 class="m-b-0">1000</h4>
                                            </li>
                                            <li>
                                                <h5 class="text-muted m-t-20">Last week</h5>
                                                <h4 class="m-b-0">
                                                    <?php

                                                       /* $month=date('F Y');
                                                        $date=new DateTime($month);
                                                        $start_date=$date->format('Y-m-d G:i:s');
                                                        $date->modify('last month of the year')->setTime(23,59,59);
                                                        $end_date=$date->format('Y-m-d G:i:s');
                                                        $count=$this->db->from('project_portal_tbl')->where('date >=',$start_date)->where('date <=',$end_date)->count_all_results();
                                                        return $count;*/
                                                        echo $date=date("M-w",strtotime('last week'));
                                                        echo $this->db->get_where("project_portal_tbl",array("DATE_FORMAT('date','%M-%w')"=>$date))->num_rows();
                                                    ?>

                                                </h4>
                                            </li>
                                            <li>
                                                <h5 class="text-muted m-t-20">Last Month</h5>
                                                <h4 class="m-b-0">
                                                    <?php
                                                        /*$data = $this->db->select('*')->from('project_portal_tbl')->where('MONTH(date)','MONTH(NOW())');
                                                        echo $data;*/
                                                       echo $date=date("Y-m",strtotime('last month'));
                                                        $this->db->get_where("project_portal_tbl",array("DATE_FORMAT('date','%Y-%m')"=>$date))->num_rows();

                                                    ?>
                                                </h4>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-4">
                                <div class="card-box">
                                    <h4 class="text-dark header-title m-t-0 m-b-30">Total Company</h4>

                                    <div class="widget-chart text-center">
                                        <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#fb6d9d" value="<?php
                                                $num_rows = $this->db->count_all_results('company');
                                                echo "$num_rows";
                                            ?>" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>
                                        
                                        <ul class="list-inline m-t-15">
                                            <li>
                                                <h5 class="text-muted m-t-20">Today</h5>
                                                <h4 class="m-b-0">1000</h4>
                                            </li>
                                            <li>
                                                <h5 class="text-muted m-t-20">Last week</h5>
                                                <h4 class="m-b-0">523</h4>
                                            </li>
                                            <li>
                                                <h5 class="text-muted m-t-20">Last Month</h5>
                                                <h4 class="m-b-0">965</h4>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-4">
                                <div class="card-box">
                                    <h4 class="text-dark header-title m-t-0 m-b-30">Total Feedback</h4>

                                    <div class="widget-chart text-center">
                                        <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#fb6d9d" value="<?php
                                                $num_rows = $this->db->count_all_results('feedback_tbl');
                                                echo "$num_rows";
                                            ?>" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>
                                        
                                        <ul class="list-inline m-t-15">
                                            <li>
                                                <h5 class="text-muted m-t-20">Today</h5>
                                                <h4 class="m-b-0">100</h4>
                                            </li>
                                            <li>
                                                <h5 class="text-muted m-t-20">Last week</h5>
                                                <h4 class="m-b-0">523</h4>
                                            </li>
                                            <li>
                                                <h5 class="text-muted m-t-20">Last Month</h5>
                                                <h4 class="m-b-0">965</h4>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

						</div>
                        <!-- end row -->


                         <div class="row">

                            <div class="col-lg-4">
                                <div class="card-box">
                                    <h4 class="text-dark header-title m-t-0 m-b-30">Total Users</h4>

                                    <div class="widget-chart text-center">
                                        <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#fb6d9d" value="<?php
                                                $num_rows = $this->db->count_all_results('users');
                                                echo "$num_rows";
                                            ?>" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>
                                        
                                        <ul class="list-inline m-t-15">
                                            <li>
                                                <h5 class="text-muted m-t-20">Target</h5>
                                                <h4 class="m-b-0">1000</h4>
                                            </li>
                                            <li>
                                                <h5 class="text-muted m-t-20">Last week</h5>
                                                <h4 class="m-b-0">523</h4>
                                            </li>
                                            <li>
                                                <h5 class="text-muted m-t-20">Last Month</h5>
                                                <h4 class="m-b-0">965</h4>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                         </div>
                         <!-- end row -->

                       

                    </div> <!-- container -->

                </div> <!-- content -->

