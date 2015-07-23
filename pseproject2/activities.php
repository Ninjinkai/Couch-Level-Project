<?php include_once "functions.php";?>
<?php
$actID = $_GET['actID'];
$actlist = "";
	include "php/db_connect.php";
	$query = "SELECT * FROM activities WHERE id = $actID";
	$sql = $db->query($query);
	$list = '';
	$act = $sql->fetch_array();
	$name = $act['name'];
	$desc = $act['description'];
	
	$photo = $act['photo'];
	if($photo == Null){
		$photoLo = "media/activities/0/default.jpg";
	} else {
		$photoLo = "media/activities/$actID/$photo";
	}
?>

   
<?php include_once 'header.php'; ?>
    <body>
	
        <div class="wraper container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bg-picture" style="background-image:url('<?php echo $photoLo;?>')">
                          <span class="bg-picture-overlay"></span><!-- overlay -->
                          <!-- meta -->
                          <div class="box-layout meta bottom">
                            <div class="col-sm-6 clearfix">
                              
                              <div class="media-body">
                                <h2 class="text-white mb-2 m-t-10 ellipsis"><?php echo $name;?></h2>
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
                                    <li class=""><a id="recall" data-toggle="tab" href="#user-activities">Events</a></li>
                                    <li class=""><a data-toggle="tab" href="#edit-profile">Submit Event</a></li>
                                    <li class=""><a data-toggle="tab" href="#projects">Popular</a></li>
                                </ul>

                                <div class="tab-content m-0"> 

                                    <div id="aboutme" class="tab-pane active">
                                    <div class="profile-desk">
                                        <h1><?php echo $name;?></h1>
                                        <span class="designation"><?php echo $desc;?></span>
                                        <p>
                                            Describe this Activity for users to see.
                                        </p>
										<?php 
                                        echo '<a id="thisAct" class="btn btn-primary m-t-20" onclick="joinAct('.$actID.','.$_SESSION['id'].')"> <i class="fa fa-check"></i>Join</a>';
										?>
                                       
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
                                                        <?php echo countFollowers($actID);?>
                                                    </a></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Total Posts</b></td>
                                                    <td class="ng-binding">
                                                    <a data-toggle="tab" href="#user-activities"><?php echo countPost($actID);?></a>
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
                                        <?php echo activites("eve", $actID);?>
                                        
                                    </div>
                                </div>

                                <!-- Submission -->
                                <div id="edit-profile" class="tab-pane">
                                    <div class="user-profile-content">
                                        
										<div class="cmxform form-horizontal tasi-form" id="commentForm" method="get" action="#" novalidate="novalidate">
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
                                                <textarea class="form-control " id="comment" name="comment" placeholder = "Your Comment" required="" aria-required="true"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
												<input id="actID" type="hidden" value="<?php echo $actID;?>">
                                                <button id="submitEvent" class="btn btn-success" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
										
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

    </body>

    </html>