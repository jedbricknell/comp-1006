<?php
    // If no query string then go away
    if (empty($_GET['id'])) {
        header("Location: ./table.php");
        exit;
    }
    
    // Our database connection
    $conn = mysqli_connect('localhost;8889', 'root', root, 'lesson_03');

    var_dump($_GET);

$sql = "DELETE FROM countries WHERE id = {$_GET['id']}";
echo $sql;

$res = mysqli_query($conn, $sql);

if (res) {
    echo "The country was deleted successfully";
}
else {
    echo "There was an error deleting the row: " . mysqli_error($conn);
}

?>