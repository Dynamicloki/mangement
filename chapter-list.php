<?php
    error_reporting(E_ALL ^ E_WARNING);
    include "dbms.php";
    $subjectId = $_REQUEST["subjectId"];
    $subjectId = explode("+",$subjectId);
    $classId = $_REQUEST["classId"];
    ?>
<div class="row">
    <div class="col-md-6">
        <?php
			foreach ($subjectId as $subId) {
            $stmt3 = $conn->prepare("SELECT * FROM tblsubject WHERE subjectid=:subjectid");
            $stmt3->bindParam(":subjectid",$subId);
            $stmt3->execute();
            
				if ($result=$stmt3->fetch()) 
				{
                ?>
               <label><p>Select Chapters of</p> 
			   <?php echo $result["subjectname"];?>
			   </label>
				<?php
				} 
				?>
            <?php
            $stmt3 = null;
            $stmt = $conn->prepare("SELECT * FROM tblchapter WHERE subjectid=:subjectid AND classid=:classid");
            $stmt->bindParam(":subjectid", $subId);
            $stmt->bindParam(":classid", $classId);
            $stmt->execute();
            while ($row = $stmt->fetch()) {
                ?>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="chapterId" id ="chapter" value="<?php echo $row["chaptername"];?>" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        <?php echo $row["chaptername"];?>
                    </label>
                </div>
                <?php
            }
        }
        $stmt = null;
        $conn = null;
        ?>
    </div>
</div>


