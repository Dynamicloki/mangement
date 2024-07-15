	<?php
	 $subjectId =$_REQUEST["subjectId"];
	?>	
		<div>
			<label for="validationCustom01" class="form-label">
			Chapter Name
			</label>
			<input type="text" class="form-control" name="chaptername" id="validationCustom01" value="" placeholder="chapter Name" required>
			<br>
		</div>
		<div class="col-md-12">
			<label>
			Status
			</label>
			<div class="form-check">
			<input class="form-check-input" type="radio"  value=0 name="status" id="flexRadioDefault2" >
			<label class="form-check-label" for="flexRadioDefault2">
			Inactive
			</label>
			</div>
			<div class="form-check">
			<input class="form-check-input" type="radio"  value=1 name="status" id="flexRadioDefault2"  >
			<label class="form-check-label" for="flexRadioDefault2">
			Active
			</label>
		</div>