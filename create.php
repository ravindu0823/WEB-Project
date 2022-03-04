<!Doctype html>
<html>
<head>
    <title>Create Student Form</title>
</head>
<body>
<form method="post" action="create.php">
    <?php echo("<h1>Student Form</h1>"); ?>
    <table>
        <tr>
            <td>
                <?php echo("Index No"); ?>
            </td>
            <td>
                <?php echo("<input type='text' name='inNo', placeholder='Index Number' value='' required>"); ?>
            </td>
        </tr>
    </table>
</form>
</body>
</html>