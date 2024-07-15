<?php
session_start();
error_reporting (E_ALL ^ E_WARNING);
?>
<?php
include"includes/top.php";
?>
<title>Dashboard</title>
<?php
include"includes/nav.php";
include"includes/left-side.php";
?>
<?php
$studentid= $_REQUEST["studentid"];
include"dbms.php";
?>
<div class="card" style="width: 35rem; height: 30rem">
<?php
$stmt=$conn->prepare("select * from tblstudent2 where studentid=:studentid");
$stmt->bindparam(":studentid",$studentid);
$stmt->execute();
while($row = $stmt->fetch())
{
	
?>

  <div class="card-body">
    <h5 class="card-title">STUDENT NAME</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $row["studentname"]; ?></h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<?php
}
include"includes/end.php";
?>
