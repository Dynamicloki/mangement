<?php 
session_start();
include "helper.php";
include "dbms.php";
date_default_timezone_set("Asia/Kolkata");
$classId  =$_REQUEST['classId'];

echo $classId;
$subjectIds =$_REQUEST['subjectId'];
$chapterIds =$_REQUEST['chaptername'];
$totalMarks =check($_REQUEST['totalMarks']);
$addedDateTime  = date("y-m-d H:i:s");
$addedIPaddress = $_SERVER['REMOTE_ADDR'];


if(strlen($totalMarks)=="" || empty($totalMarks)){
	header("location:add-test-mangement.php?err=2");
	exit;
}


$subjectIds = implode("+",$_REQUEST['subjectId']);
$chapterIds = implode("+",$_REQUEST['chapterId']);

$stmt = $conn->prepare("insert into tbltests (classId, subjectIds, chapterIds,totalMarks, addedDateTime, addedIPaddress) values (:classId, :subjectIds, :chapterIds,:totalMarks, :addedDateTime, :addedIPaddress)");
$stmt->bindparam(":classId", $classId);
$stmt->bindparam(":subjectIds", $subjectIds);
$stmt->bindparam(":chapterIds", $chapterIds);
$stmt->bindparam(":totalMarks", $totalMarks);
$stmt->bindparam(":addedDateTime", $addedDateTime);
$stmt->bindparam(":addedIPaddress", $addedIPaddress);
$stmt->execute();

$conn=null;
$stmt=null;

header("location:add-test-table.php");
exit;
?>