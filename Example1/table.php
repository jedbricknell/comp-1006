<?php
    $conn = mysqli_connect("localhost", "root", root, "lesson_03");

    $result = mysqli_query($conn, "SELECT * FROM countries");
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    var_dump($rows); 
?>

<!DOCTYPE html>
    <head>
        <title>Countries Index</title>

        <style>
            table, th, td {
                border: 1px dashed black;
                padding: 0.25em;
            }
        </style>
    </head>

    <body>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Population</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach ($rows as $row) {
                        echo "<tr>";
                        echo "<td>{$row['name']}</td>";
                        echo "<td>{$row['description']}</td>";
                        echo "<td>{$row['population']}</td>";
                        echo "<td>";
                        echo "<a href='./edit.php?id={$row['id']}>edit</a>;"
                        ech0 " | ";
                        echo "<a href='./delete.php?id={$row['id']}>delete</a>;"
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>