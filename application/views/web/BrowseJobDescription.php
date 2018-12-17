<section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 order-lg-2">
                            <!-- Post-->
                            <article class="post">
                              <img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/logo-text.png" alt="homepage" class="dark-logo" />


                                <div class="post-wrapper">
                                    <br>
                                    <div class="post-header">
                                        <h1 class="post-title"><?=$browsejob[0]['JobTitle']  ?> </h1>
                                         <li><?=$browsejob[0]['CreatedAt']  ?></li>
                                    </div>
                                    <div class="post-content">
                                        <h6>Category: <?=$browsejob[0]['Category']  ?> </h6>
                                        
                                        <br>
                                    </div>
                                    <br>
                                     <div class="post-content">
                                        <h5> JOB DESCRIPTION:</h5>
                                         <?=$browsejob[0]['JobDescription']  ?>
                                    </div>
                                    <br>
                                     <div class="post-content"><h5>WORK LOCATION:</h5></div>
                                     <br>
                                     <div class="post-content"><h5> COMPANY OVERVIEW:</h5></div>
                                      <br>    
                                     <div class="post-content"><h5> COMPANY PHOTOS:</h5></div>
                                        
                                        <div class="post-footer">
                                        <div class="post-tags"><a href="#">Lifestyle</a><a href="#">Music</a><a href="#">News</a><a href="#">Travel</a></div>
                                    </div>
                                </div>
                            </article>
                             <div class="form-submit col-md-12">
                                            <button class="btn btn-dark" type="submit">Apply Job</button>
                                        </div>
                        </div>
                        <div class="col-lg-4 order-lg-1">
                            <div class="sidebar">

                                <!-- Search widget-->
                                <aside class="widget widget-search">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Type Search Words">
                                        <button class="search-button" type="submit"><span class="fas fa-search"></span></button>
                                    </form>
                                </aside>

                                <!-- Categories widget-->
                                <aside class="widget widget-categories">
                                    <div class="widget-title">
                                        <h6>Companies</h6>
                                    </div>
                                    <ul>
                                        <li><a href="#">  <?=$browsejob[0]['JobTitle']  ?><span class="float-right">1</span></a></li>
                                    </ul>
                                </aside>

                                <!-- Recent entries widget-->
                              <aside class="widget widget-recent-entries-custom">
                                    <div class="widget-title">
                                        <h6>Recent Jobs</h6>
                                    </div>
                                    <ul>

                                        <?php
                                        if ($browsejob1->num_rows() > 0) {
                                            foreach ($browsejob1->result() as $row ) { ?>
                                        <li class="clearfix">
                                            <div class="wi"><a href="#"><img src="<?php echo base_url(); ?>themes/boomerang/
/images/widgets/1.jpg" alt=""></a></div>
                                            <div class="wb"><a href="#"><?=$row->JobDescription;?></span></div>
                                        </li>

                                        <?php
                                            }
                                        }
                                        ?>           
                                </aside>

                                <!-- Twitter widget-->
                                

                                <!-- Tags widget-->
                                <aside class="widget widget-tag-cloud">
                                    <div class="widget-title">
                                        <h6>Tags</h6>
                                    </div>
                                    <div class="tag-cloud"><a href="#">e-commerce</a><a href="#">portfolio</a><a href="#">responsive</a><a href="#">bootstrap</a><a href="#">business</a><a href="#">corporate</a></div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


          