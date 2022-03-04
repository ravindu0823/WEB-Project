<!Doctype html>
<html>
<head>
    <title>Login</title>
    <?php

    // Initiate session
    session_start();

    // Check, is user is already loged in, then jump to secured page
    if (isset($_SESSION['username'])) {
        /* This is the secured home page */
        header('Location: securedpage.php');
    }

    ?>
</head>
<body>
<form name="login" method="post" action="session.php">
    <table>
        <tr>
            <td>Username: </td>
            <td><input type="text" name="uname" placeholder="Enter your User name"></td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="password" name="password" placeholder="Enter your Password"></td>
        </tr>
        <tr>
            <td><input type="submit"></td>
        </tr>
    </table>
</form>
</body>
</html>