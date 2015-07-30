<?php
session_start();
include "php/db_connect.php";
 // RSVP eveID,userID
 if(isset($_GET['rsvp'])){
	$eveID = $_GET['eveID'];
	$userID = $_GET['userID'];
		
		
	$q = "SELECT rsvp FROM events WHERE id = $eveID";
	$sql = $db->query($q);
	$data = $sql->fetch_array();
	$rsvp = $data['rsvp'];
	
	if($rsvp != Null){
		$rsvpArray = explode(" ", $rsvp);
		if(in_array($userID,$rsvpArray)){
			echo "You are going to this event already!";
		} else {
			array_push($rsvpArray, $userID);
			$eveImplode =implode(" ",$rsvpArray);
			$newUserQ = "UPDATE events SET rsvp = '$eveImplode' WHERE id = $eveID";
			$db->query($newUserQ);
			echo "Thank You for your rsvp.";
		}
	} else {
		$newUserQ = "UPDATE events SET rsvp = '$userID' WHERE id = $eveID";
		$db->query($newUserQ);
		echo "Thank You for your rsvp.";
	}
 }
 
 if(isset($_GET['act'])){
	$actID = $_GET['actID'];
	$userID = $_GET['userID'];
		
		
	$q = "SELECT actlist FROM users2 WHERE id = $userID";
	$sql = $db->query($q);
	$data = $sql->fetch_array();
	$actList = $data['actlist'];

	
	if($actList != Null){
		$actArray = explode(",", $actList);

		if(in_array($actID,$actArray)){
			echo "You have joined this activity!";
		} else {
			array_push($actArray, $actID);
			$actImplode =implode(",",$actArray);
			$newUserQ = "UPDATE users2 SET actlist = '$actImplode' WHERE id = $userID";
			$db->query($newUserQ);
			echo "Thank You for joining.";
		}
	} else {
		// If the very first user.
		$newUserQ = "UPDATE users2 SET actlist = '$actID' WHERE id = $userID";
		$db->query($newUserQ);
		echo "Thank You for joining.";
	}
 }
 
 if(isset($_GET['event'])){
	$actID = $_GET['actID'];
	$title = $_GET['title'];
	$date = $_GET['date'];
	$loc = $_GET['loc'];
	$comment = $_GET['comment'];
	$newEvent = "INSERT INTO events (user, ename, description, loct, act_link, uploaddate) 
				VALUES ('".$_SESSION['id']."', '$title', '$comment', '$loc' , '$actID' , '$date')";
	$db->query($newEvent);
	
	$newEId = $db->insert_id;
					
	mkdir("media/events/".$newEId, 0777);
	echo '<div>Your event has been created. Thank You!.</div>
		
			<div id="output"></div>';
			
			
 }
?>