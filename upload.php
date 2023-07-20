<?php
    if(isset($_POST["submit"])){
        print_r($_FILES);
        $filename = time().$_FILES["myfile"]["name"];
        $temp_location = $_FILES["myfile"]["tmp_name"];
        move_uploaded_file($temp_location,"images/".$filename);
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
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>