<?php include 'layout/header.php' ?>
<?php include 'layout/navbar.php' ?>

    <div style="background-color: #F0F0F0">
        <div>
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../../../public/images/sports/netball/1.jpg" class="d-block w-100 rounded-3" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../../public/images/sports/netball/2.jpg" class="d-block w-100 rounded-3" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../../public/images/sports/netball/3.jpg" class="d-block w-100 rounded-3" alt="...">
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

        <!--<div class="container pt-2 fs-1 fw-bolder text-success">
            <div>NSBM Athletic Club</div>
        </div>-->

        <div class="container pb-3">

            <div class="row g-0">
                <div class="col-sm-6 col-md-8 align-middle pt-2 fs-1 fw-bolder">NSBM Netball Club</div>
                <div class="col-6 col-md-4">
                    <img src="../../../public/images/sports/netball_logo.png" class="img-fluid" alt="...">
                </div>
            </div>

            <div class=" fw-light fs-5">
                Netball is a most popular game among the commonwealth nations, which is predominately played by females.
                This is a team game that one team consist with 7 players on the court. NSBM netball club has been formed in 2016 and raised with numerous achievements.
                NSBM netball club is operating with two teams Team A and B
            </div>

            <form action="netball.php" method="post">
                <div class="pt-5">
                    <button type="submit" class="btn btn-lg btn-primary w-100">Join NSBM Netball Club</button>
                </div>
            </form>
        </div>
    </div>

<?php include '../layout/footer.php' ?>