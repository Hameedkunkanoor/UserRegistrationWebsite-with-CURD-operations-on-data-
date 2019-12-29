<!Doctype html>
<html>
  <head>
  <link rel='stylesheet' type="text/css" href="bootstrap.css">
  </head>
  <body style="background-color:white">
	  
  <div class="row" style="min-height:90px;background-color:#0A2E18">
      <h1 align="center" style="color:white"><b>Student Registration</b></h1>
</div>
<div class="row" align="center">
<div class="col-md-4"></div>
<div class="col-md-4">
      <form action="details.php" method="POST">
       
         <tr><br><br>
           <b>Enter Name</b>
           <th><input type="text" name="name" minlength="6" class="form-control input-md" required="true"/></th><br>
         </tr>
         <tr>
           <b>Enter Id</b>
           <th><input type="text" name="id" minlength="6" class="form-control input-md" required="true"/></th><br>
         </tr>
         <tr>
           <b>Enter Branch </b>
           <th><input type="text" name="branch" minlength="3" class="form-control input-md" required="true"/></th><br>
         </tr>
    
         <tr>
           <b>Enter PhoneNumber </b>
           <th><input type="number" name="contact" maxlength="10" class="form-control input-md" required="true"/></th><br>
         </tr>
         <tr>
           <b>Enter Email </b>
           <th><input type="email" name="email" class="form-control input-md" required="true"/></th><br><br>
         </tr>
         <tr>
           <th><input class="submit btn btn-lg btn-primary" name="submit"  type="submit" value="Register"></th>
         </tr><br>
      
      </form></div>
<div class="col-md-4"></div>
    
   <!-- <?php
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
               
               

       if ($conn->query($sql) === TRUE) 
       {
          echo "<script>alert(' Registered successfully')</script>";
       }
       else 
       {
         
           echo "<script>alert(' Error')</script>";
       }    
      }
     
     echo "<br><br>";
     
     $sql = "SELECT * FROM `student`.`studentdetails`";
     $result = $conn->query($sql);

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
     ?>-->
  </body>
</html>
