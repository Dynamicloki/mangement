<?php
 $classId=$_REQUEST["classId"];
 error_reporting (E_ALL^E_WARNING);
?>
	<div class="mb-3 col-md-6">
		<label> Select Subject </label>
		<br>
			<?php
				include"dbms.php";
				$stmt=$conn->prepare("SELECT * from tblsubject  where classid=:classid");
				$stmt->bindParam(":classid",$classId);
				$stmt->execute();
				while($row = $stmt->fetch())
				{
			?>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="subject1" name="subjectId" value="<?php echo $row["subjectid"]?>" id="flexCheckDefault">
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