<?php
    require("./connection.php"); //
    // include("./connection.php"); //

    if(isset($_POST["submit"])){
        // echo("Hello");
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        // echo("$firstname $lastname $email $password");
        $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
        echo($hashedPassword);
        $query = "INSERT INTO users(firstname,lastname,email,password) VALUES ('$firstname','$lastname','$email','$hashedPassword')";

        $insert = mysqli_query($conn,$query);
        if($insert){
            echo("it have save ooo");
            header("Location:dashboard.php");
        }else{
            echo("e no gree save oo");
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-9 mx-auto">
                <h1>Sign Up</h1>
                <form action="signup.php" method="POST">
                    <input type="text" placeholder="First Name" name="firstname">
                    <input type="text" placeholder="Last Name" name="lastname">
                    <input type="text" placeholder="Email" name="email">
                    <input type="text" placeholder="Password" name="password">
                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>