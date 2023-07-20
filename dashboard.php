<?php
    require("./connection.php");
    session_start();
    if($_SESSION["id"]){
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn,$query);
        $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
    }else{
        header("Location:signin.php");
        session_unset();
    }
   
    // print_r($users);
    // echo($users[0]["firstname"]);
   
    // print_r($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to dashbaord</h1>
    <?php
     for ($i=0; $i <count($users) ; $i++) { 
        echo("<h1>{$users[$i]["firstname"]}</h1>");
    }
    ?> 

   
    <?php for ($i=0; $i <count($users) ; $i++) { ?>
       <h1> 
            <?php echo("{$users[$i]["firstname"]}");?> 
       </h1>
       <button>Delete</button>
       <button>Edit</button>
    <?php }; ?>
   
</body>
</html>