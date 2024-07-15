<?php
include"dbms.php";
error_reporting (E_ALL ^ E_WARNING);
$stmt=$conn->prepare("select * from tblchapter");
$stmt -> execute();
?>
<?php
session_start();
error_reporting (E_ALL ^ E_WARNING);
?>
<?php
include"includes/top.php";
?>
<title>Class Table edit</title>
<?php
include"includes/nav.php";
include"includes/left-side.php";
?>
  <div class="container">
     <div class="row">
	 <?php
	 if($_REQUEST["msg"]==1)
	 {
	 ?>
	 <div class="alert alert-success alert-dismissble fade show" role="alert">
     Registration is Sucessful.
	   <button type="button" class="btn-close" aria-label="Close"></button>
  <?php
	 }
	 ?>
	 <?php
	 if($_REQUEST["msg"]==2)
	 {
	 ?>
	 <div class="alert alert-success alert-dismissble fade show" role="alert">
    Registration is Sucessful2.
	   <button type="button" class="btn-close" aria-label="Close"></button>
  <?php
	 }
	 ?>
	 <?php
	 if($_REQUEST["msg"]==3)
	 {
	 ?>
	 <div class="alert alert-success alert-dismissble fade show" role="alert">
       Registration is Sucessful3.
	   <button type="button" class="btn-close" aria-label="Close"></button>
  </div>
  <?php
	 }
	 ?>
	 <?php
	 if($_REQUEST["msg"]==4)
	 {
	 ?>
	 <div class="alert alert-success alert-dismissble fade show" role="alert">
         Registration is Sucessful4.
	   <button type="button" class="btn-close" aria-label="Close"></button>
	 </div>
	<?php
	 }
	 ?>
</div>
	 </div>
	 
  
   <table class="table">
  <thead>
    <tr>
      <th scope="col">chapterid</th>
      <th scope="col">chapter Name</th>
      <th scope="col">classId</th>
      <th scope="col">subjectId</th>
      <th scope="col">edit/delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
  while($result = $stmt->fetch() )
  {
  ?>
    <tr>
      <td><?php echo $chapterid = $result['chapterid']; ?></td>
      <td><?php echo $result['chaptername']; ?></td>
      <td><?php echo $result['classid']; ?></td>
      <td><?php echo $result['subjectid']; ?></td>
	  
	  
      <td><a href="edit-chapter.php?classId=<?php echo $classid;?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a>/<a href="delete-chapter.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
</svg></a></td>
    </tr>
	<?php
	}
	?>
  </tbody>
  </table>
  </div>
<?php
include"includes/end.php";
?>
