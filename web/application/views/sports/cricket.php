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

        $sql = "INSERT INTO cricket SELECT student_id, name, age, faculty, batch, email, phone, address FROM students WHERE student_id = $ID";

        $check = "SELECT * FROM cricket WHERE student_id = \"$ID\"";

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
                    <img src="../../../public/images/sports/cricket/1.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/cricket/2.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/cricket/3.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/cricket/4.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/cricket/5.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/cricket/6.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/cricket/7.jpg" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/images/sports/cricket/8.jpg" class="d-block w-100 rounded-3" alt="...">
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
                <div class="col-sm-6 col-md-8 align-middle pt-2 fs-1 fw-bolder">NSBM Cricket Club</div>
                <div class="col-6 col-md-4 pt-2">
                    <img src="../../../public/images/sports/Ellipse%203.png" class="img-fluid" alt="...">
                </div>
            </div>

            <div class=" pt-2 fw-light fs-5">
                NSBM Cricket club is one of the most pioneering sports clubs established at NSBM since its inception.
                We are a prosperous club with a long tradition of nurturing talented and aspiring young cricketers to be the best that they can be.
            </div>

            <div class=" pt-2 fw-light fs-5">
                NSBM Cricket Club is a friendly, vibrant and progressive cricket club that features competitive and successful players in the NSBM Green University Town.
                We are an inclusive and nurturing club where new players and supporters are always warmly welcomed.
            </div>

            <form name="cricket" method="post" action="cricket.php">
                <div class="pt-5">
                    <button type="submit" class="btn btn-lg btn-primary w-100">Join NSBM Cricket Club</button>
                </div>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if ($rs->num_rows > 0) {
                    echo '<div class="alert alert-primary mt-4 text-center" role="alert">
                    You are already a member of NSBM Cricket Club
                </div>';
                } else if (mysqli_query($conn, $sql)) {
                    echo '<div class="alert alert-success mt-4 text-center" role="alert">
                    You are successfully added to the NSBM Cricket Club
                </div>';
                }
            }
            ?>
        </div>
    </div>

<?php include '../layout/footer.php' ?>