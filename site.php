<!DOCTYPE html>
<html>

<head>
    <title>Giraffe Project</title>
    <style>
        <?php include 'site.css'; ?>
    </style>
</head>

<body>
    <?php
    /* echo ("<p>This is a paragraph</p>");
    echo ("<hr>");
    echo ("<h1>Hello World</h1>"); */

    // ------------------------------------------------

    /* $CharacterName = "Dhanushka";
    $CharacterAge = 40;

    echo ("There once was a man names $CharacterName <br>");
    echo ("He was $CharacterAge years old <br>");
    echo ("He really liked the name $CharacterName <br>");
    echo ("But didn't like being $CharacterAge <br>"); */

    // ------------------------------------------------

    /* $phrase = "To be or not to be";
    $age = 30;
    $gpa = 30.3;
    $isMale = false;

    echo ("$phrase<br>");
    echo ("$age<br>");
    echo ("$gpa<br>");
    echo ("$isMale<br>"); */

    // ------------------------------------------------

    /* $phrase = "Giraffe Academy";

    echo ("$phrase <br>");
    echo strtolower("$phrase <br>");
    echo strtoupper("$phrase <br>");
    echo strlen("$phrase <br>");
    echo ("<br> $phrase[0] <br>");

    $phrase[8] = "I";
    echo ("$phrase <br>");

    // To replace a value
    echo str_replace("Giraffe", "Panda", $phrase);

    // Get multiple characters
    echo ("<br>");
    echo substr($phrase, 8, 14); */

    // ------------------------------------------------

    /* // Check the absolute value
    echo abs(-100);
    echo ("<br>");

    // Calculate the power
    echo pow(2, 3);
    echo ("<br>");

    // Calculate the squreroot
    echo sqrt(144);
    echo ("<br>");

    // Check the highest value
    echo max(2, 5);
    echo ("<br>");
    // Check the lowest value
    echo min(2, 5);

    echo ("<br>");
    // Round a number
    echo round(3.2);
    echo ("<br>");
    // Rounded up a number
    echo ceil(3.2);
    echo ("<br>");
    // Rounded down a number
    echo floor(3.2); */

    // ---------------Working with numbers and math functions---------------------

    ?>

    <!-- ---------------Getting user inputs--------------------- -->

    <!-- <form action="site.php" method="get">
        Name: <input type="text" name="username"> <br><br>
        Age: <input type="text" name="userage"> <br><br>
        <input type="submit">
    </form>

    <br>

    Hello, Welcome <?php echo $_GET["username"] ?>, Your Age is <?php echo ($_GET["userage"]) ?> -->

    <!-- ---------------Building a basic calculator--------------------- -->

    <!-- <form action="site.php" method="get">
        <table>
            <tr>
                <td>Num1</td>
                <td><input type="number" name="num1"></td>
            </tr>
            <tr>
                <td>Num2</td>
                <td><input type="number" name="num2"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><input type="submit" /></center>
                </td>
            </tr>
        </table>
    </form>

    <?php
    $total = $_GET["num1"] + $_GET["num2"];
    echo ("The total is $total");
    ?> -->

    <!-- ---------------Creating mad lib game--------------------- -->

    <!-- <form action="site.php" method="get">
        Color: <input type="text" name="color"> <br><br>
        Plural Noun: <input type="text" name="pnoun"> <br><br>
        Celebrity: <input type="text" name="cele"> <br><br>
        <input type="submit">
    </form>

    <?php
    $color = $_GET["color"];
    $noun = $_GET["pnoun"];
    $celebrity = $_GET["cele"];

    echo ("Roses are $color <br>");
    echo ("$noun are bloue <br>");
    echo ("I love $celebrity <br>");
    ?> -->

    <!-- ---------------URL Parameters--------------------- -->

    <!-- <form action="site.php" method="get">
        Name: <input type="text" name="name"> <br><br>
        <input type="submit">
    </form>

    <br>
    <?php
    echo ($_GET["name"]);
    ?> -->

    <!-- ---------------Get & Post--------------------- -->

    <!-- Post method is more secure than get method. Because, in get method we can identify some security issues in URL bar.
    such as usenames and passwords. but if we use post method we can avoid these security issues-->
    <!-- Get is used for get url parameters -->

    <!-- <form action="site.php" method="post">
        Password: <input type="password" name="pass"><br><br>
        <input type="submit" class="button">
    </form>

    <?php echo $_POST["pass"] ?> -->

    <!-- ---------------Arrays--------------------- -->

    <!-- <?php
            $friends = array("Kevin", "Karen", "Oscar", "Jim");
            echo $friends[0];
            echo ("<br>");
            echo $friends[1];
            echo ("<br>");
            echo $friends[2];
            echo ("<br>");
            echo $friends[3];
            echo ("<br>");

            echo count($friends);
            echo ("<br>");
            $friends[4] = "Dhanu";
            echo count($friends);
            ?> -->

    <!-- ---------------CheckBoxes--------------------- -->

    <!-- <form action="site.php" method="post">
        Apple: <input type="checkbox" name="fruits[]" value="apples"><br>
        Orange: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
        <input type="submit">
    </form>

    <?php
    $fruits = $_POST["fruits"];
    echo ($fruits[1]);
    ?> -->

    <!-- ---------------Associative Arrays--------------------- -->

    <!-- <form action="site.php" method="post">
        Name: <input type="text" name="student">
        <input type="submit">
    </form>

    <?php
    /* The keys must be unique */
    $grades = array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+");
    echo ($grades["Jim"]);
    echo ("<br>");
    echo ($grades["Pam"]);
    echo ("<br>");
    echo ($grades["Oscar"]);

    $grades["Jim"] = "F";
    echo ("<br>");
    echo ($grades["Jim"]);
    echo ("<br>");
    echo count($grades)
    ?>

    <?php
    $grades = array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+");
    echo $grades[$_POST["student"]];
    ?> -->

    <!-- ---------------Functions--------------------- -->

    <!-- <form action="site.php" method="post">
        Name: <input type="text" name="name">
        <input type="submit">
    </form>

    <?php
    function sayhi($name)
    {
        echo ("Hello $name");
    }

    $NAME = $_POST["name"];
    echo sayhi($NAME);
    ?> -->

    <!-- ---------------Return Statements--------------------- -->

    <!-- <form action="site.php" method="post">
        Enter a number: <input type="number" name="num">
        <input type="submit">
    </form>

    <?php
    function Cube($num)
    {
        $power = $num * $num * $num;
        return $power;
    }

    $NUM = $_POST["num"];
    echo ("The Cube of the given number is ");
    echo Cube($NUM);
    ?> -->

    <!-- ---------------If Statements--------------------- -->

    <!-- <?php
            $isMale = false;
            $isTall = false;

            if ($isMale && $isTall) {
                echo ("You are a tall male");
            } else if ($isMale && !$isTall) {
                echo ("You are a male but not tall");
            } else if (!$isMale && $isTall) {
                echo ("You are not a male but tall");
            } else {
                echo ("You are not a male neither tall");
            }
            ?> -->

    <!-- ---------------If Statements (con't)--------------------- -->

    <!-- <form action="site.php" method="post">
        Num1: <input type="number" name="num1"><br>
        Num2: <input type="number" name="num2"><br>
        Num3: <input type="number" name="num3"><br>
        <input type="submit">
    </form>

    <?php
    function GetMax($num1, $num2, $num3)
    {
        if ($num1 >= $num2 && $num1 >= $num3) {
            return $num1;
        } else if ($num2 >= $num1 && $num2 >= $num3) {
            return $num2;
        } else {
            return $num3;
        }
    }

    $NUM1 = $_POST["num1"];
    $NUM2 = $_POST["num2"];
    $NUM3 = $_POST["num3"];

    echo ("The highest number is ");
    echo GetMax($NUM1, $NUM2, $NUM3);
    ?> -->

    <!-- ---------------If Statements (con't)--------------------- -->

    <!-- <form action="site.php" method="post">

    By using step we can add decimal point values    
    First Number: <input type="number" step="0.1" name="num1"><br>

        Operator: <select name="opera">
            <option value="0">Operator</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select> <br>

        Second Number: <input type="number" step="0.1" name="num2"><br>

        <input type="submit">
    </form>

    <?php
    function Calculator($num1, $op, $num2)
    {
        if ($op == "+") {
            $total = ($num1 + $num2);
            echo ("The Summation is $total");
        } else if ($op == "-") {
            $sub = ($num1 - $num2);
            echo ("The Subtraction is $sub");
        } else if ($op == "*") {
            $mul = ($num1 * $num2);
            echo ("The Multiplication is $mul");
        } else if ($op == "/") {
            $div = ($num1 / $num2);
            echo ("The Division is $div");
        }
    }
    $NUM1 = $_POST["num1"];
    $OP = $_POST["opera"];
    $NUM2 = $_POST["num2"];

    Calculator($NUM1, $OP, $NUM2);

    ?> -->

    <!-- ---------------Switch Statements--------------------- -->

    <!-- <form action="site.php" method="post">
        What is your grade: <input type="text" name="grade"><br>
        <input type="submit"><br>
    </form>

    <?php

    $GRADE = $_POST["grade"];

    switch ($GRADE) {
        case "A":
            echo ("You did Amazing!");
            break;
        case "B":
            echo ("You did Greate!");
            break;
        case "C":
            echo ("You did Good!");
            break;
        default:
            echo ("Invalid Grade");
    }

    ?> -->

    <!-- ---------------While Loop--------------------- -->

    <!-- <form action="site.php" method="post">
        Enter a number: <input type="number" name="num"><br>
        <input type="submit"><br>
    </form>

    <?php

    $NUM = $_POST["num"];
    $index = 1;

    while ($index <= $NUM) {
        echo ("$index <br>");
        $index++;
    }

    ?> -->

    <!-- ---------------For Loop--------------------- -->

    <!-- <?php

            $numbers = array(4, 8, 14, 16, 23, 42);

            for ($i = 0; $i < count($numbers); $i++) {
                echo ("$numbers[$i]");
                echo ("<br>");
            }

            ?> -->

    <!-- ---------------Include HTML--------------------- -->

    <!-- <?php include "header.html" ?>
    <p>Hello Peter</p>
    <?php include "footer.html" ?> -->

    <!-- ---------------Include PHP--------------------- -->

    <!-- <?php
            /* $title = "This is the Title";
        $author = "This is the Author";
        $wordCount = "This is the WordCount";

        include "article-header.php"; */

            include "useful-tools.php";

            $NAME = "Ravindu";

            SayHOOO($NAME);
            echo ("<br>");
            echo ($feetInMile);
            ?> -->

    <!-- ---------------Classes and Objects--------------------- -->

    <!-- <?php

            /* class Book
            {
                var $title;
                var $author;
                var $pages;
            }

            $Book1 = new Book();

            $Book1->title = "Harry Potter";
            $Book1->author = "JK Rowling";
            $Book1->pages = 400;

            echo $Book1->title;
            echo ("<br>");
            echo $Book1->author;
            echo ("<br>");
            echo $Book1->pages;
            echo ("<br>");

            $Book2 = new Book();

            $Book2->title = "Lord of the Rings";
            $Book2->author = "Tolkien";
            $Book2->pages = 700;

            echo $Book2->title;
            echo ("<br>");
            echo $Book2->author;
            echo ("<br>");
            echo $Book2->pages;
            echo ("<br>"); */

            ?> -->

    <!-- ---------------Constructors--------------------- -->

    <!-- <?php
            /* class Book
    {
        var $title;
        var $author;
        var $pages;

        function __construct($aTitle, $aAuthor, $aPages)
        {
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
        }
    }

    $Book1 = new Book("Harry Potter", "JK Rowling", 400);
    $Book2 = new Book("Lord Of the Rings", "Tolkien", 700);

    echo $Book1->title;
    echo ("<br>");
    echo $Book2->title; */

            ?> -->

    <!-- ---------------Object Functions--------------------- -->

    <?php

    class Student
    {
        var $name;
        var $major;
        var $gpa;

        function __construct($aName, $aMajor, $aGpa)
        {
            $this->name = $aName;
            $this->major = $aMajor;
            $this->gpa = $aGpa;
        }

        function hasHonors() {
            if ($this->gpa >= 3.5) {
                return "true";
            } else {
                return "false";
            }
        }
    }

    $Student1 = new Student("Jim", "Business", 2.8);
    $Student2 = new Student("Pam", "Art", 3.6);

    echo $Student1->hasHonors();
    echo ("<br>");
    echo $Student2->hasHonors();

    ?>


</body>

</html>