<!Doctype html>
<html>
<head>
    <title>Question 03</title>
</head>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $units = $_REQUEST['units'];

    $costfirst = 3.50;
    $costsecond = 3.50;
    $costthird = 3.50;
    $costfourth = 3.50;

    if ($units <= 50) {
        $bill = $units * $costfirst;
    } else if ($units > 50 && $units <= 100) {
        $temp = 50 * $costfirst;
        $remunits = $units - 50;
        $bill = $temp + ($remunits * $costsecond);
    } else if ($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $costsecond);
        $remunits = $units - 150;
        $bill = $temp + ($remunits * $costthird);
    } else {
        $temp = (50 * 3.5) + (100 * $costsecond) + (100 * $costthird);
        $remunits = $units - 250;
        $bill = $temp + ($remunits * $costfourth);
    }

    echo "Bill: $bill";
}

?>

<body>
<form name="ebill" method="post" action="test.php">
    <input type="text" name="units" placeholder="Enter units">
    <input type="submit">
</form>

</body>
</html>