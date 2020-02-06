<!DOCTYPE html>
    <head>
        <title>New Country</title>
    </head>

    <body>
        <header>
            <h1>New Country</h1>
        </header>

        <form action="./insert.php" method="post">
            <div>
                <label>Country Name:</label><br>
                <input name="name" value="">
            </div>
            <div>
                <label>Country Description:</label><br>
                <input name="description"value="">
            </div>
            <div>
                <label>Country Population:</label><br>
                <input name="population" type="number" value="">
            </div>

            <button type="submit">Create</button>
        </form>
    </body>
</html>