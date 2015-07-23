<?php include_once 'header.php'; ?>
    
	<body>
        <div class="wrapper-page animated fadeInDown">
            <div class="panel panel-color panel-primary">
                <div class="panel-heading"> 
                   <h3 class="text-center m-t-10"> Create a new Account </h3>
                </div> 
				
                <div class="form-horizontal m-t-40" >
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" id="nEmail" name="Email" placeholder="Email" required="">
                        </div>
                    </div>
                    
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control " type="text" placeholder="Username" id="nUser" name="user_name" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control " type="password" id="nPass" name="Password" placeholder="Password" required="">
                        </div>
                    </div>
					
					<div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control " type="password" id="nPass2" name="Rpassword" placeholder="Confirm Password" required="">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label class="cr-styled">
                                <input type="checkbox" checked>
                                <i class="fa"></i> 
                                 I accept <strong><a href="#">Terms and Conditions</a></strong>
                            </label>
                        </div>
                    </div>                   
                    <div class="form-group text-right">
						<div class="col-xs-2">
                            <a class="btn btn-purple w-md"  type="submit" href = "index.php">cancel</a>
                        </div>
						<div class="col-xs-7">
                            <a class="btn btn-purple w-md" id="signupBT" type="submit" href = "login.php">Register</a>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-12 text-center">
                            <a href="login.php">Already have account?</a>
                        </div>
                    </div>
                </div>                                  
                
            </div>
        </div>
		<?php include_once "footer.php";?>
    </body>

