<?php
    include('./.env.php');
    // This is my connection string
    $conn=mysqli_connect(getenv('DB_HOST'),getenv('DB_USER'),getenv('DB_PASS'),
    getenv('DB'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Entry File</title>
</head>
<body>
    <?="Hello World"?>
</body>
</html>