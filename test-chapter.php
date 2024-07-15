<?php
 $classId=$_REQUEST["classId"];
 $subjectId =$_REQUEST["subjectId"];
?>

<?php
					include "dbms.php";
					$stmt= $conn->prepare("select * from tblchapter where classId=:classId and subjectId=:subjectId chapterId=:chapterId"); 
					$stmt->bindparam(":classId", $classId);
					$stmt->bindparam(":subjectId", $subjectId);
					$stmt->execute();
				?>
			<div class="form-check">
			<label class="form-label" for="class specification">Select Chapters</label>
			<?php
			while($row = $stmt->fetch())
					{
			?>
			
			  <input class="form-check-input" name="chapterids[]" type="checkbox" value="<?php echo $row['chapterid'];?>" id="chapter1" id="flexcheckDefault">
			  <label class="form-check-label" for="flexRadioDefault1">
				<?php echo $row ['chapterName']; ?>
			  </label>
			</div>
<?php
		}
?>