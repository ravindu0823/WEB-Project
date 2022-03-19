<div class="font" style="text-align: center; font-size: 5rem; padding-bottom: 15px; background-color: #08AEEA;
background-image: linear-gradient(0deg, #08AEEA 0%, #2AF598 100%);
">
    <a href="https://www.nsbm.ac.lk"><img src="<?php echo BASE_URL; ?>public/images/nsbm_logo_favicon.png" alt="nsbm logo" height="120" style="border: 3px solid #73AD21; border-radius: 50%;"></a>
    <span style="padding-top: 2px; text-shadow: 2px 2px black; font-family: 'rozha one'"><span style="color: #007BFF">NSBM</span>
        <span style="color: #02CD22;">SPORTS</span></span>
</div>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 25px;">
            <?php $url = str_replace('/ravindu/webproject/application/views/', '', $_SERVER['REQUEST_URI']); ?>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item <?php if ($url == '' || $url == 'home.php') {
                    echo 'active';
                } ?>">
                    <a class="nav-link" aria-current="page" href="<?php echo BASE_URL; ?>application/views/home.php">Home</a>
                </li>
                <li class="nav-item <?php if ($url == 'clubs.php') {
                    echo 'active';
                } ?>">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>application/views/clubs.php">Clubs</a>
                </li>
                <li class="nav-item <?php if ($url == 'news.php') {
                    echo 'active';
                } ?>">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>application/views/news.php">News</a>
                </li>
                <li class="nav-item <?php if ($url == 'about_us.php') {
                    echo 'active';
                } ?>">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>application/views/about_us.php">About Us</a>
                </li>
                <li class="nav-item <?php if ($url == 'contact_us.php') {
                    echo 'active';
                } ?>">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>application/views/contact_us.php">Contact Us</a>
                </li>
            </ul>
            <?php if (isset($_SESSION['logged_in'])) { ?>
                <form name="logout" id="logout" method="POST" action="<?php echo BASE_URL; ?>application/views/logout.php">
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            <?php } else { ?>
                <a href="<?php echo BASE_URL; ?>application/views/login.php" class="d-flex nav-item mx-2" style="text-decoration: none;">
                    <button class="btn btn-danger">Login</button>
                </a>
                <a href="<?php echo BASE_URL; ?>application/views/register.php" class="d-flex nav-item" style="text-decoration: none;">
                    <button class="btn btn-success">Sign Up</button>
                </a>
            <?php } ?>
        </div>
    </div>
</nav>