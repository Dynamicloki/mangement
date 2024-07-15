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
include "dbms.php";
$TestId = $_REQUEST["TestId"];
$stmt = $conn->prepare("select * from tbltest where TestId =:TestId");
$stmt->bindparam(":TestId", $TestId);
$stmt->execute();
$result=$stmt->fetch();

	$classname  =$result["classname"];
         $subjectname    =$result["subjectname"];
			$chapterIds    =$result["chapterIds"];
				$testmarks    =$result["testmarks"];
?>

<form action="edit-test-process.php" method="post">
	<input type="hidden" name="TestId" value="<?php echo $TestId ?>">
	<div class="row ">
				<div class="col-md-3 col-sm-3">
			</div>
			<div class="col-md-6 col-sm-6 header">
				<span class="first">EDIT Test</span>
			</div>
			<div class="col-md-3 col-sm-3">
			</div>
		<div class="col-md-6 col-sm-6">
		<br>
		     <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Class Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="classname" value= "<?php echo $classname;?>" placeholder="classname">
            </div>

		    <div class=" mb-3">
		      <label for="exampleFormControlInput1" class="form-label">Subject Name</label>
			  <input type="text" class="form-control"id="exampleFormControlInput1"  name="subjectname" value= "<?php echo $subjectname;?>" placeholder="subjectname" aria-label="Username" aria-describedby="basic-addon1">
			</div>

			<div class=" mb-3">
			   <label for="exampleFormControlInput1" class="form-label">Chapter Name</label>
			  <input type="text" class="form-control" id="exampleFormControlInput1" name="chapterIds" value= "<?php echo $chapterIds;?>" placeholder="chapterIds" aria-label="Username" aria-describedby="basic-addon1">
			</div>
			<div class=" mb-3">
			   <label for="exampleFormControlInput1" class="form-label">Final Marks</label>
			  <input type="text" class="form-control" id="exampleFormControlInput1"  name="testmarks" value= "<?php echo $testmarks;?>" placeholder="testmarks" aria-label="Username" aria-describedby="basic-addon1">
			</div>
			<input class="btn btn-primary" type="submit" value="update">
		</div>
	</div>
</form>

<?php
}
include"includes/end.php";
?>
