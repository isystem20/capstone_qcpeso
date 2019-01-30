
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Stats box -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/icon/income.png" alt="Income" /></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">Total Jobs</h6>
                                        <?php
                                        if($totaljobs->num_rows() > 0)
                                        {
                                            foreach($totaljobs->result() as $row)
                                            {
                                              ?>
                                              <h2 class="m-t-0"><?php echo $this->db->count_all('tbl_establishments_jobposts'); ?></h2></div>
                                              <?php  
                                            }
                                        }
                                        else
                                        {
                                        ?>
                                        <h2 class="m-t-0"> NO DATA FOUND </h2></div>
                                        <?php
                                        }
                                        ?>

                                       
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/icon/expense.png" alt="Income" /></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">Total Employers</h6>
                                        
                                         <?php
                                        if($totalemployers->num_rows() > 0)
                                        {
                                            foreach($totalemployers->result() as $row)
                                            {
                                              ?>
                                              <h2 class="m-t-0"><?php echo $this->db->count_all('tbl_establishments'); ?></h2></div>
                                              <?php  
                                            }
                                        }
                                        else
                                        {
                                        ?>
                                        <h2 class="m-t-0"> NO DATA FOUND </h2></div>
                                        <?php
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/icon/assets.png" alt="Income" /></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">Total Applicants</h6>
                                        
                                         <?php
                                        if($totalapplicants->num_rows() > 0)
                                        {
                                            foreach($totalapplicants->result() as $row)
                                            {
                                              ?>
                                              <h2 class="m-t-0"><?php echo $this->db->count_all('tbl_applicants'); ?></h2></div>
                                              <?php  
                                            }
                                        }
                                        else
                                        {
                                        ?>
                                        <h2 class="m-t-0"> NO DATA FOUND </h2></div>
                                        <?php
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/icon/staff.png" alt="Income" /></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">Successful Hires</h6>
                                        
                                         <?php
                                        if($successhires->num_rows() > 0)
                                        {
                                            foreach($successhires->result() as $row)
                                            {
                                              ?>
                                              <h2 class="m-t-0"><?php echo $row->countsuccess; ?></h2></div>
                                              <?php  
                                            }
                                        }
                                        else
                                        {
                                        ?>
                                        <h2 class="m-t-0"> NO DATA FOUND </h2></div>
                                        <?php
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales overview chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div>
                                        <h3 class="card-title m-b-5"><span class="lstick"></span>Applicants Per Year</h3>
                                    </div>
                                    <div class="ml-auto">
                                        <select class="custom-select b-0">
                                            <option selected="">January 2017</option>
                                            <option value="1">February 2017</option>
                                            <option value="2">March 2017</option>
                                            <option value="3">April 2017</option>
                                        </select>
                                    </div>
                                </div>

                                
                                <!-- Charts for monthly Applicants -->
                                <div id="sales-overview2" data-values='<?=json_encode($monthly_applicants); ?>' class="p-relative" style="height:360px;"></div>

                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div>
                                        <h3 class="card-title m-b-5"><span class="lstick"></span>Employers Per Year</h3>
                                    </div>
                                    <div class="ml-auto">
                                        <select class="custom-select b-0">
                                            <option selected="">January 2017</option>
                                            <option value="1">February 2017</option>
                                            <option value="2">March 2017</option>
                                            <option value="3">April 2017</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="ct-sales3-chart" data-values='<?=json_encode($all_year); ?>' class="p-relative" style="height:360px;"></div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <!-- Visit Separation Donut Chart -->
                           <div class="card-body">
                             <h4 class="card-title"><span class="lstick"></span>Referrals Per Month</h4>
                                <div id="visitor" data-values='<?=json_encode($monthly_referrals); ?>' style="height: 290px; width: 100%; max-height: 290px; position: relative;" class="c3">
                                    </div>
                                <table class="table vm font-14">
                                    <tbody>

   <!-- Code for retrieving the number of total applicants and referred applicants  -->
                                    <?php 
                                        if ($referrals->num_rows() > 0){
                                            foreach ($referrals->result() as $row){ ?>
                                                 <tr>
                                                    <td class="b-0">Number of Applicants with Referrals</td>
                                                    <td class="text-right font-medium b-0"><?php echo $row->ReferredApplicants; ?></td>
                                                <!-- This echo produces 15 but it should be 3 based on query -->
                                                </tr>
                                                <tr>
                                                    <td class="b-0">Number of Total Applicants</td>
                                                    <td class="text-right font-medium b-0"><?php echo $row->TotalApplicants; ?></td>
                                                <!-- This produces 15 also but it should 5 based on query -->
                                                </tr>
                                            
                                                <?php
                                                }
                                        }
                                            else
                                            {
                                                ?>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <?php
                                            } 
                                                ?> 
                                </tbody></table>
                            </div>
                            <!-- End -->
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><span class="lstick"></span>Categories</h4>

                                <table class="table browser m-t-30 no-border" >
                                    <tbody>
                                           <th colspan="1">Name of Categories</th>
                                           <th><center>Currently Available</center></th>

                                             <?php
                                        if ($query->num_rows() > 0) {
                                            foreach ($query->result() as $row) { ?>
                                            <tr>
                                                <td><?php echo $row->description; ?></td>
                                                <td><center>
                                                    <?php echo $row->category; ?>  </center>
                                                </td>
                                            </tr>
                                                <?php

                                            }
                                            }
                                            else
                                            {
                                                ?>
                                                <tr>
                                                <td>0</td>
                                                <td>0</td>
                                                </tr>
                                                <?php
                                            }

                                        
                                        ?>

                                         
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Projects of the month -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div>
                                        <h4 class="card-title"><span class="lstick"></span>Recently Employed Applicant</h4></div>
                                  
                                </div>
                                <div class="table-responsive m-t-20">
                                    <table id="myTable" class="table table-bordered table-striped" data-action="<?=base_url('admin/'.$class.'/')?>">
                                        <thead>
                                            <tr>
                                                <th><b>Job Title</th>
                                                <th><b>Last Name</th>
                                                <th><b>First Name</th>
                                                <th><b>Middle Name</th>
                                                <th><b>Date Accepted</th>
                                            </tr>
                                           
                                                 <?php 
                                            if ($recenthired->num_rows() > 0) {
                                                foreach ($recenthired->result() as $row)  { ?>
                                                    <tr>
                                                        <td><?php echo $row->Jobtitle; ?></td>
                                                        <td><?php echo $row->Lastname; ?></td>
                                                        <td><?php echo $row->Firstname; ?></td>
                                                        <td><?php echo $row->Middlename; ?></td>
                                                        <td><?php echo $row->dateaccepted; ?></td>
                                                        
                                                       
                                                    </tr>
                                                     <?php
                                                }
                                            }
                                            else
                                            {
                                                ?>

                                                <tr>
                                                    <td colspan="5"><center> <i>NO DATA FOUND</i></center></td>
                                                </tr>
                                                <?php
                                             
                                            }
                                             ?>   
                                          
                                            
                                        </thead>
                                      
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================================== -->
                    <!-- Activity widget find scss into widget folder-->
                    <!-- ============================================================== -->
                    

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Applicants via Google Maps</h4>
                                <div id="markermap" class="gmaps"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right panel -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme working">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- <footer class="footer"> © 2018 Admin Pro by wrappixel.com </footer> -->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
       
    








                     </div>


