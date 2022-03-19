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

        $sql = "INSERT INTO badminton SELECT student_id, name, age, faculty, batch, email, phone, address FROM students WHERE student_id = $ID";

        $check = "SELECT * FROM badminton WHERE student_id = \"$ID\"";

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
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../../public/images/sports/badminton/2.jpeg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/badminton/1.jpeg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/badminton/3.jpeg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/badminton/4.jpeg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/badminton/5.jpeg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/badminton/6.jpeg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/badminton/7.jpeg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/badminton/8.jpeg" class="d-block w-100 rounded-3" alt="...">
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

        <div class="container pb-3">

            <div class="row g-0">
                <div class="col-sm-6 col-md-8 align-middle pt-2 fs-1 fw-bolder">NSBM Badminton Club</div>
                <div class="col-6 col-md-4">
                    <img src="../../../public/images/sports/Badminton_logo.png" class="img-fluid" alt="...">
                </div>
            </div>

            <div class=" pt-2 fw-light fs-5">
                The NSBM Badminton Club is the active and a well-established sports club at NSBM with many mercantile and national level players.
                This club is open to undergraduates of all levels for the purpose of recreation, physical fitness and development of skills in the sport.
                As one of the fastest sports in the world, badminton is a great way for students to develop and improve their reflexes, hand-eye coordination, as well as mental alertness.
                The club represents at inhouse badminton tournaments, inter university tournaments as well as other international badminton tournaments.
            </div>

            <form name="badminton" method="post" action="badminton.php">
                <div class="pt-5">
                    <button type="submit" class="btn btn-lg btn-primary w-100">Join NSBM Badminton Club</button>
                </div>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if ($rs->num_rows > 0) {
                    echo '<div class="alert alert-primary mt-4 text-center" role="alert">
                    You are already a member of NSBM Badminton Club
                </div>';
                } else if (mysqli_query($conn, $sql)) {
                    echo '<div class="alert alert-success mt-4 text-center" role="alert">
                    You are successfully added to the NSBM Badminton Club
                </div>';
                }
            }
            ?>

        </div>
    </div>

<?php include '../layout/footer.php' ?>