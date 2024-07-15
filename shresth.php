<?php 
session_start();
error_reporting(E_ALL^E_WARNING);
?>

<html>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Chapter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<head>
</head>
<body>
<div class="container">
	<h1 class="regis text-center">ADD CHAPTER</h1>
	<div class="container">
		<?php
		if($_REQUEST["err"]==1){
		?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Enter valid Chapter Name
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		<?php
		}
		?>
		<?php
		if($_REQUEST["err"]==2){
		?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Chapter Already exists.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		<?php
		}
		?>
			<form action="add-chapter-process.php" method="post">
				<div class="mb-3 col-md-6">
					<label class="form-label" for="class specification">Select Class</label>
					<select class="form-select" aria-label="Default select example" name="classId" id="class1" >
						
						<?php 
						include "dbms.php";
						$query="select * from tblclass";
						$stmt=$conn->prepare($query);
						$stmt->execute();
						?>
						<option value="-1" >--Select Class--</option>
						<?php
							while($class = $stmt->fetch())
							{
								if($class["status"]==1){
									$classId = $class["classId"];
						?>
						<option class="green" value = "<?php echo $classId;?>" ><?php echo $class["classname"]; ?></option>
						<?php 
								}
								elseif($class["status"]==0){
									$classId = $class["classId"];
						?>
						<option class="red" value = "<?php echo $classId;?>" disabled ><?php echo $class["classname"]; ?></option>
						<?php 
								}
							}	
						?>
					</select>
				<p id="subject1">
			</p>	
			<p id="chapter">
			</p>
		
		</div>
		<div class="col-md-12">
			<button class="btn btn-primary" type="submit">
				Add Chapter
			</button>
		</div>
			</form>
	</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
					var classId =$("#class1").val();
					var subjectId =$("#subject1").val();
				 $.post("chapters.php",{subjectId:subjectId},function(data){$("#chapter").html(data);
				 });
			 });
		});
	</script>