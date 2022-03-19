<?php include '../layout/header.php' ?>
<?php include '../layout/navbar.php' ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    unset($_SESSION['form_validation']['errors']);
    unset($_SESSION['form_validation']['success']);
    $errors = [];
    $messages = [];

    // Check if user is logged in
    if (isset($_SESSION['logged_in'])) {
        // Create DB connection
        $conn = new mysqli(REMOTE_HOST, REMOTE_USERNAME, REMOTE_PASSWORD, REMOTE_DATABASE);

        // Check connection
        if (mysqli_connect_error()) {
            error_log(mysqli_connect_error());
            array_push($errors, 'DB connection error! Please contact the admin');
            $_SESSION['form_validation']['errors'] = $errors;
        } else {
            // Get user data
            $id = $_SESSION['user_data']['id'];
            $student_id = $_SESSION['user_data']['student_id'];

            $sql = 'INSERT INTO `chess` (`student_id`) VALUES ("' . $id . '")';

            if ($conn->query($sql) === true) {
                // Get all enrolments of student
                $result = get_student_enrolments($student_id);

                if ($result) {
                    // Add all enrolments to the session
                    $_SESSION['user_data']['enrolments'] = $result;
                }

                array_push($messages, 'You are successfully added to the NSBM Chess Club');
                $_SESSION['form_validation']['success'] = $messages;
            } else {
                error_log($sql . ': ' . $conn->error);
                array_push($errors, 'Enrolment unsuccessful! Please contact the admin');
                $_SESSION['form_validation']['errors'] = $errors;
            }

            header('Location: chess.php');
        }

        $conn->close();
    } else {
        // Redirect the user to login page
        array_push($errors, 'Please login first!');
        $_SESSION['form_validation']['errors'] = $errors;
        header('Location: ../login.php');
    }
}
?>

    <div style="background-color: #F0F0F0">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                        aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                        aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7"
                        aria-label="Slide 8"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../../public/images/sports/chess/1.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/chess/2.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/chess/3.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/chess/4.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/chess/5.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/chess/6.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/chess/7.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/chess/8.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container pb-3">

            <div class="row g-0">
                <div class="col-sm-6 col-md-8 align-middle pt-2 fs-1 fw-bolder">NSBM Chess Club</div>
                <div class="col-6 col-md-4">
                    <img src="../../../public/images/sports/Chess_logo.png" class="img-fluid" alt="...">
                </div>
            </div>

            <div class=" pt-2 fw-light fs-5">
                In this strategic two player game, NSBM has taken initiative to provide the students with the benefit of
                the chess club which
                proudly guide students to learn the game and provides the school level champions with resources to
                continue their chess career in university level.
            </div>

            <?php
            // Check if user has enrollments
            if (isset($_SESSION['user_data']['enrolments'])) {
                // Get all user enrolments
                $enrolments = $_SESSION['user_data']['enrolments'];

                // Check if user is enrolled to the club
                if (array_key_exists('chess', $enrolments)) {
                    if ($enrolments['chess'] == 1) { ?>
                        <div class="alert alert-primary mt-4 text-center" role="alert">
                            You are already a member of NSBM Chess Club
                        </div>
                    <?php } else { ?>
                        <form action="chess.php" method="post">
                            <div class="pt-5">
                                <button type="submit" class="btn btn-lg btn-primary w-100">Join NSBM Chess Club
                                </button>
                            </div>
                        </form>
                    <?php }
                } else { ?>
                    <form action="chess.php" method="post">
                        <div class="pt-5">
                            <button type="submit" class="btn btn-lg btn-primary w-100">Join NSBM Chess Club</button>
                        </div>
                    </form>
                <?php }
            } ?>

            <?php include '../layout/alerts.php'; ?>
        </div>
    </div>

<?php include '../layout/footer.php' ?>