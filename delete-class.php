<?php
	include"dbms.php";
	$classid= $_REQUEST["classid"];
	$stmt= $conn->prepare("delete from tblclass where classid=:classid");
	$stmt->bindparam(":classid",$classid);
	$stmt->execute();
	
	$stmt=null;
	$conn=null;
	header("location:class-table.php");
	exit;
?>