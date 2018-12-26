<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=249154808587646&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <section id="wrapper" class="login-register login-sidebar" style="background-image:url(<?php echo base_url(); ?>themes/admin-pro/assets/images/background/login-register.jpg);">
        <div class="login-box card">
            <div class="card-body">

                <form class="form-horizontal form-material" id="loginform" autocomplete="nope" action="<?php echo base_url(); ?>admin/login/auth">

                    <a href="javascript:void(0)" class="text-center db"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/logo-icon.png" alt="Home" /><br/><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/logo-text.png" alt="Home" /></a>
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" name="email" required="" autocomplete="off" spellcheck="false" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" autocomplete="off" required="" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary float-left p-t-0">
                                <input id="checkbox-signup" type="checkbox" class="filled-in chk-col-light-blue">
                                <label for="checkbox-signup"> Remember me </label>
                            </div>
                            <a href="javascript:void(0)" id="to-recover" class="text-muted float-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase btn-rounded" type="submit" id="login-btn">Log In</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                            <div class="social">
                                <div class="row">
                                    <div class="col-sm-6">
                                            <fb:login-button 
                                              scope="public_profile,email"
                                              onlogin="checkLoginState();">
                                            </fb:login-button>                                         
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fab fa-google-plus-g"></i> </a>  -->
                                        <div class="g-signin2" data-onsuccess="onSignIn" data-width="100%"></div>                                     
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            Don't have an account? <a href="pages-register2.html" class="text-primary m-l-5"><b>Sign Up</b></a>
                        </div>
                    </div>
                </form>
                <form class="form-horizontal" id="recoverform" action="https://wrappixel.com/demos/admin-templates/admin-pro/minimal/index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Recover Password</h3>
                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>