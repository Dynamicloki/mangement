<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);
include "dbms.php";

$studentname   		= $_REQUEST["studentname"];
$dob 		   		= $_REQUEST["dob"];
$class 		   		= $_REQUEST["class"];
$season 	   		= $_REQUEST["season"];
$studentmobile 		= $_REQUEST["studentmobile"];
$schoolname    		= $_REQUEST["schoolname"];
$gender        		= $_REQUEST["gender"];
$studentmail   		= $_REQUEST["studentmail"];
$studentlogin  		= $_REQUEST["studentlogin"];
$fathername    		= $_REQUEST["fathername"];
$mothername   		= $_REQUEST["mothername"];
$fathermobilenumber = $_REQUEST["fathermobilenumber"];
$motherMobileNumber = $_REQUEST["motherMobileNumber"];
$parantsmail 		= $_REQUEST["parentsmail"];
$parentspassword 	= $_REQUEST["parentsmailpassword"];
$address 			= $_REQUEST["address"];

$_SESSION["studentname"] 		= $studentname;
$_SESSION["dob"] 		 		= $dob;
$_SESSION["class"] 		 		= $class;
$_SESSION["season"] 	 		= $season;
$_SESSION["studentmobile"] 		= $studentmobile;
$_SESSION["schoolname"] 		= $schoolname;
$_SESSION["gender"] 			= $gender;
$_SESSION["studentmail"] 		= $studentmail;
$_SESSION["studentpassword"] 	= $studentlogin;
$_SESSION["fathername"] 		= $fathername;
$_SESSION["mothername"] 		= $mothername;
$_SESSION["fathermobilenumber"] = $fathermobilenumber;
$_SESSION["motherMobileNumber"] = $motherMobileNumber;
$_SESSION["parentsmail"] 		= $parantsmail;
$_SESSION["parentsmailpassword"]= $parentspassword;
$_SESSION["address"] 			= $address;

if (strlen($studentname) <= 0) {
    header("location:menu1.php?err=1");
    exit;
}
if (strlen($dob) <= 0) {
    header("location:menu1.php?err=2");
    exit;
}

if ($class == -1) {
    header("location:menu1.php?err=3");
    exit;
}
if ($season == -1) {
    header("location:menu1.php?err=4");
    exit;
}
if (strlen($studentmobile) <= 0) {
    header("location:menu1.php?err=5");
    exit;
}
if (strlen($schoolname) <= 0) {
    header("location:menu1.php?err=6"); 
    exit;
}
if ($gender == -1) {
    header("location:menu1.php?err=7");
    exit;
}
if (strlen($studentmail) <= 0) {
    header("location:menu1.php?err=8");
    exit;
}
if (strlen($studentlogin) <= 0) {
    header("location:menu1.php?err=9");
    exit;
}
if (strlen($fathername) <= 0) {
    header("location:menu1.php?err=10");
    exit;
}
if (strlen($mothername) <= 0) {
    header("location:menu1.php?err=11");
    exit;
}
if (strlen($fathermobilenumber) <= 0) {
    header("location:menu1.php?err=12");
    exit;
}
if (strlen($motherMobileNumber) <= 0) {
    header("location:menu1.php?err=13");
    exit;
}
if (strlen($parantsmail) <= 0) {
    header("location$:menu1.php?err=14");
    exit;
}
if (strlen($parentspassword) <= 0) {
    header("location:menu1.php?err=15");
    exit;
}
if (strlen($address) <= 0) {
    header("location:menu1.php?err=16");
    exit;
}
/*
echo $studentname . "<br>";
echo $dob . "<br>";
echo $class . "<br>";
echo $season . "<br>";
echo $studentmobile . "<br>";
echo $schoolname . "<br>";
echo $gender . "<br>";
echo $studentmail . "<br>";
echo $studentlogin . "<br>";
echo $fathername . "<br>";
echo $mothername . "<br>";
echo $fathermobilenumber . "<br>";
echo $motherMobileNumber . "<br>";
echo $parantsmail . "<br>";
echo $parentspassword . "<br>";
echo $address."<br>";
*/
	$stmt=$conn->prepare("INSERT INTO tblstudent2 (studentname,dob,class,season,studentmobile,schoolname,gender,studentmail,studentlogin,fathername,mothername,fathermobilenumber,motherMobileNumber,parantsmail ,parentspassword,address) 
	VALUES (:studentname,:dob,:class,:season,:studentmobile,:schoolname,:gender,:studentmail,:studentlogin,:fathername,:mothername,:fathermobilenumber,:motherMobileNumber,:parantsmail ,:parentspassword,:address)");
	
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
	$stmt->bindparam(":parantsmail", $parantsmail );
	$stmt->bindparam(":parentspassword", $parentspassword);
	$stmt->bindparam(":address", $address);
	$stmt->execute();
	$stmt=null;
	$conn=null;

unset($_SESSION["studentname"]);
unset($_SESSION["dob"]);
unset($_SESSION["class"]);
unset($_SESSION["season"]);
unset($_SESSION["studentmobile"]);
unset($_SESSION["schoolname "]);
unset($_SESSION["gender"]);
unset($_SESSION["studentmail"]); 
unset($_SESSION["studentpassword"]); 
unset($_SESSION["fathername"]); 
unset($_SESSION["mothername"]); 
unset($_SESSION["fathernumber"]); 
unset($_SESSION["mothernumber"]); 
unset($_SESSION["parentsmail"]); 
unset($_SESSION["parentsmailpassword"]); 
unset($_SESSION["address"]);

header("location:table.php");
exit;

?>
