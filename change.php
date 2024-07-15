<?php
	session_start();
	error_reporting(E_ALL^E_WARNING);
	include"dbms.php";
	$classId          =$_REQUEST["classId"];
	$status				=$_REQUEST["status"];
	
	include"dbms.php";
	$stmt=$conn->prepare("update tblclass set status=:status where classId=:classId");
	$stmt->bindparam(":status",$status);
	$stmt->bindparam(":classId",$classId);
	$stmt->execute();
	$stmt=null;
	$conn=null;
	
	header("location:class-table.php");
	exit;
?>