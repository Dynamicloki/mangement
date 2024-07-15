<?php
	session_start();
	date_default_timezone_set("Asia/Kolkata");
	$classid      = $_REQUEST["classid"];
	$classname      = $_REQUEST["class"];
	$status         = $_REQUEST["status"];
	$addedDateTime  = date("y-m-d H:i:s"); 
	$addedIPaddress = $_SERVER["REMOTE_ADDR"];

	$_SESSION["class"]  = $classname;
	$_SESSION["status"] = $status;

	
	if (strlen($classname) <= 0) {
    header("location:add-class-edit.php?err=1");
    exit;
	}
	if ($status > 1) {
		header("location:add-class-edit.php?err=2");
		exit;
	}
	
	
	
	include "dbms.php";
	$stmt=$conn->prepare("UPDATE tblclass SET classname=:classname,status=:status,addedDateTime=:addedDateTime,addedIPaddress=:addedIPaddress WHERE classid=:classid");
	$stmt->bindparam(":classid",$classid);
	$stmt->bindparam(":classname",$classname);
	$stmt->bindparam(":status",$status);
	$stmt->bindparam(":addedDateTime",$addedDateTime);
	$stmt->bindparam(":addedIPaddress",$addedIPaddress);
	$stmt->execute();
	
	$stmt=null;
	$conn=null;
	
	unset ($_SESSION["class"]);
	unset ($_SESSION["status"]);
	
	header("location:class-table.php?classid");
	exit;
?>