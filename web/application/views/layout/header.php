<?php
// Start the session
session_start();
?>

<!-- Define database environment -->
<?php
define('REMOTE_HOST', 'localhost');
define('REMOTE_DATABASE', 'u644581451_ravindu');
define('REMOTE_USERNAME', 'u644581451_ravindu');
define('REMOTE_PASSWORD', 'ravinduD1234');
?>

<!-- Define base_url based on deployed environment -->
<?php
if (strpos($_SERVER['REQUEST_URI'], '/projects/web/application/views/') !== false) {
    define('BASE_URL', '/projects/web/');
} else {
    define('BASE_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/ravindu/webproject/');
}
?>

<!-- Define custom global variable -->
<?php
define('FACULTIES', [
    [
        'id' => 'FOB',
        'name' => 'Faculty of Business (FOB)'
    ],
    [
        'id' => 'FOC',
        'name' => 'Faculty of Computing (FOC)'
    ],
    [
        'id' => 'FOE',
        'name' => 'Faculty of Engineering (FOE)'
    ],
    [
        'id' => 'FOS',
        'name' => 'Faculty of Science (FOS)'
    ]
]);
define('BATCHES', [
    [
        'id' => '20.1',
        'name' => '20.1'
    ],

    [
        'id' => '20.2',
        'name' => '20.2'
    ],

    [
        'id' => '20.3',
        'name' => '20.3'
    ],

    [
        'id' => '21.1',
        'name' => '21.1'
    ],

    [
        'id' => '21.2',
        'name' => '21.2'
    ],

    [
        'id' => '21.3',
        'name' => '21.3'
    ]
]);
?>

<?php
// Better var_dump
function dd($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
    die();
}

?>

<?php
// Get student enrolments
function get_student_enrolments($student_id)
{
    $errors = [];

    // Create DB connection
    $conn = new mysqli(REMOTE_HOST, REMOTE_USERNAME, REMOTE_PASSWORD, REMOTE_DATABASE);

    // Check connection
    if (mysqli_connect_error()) {
        error_log(mysqli_connect_error());
        array_push($errors, 'DB connection error! Please contact the admin');
        $_SESSION['form_validation']['errors'] = $errors;
    } else {
        $sql = '
          SELECT 
          `archery`.`id` AS archery,
          `athletic`.`id` AS athletic,
          `badminton`.`id` AS badminton,
          `basketball`.`id` AS basketball,
          `chess`.`id` AS chess,
          `cricket`.`id` AS cricket,
          `fitness`.`id` AS fitness,
          `hockey`.`id` AS hockey,
          `ma`.`id` AS ma,
          `netball`.`id` AS netball
           FROM `students`
           LEFT JOIN `archery`
           ON `students`.`id` = `archery`.`student_id`
           LEFT JOIN `athletic`
           ON `students`.`id` = `athletic`.`student_id`
           LEFT JOIN `badminton`
           ON `students`.`id` = `badminton`.`student_id`
           LEFT JOIN `basketball`
           ON `students`.`id` = `basketball`.`student_id`
           LEFT JOIN `chess`
           ON `students`.`id` = `chess`.`student_id`
           LEFT JOIN `cricket`
           ON `students`.`id` = `cricket`.`student_id`
           LEFT JOIN `fitness`
           ON `students`.`id` = `fitness`.`student_id`
           LEFT JOIN `hockey`
           ON `students`.`id` = `hockey`.`student_id`
           LEFT JOIN `ma`
           ON `students`.`id` = `ma`.`student_id`
           LEFT JOIN `netball`
           ON `students`.`id` = `netball`.`student_id`
            WHERE `students`.`student_id` = "' . $student_id . '" 
            AND `students`.`deleted_at` IS NULL';

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $result = mysqli_fetch_assoc($result);
            return $result;
        }
    }

    $conn->close();
    return false;
}

?>

<!Doctype html>
<html lang="en">

<head>
    <title><?php echo 'NSBM sports'; ?></title>

    <!-- Add icon link -->
    <link rel="icon" href="<?php echo BASE_URL; ?>public/images/nsbm_logo_favicon.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="<?php echo BASE_URL; ?>public/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>public/css/sidebars.css" rel="stylesheet">
    <script src="<?php echo BASE_URL; ?>public/js/bootstrap.js" defer></script>

    <link href="<?php echo BASE_URL; ?>public/css/common.css" rel="stylesheet">
</head>

<body style="width: 100%;">
<div class="container-fluid" style="padding: 0;">