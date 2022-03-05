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
                        <img src="../../../public/images/sports/tt/1.jpg" class="d-block w-100 rounded-3" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../../public/images/sports/tt/2.jpg" class="d-block w-100 rounded-3" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../../public/images/sports/tt/3.jpg" class="d-block w-100 rounded-3" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../../public/images/sports/tt/4.jpg" class="d-block w-100 rounded-3" alt="...">
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
                <div class="col-sm-6 col-md-8 align-middle pt-2 fs-1 fw-bolder">NSBM Table Tennis Club</div>
                <div class="col-6 col-md-4">
                    <img src="../../../public/images/sports/tt_logo.png" class="img-fluid" alt="...">
                </div>
            </div>

            <div class=" fw-light fs-5">
                NSBM Table tennis Club is one of the main sports clubs that is fully active within the green university town.
                Having played in major inter university and cooperate tournaments such as KDU Leaders Trophy, SIEG Table Tennis Championship (University of Kelaniya),
                Mora Smashes (University of Moratuwa) and other major tournaments the Table Tennis Club has gained a reputation among Table Tennis teams of other universities as a fierce competitor.
            </div>

            <form action="tt.php" method="post">
                <div class="pt-5">
                    <button type="submit" class="btn btn-lg btn-primary w-100">Join NSBM Table Tennis Club</button>
                </div>
            </form>
        </div>
    </div>

<?php include '../layout/footer.php' ?>