<form action="" method="post" enctype="multipart/form-data" class = 'main-form full'>
<div class="ptb-100">
					<div class="container">
						<div class="row justify-content-center">
				            <div class="col-xl-6 col-lg-8 col-md-8 ">
				              <form class="main-form full">
				                <div class="row">
				                  <div class="col-12 mb-20">
				                    <div class="heading-part align-center">
				                      <h2 class="heading">Customer Login</h2>
				                    </div>
				                  </div>
				                  <div class="col-12">
				                    <div class="form-group">
				                      <label for="login-email">Username</label>
				                      <input id="login-email" type="text" required="" placeholder="Enter your Username" name = 'E_username'>
				                    </div>
				                  </div>
				                  <div class="col-12">
				                    <div class="form-group">
				                      <label for="login-pass">Password</label>
				                      <input id="login-pass" type="password" required="" placeholder="Enter your Password" name = 'E_password'>
				                    </div>
				                  </div>
				                  <div class="col-12">
				                  	<div class="mb-30 dit w-100">
					                    <div class="check-box left-side mt-15"> 
					                      <span>
					                        <input type="checkbox" name="remember_me" id="remember_me" class="checkbox">
					                        <label for="remember_me" class="mb-0">Remember Me</label>
					                      </span>
					                    </div>
					                    <button name="login" type="submit" class="btn-color right-side" >Log In</button>
				                    </div>
				                  </div>
                                  <div class="col-12"> 
				                  	<div class="align-center mt-20" style="color:red;">
				                  		<?php echo $warning?>
				                  	</div>
				                  </div>
				                  <div class="col-12"> 
				                  	<hr>
				                  	<div class="align-center mt-20">
				                  		<a title="Forgot Password" class="link forgot-password mtb-20" href="#">Forgot your password?</a>
				                  	</div>
				                  </div>
				                  <div class="col-12">
				                    <div class="new-account align-center mt-20"> <span>Don't have an account?</span> 
				                    	<a class="link" title="Create New Account" href="register.html">Create New Account</a> </div>
				                  </div>
				                </div>
				              </form>
				            </div>
				        </div>
					</div>
				</div>
</form>