<?php require_once('../inc/config.php');

$heading  = $_POST['title'];
$year 	  = $_POST['year'];
$month    = $_POST['month'];
$day      = $_POST['day'];
$hour     = $_POST['hour'];
$minute   = $_POST['minute'];
$second   = $_POST['second'];
$option   = $_POST['option'];
$bg       = $_FILES['background'];


if($bg['size'] == 0){

	$msg = "background image is required.";
	$msg = urlencode($msg);
	header("location: ../dashboard.php?msg=$msg");
	exit();
}

if(empty($heading) || empty($year) || empty($month) || empty($day) || empty($hour) || empty($minute) || empty($second) || empty($option)){

	$msg = "Kindly Fill all the fields.";
	$msg = urlencode($msg);
	header("location: ../dashboard.php?msg=$msg");
	exit();
}

$bg = upload($bg);
if (!$bg) {
	$msg = urlencode("Failed to upload background image.");
	header("location: ../dashboard.php?msg=$msg");
	exit();
}

if( check_campaigns() ){

	$ret = update_campaign($heading, $year, $month, $day, $hour, $minute, $second, $bg, $option);
}else{

	$ret = create_new_campaign($heading, $year, $month, $day, $hour, $minute, $second, $bg, $option);
}

if($ret){

	header("location: ../dashboard.php?success=1");
	exit();
}else{

	$msg = "Failed. try again.";
	$msg = urlencode($msg);
	header("location: ../dashboard.php?msg=$msg");
	exit();
}

