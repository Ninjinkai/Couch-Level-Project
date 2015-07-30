<?php include_once "functions.php";?>
<?php
$eveID = $_GET['eveID'];

	include "php/db_connect.php";
	$query = "SELECT * FROM events WHERE id = $eveID";
	$sql = $db->query($query);
	$list = '';
	$act = $sql->fetch_array();
	$name = $act['ename'];
	$desc = $act['description'];
	$cdate = $act['uploaddate'];
	$loct = $act['loct'];
	$rsvp = $act['rsvp'];
	if($rsvp != Null){
		$rsvpArray = explode(" ", $rsvp); 
		$rsvpCount = count($rsvpArray);
	} else {
		$rsvpCount = 0;
	}
	$photo = $act['photoname'];
	if($photo == Null){
		$photoLo = "media/events/0/default.jpg";
	} else {
		$photoLo = "media/events/$eveID/$photo";
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
                                <h5 class="text-white"><?php echo $loct;?></h5>
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
                                    <li class="active"></li>
                                </ul>

                                <div class="tab-content m-0"> 

                                    <div id="aboutme" class="tab-pane active">
                                    <div class="profile-desk">
                                        <h1><?php echo $name;?></h1>
                                        <span class="designation">Event Description</span>
                                        <p>
                                            <?php echo $desc;?>
                                        </p>
										<?php 
                                        echo '<a id="thisEvent" class="btn btn-primary m-t-20" onclick="rsvp('.$eveID.','.$_SESSION['id'].')"> <i class="fa fa-check"></i>Join</a>';
										?>
                                        <table class="table table-condensed">
                                            <thead>
                                                <tr>
                                                    <th colspan="3"><h3>Information</h3></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><b>Going</b></td>
                                                    <td>
                                                    <a href="#" class="ng-binding">
                                                        <?php echo $rsvpCount;?>
                                                    </a></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Event Date</b></td>
                                                    <td class="ng-binding"><?php echo $cdate;?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Location</b></td>
                                                    <td>
                                                    <a href="" class="ng-binding">
                                                        <?php echo $loct;?>
                                                    </a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end profile-desk -->
                                </div> <!-- about-me -->
                                
                            </div>
             
                        </div> 
                    </div>
                </div>
            </div>
        </div>



        <?php include_once "footer.php";?>

    </body>

    </html>