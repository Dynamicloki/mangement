<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);
?>
<?php
include"includes/top.php";
include"dbms.php";
?>
<title>class status</title>
<?php
include"includes/nav.php";
include"includes/left-side.php";
?>
<form action="class-process.php" method="post">
	<div class="row">
		<div class="col-md-6">
			
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Class Name</label>
				<input type="text" class="form-control" value="<?php $_SESSION["class"]; ?>" id="exampleInputPassword1" name="class">
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
			
			<div class="col-md-6">
				<?php
				include"dbms.php";
				$stmt=$conn->prepare("SELECT * from tblsubject where subjectid=:subjectid");
				$stmt->bindParam(":subjectid",$subjectid);
				$stmt->execute();
				while($row = $stmt->fetch())
				{
			?>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="subject1" name="subjectId[]
					" value="<?php echo $row["subjectname"]?>" id="flexCheckDefault">
					<label class="form-check-label" for="flexCheckDefault">
					<?php echo $row["subjectname"]?>
					</label>
				</div>

			<?php
				}
				$stmt=null;
				$conn=null;
			?>
			</div>
			 <div class="col-12">
				<button type="submit" class="btn btn-primary" style="align:left">Sign in</button>
			  </div>
		</div>
		
	</div>
</form>
<?php
include"includes/end.php";
?>