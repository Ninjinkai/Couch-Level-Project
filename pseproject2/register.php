<?php
require_once "php/db_connect.php";
$ERROR = "";

// Login Section
if(isset($_GET['logIn'])){
	@session_start();
	$user_name = stripslashes($_GET['username']);
	$user_name = strip_tags($user_name);
	$user_name = $db->real_escape_string($user_name);
	$password = str_replace("[^A-Za-z0-9]", "", $_GET['pass']);


		$query = "SELECT * FROM users2 WHERE (username='$user_name' AND password='$password')";

		$sql = $db->query($query);
		$login_check = $db->affected_rows;
		//echo $login_check;
		if($login_check > 0){
			while($row = $sql->fetch_array()){
				// Get member ID into a session variable
				$id = $row["id"];
				//session_register('id');
				$_SESSION['id'] = $id;

				// Get Name
				$name = $row['username'];
				//session_register('userNAME');
				$_SESSION['username'] = $name;
				
				$ERROR = "redirectTo";
				//header("location: profile.php");
				//exit();
			}
		} else {
			$ERROR = "no user";
		}
		echo $ERROR;	
	$db->close();
}

// Register Section
if(isset($_GET['register'])){
	echo "IN";
	$time = time();
	$email = $_GET['email'];
	$email = $db->real_escape_string($email);
	$uName = $_GET['username'];
	$uName = $db->real_escape_string($uName);
	$pass = $_GET['pass'];
	$pass = $db->real_escape_string($pass);
	
	//echo $email.' '.$uName.' '.$pass;

	// Checks for duplicates user names
	$dubQ = "SELECT username From users2 WHERE username = '$uName'";
	$dub = $db->query($dubQ);
	$dubUserCount = $dub->num_rows;
	
	// Checks for duplicates user names
	$dubQ = "SELECT email From users2 WHERE email = '$email'";
	$dub = $db->query($dubQ);
	$dubEmailCount = $dub->num_rows;
	
	
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		  $ERROR .= "E-mail is not valid<br/>";
		}
		if($dubUserCount > 0){
			$ERROR .= 'This User name is taken<br />';
		} 
		if($dubEmailCount > 0){
			$ERROR .= 'This email is in used<br />';
		} 
		if($ERROR == ''){
			$password = $pass;
			$newUserQ = "INSERT INTO users2 (username, email, password, signup) VALUES ('$uName', '$email', '$password', '$time')";
			$db->query($newUserQ);
			$newId = $db->insert_id;
			
			$newPort = "INSERT INTO profileSetting (userID, fullName) VALUES ('$newId', '$uName')";
			$db->query($newPort);
			
			mkdir("users/".$newId, 0777);
			$ERROR = "yeah<br/>";
			$db->close();
			//header("Location: index.php");
			//die();
		}
		echo $ERROR;
}
?>