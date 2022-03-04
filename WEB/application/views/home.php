<?php include './layout/header.php' ?>
<?php include './layout/navbar.php' ?>

    <div class="container-fluid pt-4 pb-4"
         style="background: url('../../public/images/Rectangle 9.png') no-repeat; background-size: cover;">
        <div id="carouselExampleCaptions" class="carousel container slide w-auto" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner bg-secondary bg-dark">
                <div class="carousel-item active">
                    <img src="../../public/images/sample2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../public/images/sample1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src=../../public/images/sample3.jpg class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <!-- Sports clubs -->
                <div class="row" style="text-align: center;">
                    <div class="col-lg">
                        <a href="badminton.php" style="text-decoration: none;">
                            <img src="../../public/images/sports/Badminton_logo.png" alt="" style="width: 100%" class="sports">
                            <span class="d-block w-100 fst-italic" style="font-size: 30px;">Badminton</span>
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="badminton.php" style="text-decoration: none;">
                            <img src="../../public/images/sports/Basketball_logo.png" alt="" class="sports">
                            <span class="d-block w-100 fst-italic" style="font-size: 30px;">Basketball</span>
                        </a>
                    </div>
                    <div class="col-lg mt-auto">
                        <a href="badminton.php" style="text-decoration: none;">
                            <img src="../../public/images/sports/Ellipse%203.png" alt="" width="275px">
                            <span class="d-block w-100 fst-italic" style="font-size: 30px;">Cricket</span>
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="badminton.php" style="text-decoration: none;">
                            <img src="../../public/images/sports/Athletic_logo.png" alt="" class="sports">
                            <span class="d-block w-100 fst-italic" style="font-size: 30px;">Athletics</span>
                        </a>
                    </div>
                    <div class="col-lg mt-auto">
                        <a href="badminton.php" style="text-decoration: none;">
                            <img src="../../public/images/sports/Ellipse%2010.png" alt="" width="275px">
                            <span class="d-block w-100 fst-italic" style="font-size: 30px;">Rugby</span>
                        </a>
                    </div>
                </div>

                <div class="row mt-5" style="text-align: center;">
                    <div class="col-lg">
                        <a href="badminton.php" style="text-decoration: none;">
                            <img src="../../public/images/sports/Swimming_logo.png" alt="" class="sports">
                            <span class="d-block w-100 fst-italic" style="font-size: 30px;">Swimming</span>
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="badminton.php" style="text-decoration: none;">
                            <img src="../../public/images/sports/tt_logo.png" alt="" class="sports">
                            <span class="d-block w-100 fst-italic" style="font-size: 30px;">Table Tennis</span>
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="badminton.php" style="text-decoration: none;">
                            <img src="../../public/images/sports/netball_logo.png" alt="" class="sports">
                            <span class="d-block w-100 fst-italic" style="font-size: 30px;">Net Ball</span>
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="badminton.php" style="text-decoration: none;">
                            <img src="../../public/images/sports/ma_logo.png" alt="" class="sports">
                            <span class="d-block w-100 fst-italic" style="font-size: 30px;">Martial Arts</span>
                        </a>
                    </div>
                    <div class="col-lg vertical-align">
                        <a href="badminton.php" style="text-decoration: none;">
                            <span class="button btn-sm btn-success d-block w-100 fst-italic" style="font-size: 30px;">See More</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php include './layout/footer.php' ?>