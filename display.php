<!Doctype html>
<html>
  <head>
  <link rel='stylesheet' type="text/css" href="bootstrap.css">
  </head>
  <body style="background-color:#D4E0F6">
<div class="row" style="background-color:#132260;min-height:'130px'">
<h1 align="center" style="color:white"><b>Students Details</b></h1></div>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<center>
<?php
 $servername = "localhost";
      $username = "root";
      $password = "1";
      $dbname = "student";
      $conn = new mysqli($servername, $username, $password,$dbname);
     
      if ($conn->connect_error)
       {
         die("Connection failed: " . $conn->connect_error);
       } 
	


$showRecordPerPage = 5;
if(isset($_GET['page']) && !empty($_GET['page'])){
$currentPage = $_GET['page'];
}else{
$currentPage = 1;
}
$startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
$totalEmpSQL = "SELECT * FROM studentdetails";
$allEmpResult = mysqli_query($conn, $totalEmpSQL);
$totalEmployee = mysqli_num_rows($allEmpResult);
$lastPage = ceil($totalEmployee/$showRecordPerPage);
$firstPage = 1;
$nextPage = $currentPage + 1;
$previousPage = $currentPage - 1;
$empSQL = "SELECT id,name,branch,contact,email FROM `studentdetails` LIMIT $startFrom, $showRecordPerPage";
$eResult = mysqli_query($conn, $empSQL);
?>
<table class="table table-striped">
<thead>
<tr>
<th>Name</th>
<th>Id</th>
<th>Branch</th>
<th>Email</th>
<th>Contact</th>
</tr>
</thead>
<tbody>
<?php
while($emp = mysqli_fetch_assoc($eResult)){
?>
<tr>
<th scope="row"><?php echo $emp['name']; ?></th>
<td><?php echo $emp['id']; ?></td>
<td><?php echo $emp['branch']; ?></td>

<td><?php echo $emp['email']; ?></td>

<td><?php echo $emp['contact']; ?></td>

<td><a href="delete.php?id='<?php echo $emp['id']; ?>'">Delete</a></td>";
<td><a href="edit.php?id='<?php echo $emp['id']; ?>'">Edit</a></td></tr>";


</tr>
<?php } ?>
</tbody>
</table>
<nav aria-label="Page navigation">
<ul class="pagination">
<?php if($currentPage != $firstPage) { ?>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
<span aria-hidden="true">First</span>
</a>
</li>
<?php } ?>
<?php if($currentPage >= 2) { ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
<?php } ?>
<li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
<?php if($currentPage != $lastPage) { ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">
<span aria-hidden="true">Last</span>
</a>
</li>
<?php } ?>
</ul>
</nav>

<?php
 $conn->close();







     ?></center><br><br>
<br>
</div>
<div class="col-md-2">
</div>
</div>






<br>
<center><form action="register.php" method="POST">
<input type="Submit" class="btn btn-primary" value="Add Student" name="ADD">
</form></center>
</body>
</html>
