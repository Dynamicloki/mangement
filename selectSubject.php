<?php
include "dbms.php";
$classId =$_REQUEST['classId'];
$stmt = $conn->prepare("select subjectids from tblclass  where classid=:classid");
$stmt->bindparam(":classid",$classid);
$stmt->execute();
$result = $stmt->fetch();
$subjectIds = explode("+", $result['subjectid']);
$st = $conn->prepare("SELECT * FROM tblsubject");
$st->execute();
?>
<label class="form-label" for="class specification">Select Subject</label>
<?php 
while($row = $st->fetch())
{
	foreach ($subjectIds as $s){
		if($s === $row['subjectid']){
 ?>

<div class="form-check">
	
	<input class="form-check-input subId" type="checkbox" name="subjectIds[]" id="subjectId" value="<?php echo $row['subjectId']; ?>" onclick="chapters()">
	<label class="form-check-label" for="exampleRadios2">
		<?php echo $row['subjectName']; ?>
	</label>
</div>
<?php
		}
	}
}
?>