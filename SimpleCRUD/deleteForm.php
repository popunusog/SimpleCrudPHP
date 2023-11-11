<html>

<head>
    <title>Delete Data</title>
    <link rel="stylesheet" href="css/formstyle.css">
</head>

<body>
    <h2>Delete Data</h2>
    <p>
        <a href="index.php">Home</a>
    </p>

    <form action="delete.php" method="post" name="delete">
        <table>
            <tr>
                <td>ID</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Delete" class="submit-button"></td>
            </tr>
        </table>
    </form>
</body>

</html>