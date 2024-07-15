<?php
	session_start();
	error_reporting(E_ALL^E_WARNING);
	include"dbms.php";
	$subjectId          =$_REQUEST["subjectId"];
	$status				=$_REQUEST["status"];
	
	include"dbms.php";
	$stmt=$conn->prepare("update tblsubject set status=:status where subjectid=:subjectId");
	$stmt->bindparam(":status",$status);
	$stmt->bindparam(":subjectId",$subjectId);
	$stmt->execute();
	$stmt=null;
	$conn=null;
	
	header("location:subjects-table.php");
	exit;
?>