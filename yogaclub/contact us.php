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
    
    $sql = "INSERT INTO `users` (`username`,`email`,`number`,`gender`) VALUES ('$username','$email','$number','$gender')";
    $result = mysqli_query($conn, $sql);

if ($result) {
	// Data inserted successfully
	echo "Data inserted successfully.";
} else {
	// Error in inserting data
	echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
}
?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="contact us.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <title>Responsive Regisration Form </title>
</head>
<body>
    <div class="container">
        <header>Registration</header>

        <form action="#" method="post"> 
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter your name" name="username" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Enter your email"name="email" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" placeholder="Enter mobile number"name="number" required>
                        </div>
						<div class="input-field">
                            <label>field gender</label>
                            <input type="gender" placeholder="Enter your gender type"name="gender" required>
                        </div>
                        <a href="index.php" class="back"> Back  </a>
						<button class="sumbit"> Submit  </button>

                    </div>
                </div>

</body>
</html>