//
 


// Make this function external like I did in the video
function _(x){
	return document.getElementById(x);
}
// Login
$("#loginBT").click(function() {
	console.log("calling");
	var username = document.getElementById("lUser").value;
	var pass = document.getElementById("lPass").value;
	if(username == "" || pass == ""){
		error("Fill in all fileds",0);
		return 0;	
	}
	$.ajax({
		method: "GET",
		url: "register.php?logIn=new",
		data:{ username: username,  pass: pass }
	}).done(function( msg ){
		if(msg == "redirectTo"){
			window.location = "index.php"
		} else {
			error(msg,0);
		}
	});
	
});

// Sign Up
$("#signupBT").click(function() {
	console.log("called");
	var email = document.getElementById("nEmail").value;
	var username = document.getElementById("nUser").value;
	var pass = document.getElementById("nPass").value;
	var pass2 = document.getElementById("nPass2").value;
	
	if(email == "" || username == "" || pass == "" || pass2 == ""){
		error("Fill in all fileds",0);
		return 0;
	}
	if(!validateEmail(email)){
		error("invalid email");
		return 0;
	}
	
	if(pass != pass2){
		error("Password doesn't match!");
		return 0;
	}
	
	$.ajax({
		method: "GET",
		url: "register.php?register=new",
		data:{ email: email, username: username, pass: pass}
	}).done(function( msg ){
		error(msg,1);
	});
});

// Submit Event
$("#submitEvent").click(function() {

	var actID = document.getElementById("actID").value;
	var title = document.getElementById("title").value;
	var date = document.getElementById("date").value;
	var loc = document.getElementById("location").value;
	var comment = document.getElementById("comment").value;
	
	if(title == "" || date == "" || loc == "" || comment == ""){
		error("Fill in all fileds",0);
		return 0;
	}
	
	$.ajax({
		method: "GET",
		url: "action.php?event=new",
		data:{ actID: actID, title: title, date: date, loc: loc, comment: comment}
	}).done(function( msg ){
		error(msg,1);
	});
});


	
function error(msg, type){
	// TYPE = 0 for error --- 1 for success
	console.log(msg);
	$("#mask").css({"display" : "block"});
	$("#msg").css({"display" : "block"});
	if(type == 0){
		$("#msg").addClass("fail");
	} else {
		$("#msg").addClass("success");
	}
	$("#realmsg").append(msg);
}
$("#close").click(function(){
	$("#mask").css({"display" : "none"});
	$("#msg").css({"display" : "none"});
	$("#realmsg").html("");
	if($("#msg").hasClass("success")){
		$("#msg").removeClass("success");
	} else if($("#msg").hasClass("fail")){
		$("#msg").removeClass("fail");
	}
});

function validateEmail(email){
	return true;
}


// Join an event
function rsvp(eveID,userID){
	//$('.rsvp').css("background":"black");
	//$('this').children('.rsvp').html("already goingX");
	$.ajax({
		method: "GET",
		url: "action.php?rsvp=1",
		data:{ eveID: eveID, userID: userID}
	}).done(function( msg ){
		$("#thisEvent").css({"background": "red"});
		error(msg,1);
	});
}


// Join an activity
function joinAct(actID,userID){
	//$('.rsvp').css("background":"black");
	//$('this').children('.rsvp').html("already goingX");
	console.log(actID+" "+userID);
	$.ajax({
		method: "GET",
		url: "action.php?act=1",
		data:{ actID: actID, userID: userID}
	}).done(function( msg ){
		$("#thisAct").css({"background": "red"});
		error(msg,1);
	});
}

$('.rsvpG').click(function(){
	//$('this').html("already goingX");
	//$(this).css({"background":"black"});
});



$(function() {
  $("#recall").click(function() {
	 var pathname = $(location).attr('search');
	 
	 console.log(pathname);
	 $("#user-activities").load("activities.php"+pathname +" #user-activities");
  })
});
