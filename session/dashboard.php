<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
      a{
        text-decoration: none;
      }
    </style>
</head>
<body>
   <?php 
    if (!isset($_SESSION['username'])) {
      header("Location: index.php");
      exit;
    }
   ?>
  <h1>welcome to the dashboard <?php echo htmlspecialchars($_SESSION['username'])?></h1>
  <a href="logout.php"><button>Logout</button></a>
   

</body>
</html>