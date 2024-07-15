<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);
include "dbms.php";
include"includes/top.php";
?>
<title>edit student</title>
<?php
include"includes/nav.php";
include"includes/left-side.php";
?>
<?php
	$studentid  = $_REQUEST["studentid"];
	include "dbms.php";
	$stmt=$conn->prepare("SELECT * FROM tblstudent2 where studentid=:studentid");
	$stmt->bindparam("studentid",$studentid);
	$stmt->execute();
	$result=$stmt->fetch();
	
	
?>
<div class="container">
		<div class="row">
			<Center class="here">
				<span class="top">STUDENT REGISTER</span>
			</Center>
		</div> 
		<form action="student-edit-process.php" method="post">
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
				};
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
				};
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
				};
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
				};;
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
				};
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
				};
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
				};
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
				};
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
				};
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
				};
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
				};
			?>
			<div class="row"> 
				<div class="col-md-6 col-sm-6">
					<span class="left">STUDENT Details</span>
					<input type="hidden" value="<?php echo $result["studentid"] ?>" name="studentid" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
					<div class="mb-3">
						<label for="basic-url" class="form-label">Student Full Name</label>
					    <div class="input-group">
							<input type="text" class="form-control" <?php echo $result["studentname"] ?> name="studentname" id="basic-url" aria-describedby="basic-addon3 basic-addon4" placeholder="Student Name">
					    </div>
					</div>
					<div class="mb-3">
						  <label for="basic-url" class="form-label">Student Date of Birth</label>
							<div class="input-group">
								<input type="date" class="form-control" <?php echo $result["dob"] ?> name="dob" id="basic-url" aria-describedby="basic-addon3 basic-addon4" placeholder="DD/MM/YYY">
							</div>
					</div>
					<div class="mb-3">
					  <label for="basic-url" class="form-label">Selected class</label>
						<select class="form-select" <?php echo $result["class"] ?> name="class" id="inputGroupSelect01">
							<option value="-1">--Selected class </option>
							<option value="1">12th</option>
							<option value="2">11th</option>
							<option value="3">10th</option>
							<option value="4">9th</option>
							<option value="5">8th</option>
							<option value="6">7th</option>
							<option value="7">6th</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="basic-url" class="form-label">Select Session</label>
						<div class="input-group">
							<select class="form-select" value="<?php echo $result["season"]?>" name="season" id="inputGroupSelect01">
								<option value=-1>--Select Session </option>
								<option value="1">2023-2024</option>
							</select>
						</div>
					</div>
					<div class="mb-3">
						<label for="basic-url" class="form-label">Student-Mobile-Number</label>
						<span class="right"> (optional and can leave blank)</span>
						<div class="input-group">
							<input type="number" class="form-control" value="<?php echo $result["studentmobile"]?>" name="studentmobile" id="basic-url" aria-describedby="basic-addon3 basic-addon4" placeholder="Student Mobile Number">
						</div>
					</div>
					<div class="mb-3">
					  <label for="basic-url" class="form-label">School Name</label>
					  <div class="input-group">
						<input type="text" class="form-control"value="<?php echo $result["schoolname"]?>" name="schoolname" id="basic-url" aria-describedby="basic-addon3 basic-addon4" placeholder="Student Name">
					  </div>
					</div>
					<div class="mb-3">
						<label for="basic-url" class="form-label">Student Gender</label>
						<div class="input-group">
							<select class="form-select" value="<?php echo $result["gender"]?>"name="gender" id="inputGroupSelect01">
								<option value="-1">--Gender</option>
								<option value="1">Male</option>
								<option value="2">Female</option>
							</select>
						</div>
					</div>
					<div class="mb-3">
						<label for="basic-url" class="form-label">Student Mail Id</label>
						<span class="right"> (optional and can leave blank)</span>
						<div class="input-group">
							<input type="text" class="form-control" value="<?php echo $result["studentmail"]?>" id="basic-url" name="studentmail" aria-describedby="basic-addon3 basic-addon4" placeholder="Student Mail Id">
						</div>
					</div>
					<div class="mb-3">
						<label for="basic-url" class="form-label">Student Login Password</label>
						<span class="aa">(Atleast 6 characters)</span>
						<div class="input-group">
							<input type="password" class="form-control" value="<?php echo $result["studentlogin"]?>" id="basic-url" aria-describedby="basic-addon3 basic-addon4" name="studentlogin" placeholder="Student Login Password">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<span class="left">Parents Details</span>
					<div class="mb-3"> 
						<label for="basic-url" class="form-label">Father Name</label>
						<div class="input-group flex-nowrap">
							  <span class="input-group-text" id="addon-wrapping">Mr.</span>
							  <input type="text" class="form-control" value="<?php echo $result["fathername"]?>" name="fathername" placeholder="Father name" aria-label="Username" aria-describedby="addon-wrapping">
						</div>
					</div>
					<div class="mb-3"> 
						<label for="basic-url" class="form-label">Mother Name</label>
						<div class="input-group flex-nowrap">
							  <span class="input-group-text" id="addon-wrapping">Miss.</span>
							  <input type="text" class="form-control" value="<?php echo $result ["mothername"]?>" name="mothername" placeholder="Mother name" aria-label="Username" aria-describedby="addon-wrapping">
						</div>
					</div>
					<div class="mb-3">
						  <label for="basic-url" class="form-label">Father Mobile Number</label>
						<div class="input-group">
								<input type="number" class="form-control" id="basic-url"  aria-describedby="basic-addon3 basic-addon4" value="<?php echo $result["fathernobilenumber"]?>" name="fathermobilenumber" placeholder="father number">
						</div>
					</div>
					<div class="mb-3">
						  <label for="basic-url" class="form-label">mother Mobile Number</label>
						  <span class="right"> (optional and can leave blank)</span>
						<div class="input-group">
							<input type="number" class="form-control" value="<?php echo $motherMobileNumber?>" name="motherMobileNumber" id="basic-url" aria-describedby="basic-addon3 basic-addon4" placeholder="mother number">
						</div>
					</div>
					<div class="mb-3">
						  <label for="basic-url" class="form-label">Parents Mail Id </label>
						  <div class="input-group">
							<input type="text" class="form-control" value="<?php echo $result["parantsmail"]?>" id="basic-url" aria-describedby="basic-addon3 basic-addon4" name="parentsmail" placeholder="Parents MailId" >
						  </div>
					</div>
					<div class="mb-3">
					  <label for="basic-url" class="form-label">Parents Login Password <span class="third">(Atleast 6 characters)</span> </label>
					  <div class="input-group">
							<input type="text" class="form-control" value="<?php echo $result["parentsmailpassword"]?>" id="basic-url" aria-describedby="basic-addon3 basic-addon4" name="parentsmailpassword" placeholder="Parents Password">
					  </div>
					</div>
					<div class="mb-3">
					  <label for="exampleFormControlTextarea1" class="form-label">Address</label>
					  <textarea class="form-control" name="address"  id="exampleFormControlTextarea1" rows="3"><?php echo $result["address"]?></textarea>
					</div>
					<div class="mb-3">
						<input class="btn btn-primary" type="submit" value="Add Student">
					</div>
				</div>
			</div>
		</form>
	</div>
<?php
include"includes/end.php";
?>