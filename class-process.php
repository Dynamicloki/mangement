<?php
	session_start();
	date_default_timezone_set("Asia/Kolkata");
	$classname      = $_REQUEST["class"];
	$status         = $_REQUEST["status"];
	$addedDateTime  = date("y-m-d H:i:s"); 
	$addedIPaddress = $_SERVER["REMOTE_ADDR"];
	

	$_SESSION["class"]  = $classname;
	$_SESSION["status"] = $status;

	
	
	if (strlen($classname) <= 0) {
    header("location:add-class.php?err=1");
    exit;
	}
	//if ($status == 1) {
		//header("location:menu2.php?err=2");
		//exit;
	//}
	include"dbms.php";
	$stmt=$conn->prepare("select * from tblclass where classname=:classname");
	$stmt->bindParam(":classname",$classname);
	$stmt->execute();
	$numRows=$stmt->rowcount();
	if($numRows>0)
	{
		$conn=null;
		header("location:add-class.php?err=2&classId=$classId");
		exit;
	}

	include "class-databaseconnection.php";
	
	unset ($_SESSION["class"]);
	unset ($_SESSION["status"]);
	
	
	
	header("location:class-table.php");
	exit();
?>