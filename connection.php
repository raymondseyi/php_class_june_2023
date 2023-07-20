<?php
    $conn = mysqli_connect('localhost','root','','phpclass');
    if($conn){
        echo("connected successfully");
    }else{
        echo("database no gree connect");
        echo(mysqli_connect_error());
    }
?>