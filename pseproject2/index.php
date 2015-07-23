<?php include_once 'header.php'; ?>
<html>

            <!-- Page Content Start -->
            <!-- ================== -->

            <div class="wraper container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bg-picture" style="background-image:url('img/bg_6.jpg')">
                          <span class="bg-picture-overlay"></span><!-- overlay -->
                          <!-- meta -->
                          <div class="box-layout meta bottom">
                            <div class="col-sm-6 clearfix">
                              
                              <div class="media-body">
                                <h2 class="text-white mb-2 m-t-10 ellipsis">Activity Name</h2>
                                <h5 class="text-white">MyCityName</h5>
                              </div>
                            </div>
                            <div class="col-sm-6">

                              <div class="pull-right">
                                <div class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle btn btn-primary" href="#">Follow <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a data-toggle="tab" href="#edit-profile">Submit Event</a></li></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Unfollow</a></li>
                                    </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--/ meta -->
                        </div>
                    </div>
                </div>

                <div class="row m-t-30">
                    <div class="col-sm-12">
                        <div class="panel panel-default p-0">
                            <div class="panel-body p-0"> 
                                <ul class="nav nav-tabs profile-tabs">
                                    <li class="active"><a data-toggle="tab" href="#aboutme">About</a></li>
                                    <li class=""><a data-toggle="tab" href="#user-activities">Events</a></li>
                                    <li class=""><a data-toggle="tab" href="#edit-profile">Submit Event</a></li>
                                    <li class=""><a data-toggle="tab" href="#projects">Popular</a></li>
                                </ul>

                                <div class="tab-content m-0"> 

                                    <div id="aboutme" class="tab-pane active">
                                    <div class="profile-desk">
                                        <h1>Activity Name</h1>
                                        <span class="designation">Description</span>
                                        <p>
                                            Describe this Activity for users to see.
                                        </p>
                                        <a class="btn btn-primary m-t-20" href="#"> <i class="fa fa-check"></i>Join</a>

                                        <table class="table table-condensed">
                                            <thead>
                                                <tr>
                                                    <th colspan="3"><h3>Information</h3></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><b>Followers</b></td>
                                                    <td>
                                                    <a href="#" class="ng-binding">
                                                        234
                                                    </a></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Total Posts</b></td>
                                                    <td class="ng-binding">
                                                    <a data-toggle="tab" href="#user-activities">89</a>
													</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Date Created</b></td>
                                                    <td class="ng-binding">05/14/2014</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Location</b></td>
                                                    <td>
                                                    <a href="" class="ng-binding">
                                                        City Name
                                                    </a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end profile-desk -->
                                </div> <!-- about-me -->


                                <!-- Activities -->
                                <div id="user-activities" class="tab-pane">
                                    <div class="timeline-2">
                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted">Time Stamp</div>
                                                <p><a href="" class="text-info">User_name</a> Created the Activity<a href="#" class="text-success"> Activity Title</a>.</p>
                                                <p><em>"Activity Description "</em></p>
                                            </div>
                                        </div>
										
										<div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted">Time Stamp</div>
                                                <p><a href="" class="text-info">User_name</a> Created the Activity<a href="#" class="text-success"> Activity Title</a>.</p>
                                                <p><em>"Activity Description "</em></p>
                                            </div>
                                        </div>
										
										<div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted">Time Stamp</div>
                                                <p><a href="" class="text-info">User_name</a> Created the Activity<a href="#" class="text-success"> Activity Title</a>.</p>
                                                <p><em>"Activity Description "</em></p>
                                            </div>
                                        </div>
										
										<div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted">Time Stamp</div>
                                                <p><a href="" class="text-info">User_name</a> Created the Activity<a href="#" class="text-success"> Activity Title</a>.</p>
                                                <p><em>"Activity Description "</em></p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <!-- Submission -->
                                <div id="edit-profile" class="tab-pane">
                                    <div class="user-profile-content">
                                        
										<form class="cmxform form-horizontal tasi-form" id="commentForm" method="get" action="#" novalidate="novalidate">
                                        <div class="form-group ">
                                            <label for="title" class="control-label col-lg-2">Title </label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="title" name="title" type="text" placeholder = "Title" required="" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="cemail" class="control-label col-lg-2">Date</label>
                                            <div class="col-lg-10">
                                                <input class="form-control " id="date" type="date" name="date" placeholder = "mm/dd/yy" required="" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="curl" class="control-label col-lg-2">Location</label>
                                            <div class="col-lg-10">
                                                <input class="form-control " id="location" type="text-info" name="location" placeholder = "Street, City, Zip" required="" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="ccomment" class="control-label col-lg-2">Information</label>
                                            <div class="col-lg-10">
                                                <textarea class="form-control " id="ccomment" name="comment" placeholder = "Your Comment" required="" aria-required="true"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-success" type="submit">Submit</button>
                                                <button class="btn btn-default" type="button">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
										
                                    </div>
                                </div>


                                <!-- profile -->
                                <div id="projects" class="tab-pane">
                                    <div class="row m-t-10">
                                        <div class="col-md-12">
                                            <div class="portlet"><!-- /primary heading -->
                                                <div id="portlet2" class="panel-collapse collapse in">
                                                    <div class="portlet-body">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Project Name</th>
                                                                        <th>Start Date</th>
                                                                        <th>Due Date</th>
                                                                        <th>Status</th>
                                                                        <th>Assign</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Velonic Admin</td>
                                                                        <td>01/01/2015</td>
                                                                        <td>07/05/2015</td>
                                                                        <td><span class="label label-info">Work in Progress</span></td>
                                                                        <td>Coderthemes</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>Velonic Frontend</td>
                                                                        <td>01/01/2015</td>
                                                                        <td>07/05/2015</td>
                                                                        <td><span class="label label-success">Pending</span></td>
                                                                        <td>Coderthemes</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>Velonic Admin</td>
                                                                        <td>01/01/2015</td>
                                                                        <td>07/05/2015</td>
                                                                        <td><span class="label label-pink">Done</span></td>
                                                                        <td>Coderthemes</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4</td>
                                                                        <td>Velonic Frontend</td>
                                                                        <td>01/01/2015</td>
                                                                        <td>07/05/2015</td>
                                                                        <td><span class="label label-purple">Work in Progress</span></td>
                                                                        <td>Coderthemes</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5</td>
                                                                        <td>Velonic Admin</td>
                                                                        <td>01/01/2015</td>
                                                                        <td>07/05/2015</td>
                                                                        <td><span class="label label-warning">Coming soon</span></td>
                                                                        <td>Coderthemes</td>
                                                                    </tr>
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- /Portlet -->
                                        </div>
                                    </div>
                                </div>
                            </div>
             
                        </div> 
                    </div>
                </div>
            </div>
        </div>
		<?php include_once "footer.php";?>
		</html>
		
		
	