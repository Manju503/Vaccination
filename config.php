<?php 
// database connection code 
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database'); 
$conn = mysqli_connect('localhost', 'root', '','jobs'); 
if($conn -> connect_error){ 
 die("connection failed:".$conn -> connect_error); 
} 
echo ""; 
if(isset($_POST['submit'])){ 
// get the post records 
$name=$_POST['Name']; 
$email=$_POST['Email']; 
$number=$_POST['Phone_No']; 
$password=$_POST['Password']; 
// database insert SQL code 
$sql = "INSERT INTO `users` (`Name`, `Email`, `Phone_No`, `Password`) VALUES 
('$name', '$email', '$number', '$password')"; 
// insert in database 
$rs = mysqli_query($conn, $sql); 
if($rs) 
{ 
 echo "Contact Records Inserted.."; 
}else{ 
 echo "Error:could not able to execute $sql. ".mysqli_error($conn); 
} 
}  
?> 