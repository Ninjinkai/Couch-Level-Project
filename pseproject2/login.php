<?php include_once 'header.php'; ?> 
    <body>

        <div class="wrapper-page animated fadeInDown">
            <div class="panel panel-color panel-primary">
                <div class="panel-heading"> 
                   <h3 class="text-center m-t-10"> Sign In to <strong>Rendezvous</strong> </h3>
                </div> 

                <div class="form-horizontal m-t-40">
                                            
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" placeholder="Username" id="lUser" name="user_name" required="">
                        </div>
                    </div>
                    <div class="form-group ">
                        
                        <div class="col-xs-12">
                            <input class="form-control" type="password" id="lPass" name="Password" placeholder="Password" required="">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label class="cr-styled">
                                <input type="checkbox" checked>
                                <i class="fa"></i> 
                                Remember me
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group text-right">
						<div class="col-xs-2">
                            <a class="btn btn-purple w-md"  type="submit" href = "index.php">cancel</a>
                        </div>
                        <div class="col-xs-7">
                            <button class="btn btn-purple w-md" id="loginBT" type="submit">Log In</button>
                        </div>
                    </div>
                    <div class="form-group m-t-30">
                        <div class="col-sm-7">
                            <a href="#"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="registration.php">Create an account</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
	<?php include_once "footer.php";?>
    </body>



 