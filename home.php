<link rel="stylesheet" href="style.css">

<body class="form-container">
<?php
    if(isset($_POST['register'])){
        $email = $_POST["email"];
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<h2>Welcome to our home page<3</h2>";
        }
        else {
            echo "<h2>please enter a valid email<\h2>";
        } 
    }    
    ?>
</body>