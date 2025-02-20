<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'dbconnect.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
	$number = $_POST["number"];
	$gender = $_POST["gender"];
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    
    $sql = "INSERT INTO `users` (`username`) VALUES ('$username')";
    $result = mysqli_query($conn, $sql);

if ($result) {
	// Data inserted successfully
	echo "Data inserted successfully.";
} else {
	// Error in inserting data
	echo "Error: " . mysqli_error($conn);
}
}