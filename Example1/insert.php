<?php
    include('./.env.php');
    // This is my connection string
    $conn=mysqli_connect(getenv('DB_HOST'),getenv('DB_USER'),getenv('DB_PASS'),
    getenv('DB'));
    
    var_dump($_POST);

    $sql = "INSERT INTO countries (
        name, 
        description, 
        population
    ) VALUES (
        '{$_POST['name']}',
        '{$_POST['description']}',
        {$_POST['population']}
    )";

    echo $sql; 

    $resp = mysqli_query($conn, $sql);

    // In order to use $_SESSION we have to start the session
    session_start();


    if ($resp) {
        // We were successful
        $_SESSION['notification'] = "The new country was created successfully";
    } else {
        // We failed and should be ashamed of ourselves 
        $_SESSION['notification'] = "There was an error creating the country: " . mysqli_error($conn);
    }

    // Redirect to notification.php
    header("Location: ./notification.php");
    exit; // Die
?>
