<!Doctype html>
<html>
<head>
    <title>Example 7</title>
</head>

<body>

<h2>Room Reservation</h2>


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];
    $telephone = $_REQUEST['telephone'];
    $rooms = $_REQUEST['rooms'];
    $type = $_REQUEST['type'];

    echo 'Name: ' . $name . '<br>';
    echo 'Address: ' . $address . '<br>';
    echo 'Telephone: ' . $telephone . '<br>';
    echo 'No of rooms: ' . $rooms . '<br>';

    echo 'Extras: ';

    if (isset($_REQUEST['meals'])) {
        $meals = $_REQUEST['meals'];
        echo $meals . ' ';
    }
    if (isset($_REQUEST['pool'])) {
        $pool = $_REQUEST['pool'];
        echo $pool . ' ';
    }
    if (isset($_REQUEST['tv'])) {
        $tv = $_REQUEST['tv'];
        echo $tv . ' ';
    }

    exit();

}


?>

<form name="reservation" method="post" action="ex7.php">
    <table>
        <tr>
            <td>Name:</td>
            <td>
                <input type="text" name="name">
            </td>
        </tr>

        <tr>
            <td>Address:</td>
            <td>
                <input type="text" name="address">
            </td>
        </tr>

        <tr>
            <td>Telephone:</td>
            <td>
                <input type="text" name="telephone">
            </td>
        </tr>

        <tr>
            <td>No of rooms:</td>
            <td>
                <select name="rooms">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>Type of room:</td>
            <td>
                Sea side<input type="radio" name="type" value="sea side">
                Hill side<input type="radio" name="type" value="hill side">
            </td>
        </tr>

        <tr>
            <td>Extras:</td>
            <td>
                Meals <input type="checkbox" name="meals" value="meals">
                Pool <input type="checkbox" name="pool" value="pool">
                TV <input type="checkbox" name="tv" value="tv">
            </td>
        </tr>

        <tr>
            <td>
                <input type="submit" value="Reserve">
                <input type="button" value="Cancel">
            </td>
        </tr>

    </table>
</form>

</body>

</html>