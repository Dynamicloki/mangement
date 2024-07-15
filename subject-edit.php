<?php
error_reporting(E_ALL ^ E_WARNING);
?>
<?php
include"includes/top.php";
?>
<title>subject status</title>
<?php
include"includes/nav.php";
include"includes/left-side.php";
?>
<?php
	$subjectid=$_REQUEST["subjectid"];
	include "dbms.php";
	$stmt=$conn->prepare("SELECT * FROM tblsubject where classid=:classid and subjectid=:subjectid");
	$stmt->bindParam(":classid",$classid );
	$stmt->bindParam(":subjectid",$subjectid );
	$stmt->execute();
	$result=$stmt->fetch();
	 
	$status=$result["status"];
?>
	<form action="add-subject-process.php" method="post">
				<h1> Add Subject</h1>
				<div class="row">
					<div>
						<label for="validationCustom02" class="form-label">
								Select Class
						</label>
						<select class="form-select" aria-label="Default select example" name="classname" value="">
							<option selected>--Select Class--</option>
							
							 <option value= "<?php echo  $result["subjectid"];?>">
								<?php echo $row["classid"]?>
							 </option>
						</select>
							<br>
						<label for="validationCustom01" class="form-label">
							Subject Name
						</label>
						<input type="text" class="form-control" name="subjectname" id="validationCustom01" value="<?php echo $result["subjectname"]?>" placeholder="Subject Name" required>
						<br>
					</div>
					<div class="col-md-12">
						<label>
							Status
						</label>
						<div class="form-check">
						  <input class="form-check-input" value ="<?php if($status == 1){ echo"checked";}?>" type="radio" name="status" value="1" >
						  <label class="form-check-label" >
							active
						  </label>
						</div>
						<div class="form-check">
						   <input class="form-check-input" value ="<?php if($status == 0){ echo"checked";}?>" type="radio" name="status" value="1" >
						  <label class="form-check-label" >
							Inactive
						  </label>
						</div>
							<button type="submit" class="btn btn-primary" style="align:left">Update</button>
					
					</div>
			</form>
<?php
include"includes/end.php";
?>