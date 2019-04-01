<?php include('server.php'); ?>
<?php $pagename = "register page"; include( 'header.inc'); ?>

            <!--sign in form-->            
                <section >
                    <div class="container">
                        <div class="signup-content">
                            <div class="col-md-6">
                                <h2 class="form-title">Register</h2>
                                <form method="post" class="register-form" action = "register.php">                                    
                                    <div>
										<?php include('errors.php') ?>
									</div>
									<div >
                                        <label for="name"></label>
                                        <input type="text" name="username" class="input" placeholder="Your Username"/>
                                    </div><br>
                                    <div >
                                        <label for="email"></label>
                                        <input type="email" name="email" class="input" placeholder="Your Email"/>
                                    </div><br>
                                    <div >
                                        <label for="pass"></label>
                                        <input type="password" name="password1" class="input" placeholder="Password"/>
                                    </div><br>
                                    <div >
                                        <label for="re-pass"></label>
                                        <input type="password" name="password2" class="input" placeholder="Repeat your password"r/>
                                    </div><br>
                                    <div >
                                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                                        <label for="agree-term" ><span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                                    </div><br>
                                    <div >
                                        <input type="submit" name="register" class="form-submit" value="Register"/>
									</div><br>
									
                                </form>
                            </div>
                            <span class="signup-image">
                                <figure><img src="elephantPhotos/post18.jpg" alt="sign up image"></figure>
                                <a href="signin.php" class="signup-image-link">I am already member?</a>
                            </span>
                            
                        </div>
                    </div>
                </section>

            <?php include('footer.inc')?>
    </body>
</html> 