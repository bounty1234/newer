
<?php 
$page_title = 'Sign Up';


include 'includes/auth_header.php';?>
   

                <form class="form-horizontal form-material" id="loginform" action="<?=domain;?>/register/register" method="post">
                    <h3 class="box-title mb-3">Sign Up</h3>


                    <div class="form-group">
                        <input type="" required="" class="form-control" value="<?=Input::old('username');?>" name="username" placeholder="User Name *">
                        <span class="text-danger"><?=$this->inputError('username');?></span>
                    </div>

                    <div class="form-group">
                        <input type="" required="" class="form-control" value="<?=Input::old('firstname');?>" name="firstname" placeholder="First Name *">
                        <span class="text-danger"><?=$this->inputError('firstname');?></span>
                    </div>

                    <div class="form-group">
                        <input type="" required="" class="form-control" value="<?=Input::old('lastname');?>" name="lastname" placeholder="Last Name *">
                        <span class="text-danger"><?=$this->inputError('lastname');?></span>
                    </div>


                    <div class="form-group">
                        <input type="email" required="" class="form-control" value="<?=Input::old('email');?>" name="email" placeholder="Email *">
                        <span class="text-danger"><?=$this->inputError('email');?></span>
                    </div>


                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-btn">
                              <span class="btn btn-default" style="border: ;">
                                +234
                              </span>
                            </div>


                        <input type="" required="" class="form-control" value="<?=Input::old('phone');?>" name="phone" 
                        maxlength="10" minlength="10" placeholder=" Phone (8123456789) *"
                        >
                    </div>
                        <span class="text-danger"><?=$this->inputError('phone');?></span>
                    </div>
                                        
                    <div class="form-group">
                        <div class="input-group">
                            <input required="required" type="password" placeholder="Password *" class="form-control" id="password" name="password">
                            <div class="input-group-btn">
                              <span class="btn btn-default" style="border:; cursor: pointer;" onclick="viewPassword()">
                                <i class="fa fa-eye-slash" style="font-size: 12px"></i>
                              </span>
                            </div>
                        </div>
                            <span class="text-danger"><?=$this->inputError('password');?></span>
                        <script>
                            function viewPassword(){
                                $password = document.getElementById('password');
                                if ($password.type == 'password') {
                                    $password.type = 'text';
                                }else{
                                    $password.type = 'password';           
                                }
                            }
                        </script>
                    </div>


                    <div class="form-group">
                        <input type="password" required="" class="form-control" value="<?=Input::old('confirm_password');?>" name="confirm_password" placeholder="Confirm Password *">
                        <span class="text-danger"><?=$this->inputError('confirm_password');?></span>
                    </div>
                    

        




<?php



//include 'app/others/intl-telNumbers/custom.php';


if (isset($_COOKIE['referral'])) {


$introduced_by = $_COOKIE['referral'];

$readonly      ="readonly='readonly'";


}else{

$introduced_by = Input::old('introduced_by');


}
;?>


                    <div class="form-group">
                        <input type="text"  name="introduced_by" value="<?=$introduced_by;?>" class="form-control" placeholder="Your Referral" />
                         <span class="text-danger"><?=$this->inputError('introduced_by');?></span>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary float-left pt-0">
                                <input required id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Accept Terms </label>
                            </div> 
                        </div>
                    </div>

<!-- 
                          <div class="g-recaptcha form-group" data-sitekey="<?=SiteSettings::site_settings()['google_re_captcha_site_key'];?>"></div>
 -->
                          <small class="text-danger">* Fields is required</small>
                    <div class="form-group text-center mt-3">
                        <div class="col-xs-12">
                            <button class="btn btn-danger btn-lg btn-block text-uppercase waves-effect waves-light"
                             type="submit">Sign Up</button>
                        </div>
                    </div>


                    <div class="form-group mb-0">
                        <div class="col-sm-12 text-center">
                            <p>Already have an account? <a href="<?=domain;?>/login" class="text-success ml-1"><b>Sign In</b></a></p>
                        </div>
                    </div>
                </form>




<?php include 'includes/auth_footer.php';?>
