<?php
	include"dbms.php";
	$chapterid= $_REQUEST["chapterid"];
	$stmt= $conn->prepare("DELETE FROM tblchapter where chapterid=:chapterid");
	$stmt->bindparam(":chapterid", $chapterid);
	$stmt->execute();
	
	$stmt=null;
	$conn=null;
	header("location:chapter-table.php");
	exit;
?>