 <?php   
error_reporting();
 $conn = mysqli_connect('localhost', 'root', '', 'register_db');
if (!$conn)
{
die('Could not connect: ' . mysqli_error()); // If not connected
}
else{
echo "<br><br>Status: Connected to phpmyadmin"; //If connected
}

$db = mysqli_select_db($conn,"register_db"); //Select a specific database
if(!$db){
die('<br>No Database: ' . mysqli_error()); // If not connected
}
else{
echo "<br>Connected to Database.";
}



  
 ?>  
