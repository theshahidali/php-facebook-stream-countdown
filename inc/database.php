<?php

$config = $GLOBALS['config'];
$GLOBALS['con'] = mysqli_connect(
	$config['database_host'],
	$config['database_user'],
	$config['database_password'],
	$config['database_name']
);

if (!$GLOBALS['con']) {

	die('Connection failed.');
	exit();
}