<?php
function activites($type,$id){
	include "php/db_connect.php";
	$list = '';
	if($type == "act" && $id == 0){
		$query = "SELECT * FROM activities";
		$sql = $db->query($query);
		
		while($row = $sql->fetch_array()){
			$id = $row['id'];
			$name = $row['name'];
			$desc = $row['description'];
			$list .='<li><a href="activities.php?actID='. $id.'">'.$name.' '.$desc.'</a></li>';
		}
	} else if($type == "act"){
		$actQ = "SELECT actlist FROM users2 WHERE id = $id";
		
		$q = $db->query($actQ);
		$idArray = $q->fetch_array();
		if($idArray['actlist'] != Null){
			$query = "SELECT * FROM activities WHERE id IN (".$idArray['actlist'].")";
			$sql = $db->query($query);
			while($row = $sql->fetch_array()){
				$id = $row['id'];
				$name = $row['name'];
				$desc = $row['description'];
				$list .='<li><a href="activities.php?actID='. $id.'">'.$name.' '.$desc.'</a></li>';
			}
		} else {
			$list .='<li><a href="activities.php?actID=0">No joined Activities.</a></li>';
		}
	} else if($type == "eve"){
		$query = "SELECT * FROM events WHERE act_link = $id ORDER BY uploaddate ASC";
		$sql = $db->query($query);

		while($row = $sql->fetch_array()){
			$eveID = $row['id'];
			$name = $row['ename'];
			$desc = $row['description'];
			$creID = $row['user'];
			$time = $row['uploaddate'];
			if(isset($_SESSION['id'])){
				
				$list .='<div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted">'.$time.'</div>
                                                <p><a href="" class="text-info">'.getUserName($creID).'</a> Created the Activity<a href="event.php?eveID='.$eveID.'" class="text-success"> '.$name.'</a>.</p>
                                                <p><em>"'.$desc.'"</em></p>
                                            </div>
                                        </div>';
			} else {
				$list .='<div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted">'.$time.'</div>
                                                <p><a href="" class="text-info">'.getUserName($creID).'</a> Created the Activity<a href="event.php?eveID='.$eveID.'" class="text-success"> '.$name.'</a>.</p>
                                                <p><em>"'.$desc.'"</em></p>
                                            </div>
                                        </div>';
			}
		}	
		
	}
	echo $list;
}

function getUserData($id){
	include "php/db_connect.php";
	$q = "SELECT id, username FROM users2 WHERE id = $id";
	$sql = $db->query($q);
	$data = $sql->fetch_array();
	$id = $data['id'];
	$username = $data['username'];
	$dataArray = array($id,$username);
	return $dataArray;
}

function getUserName($id){
	include "php/db_connect.php";
	$q = "SELECT username FROM users2 WHERE id = $id";
	$sql = $db->query($q);
	$data = $sql->fetch_array();
	$username = $data['username'];
	return $username;
}

function rsvp($id){
	include "php/db_connect.php";
	$q = "SELECT rsvp FROM events WHERE id = $id";
	$sql = $db->query($q);
	$data = $sql->fetch_array();
	$rsvp = $data['rsvp'];
	
	if($rsvp != Null){
		$rsvpArray = explode(" ", $rsvp);
		if(in_array($_SESSION['id'],$rsvpArray)){
			return '<div id="rsvp" class="rsvpG">already going</div>';
		} else {
			return '<div id="rsvp" class="rsvp" onclick="rsvp('.$id.','.$_SESSION['id'].')">join</div>';
		}
	} else {
		return '<div id="rsvp" class="rsvp" onclick="rsvp('.$id.','.$_SESSION['id'].')">join</div>';
	}
}

function checkEvent($userID, $eveID){
	// Check if  user is part of the event already.
}

function checkActivit($userID, $actID){
	// Check if  user is part.
}

function countFollowers($actID){
	include "php/db_connect.php";
	$q = "SELECT id FROM users2 WHERE (actlist LIKE '%$actID,%' OR actlist LIKE '%$actID')";
	$sql = $db->query($q);
	$count = $db->affected_rows;
	
	echo $count;
}

function countPost($actID){
	include "php/db_connect.php";
	$q = "SELECT * FROM events WHERE act_link = $actID";
	$sql = $db->query($q);
	$count = $db->affected_rows;
	
	echo $count;
}				

function myEvents($userID){
	include "php/db_connect.php";
	$q = "SELECT id, ename FROM events WHERE user = $userID";
	$sql = $db->query($q);
	$count = $db->affected_rows;
	if($count > 0 ){
		$list = "";
		while($row = $sql->fetch_array()){
			$id = $row['id'];
			$name = $row['ename'];
			$list .='<li><a href="event.php?eveID='. $id.'">'.$name.'</a></li>';
		}
	echo $list;
	} else {
		echo $list = "<li><a>No events Created</a></li>";
	}
}

function joinedEvents($userID){
	include "php/db_connect.php";
	$q = "SELECT id, ename FROM events WHERE rsvp LIKE '%$userID%'";
	$sql = $db->query($q);
	$count = $db->affected_rows;
	if($count > 0 ){
		$list = "";
		while($row = $sql->fetch_array()){
			$id = $row['id'];
			$name = $row['ename'];
			$list .='<li><a href="event.php?eveID='. $id.'">'.$name.'</a></li>';
		}
	echo $list;
	} else {
		echo $list ="<li><a>No events joined</a></li>";
	}
}				
?>