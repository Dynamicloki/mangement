<?php
session_start();
include "dbms.php";                                                          
	$email =check($_REQUEST['email']);
	$password =check($_REQUEST['password']);
	
	$stmt=$conn->prepare("select * from tblstudent2 where studentmail=:studentmail and studentlogin=:studentlogin"); 
	$stmt->bindparam(":studentmail",$email); 
	$stmt->bindparam(":studentlogin",$password);
	$stmt->execute();
	
header("location:m.php");
exit;
?>			