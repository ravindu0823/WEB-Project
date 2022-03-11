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

        $sql = "INSERT INTO archery SELECT student_id, name, age, faculty, batch, email, phone, address FROM students WHERE student_id = $ID";

        $check = "SELECT * FROM archery WHERE student_id = \"$ID\"";

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
                    <img src="../../../public/images/sports/archery/1.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/archery/2.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/archery/3.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/archery/4.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/archery/5.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/archery/6.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/archery/7.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/archery/8.jpg" class="d-block w-100 rounded-3" alt="...">
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
                <div class="col-sm-6 col-md-8 align-middle pt-2 fs-1 fw-bolder">NSBM Archery Club</div>
                <div class="col-6 col-md-4 pt-2">
                    <img src="../../../public/images/sports/Ellipse%2019.png" class="img-fluid" alt="...">
                </div>
            </div>

            <div class=" pt-2 fw-light fs-5">
                Archery is an art, sport, practice or a skill where you shoot an arrow from a bow. The word “Archery”
                comes from the latin language “arcus”.
                In ancient time, archery was used for hunting. It was invented in the late Palaeolithic or early
                Mesolithic periods.
                The oldest signs of archery’s use in Europe date from around 10,000BC, while in Asia and the Middle East
                evidence suggests archery originated even earlier and in nowadays ,
                it is mainly a competitive sport and recreational activity. A person who participates in archery is
                called an archer, and a person who is fond of or an expert at archery is
                sometimes called a toxophilite
            </div>

            <div class=" pt-2 fw-light fs-5">
                As a sport, archery requires skills of precision, control, focus, repetition and determination.
                It is available to be practiced by all, no matter age, gender or ability, and is a widespread pastime in
                both developed and developing countries.
                NSBM Green university provides a platform to create young energetic archers through NSBM Archery club.
                Using the professional level equipment and training at provided at NSBM Archery Club young archers of
                NSBM is getting ready to participate for the next tournament at NSBM Sports Fiesta.
            </div>

            <div class=" pt-2 fw-light fs-5">
                Lecturers in charge – Mrs. Jayani Nethmini Perera, Attorney- at- Law (Faculty of Business) <br>
                Ms. Tharushi Nilanga (Faculty of Engineering)
            </div>

            <form action="archery.php" method="post">
                <div class="pt-5">
                    <button type="submit" class="btn btn-lg btn-primary w-100">Join NSBM Archery Club</button>
                </div>
            </form>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if ($rs->num_rows > 0) {
                    echo '<div class="alert alert-primary mt-4 text-center" role="alert">
                    You are already a member of NSBM Archery Club
                </div>';
                } else if (mysqli_query($conn, $sql)) {
                    echo '<div class="alert alert-success mt-4 text-center" role="alert">
                    You are successfully added to the NSBM Archery Club
                </div>';
                }
            }
            ?>
        </div>
    </div>

<?php include '../layout/footer.php' ?>