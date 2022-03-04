<?php

$CREATE = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require "db.php";

    $DataBase = new DATABASE;
    $CREATE = $DataBase->CreateDatabase();
}

?>



<!DOCTYPE html>
<html>

<head>
    <title>SQL Project</title>
</head>

<body>


    <form action="sql.php" method="post">
        <table>
            <tr>
                <td colspan="3">
                    <center>
                        <h2>DATABASE MANAGEMENT</h2>
                    </center>
                </td>
            </tr>
            <tr>
                <td>Name of the Database </td>
                <td><?php echo '<input type= "text" name= "name" id="name" value="' . $CREATE['name'] . '" required>'; ?></td>
                <td><input type="submit" value="Create"></td>
            </tr>
        </table>
    </form>
</body>

</html>