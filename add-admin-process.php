<?php
	session_start();
	error_reporting(E_ALL ^ E_WARNING);
	date_default_timezone_set("Asia/Kolkata");
	$adminusername = $_REQUEST["adminusername"];
	$adminmail = $_REQUEST["adminmail"];
	$adminpassword = $_REQUEST["adminpassword"];
	$addedDateTime = date("y-m-d H:i:s"); 
	$addedIPaddress = $_SERVER["REMOTE_ADDR"];

	$_SESSION["adminusername"] = $adminusername;
	$_SESSION["adminmail"] = $adminmail;
	$_SESSION["adminpassword"] = $adminpassword;


	unset($_SESSION["adminusername"]);
	unset($_SESSION["adminmail"]);
	unset($_SESSION["adminpassword"]);

	include"dbms.php";
	$stmt = $conn->prepare("INSERT INTO tbladmin (adminusername, adminmail, adminpassword, addedDatetime, addedipaddress) VALUES   (:adminusername,:adminmail,:adminpassword,:addedDateTime,:addedIPaddress)");
	$stmt->bindParam(':adminusername',$adminusername);
	$stmt->bindParam(':adminmail',$adminmail);
	$stmt->bindParam(':adminpassword',$adminpassword); 
	$stmt->bindParam(':addedDateTime',$addedDateTime);
	$stmt->bindParam(':addedIPaddress',$addedIPaddress);
	$stmt->execute();
	$stmt = null;
	$conn = null;
	
?>
