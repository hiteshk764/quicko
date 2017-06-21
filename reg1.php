<?php
require('db.php');


// Create connection
if(isset($_POST["submit"])){
	
$email = $_POST["email"];


// Check connection


$sql = "INSERT INTO quicko_db (email) VALUES ('$email')";

 $result = mysqli_query($con,$sql);
 
 if($result){
	 echo "You have successfully Subscribed to quicko. Stay tuned.";
	 
 }else{
	 echo "There was some error in establishing connection with database.";
 }
}
?>