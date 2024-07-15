<?php
session_start();
include"includes/top.php";

?>
<title>test management</title>
<?php
include"includes/nav.php";
include"includes/left-side.php";
?>
<div class="container">
<br>
	<div class="col-md">
			<form action="add-test-process.php" method="post">
				<marquee >ADD TEST</marquee>
			<div class="row">
				<div class="mb-6 col-md-6">
					<label class="form-label" for="class specification">Select Class</label>
					<select class="form-select" aria-label="Default select example" name="classId" id="class1" >
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
								 <option value= "<?php echo  $row["classname"];?>">
									<?php echo $row["classname"]?>
								 </option>
								<?php
									}
								?>	 
					</select>
					<p id="subject1">
					</p>
					<div class="mb-6 col-md-6">
					  <label for="exampleFormControlInput1" class="form-label">Total Marks</label>
					  <input type="number" id ="test1" class="form-control" placeholder="Total Marks" name="totalMarks">
					  
					</div>
					<br>
					<br>
					<button class="btn btn-primary" type="submit">Marks</button>
				</div>
				
				<div class ="mb-6 col-md-6">
					<p id="chapter">
					</p>
					<p id="test1">
					</p>
					
				</div>
			</div>
		</form>
	</div>
</div>
<?php
include "includes/end.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity=<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#class1").click(function()
			{
				var classId = $("#class1").val();
				$.post("subjects.php",{classId:classId},function(data,status){
				$("#subject1").html(data);
				});
			});
				$("#subject1").click(function()
				{
				
					//alert($("#class1").val());
					var selected = new Array();
					$("input:checkbox[name=subjectId]:checked").each(function() {
                    selected.push($(this).val());
                });
                    var valuesString = "";
                    for (var i = 0; i < selected.length; i++) {
                    valuesString += selected[i] + "+"; // Add each value to the string with a newline
                }
                    var classId = $("#class1").val();
                   // alert("Array values:\n" + valuesString);
				    $.post("chapter-list.php",{subjectId:valuesString,classId:classId },function(data){
				    //alert(data);
				    $("#chapter").html(data);
				 });
			 });
			    	
		});
			
	</script>