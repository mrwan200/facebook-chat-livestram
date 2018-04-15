<?
	require 'config.php';
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = $database['host'];
	$userName = $database['user'];
	$userPassword = $database['pass'];
	$dbName = $database['database'];

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);