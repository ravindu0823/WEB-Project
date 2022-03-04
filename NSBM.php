<!DOCTYPE html>
<html>

<title>NSBM</title>

<body>
<?php echo(
"<h1><font color='red'><b><u>NSBM</u></b></h1></font>"
); ?>

<!--------------------------------------------------------------->
<hr>
<?php echo("<h1>Variables</h1>"); ?>
<?php
$today = "Thursday";
echo("Today is $today");
?>

<!--------------------------------------------------------------->
<hr>
<?php echo("<h1>Arrays</h1>"); ?>
<?php
$month = array("July", "August");
$year = array("2007", "2008");

echo("$month[0], $year[1] <br>");
?>

<?php
/*$colors = array("Fire" => "Red", "Sea" => "Blue");

$col = $colors["Fire"];

echo("<h3>The Sky is $col</h3>");
*/ ?>

<?php
$colors = array("Red", "Blue", "Green", "Yellow");

foreach ($colors as $value) {
    echo("<h2><li>I Like $value</li></h2>");
}

?>

<hr>
<?php
echo("<h1>Using If Statements</h1>");

$marks = 80;

if ($marks >= 50) {
    echo("You got $marks");
} else {
    echo("You Failed");
}
?>
<hr>
<!--------------------------------------------------------------->
<?php echo("<h1>Using If Statements</h1>"); ?>

<form name="Form1" method="post">

</form>

</body>
</html>