<?php include 'layout/header.php' ?>
<?php include 'layout/navbar.php' ?>

<?php

/*session_start();

if (isset($_SESSION['username'])) {
    header('Location: admin.php');
} else {
    header('Location: ../clubs.php');
}*/


?>

<div class="container-fluid pt-5 pb-5"
     style="background: url('../../../public/images/sports/Layer 1.png') no-repeat; background-size: cover;">
    <div class="row">
        <div class="col-lg-12">
            <div class="row" style="text-align: center">
                <div class="col-lg">
                    <a href="athletic.php" style="text-decoration: none">
                        <img src="../../../public/images/sports/Athletic_logo.png" alt="" class="sports">
                        <span class="d-block w-100 fst-italic" style="font-size: 30px;">Athletic Club</span>
                    </a>
                </div>

                <div class="col-lg">
                    <a href="badminton.php" style="text-decoration: none">
                        <img src="../../../public/images/sports/Badminton_logo.png" alt="" class="sports">
                        <span class="d-block w-100 fst-italic" style="font-size: 30px;">Badminton Club</span>
                    </a>
                </div>

                <div class="col-lg mt-auto">
                    <a href="cricket.php" style="text-decoration: none">
                        <img src="../../../public/images/sports/Ellipse%203.png" alt="" width="275px">
                        <span class="d-block w-100 fst-italic" style="font-size: 30px;">Cricket Club</span>
                    </a>
                </div>

                <div class="col-lg mt-auto">
                    <a href="rugby.php" style="text-decoration: none">
                        <img src="../../../public/images/sports/Ellipse%2010.png" alt="" width="275px">
                        <span class="d-block w-100 fst-italic" style="font-size: 30px;">Rugby Club</span>
                    </a>
                </div>

                <div class="col-lg">
                    <a href="swimming.php" style="text-decoration: none">
                        <img src="../../../public/images/sports/Swimming_logo.png" alt="" class="sports">
                        <span class="d-block w-100 fst-italic" style="font-size: 30px;">Swimming Club</span>
                    </a>
                </div>
            </div>

            <div class="row mt-5" style="text-align: center">
                <div class="col-lg">
                    <a href="basketball.php" style="text-decoration: none">
                        <img src="../../../public/images/sports/Basketball_logo.png" alt="" class="sports">
                        <span class="d-block w-100 fst-italic" style="font-size: 30px;">Basketball Club</span>
                    </a>
                </div>

                <div class="col-lg">
                    <a href="tt.php" style="text-decoration: none">
                        <img src="../../../public/images/sports/tt_logo.png" alt="" class="sports">
                        <span class="d-block w-100 fst-italic" style="font-size: 30px;">Table Tennis Club</span>
                    </a>
                </div>

                <div class="col-lg mt-auto">
                    <a href="netball.php" style="text-decoration: none">
                        <img src="../../../public/images/sports/netball_logo.png" alt="" class="sports">
                        <span class="d-block w-100 fst-italic" style="font-size: 30px;">Netball Club</span>
                    </a>
                </div>

                <div class="col-lg mt-auto">
                    <a href="ma.php" style="text-decoration: none">
                        <img src="../../../public/images/sports/ma_logo.png" alt="" class="sports">
                        <span class="d-block w-100 fst-italic" style="font-size: 30px;">Martial Arts Club</span>
                    </a>
                </div>

                <div class="col-lg">
                    <a href="hockey.php" style="text-decoration: none">
                        <img src="../../../public/images/sports/hockey_logo.png" alt="" class="sports">
                        <span class="d-block w-100 fst-italic" style="font-size: 30px;">Hockey Club</span>
                    </a>
                </div>
            </div>

            <div class="row mt-5" style="text-align: center">
                <div class="col-lg">
                    <a href="chess.php" style="text-decoration: none">
                        <img src="../../../public/images/sports/Chess_logo.png" alt="" class="sports">
                        <span class="d-block w-100 fst-italic" style="font-size: 30px;">Chess Club</span>
                    </a>
                </div>

                <div class="col-lg">
                    <a href="volleyball.php" style="text-decoration: none">
                        <img src="../../../public/images/sports/vollyball_logo.png" alt="" class="sports">
                        <span class="d-block w-100 fst-italic" style="font-size: 30px;">Volleyball Club</span>
                    </a>
                </div>

                <div class="col-lg mt-auto">
                    <a href="archery.php" style="text-decoration: none">
                        <img src="../../../public/images/sports/Ellipse%2019.png" alt="" style="border-radius: 80%">
                        <span class="d-block w-100 fst-italic" style="font-size: 30px;">Archery Club</span>
                    </a>
                </div>

                <div class="col-lg mt-auto">
                    <a href="fitness.php" style="text-decoration: none">
                        <img src="../../../public/images/sports/FittnessClub.png" alt="" class="sports">
                        <span class="d-block w-100 fst-italic" style="font-size: 30px;">Fitness Club</span>
                    </a>
                </div>

                <div class="col-lg">
                    <a href="soccer.php" style="text-decoration: none">
                        <img src="../../../public/images/sports/Soccer.png" alt="" class="sports">
                        <span class="d-block w-100 fst-italic" style="font-size: 30px;">Soccer Club</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>


<?php include 'layout/footer.php' ?>
