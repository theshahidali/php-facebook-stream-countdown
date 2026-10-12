<?php require_once('database.php');
$absolute = dirname(__DIR__) . DIRECTORY_SEPARATOR;
/*=================================================================
LOGIN
=================================================================*/
function login( $username, $password ){

	global $con;

	$query  = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$result = mysqli_query( $con, $query );
	$rows   = mysqli_num_rows($result);

	if( $rows == 1 ){

		$_SESSION['logged'] = 'YES';

		return true;
	}else{

		return false;
	}
}

/*=================================================================
SESSION CHECK
=================================================================*/
function session_check(){

	if(isset($_SESSION['logged']) && !empty($_SESSION['logged']) && $_SESSION['logged'] == 'YES'){

		return true;
	}else{

		return false;
	}
}

/*=================================================================
FILE UPLOAD
=================================================================*/
function upload( $file ){

	global $absolute;

	$target_dir	 = $absolute."uploads/";
	if (!is_dir($target_dir) || !is_writable($target_dir)) {
		return false;
	}

	$target_file = $target_dir . basename($file["name"]);

	$uploadOk    = 1;

	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    // Check if file already exists
	if(file_exists($target_file)){

		return $file["name"];
	}else{

		// Check file size
		if ($file["size"] > 50000000) {

		    $uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != 'JPG') {
		    $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0
		if ($uploadOk == 0) {
		   return false;
		} else {
		    if (move_uploaded_file($file["tmp_name"], $target_file)) {
		        return $file["name"];
		    } else {
		        return false;
		    }
		}
	}
}

/*=================================================================
CHECK CAMPAIGNS
=================================================================*/
function check_campaigns(){

	global $con;

	$query  = "SELECT * FROM campaigns";
	$result = mysqli_query($con, $query);
	$rows   = mysqli_num_rows($result);

	if( $rows > 0 ){

		return true;
	}else{

		return false;
	}
}

/*=================================================================
CREATE NEW CAMPAIGN
=================================================================*/
function create_new_campaign($heading, $year, $month, $day, $hour, $minute, $second, $bg, $option){

	global $con;
	$date = get_date($year, $month, $day, $hour, $minute, $second);
	
	$query = "INSERT INTO campaigns (heading,datetimee,background,`option`) VALUES('$heading','$date','$bg','$option')";

	if( mysqli_query($con, $query) ){

		return true;
	}else{

		return false;
	}
}

/*=================================================================
GET DATE
=================================================================*/
function get_date($year, $month, $day, $hour, $minute, $second){

	$date = $year."/".$month."/".$day." ".$hour.":".$minute.":".$second;

	return $date;
}

/*=================================================================
GET ID OF CAMPAIGN
=================================================================*/
function get_campaign_id(){

	global $con;

	$query  = "SELECT * FROM campaigns";
	$result = mysqli_query($con, $query);
	$rows   = mysqli_num_rows($result);

	while( $camp = mysqli_fetch_array($result) ){

		$id = $camp['id'];
	}

	return $id;
}

/*=================================================================
UPDATING CAMPAIGN
=================================================================*/
function update_campaign($heading, $year, $month, $day, $hour, $minute, $second, $bg, $option){

	global $con;
	$date = get_date($year, $month, $day, $hour, $minute, $second);
	$id   = get_campaign_id();

	$query = "UPDATE campaigns SET heading='$heading', datetimee='$date', background='$bg', `option`='$option' WHERE id='$id'";

	if( mysqli_query($con, $query) ){

		return true;
	}else{

		return false;
	}
}

/*=================================================================
GEt CAMPAIGN DATA
=================================================================*/
function get_campaign_data(){

	global $con;

	$query  = "SELECT * FROM campaigns";
	$result = mysqli_query($con, $query);
	$rows   = mysqli_num_rows($result);

	if($rows > 0){

		while( $camp = mysqli_fetch_array($result) ){

			$data = array(
				'id'      => $camp['id'],
				'heading' => $camp['heading'],
				'date'    => $camp['datetimee'],
				'bg'      => $camp['background'],
				'option'  => $camp['option']
			);
		}

		return $data;

	}else{

		return false;
	}
}