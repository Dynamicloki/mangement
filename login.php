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
		<center>
	<div class="col-md-6">                    
		<div class="panel panel-info">
			<h1 class="regis text-center">LOGIN</h1>
			<div style="padding-top:30px" class="panel-body" >
				<form id="loginform" class="form-horizontal" role="form" method="POST" action="login-process.php">                                    
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" id="email" name="email" placeholder="email" required>                                        
					</div>                                
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" class="form-control" id="password" name="password" placeholder="password" required>
					</div>
					<div style="margin-top:10px" class="form-group">                               
						<div class="col-sm-12 controls">
						  <input type="submit" name="login" value="Login" class="btn btn-success">						  
						</div>						
					</div>	
					<div style="margin-top:10px" class="form-group">                               
						<div class="col-sm-12 controls">
						EXAMPLE<br>
						Admin: admin@webdamn.com<br>
						password:123	<br><br>									
						</div>						
					</div>	
				</form>   
			</div>                     
		</div>  
		</center>
	</div>

<?php
include "includes/end.php";
?>