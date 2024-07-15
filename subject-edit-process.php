
<?php
	$studentid=$_REQUEST["studentid"];
	$subjectname	 = $_REQUEST["subjectname"];
	$status  		    	= $_REQUEST["status"];
	$addedDatetime  = date("y-m-d H:i:s"); 
	$addedipaddress = $_SERVER["REMOTE_ADDR"];
	
	
	
		$stmt=$conn->prepare("update tblsubject set subjectname=:subjectname,status=:status,addedDatetime=:addedDatetime,addedipaddress=:addedipaddress where subjectid=:subjectid");
		$stmt->bindParam(':subjectid',$subjectid);
		$stmt->bindParam(':subjectname',$subjectname);
		$stmt->bindParam(':status',$status);
		$stmt->bindparam(":addedDatetime",$addedDatetime);
		$stmt->bindparam(":addedipaddress",$addedipaddress);
		$stmt->execute();

?>