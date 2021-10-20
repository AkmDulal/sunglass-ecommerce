<?php include_once('./inc/header.php')?>

<div class="login_register_wrap section">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-xl-6 col-md-10">
                 <div class="login_wrap">
            		 <div class="padding_eight_all bg-white">
                         <div class="heading_s1">
                             <h3>Login </h3>
                         </div>
                         <form method="post">
                             <div class="form-group">
                                 <input type="text" required="" class="form-control" name="email" placeholder="Your Email" />
                             </div>
                             <div class="form-group">
                                 <input class="form-control" required="" type="password" name="password" placeholder="Password" />
                             </div>
                             <div class="login_footer form-group">
                                 <div class="chek-form" style="margin-left: 20px;">
                                     <div class="custome-checkbox">
                                         <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" />
                                         <label class="form-check-label" for="exampleCheckbox1"><span>Remember me </span></label>
                                     </div>
                                 </div>
                                 <a href="#">Forgot password? </a>
                             </div>
                             <div class="form-group">
                                 <button type="submit" class="btn btn-fill-out btn-block" name="login">Log in </button>
                             </div>
                         </form>
                         <div class="different_login">
                             <span> or </span>
                         </div>
                         <ul class="btn-login list_none text-center">
                             <li><a href="#" class="btn btn-facebook"><i class="ion-social-facebook"></i>Facebook </a></li>
                             <li><a href="#" class="btn btn-google"><i class="ion-social-googleplus"></i>Google </a></li>
                         </ul>
                         <div class="form-note text-center" style="padding-top: 15px;">Don't Have an Account?  <a href="signup.php">Sign up now </a></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
<?php include_once('./inc/footer.php')?>