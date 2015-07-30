<?php include_once 'header.php'; ?>

<html>
	<body>
	<div class="wraper container-fluid">
	 <div class="row">
                    <div class="col-sm-12">
                        <div class="bg-picture" style="background-image:url('img/bg_6.jpg')">
                          <span class="bg-picture-overlay"></span><!-- overlay -->
                          <!-- meta -->
                          <div class="box-layout meta bottom">          
								<center><div class="text-vertical-center">
								<h1>Rendezvous</h1>
								<h3>Connecting through the outdoors</h3>
								<br>
								<a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
								</center>
                            
							 </div>
                          </div>
                          <!--/ meta -->
                        </div>
                    </div>
                </div>
				</div>
    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="lead">We are a Social Network for those who would like to connect through Hobbies and Outdoor Activities.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Our Services</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa ion-ios7-people fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Connecting</strong>
                                </h4>
                                <p><b>Connect with people around your area who share the same hobbies.</b></p>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa  fa-bicycle fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Join Activities</strong>
                                </h4>
                                <p><b>Join Activities and connect with people who share same interests.</b></p>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa  fa-calendar fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Join Events</strong>
                                </h4>
                                <p><b>Join events that other users have posted and make new friends.</b></p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa ion-android-add-contact fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Create Events</strong>
                                </h4>
                                <p><b>Create your own events and see how many users show up.</b></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>


    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
            
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                   
                    <p>777 Glades Rd<br>Boca Raton, FL 33431</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (754)245-3574</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">fariasc2013@fau.edu</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">   
                        <li>
                            <a href="https://github.com/Ninjinkai/Couch-Level-Project"><i class="fa fa-github fa-fw fa-3x"></i></a>
                        </li>
                        
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Rendezvous 2015</p>
                </div>
            </div>
        </div>


    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>
			
			
<?php include_once "footer.php";?>
</html>
		
		
	