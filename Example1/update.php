<?php
    // If no query string then go away
    if (empty($_POST['id'])) {
        header("Location: ./table.php");
        exit;
    }

    var_dump($_POST);

    include('./.env.php');
    // This is my connection string
    $conn=mysqli_connect(getenv('DB_HOST'),getenv('DB_USER'),getenv('DB_PASS'),
    getenv('DB'));

    $sql = "UPDATE countries SET
        name = '{$_POST['name']};
        decription = '{$_POST['description']};
        population = {$_POST['population']};
    WHERE id = {$_POST['id']}";
echo $sql;

$res = mysqli_query($conn, $sql);

if ($res === true) {
    echo "The country was updated successfully!";
} 
else {
    echo "There was an error updating the record: " . mysqli_error($conn);
}

?>