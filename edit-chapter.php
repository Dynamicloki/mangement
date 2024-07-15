<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);
include "includes/top.php";
?>
<title>Chapter Management</title>
<?php
include "includes/nav.php";
include "includes/left-side.php";

$subjectId = $_REQUEST["subjectId"];
$classId = $_REQUEST["classId"];
$chapterId = $_REQUEST["chapterid"];

include "dbms.php";
$stmt = $conn->prepare("SELECT * FROM tblchapter WHERE chapterid=:chapterid");
$stmt->bindParam(":chapterid", $chapterId);
$stmt->execute();
	$row3 = $stmt->fetch();
?>

<div class="container">
    <h1 class="regis text-center">EDIT CHAPTER</h1>
    <form action="edit-chapter-process.php" method="post">
        <input type="hidden" name="chapterid" value="<?php echo $row3["chapterid"]; ?>">
        <div class="mb-3 col-md-6">
            <label class="form-label" for="class-specification">Select Class</label>
            <select class="form-select" aria-label="Default select example" name="classId" id="class1">
                <?php
                $stmt = $conn->prepare("SELECT * FROM tblclass WHERE status='1'");
                $stmt->execute();
             
        while ($row = $stmt->fetch()) {
            $selected = (isset($row['classname']) == $row3["classid"]) ? 'selected' : '';
            ?>
            <option value="<?php echo $row["classname"]; ?>" <?php echo $selected; ?>>
                <?php echo $row["classname"] ?>
            </option>
            <?php
        }
        ?>
            </select>
            <br>
            <br>
        </div>

        <div class="col-md-12">
            <button class="btn btn-primary" type="submit">Save Changes</button>
        </div>
    </form>
</div>
	

<?php
include "includes/end.php";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#class1").change(function() {
            var classId = $("#class1").val();
            $.post("edit-chapter.php", {
                classId: classId
            }, function(data) {
                $("#subject1").html(data);
            });
        });

    });
</script>