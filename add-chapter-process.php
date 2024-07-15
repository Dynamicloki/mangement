<?php
session_start();
include "helper.php";
include "dbms.php";
date_default_timezone_set("Asia/Kolkata");
$classId 		= $_REQUEST['classId'];
$subjectId 		= $_REQUEST['subjectId'];
$chaptername 	= $_REQUEST['chaptername'];
$addedDateTime  = date("y-m-d H:i:s");
$addedIPaddress = $_SERVER['REMOTE_ADDR'];

$_SESSION["chaptername"]=$chaptername;

if( strlen($chaptername)<=0)
{
	header("location:add-chapter.php?err=1");
	exit;
}
$stmt=$conn->prepare("select chaptername from tblchapter where classId=:classId and subjectId=:subjectId and chaptername=:chaptername");
$stmt->bindParam(':classId',$classId);
$stmt->bindParam(':subjectId',$subjectId);
$stmt->bindParam(':chaptername',$chaptername);
$stmt->execute();
$numRows=$stmt->rowcount();
if($numRows>0)
{
	header("location:add-chapter.php?err=2");
	exit;
}

include "dbms.php";
$stmt=$conn->prepare("insert into tblchapter (classId,subjectId,chaptername) values(:classId,:subjectId,:chaptername)");
$stmt->bindParam(':classId',$classId);
$stmt->bindParam(':subjectId',$subjectId);
$stmt->bindParam(':chaptername',$chaptername);
$stmt->execute();

$stmt=null;
$conn=null;
header("location:chapter-table.php?chapterid=chapterid");
exit;
?>
