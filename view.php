<!Doctype html>
<html>
  <head>
  
  </head>
  <body>

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

	$sql = "SELECT * FROM `studentdetails`";
     $result = $conn->query($sql);
    echo $result;

     if ($result->num_rows > 0) {
	   echo "<table>";	 
	    echo "<tr>";
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
}
    
     echo "";

     $conn->close();
     ?>
</body>
</html>
