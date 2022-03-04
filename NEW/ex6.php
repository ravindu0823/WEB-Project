<!Doctype html>
<html>
<head>
    <title>Example 6</title>
</head>

<body>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $comments = $_REQUEST['comments'];

    echo '
    <table>
        <tr>
            <td>Your Name:</td>
            <td>' . $name . '</td>
        </tr>
        
        <tr>
            <td>E-mail:</td>
            <td>' . $email . '</td>
        </tr>
        
        <tr>
            <td>Comments:</td>
            <td>' . $comments . '</td>
        </tr>
    </table>
    ';

    exit();
}


?>

<form name="book" method="post" action="ex6.php">

    <table>
        <tr>
            <td colspan="2">
                <center><h2>Guest Book</h2></center>
            </td>
        </tr>
        <tr>
            <td>Name</td>
            <td>
                <input type="text" name="name">
            </td>
        </tr>

        <tr>
            <td>Email</td>
            <td>
                <input type="text" name="email">
            </td>
        </tr>

        <tr>
            <td>Your Comments</td>
            <td>
                <textarea name="comments">

                </textarea>
            </td>
        </tr>

        <tr>
            <td>
                <input type="submit" value="Sign the Guest Book">
            </td>
            <td>
                <input type="button" value="Cancel">
            </td>
        </tr>

    </table>

</form>

</body>

</html>