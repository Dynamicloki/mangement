
   <?php
	include "dbms.php";
	$stmt=$conn->prepare("INSERT INTO tblstudent2 (studentname,dob,class,season,studentmobile,schoolname,gender,studentmail,studentlogin,fathername,fathermobilenumber,motherMobileNumber,parantsmail ,parentspassword,address) VALUES (:studentname,:dob,:class, :season,:studentmobile,:schoolname,:gender,:studentmail,:studentlogin,:fathername, :fathermobilenumber,:motherMobileNumber,:parantsmail ,:parentspassword,:address)");
	
	$stmt->bindparam(":studentname",$studentname);
	$stmt->bindparam(":dob", $dob); 
	$stmt->bindparam(":class", $class); 
	$stmt->bindparam(":season", $season); 
	$stmt->bindparam(":studentmobile", $studentmobile);
	$stmt->bindparam(":schoolname", $schoolname);
	$stmt->bindparam(":gender", $gender);
	$stmt->bindparam(":studentmail", $studentmail);
	$stmt->bindparam(":studentlogin", $studentlogin);
	$stmt->bindparam(":fathername", $fathername);
	$stmt->bindparam(":mothername", $mothername);
	$stmt->bindparam(":fathermobilenumber", $fathermobilenumber);
	$stmt->bindparam(":motherMobileNumber", $motherMobileNumber);
	$stmt->bindparam(":parantsmail ", $parantsmail );
	$stmt->bindparam(":parentspassword", $parentspassword);
	$stmt->bindparam(":address", $address);
	$stmt->execute();
	
?>

