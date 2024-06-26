<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        form{
            background-color: grey;
            height: 200px;
            width: 300px;
            margin: 100px auto;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            gap: 10px   ;
        }
        h1{
            font-family: 'Courier New', Courier, monospace;
        }
        input{
            height: 40px;
            
        }
        button{
            display: block;
            padding: 10px;
            background-color: green;
            outline: none;
            border: 2px solid grey;
            border-radius: 5px;
            font-family: 'Courier New', Courier, monospace;
            font-weight: 900;
            color: white;
        }
    </style>
</head>
<body>
    <?php 
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_SESSION["username"] = $_POST['username'];
        header('Location: dashboard.php');
        exit;
    }
    ?>
    <form action="" class="form" method="POST">
        <h1>Sign In</h1> 
        <input type="text" name='username' placeholder="username">
        <input type="password" name="password" placeholder="password">
        <button>Login</button> 
        <a href="signup.php">Don't have an account? open one!</a>
    </form>
</body>
</html>