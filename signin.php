<?php
    require("./connection.php");
    session_start();
    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $query = "SELECT * FROM users WHERE email = '$email'";
        $search = mysqli_query($conn,$query);
        $user=mysqli_fetch_all($search,MYSQLI_ASSOC);
        // echo($user[0]["email"]);
        if(count($user)<1){
            echo("user not found");
        }else{
            // echo("user found");
            $verify = password_verify($password,$user[0]["password"]);
            if($verify){
                $_SESSION["id"] = $user[0]["user_id"];
                header("Location:dashboard.php");
            }else{
                echo("user not found");
            }
           
        }
     
        // echo("$email,$password");
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
    <form action="signin.php" method="POST">
        <input type="text" placeholder="email" name="email">
        <input type="text" placeholder="password" name="password">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>