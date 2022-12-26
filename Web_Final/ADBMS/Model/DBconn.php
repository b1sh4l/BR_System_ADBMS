<?php


function connection()
{
    $username="shreeman";
    $password="Cu6E@3JUr82CEKE";
    $dbname= "localhost/XE";
	$conn = oci_connect($username, $password, $dbname);
	if(!$conn){

		$e = oci_error();
		trigger_error(htmlentities($e['message'], ENT_QUOTES),E_USER_ERROR);
	}
	
	return $conn;
}
?>