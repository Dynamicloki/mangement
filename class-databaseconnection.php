 <?php
 include "dbms.php";
	$stmt=$conn->prepare("insert into tblclass(classname,status,addedDateTime,addedIPaddress)
	values(:classname,:status,:addedDateTime,:addedIPaddress)");

	$stmt->bindparam(":classname",$classname);
	$stmt->bindparam(":status",$status);
	$stmt->bindparam(":addedDateTime",$addedDateTime);
	$stmt->bindparam(":addedIPaddress",$addedIPaddress);	
	$stmt->execute();

	$stmt=null;
	$conn=null;
	?>	