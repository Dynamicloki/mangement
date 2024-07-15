<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);
?>
<?php
include "includes/top.php";
?>
<title>subject update status</title>
<?php
include "includes/nav.php";
include "includes/left-side.php";
?>
<?php
include "dbms.php";

$subjectid = $_REQUEST["subjectid"];
$sql = "SELECT * FROM tblsubject WHERE subjectid = :subjectid ";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':subjectid', $subjectid);
$stmt->execute();

while ($result = $stmt->fetch()) 
{
    $subjectid = $result["subjectid"];
    $classid = $result["classid"];
    $subjectname = $result["subjectname"];

  echo $subjectid;

	
}	
?>
<input value ="<?php echo $subjectid ?>" type="hidden">
<input value ="<?php echo $subjectname ?>">

<?php
include "includes/end.php";
?>
