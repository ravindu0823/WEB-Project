<!Doctype html>
<html>
<head>
    <title>Example 8</title>
</head>

<body>

<h1><u>Menu</u></h1>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo 'Dinner: ';

    if (isset($_REQUEST['fr'])) {
        $friedrice = $_REQUEST['fr'];
        echo $friedrice . ' ';
    }

    if (isset($_REQUEST['hp'])) {
        $hoppers = $_REQUEST['hp'];
        echo $hoppers . ' ';
    }

    if (isset($_REQUEST['br'])) {
        $bread = $_REQUEST['br'];
        echo $bread . ' ';
    }

    echo '<br>Drink: ';

    if (isset($_REQUEST['tea'])) {
        $tea = $_REQUEST['tea'];
        echo $tea . ' ';
    }

    if (isset($_REQUEST['cof'])) {
        $coffee = $_REQUEST['cof'];
        echo $coffee . ' ';
    }

    if (isset($_REQUEST['fd'])) {
        $fruit = $_REQUEST['fd'];
        echo $fruit . ' ';
    }

    exit();
}

?>

<form name="menu" method="post" action="ex8.php">
    What would you like to have for dinner? <br>
    Fried Rice <input type="checkbox" name="fr" value="Fried Rice">
    Hoppers <input type="checkbox" name="hp" value="Hoppers">
    Bread <input type="checkbox" name="br" value="Bread"> <br><br>

    What would you like to drink? <br>
    Tea <input type="checkbox" name="tea" value="Tea">
    Coffee <input type="checkbox" name="cof" value="Coffee">
    Fruit Drink <input type="checkbox" name="fd" value="Fruit Drink"> <br><br>

    <input type="submit" value="Order"> <input type="button" value="Cancel">
</form>

</body>

</html>