<?php include 'layout/header.php' ?>
<?php include 'layout/navbar.php' ?>

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
                        <img src="../../../public/images/sports/soccer/1.jpg" class="d-block w-100 rounded-3" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../../public/images/sports/soccer/2.jpg" class="d-block w-100 rounded-3" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../../public/images/sports/soccer/3.jpg" class="d-block w-100 rounded-3" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../../public/images/sports/soccer/4.jpg" class="d-block w-100 rounded-3" alt="...">
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
                <div class="col-sm-6 col-md-8 align-middle pt-2 fs-1 fw-bolder">NSBM Soccer Club</div>
                <div class="col-6 col-md-4 pt-2">
                    <img src="../../../public/images/sports/Soccer.png" class="img-fluid" alt="...">
                </div>
            </div>

            <div class=" fw-light fs-5">
                NSBM Soccer club is an active sports club of NSBM comprises of highly competitive players with skills on par with any other university soccer player.
                The team had participated in several inter-university tournaments and international sports tournament in past few years and was able bring several winning trophies to NSBM.
            </div>

            <div class=" pt-2 fw-light fs-5">
                Always NSBM Soccer club strive to provide an opportunity to any NSBM undergraduate with the interest of soccer to groom them to become good soccer player to compete with any other local or international team.
            </div>

            <form action="fitness.php" method="post">
                <div class="pt-5">
                    <button type="submit" class="btn btn-lg btn-primary w-100">Join NSBM Soccer Club</button>
                </div>
            </form>
        </div>
    </div>

<?php include '../layout/footer.php' ?>