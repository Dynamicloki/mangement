<?php
session_start();
error_reporting (E_ALL ^ E_WARNING);
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<style>
		.here
		{
			border-bottom: 5px solid #faa718;
			padding: 50px 0px 30px 0px;
		}
		.top
		{
			font-family: Arial Narrow;
			color: #000;
			font-size: 33px;
			margin-left:100px;
			text-transform: uppercase;
			font-weight: bold;
			text-align: Center;
			margin-bottom: 20px;
			padding-top: 30px;
			text-align:center;
		}
		.left
		{
			font-family: Arial Narrow;
			color: #000;
			font-size: 33px;
			text-transform: uppercase;
			font-weight: bold;
			margin-top: 30px;
			margin-left:100px;
		}
		.right
		{
			color:red;
		}
		.aa
		{
			color:green;
		}
	</style>
  </head>
  <body>
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-3 col-sm-3 ">
			</div>
			<div class="col-md-6 col-sm-6 here">
				<span class="top">STUDENT REGISTER</span>
			</div>
			<div class="col-md-3 col-sm-3">
			</div>
		</div> 
		<form action="connect.php" method="post">
			<?php
				if($_REQUEST["err"]==1)
				{
			?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>ERROR!</strong> INVALID NAME.
				  <button type="button" class="btn-close" aria-label="Close"></button>
				</div>
			<?php
				}
			?>
			<?php
				if($_REQUEST["err"]==2)
				{
			?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>ERROR!</strong> INCORRECT DATE OF BIRTH .
				  <button type="button" class="btn-close" aria-label="Close"></button>
				</div>
			<?php
				}
			?>
			<?php
				if($_REQUEST["err"]==3)
				{
			?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>ERROR!</strong> INCORRECT CLASS .
				  <button type="button" class="btn-close" aria-label="Close"></button>
				</div>
			<?php
				}
			?>
			<?php
				if($_REQUEST["err"]==4)
				{
			?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>ERROR!</strong> INVALID SESSION .
				  <button type="button" class="btn-close" aria-label="Close"></button>
				</div>
			<?php
				}
			?>
			<?php
				if($_REQUEST["err"]==5)
				{
			?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>ERROR!</strong> INVALID MOBILE NUMBER .
				  <button type="button" class="btn-close" aria-label="Close"></button>
				</div>
			<?php
				}
			?>
			<?php
				if($_REQUEST["err"]==6)
				{
			?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>ERROR!</strong> INVALID SCHOOL NAME .
				  <button type="button" class="btn-close" aria-label="Close"></button>
				</div>
			<?php
				}
			?>
			<?php
				if($_REQUEST["err"]==7)
				{
			?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>ERROR!</strong> INVALID GENDER .
				  <button type="button" class="btn-close" aria-label="Close"></button>
				</div>
			<?php
				}
			?>
			<?php
				if($_REQUEST["err"]==8)
				{
			?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>ERROR!</strong> INCORRECT STUDENT MAIL ID .
				  <button type="button" class="btn-close" aria-label="Close"></button>
				</div>
			<?php
				}
			?>
			<?php
				if($_REQUEST["err"]==9)
				{
			?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>ERROR!</strong> INCORRECT STUDENT PASSWORD .
				  <button type="button" class="btn-close" aria-label="Close"></button>
				</div>
			<?php
				}
			?>
			<?php
				if($_REQUEST["err"]==10)
				{
			?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>ERROR!</strong> INCORRECT FATHER NAME .
				  <button type="button" class="btn-close" aria-label="Close"></button>
				</div>
			<?php
				}
			?>
			<?php
				if($_REQUEST["err"]==11)
				{
			?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>ERROR!</strong> INCORRECT MOTHER NAME .
				  <button type="button" class="btn-close" aria-label="Close"></button>
				</div>
			<?php
				}
			?>
			<?php
				if($_REQUEST["err"]==12)
				{
			?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>ERROR!</strong> INCORRECT FATHER MOBILE NUMBER .
				  <button type="button" class="btn-close" aria-label="Close"></button>
				</div>
			<?php
				}
			?>
			<?php
				if($_REQUEST["err"]==13)
				{
			?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>ERROR!</strong> INCORRECT MOTHER MOBILE NUMBER .
				  <button type="button" class="btn-close" aria-label="Close"></button>
				</div>
			<?php
				}
			?>
			<?php
				if($_REQUEST["err"]==14)
				{
			?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>ERROR!</strong> INCORRECT PARENTS LOGIN ID .
				  <button type="button" class="btn-close" aria-label="Close"></button>
				</div>
			<?php
				}
			?>
			<?php
				if($_REQUEST["err"]==15)
				{
			?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>ERROR!</strong> INCORRECT PARENTS LOGIN PASSWORD .
				  <button type="button" class="btn-close" aria-label="Close"></button>
				</div>
			<?php
				}
			?>
			<?php
				if($_REQUEST["err"]==16)
				{
			?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>ERROR!</strong> INCORRECT ADDRESS .
				  <button type="button" class="btn-close" aria-label="Close"></button>
				</div>
			<?php
				}
			?>
			<div class="row"> 
				<div class="col-md-6 col-sm-6">
					<span class="left">STUDENT Details</span>
					<div class="mb-3">
						<label for="basic-url" class="form-label">Student Full Name</label>
					    <div class="input-group">
							<input type="text" class="form-control" <?php echo $_SESSION ["studentname"]; ?> name="studentname" id="basic-url" aria-describedby="basic-addon3 basic-addon4" placeholder="Student Name">
					    </div>
					</div>
					<div class="mb-3">
						  <label for="basic-url" class="form-label">Student Date of Birth</label>
							<div class="input-group">
								<input type="date" class="form-control" <?php echo $_SESSION ["dob"]; ?> name="dob" id="basic-url" aria-describedby="basic-addon3 basic-addon4" placeholder="DD/MM/YYY">
							</div>
					</div>
					<div class="mb-3">
					  <label for="basic-url" class="form-label">Selected class</label>
						<select class="form-select" <?php echo $_SESSION ["class"]; ?> name="class" id="inputGroupSelect01">
							<option value="-1">--Selected class </option>
							<option value="1">12th</option>
							<option value="2">11th</option>
							<option value="3">10th</option>
							<option value="1">9th</option>
							<option value="2">8th</option>
							<option value="3">7th</option>
							<option value="3">6th</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="basic-url" class="form-label">Select Session</label>
						<div class="input-group">
							<select class="form-select" value="<?php echo $_SESSION ["season"];?>" name="season" id="inputGroupSelect01">
								<option value=-1>--Select Session </option>
								<option value="1">2023-2024</option>
							</select>
						</div>
					</div>
					<div class="mb-3">
						<label for="basic-url" class="form-label">Student-Mobile-Number</label>
						<span class="right"> (optional and can leave blank)</span>
						<div class="input-group">
							<input type="number" class="form-control" value="<?php echo $_SESSION["studentmobile"]?>" name="studentmobile" id="basic-url" aria-describedby="basic-addon3 basic-addon4" placeholder="Student Mobile Number">
						</div>
					</div>
					<div class="mb-3">
					  <label for="basic-url" class="form-label">School Name</label>
					  <div class="input-group">
						<input type="text" class="form-control"value="<?php echo $_SESSION["schoolname"]?>" name="schoolname" id="basic-url" aria-describedby="basic-addon3 basic-addon4" placeholder="Student Name">
					  </div>
					</div>
					<div class="mb-3">
						<label for="basic-url" class="form-label">Student Gender</label>
						<div class="input-group">
							<select class="form-select" value="<?php echo $_SESSION["gender"]?>"name="gender" id="inputGroupSelect01">
								<option value="-1">--Gender</option>
								<option value="1">Male</option>
								<option value="1">Female</option>
							</select>
						</div>
					</div>
					<div class="mb-3">
						<label for="basic-url" class="form-label">Student Mail Id</label>
						<span class="right"> (optional and can leave blank)</span>
						<div class="input-group">
							<input type="text" class="form-control" value="<?php echo $_SESSION["studentmail"]?>" id="basic-url" name="studentmail" aria-describedby="basic-addon3 basic-addon4" placeholder="Student Mail Id">
						</div>
					</div>
					<div class="mb-3">
						<label for="basic-url" class="form-label">Student Login Password</label>
						<span class="aa">(Atleast 6 characters)</span>
						<div class="input-group">
							<input type="text" class="form-control" value="<?php echo $_SESSION["sloginpassword"]?>" id="basic-url" aria-describedby="basic-addon3 basic-addon4" name="sloginpassword" placeholder="Student Login Password">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<span class="left">Parents Details</span>
					<div class="mb-3"> 
						<label for="basic-url" class="form-label">Father Name</label>
						<div class="input-group flex-nowrap">
							  <span class="input-group-text" id="addon-wrapping">Mr.</span>
							  <input type="text" class="form-control" value="<?php echo $_SESSION ["fathername"];?>" name="fathername" placeholder="Father name" aria-label="Username" aria-describedby="addon-wrapping">
						</div>
					</div>
					<div class="mb-3">
						<label for="basic-url" class="form-label">Mother Name</label>
						<div class="input-group flex-nowrap">
							  <span class="input-group-text" id="addon-wrapping">Miss.</span>
							  <input type="text" class="form-control" value="<?php echo $_SESSION["mothername"]?>" name="mothername" placeholder="Mother name" aria-label="Username" aria-describedby="addon-wrapping">
						</div>
					</div>
					<div class="mb-3">
						  <label for="basic-url" class="form-label">Father Mobile Number</label>
						<div class="input-group">
								<input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4" value="<?php echo $_SESSION["fnumber"]?>" name="fnumber" placeholder="father number">
						</div>
					</div>
					<div class="mb-3">
						  <label for="basic-url" class="form-label">mother Mobile Number</label>
						  <span class="right"> (optional and can leave blank)</span>
						<div class="input-group">
							<input type="number" class="form-control" value="<?php echo $_SESSION["mnumber"]?>" name="mnumber" id="basic-url" aria-describedby="basic-addon3 basic-addon4" placeholder="mother number">
						</div>
					</div>
					<div class="mb-3">
						  <label for="basic-url" class="form-label">Parents Mail Id </label>
						  <div class="input-group">
							<input type="text" class="form-control" value="<?php echo $_SESSION["pmail"]?>" id="basic-url" aria-describedby="basic-addon3 basic-addon4" name="pmail" placeholder="Parents MailId" >
						  </div>
					</div>
					<div class="mb-3">
					  <label for="basic-url" class="form-label">Parents Login Password <span class="third">(Atleast 6 characters)</span> </label>
					  <div class="input-group">
							<input type="text" class="form-control" value="<?php echo $_SESSION["ppassword"]?>" id="basic-url" aria-describedby="basic-addon3 basic-addon4" name="ppassword" placeholder="Parents Password" >
					  </div>
					</div>
					<div class="mb-3">
					  <label for="exampleFormControlTextarea1" class="form-label">Address</label>
					  <textarea class="form-control" name="home" value="<?php echo $_SESSION["home"]?>" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>
					<div class="mb-3">
						<input class="btn btn-primary" type="submit" value="Add Student">
					</div>
				</div>
			</div>
		</form>
	</div>
    
  </body>
</html>
<script src"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>