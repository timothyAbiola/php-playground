<?php
// create server connection
$servername = "localhost";
$username = "root";
$password = "";
// create connection
$conn = mysqli_connect($servername, $username, $password);
// check connection
if($conn->connect_error){
    die("connection failed" . $conn->connect_error);
}else{
    echo "connected successfully";
}