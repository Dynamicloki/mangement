<?php
	include 'helper.php';
	session_start();
	date_default_timezone_set("Asia/Kolkata");
	$classid				 = checkInput($_REQUEST["classname"]);
	$subjectname			 = checkInput($_REQUEST["subjectname"]);
	$status  		    	 = $_REQUEST["status"];
	$addedDatetime  = date("y-m-d H:i:s"); 
	$addedipaddress = $_SERVER["REMOTE_ADDR"];
	
	$_SESSION["classid"]	 = $classid;
	$_SESSION["subjectname"] = $subjectname;
	$_SESSION["status"]      = $status;
	

	if (strlen($subjectname) <= 0) {
		header("location:Add-subject.php?err=1");
		exit;
		}

	
	include 'dbms.php';
	$query ="SELECT  * from tblsubject where classid =:classid and subjectname =:subjectname";
	$stmt=$conn->prepare($query);
	$stmt->bindParam(':classid',$classid);
	$stmt->bindParam(':subjectname',$subjectname);
	$stmt->execute();
    $numRows=$stmt->rowcount(); 
	
		if($numRows>0)
		{
			$conn=null;
			header("location:add-subject.php?err=2&subjectId=$subjectId");
			exit;
		}
		$stmt=$conn->prepare("insert into  tblsubject (classid,subjectname,status,addedipaddress,addedDatetime) value (:classid,:subjectname,:status,:addedipaddress,:addedDatetime)");
		$stmt->bindParam(':classid',$classid);
		$stmt->bindParam(':subjectname',$subjectname);
		$stmt->bindParam(':status',$status);
		$stmt->bindparam(":addedDatetime",$addedDatetime);
		$stmt->bindparam(":addedipaddress",$addedipaddress);
		$stmt->execute();
			
	
	unset($_SESSION["classid"]);
	unset($_SESSION["subjectname"]);
	unset($_SESSION["status"]);
	header("location:subjects-table.php?");
	exit;
?>
