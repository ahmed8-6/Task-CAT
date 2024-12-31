<?php
    include '../pedri/vendor/autoload.php';
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <title>practice</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="form-container">

    <form action="home.php" method="post" >
        <label for="">username</label>
        <input type="text" name="username" placeholder="Enter your username">
        <br>
        <label for="">email</label>
        <input type="text" name="email" placeholder="Enter your email">
        <br>
        <label for="">password</label>
        <input type="password" name="pass" placeholder="Enter your password">
        <br>
        
        <input type="submit" name="register" value="register">
    </form>

    
    

</body>
</html>
    
