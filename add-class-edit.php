<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);
?>
<?php
include"includes/top.php";
?>
<title>class status</title>
<?php
include"includes/nav.php";
include"includes/left-side.php";
?>
<?php
$classid  = $_REQUEST["classid"];
	include "dbms.php";
	$stmt=$conn->prepare("SELECT * FROM tblclass where classid=:classid");
	$stmt->bindparam("classid",$classid);
	$stmt->execute();
	$result=$stmt->fetch();
	
	$classid=$result["classid"];
	$classname=$result["classname"];
	$status=$result["status"];
?>
	<form action="add-class-edit-process.php" method="post">
	<div class="mb-3">
		<input type="hidden" class="form-control" value="<?php echo $classid; ?>"  name="classid">
		<label for="exampleInputPassword1" class="form-label">Class Name</label>
		<input type="text" class="form-control" value="<?php echo $classname; ?>" id="exampleInputPassword1" name="class">
	</div>
	  
	<div class="form-check">
	  <input class="form-check-input" <?php if($status==1){ echo"checked"; }?>  type="radio" name="status" value="1" >
	  <label class="form-check-label" for="flexRadioDefault1">
		active
	  </label>
	</div>
	<div class="form-check">
	  <input class="form-check-input" <?php if($status==0){ echo"checked"; }?>   type="radio" name="status" value="0" >
	  <label class="form-check-label" for="flexRadioDefault1">
		inactive
	  </label>
	</div>
	 <div class="col-12">
		<button type="submit" class="btn btn-primary" style="align:left">Update</button>
	  </div>
  </form>


<?php
include"includes/end.php";
?>