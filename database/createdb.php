<?php
include 'index.php';

// create database
$sql = "CREATE DATABASE testphp";
if($conn){
    if(mysqli_query($conn, $sql)){
        echo "Database created successfully";
    }else{
        echo "Error creating database" . mysqli_error($conn);
    }
    mysqli_close($conn);
}