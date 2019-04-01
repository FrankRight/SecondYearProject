<?php include('server.php') ?>
<?php $pagename = "homepage"; include( 'header.php'); ?>
        <!-- Sign in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="wid">
                    <span>
                        <figure><img src="elephantPhotos/post16.jpg" alt="sign up image"></figure>
                        <a href="register.php" >Create an account</a>
					</span>
					
                    <span class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form" action = "signin.php">
							<div >
								<?php include('errors.php') ?>
							</div>
                            <div class="form-group">
                                <label for="your_name"></label>
                                <input type="text" name="username" class="input" placeholder="Your username" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"></label>
                                <input type="password" name="password" class="input" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" />
                                <label for="remember-me" >Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" class="form-submit" value="Log in" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>/>
                            </div>
                        </form>

					</span>
					
                </div>
            </div>
         </section>

		</div>
		
		<?php include('footer.inc')?>

    </body>
</html>