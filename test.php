<!Doctype html>
<html>
  <head>
  
  </head>
  <body>
	  
    <center>
      <h1><u>Register</u></h1>
      <form method="POST" action="">
       <table>
         <tr>
           <th>Enter Name</th>
           <th><input type="text" name="name"/></th>
         </tr>
         <tr>
           <th>Enter Id</th>
           <th><input type="text" name="id" /></th>
         </tr>
         <tr>
           <th>Enter Branch </th>
           <th><input type="text" name="branch"/></th>
         </tr>
        
         
         <tr>
           <th>Enter PhoneNumber </th>
           <th><input type="text" name="contact"/></th>
         </tr>
         <tr>
           <th>Email::</th>
           <th><input type="text" name="email"/></th>
         </tr>
          
         <tr>
           <th><input class="submit" name="submit" type="submit" value="Insert"></th>
           <th><input type="reset" value="reset"/></th>
         </tr>
      </table>
      </form>
    </center>
    
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
       $scollege =  $_POST["college"];
       
       $spno =  $_POST["contact"];
       $semail =  $_POST["email"];
       
       $sql = "INSERT INTO `studentDetails` (`name`, `id`, `branch`, `college`, `city`, `phone_number`, `email`) 
               VALUES ('".$sname."', '".$sid."', '".$sbranch."', '".$scollege."', '".$scity."', '".$spno."', '".$semail."')";
               
               

       if ($conn->query($sql) === TRUE) 
       {
          echo "<script>alert(' Registered successfully')</script>";
       }
       else 
       {
          #	echo "Error: " . $sql . "<br>" . $conn->error;
           echo "<script>alert(' Error while insertion')</script>";
       }    
      }
     
     echo "<center>";
     
     $sql = "SELECT * FROM `studentDetails`";
     $result = $conn->query($sql);

     if ($result->num_rows > 0) {
	   echo "<table>";	 
	    echo "<tr>";
	      echo "<td>name</td>";
	      echo "<td>id</td>";
	      echo "<td>branch</td>";
	      echo "<td>college</td>";
	      echo "<td>city</td>";
	      echo "<td>phone number</td>";
	      echo "<td>email</td>";
	    echo "</tr>";
	    
       while($row = $result->fetch_assoc())
        {
			echo "<tr>";
			 echo "<td>".$row["name"]."</td>";
			 echo "<td>".$row["id"]."</td>";
			 echo "<td>".$row["branch"]."</td>";
			 echo "<td>".$row["college"]."</td>";
			 echo "<td>".$row["city"]."</td>";
			 echo "<td>".$row["phone_number"]."</td>";
			 echo "<td>".$row["email"]."</td>";
			echo "</tr>";
        
       }
       echo "</table>";
     }
     else {
      echo "0 results";
     }
     echo "</center>";

     $conn->close();
     ?>
  </body>
</html>
