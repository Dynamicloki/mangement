<?php
session_start();
include"includes/top.php";
error_reporting(E_ALL^E_WARNING);
?>
<title>admin management</title>
<?php
include"includes/nav.php";
include"includes/left-side.php";
?>
<form action="add-admin-process.php" method="POST" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Admin name</label>
    <input type="text" class="form-control" name="adminusername" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Admin mail</label>
    <input type="email" name="adminmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name ="adminpassword"class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
include"includes/end.php";
?>