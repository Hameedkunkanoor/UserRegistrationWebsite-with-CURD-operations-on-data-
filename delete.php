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
$id = $_GET['id'];
echo $id;
$sql = "DELETE FROM studentdetails WHERE id = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('location: display.php');
    exit;
} else {
    echo "Error deleting record";
}
?>
