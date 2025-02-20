<?php
$server = "database-1.c7mw80ewqrca.us-east-1.rds.amazonaws.com"; //your database endpoint
$username = "root";
$password = "Your-database-password"; //password
$database = "dbconnect"; //database name 

$conn = mysqli_connect( $server, $username, $password, $database);
if ($conn)
{
    echo "success";
}
else
{
    die("Error". mysqli_connect_error());
}
?>
