<?php include 'layout/header.php' ?>
<?php include 'layout/navbar.php' ?>

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_SESSION['username'])) {
        $server = 'localhost';
        $username = 'root';
        $pass = '';
        $db = 'nsbm';

        $ID = $_SESSION['username'];

        // Create DB connection
        $conn = new mysqli($server, $username, $pass, $db);

        // Check Connection
        /*if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            echo "Connection Successful <br>";
        }*/

        $sql = "INSERT INTO volleyball SELECT student_id, name, age, faculty, batch, email, phone, address FROM students WHERE student_id = $ID";

        $check = "SELECT * FROM volleyball WHERE student_id = \"$ID\"";

        $rs = mysqli_query($conn, $check);

        /*if ($rs->num_rows > 0) {
            echo "Already in";
        } else if (mysqli_query($conn, $sql)) {
            echo 'Done';
        } else {
            echo 'Failed';
        }*/
    } else {
        header('Location: ../login.php');
    }




}


?>

    <div style="background-color: #F0F0F0">
        <div>
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../../../public/images/sports/volleyball/1.jpg" class="d-block w-100 rounded-3" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../../public/images/sports/volleyball/2.jpg" class="d-block w-100 rounded-3" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../../public/images/sports/volleyball/3.jpg" class="d-block w-100 rounded-3" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../../public/images/sports/volleyball/4.jpg" class="d-block w-100 rounded-3" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="container pb-3">

            <div class="row g-0">
                <div class="col-sm-6 col-md-8 align-middle pt-2 fs-1 fw-bolder">NSBM Volleyball Club</div>
                <div class="col-6 col-md-4">
                    <img src="../../../public/images/sports/vollyball_logo.png" class="img-fluid" alt="...">
                </div>
            </div>

            <div class=" fw-light fs-5">
                The purpose of NSBM Volleyball club is to provide a safe environment where young athletes (Male/Female both) will improve in the game of volleyball and learn the important values of team, spirit and sportsmanship.
                We will encourage the development of skills and techniques necessary for players to compete at a high level, focusing on the physical,
            </div>

            <div class=" pt-2 fw-light fs-5">
                mental, and emotional development of all players. We will utilize the sport of volleyball to teach life-long lessons to our players (leadership, teamwork, hard work ethic, dealing with adversity and success, communication, ethics,
                loyalty etc.) We also want our members to understand the importance of academics and other necessities beyond the volleyball court in order to be successful in life.
                We will strive to “Develop Better Players, Better Teams, Better People.”
            </div>

            <form name="volleyball" action="volleyball.php" method="post">
                <div class="pt-5">
                    <button type="submit" class="btn btn-lg btn-primary w-100">Join NSBM Volleyball Club</button>
                </div>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if ($rs->num_rows > 0) {
                    echo '<div class="alert alert-primary mt-4 text-center" role="alert">
                    You are already a member of NSBM Volleyball Club
                </div>';
                } else if (mysqli_query($conn, $sql)) {
                    echo '<div class="alert alert-success mt-4 text-center" role="alert">
                    You are successfully added to the NSBM Volleyball Club
                </div>';
                }
            }
            ?>
        </div>
    </div>

<?php include '../layout/footer.php' ?>