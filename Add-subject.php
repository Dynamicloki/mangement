<?php
 error_reporting (E_ALL^E_WARNING);
session_start();
include"includes/top.php";

?>
<title>chapter management</title>
<?php
include"includes/nav.php";
include"includes/left-side.php";
?>
<div class="container">
	<marquee class="xxx">ADD CHAPTER</marquee>
	<form action="add-subject-process.php" method="post">
		<div class="mb-3 col-md-6">
			<label class="form-label" for="class specification">Select Class</label>
			<select class="form-select" aria-label="Default select example" name="classname" id="class1" >
				<?php
					include "dbms.php";
					$query="select * from tblclass where status='1'";
					$stmt=$conn->prepare($query);
					$stmt->execute();
				?>
				<option selected>--Select Class--</option>
				<?php
					while($row=$stmt->fetch())
					{
				?>
				 <option value= "<?php echo $row["classid"];?>">
					<?php echo $row["classname"]?>
				 </option>
				<?php
					}
				?>	 
			</select>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">subject Name</label>
				<input type="text" class="form-control" value="<?php $_SESSION["subject"]; ?>" id="exampleInputPassword1" name="subjectname">
			  </div>
			  
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="status" value="1" >
			  <label class="form-check-label" for="flexRadioDefault1">
				active
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="status" value="0" >
			  <label class="form-check-label" for="flexRadioDefault1">
				inactive
			  </label>
			</div>
			<button class="btn btn-primary" type="submit">
				Add Chapter
			</button>
		</div>
		
		
		</div>
	</form>
</div>
<?php
include "includes/end.php";
?>