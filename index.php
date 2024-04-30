<?php
if (isset($_POST['name'])) {
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $phone = $_POST['user_pass'];


    // database (my_project) doesn't exist yet
    $connection = mysqli_connect('localhost','root','','my_project');
    $sql = "INSERT INTO `contact` (`name`, `email`, `phone`) VALUES ('$name','$email','$phone')";
    mysqli_query($connection,$sql);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple form app.</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="text" id="name" name="user_name" value=""/>
        <input type="email" id="email" name="user_email" value=""/>
        <input type="password" id="pass" name="user_pass" value=""/>
        <button type="submit">submit</button>
    </form>
</body>
</html>