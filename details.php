
<!Doctype html>
<html>
  <head>
  
  </head>
  <body>
<div class="row" style="background-color:yellow">
<h1 align="center" style="color:black"><b>Students Details</b></h1></div>
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
     if(isset($_POST['submit']))
     {
		 $sname= $_POST["name"];
       $sid =  $_POST["id"];
       $sbranch =  $_POST["branch"];
       
       $spno =  $_POST["contact"];
       $semail =  $_POST["email"];
       
       $sql = "INSERT INTO `student`.`studentdetails` (`name`, `id`, `branch`, `email`, `contact`) 
               VALUES ('".$sname."', '".$sid."', '".$sbranch."', '".$semail."', '".$spno."')";
               echo $sql;
	$x=$conn->query($sql);

/*$sqll = "SELECT * FROM `student`.`studentdetails`";
     $result = $conn->query($sqll);
	if(!$result)
{
echo "Failed!";
die();
}
     if ($result->num_rows > 0) {
	   echo "<table border='2px' cellpadding='10px'>";	 
	    echo "<tr style='padding:10px;'>";
	      echo "<td>name</td>";
	      echo "<td>id</td>";
	      echo "<td>branch</td>";
	     echo "<td>email</td>";
	      echo "<td>contact</td>";
	    echo "</tr>";
	    
       while($row = $result->fetch_assoc())
        {
	echo "<tr>";
	 echo "<td>".$row["name"]."</td>";
	 echo "<td>".$row["id"]."</td>";
	echo "<td>".$row["branch"]."</td>";
 	 echo "<td>".$row["email"]."</td>";
	 echo "<td>".$row["contact"]."</td>";
	echo "</tr>";
        
       }
       echo "</table>";
     }
else{
echo "No records";
}*/
}
    
     echo "";


     $conn->close();
	header('location:display.php');
     ?></center><br><br>
<center><form action="register.php" method="POST">
<input type="Submit" value="Add" name="ADD">
</form></center>
  </body>
</html>
