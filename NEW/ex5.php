<!Doctype html>
<html>
<head>
    <title>Example 5</title>
</head>

<body>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_REQUEST['name'];
    $subject1 = $_REQUEST['subject1'];
    $subject2 = $_REQUEST['subject2'];

    $total = $subject1 + $subject2;
    $avg = $total / 2;

    echo 'Name of the student ' . $name . '<br>';
    echo 'Total marks of the student ' . $total . '<br>';
    echo 'Average marks of the student ' . $avg . '<br>';

    if ($avg >= 50) {
        echo 'You have Passed <br>';
    } else {
        echo 'You have Failed <br>';
    }

    // Not loading after exit(); function
    exit();
}

?>

<h1>Enter your marks</h1>

<form name="student" method="post" action="ex5.php">
    <table>
        <tr>
            <td>Name:</td>
            <td>
                <input type="text" name="name">
            </td>
        </tr>

        <tr>
            <td>
                <h2><u>Marks</u></h2>
            </td>
        </tr>

        <tr>
            <td>Subject 1:</td>
            <td>
                <input type="text" name="subject1">
            </td>
        </tr>

        <tr>
            <td>Subject 2:</td>
            <td>
                <input type="text" name="subject2">
            </td>
        </tr>

        <tr>
            <td>
                <input type="submit" value="Send">
                <input type="button" value="Cancel">
            </td>
        </tr>

    </table>
</form>

</body>

</html>