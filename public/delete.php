<?php
//delete.php

include("connection.php");
// $query = mysql_query("DELETE FROM tbl_students WHERE stud_ID = '".$_GET['id']."'") or die(mysql_error());
//$query = mysqli_query($conn,"Update details SET status='Deleted' WHERE UserID ='".$_GET['id']."'") or die(mysqli_error());

//if(!$query){
//	echo "Record not deleted!";
//}
//else{
//	echo"Record successfully deleted";
//}

//echo "<a href='../index.php'><input type='button' value='Back'/></a>";

if (isset($GET['del'])){
	$UserID = $_GET ['del'];
	mysqli_query($conn, "DELETE FROM UserID=$UserID");
	$_SESSION ['msg'] = "DELETED!";
	header ('location: show_data.php');
}
?>
