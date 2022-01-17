<div class="font" style="text-align: center; font-size: 5rem; padding-bottom: 15px; background-color: #08AEEA;
background-image: linear-gradient(0deg, #08AEEA 0%, #2AF598 100%);
">
    <a href="https://www.nsbm.ac.lk/"><img src="../../public/images/nsbm_logo_favicon.png" alt="" height="120"
         style="border: 3px solid #73AD21; border-radius: 50%;"></a>
    <span style="padding-top: 2px; text-shadow: 2px 2px black; font-family: 'rozha one'"><span style="color: #007BFF">NSBM</span> <span
                style="color: #02CD22;">SPORTS</span></span>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 25px;">
            <?php $url = str_replace('/Projects/WEB/application/views/', '', $_SERVER['REQUEST_URI']); ?>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php if ($url == '' || $url == 'home.php') {
                        echo 'active';
                    } ?>" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($url == '' || $url == 'clubs.php') {
                        echo 'active';
                    } ?>" aria-current="page" href="clubs.php">Clubs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($url == 'news.php') {
                        echo 'active';
                    } ?>" href="news.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($url == 'about_us.php') {
                        echo 'active';
                    } ?>" href="about_us.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($url == 'contact_us.php') {
                        echo 'active';
                    } ?>" href="contact_us.php">Contact Us</a>
                </li>
                <!-- Drop Down -->
                <!--<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>-->
                <!-- Disabled Button -->
                <!--<li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>-->
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-warning" type="submit">Search</button>
            </form>
            <a href="login.php" class="d-flex nav-item mx-2" style="text-decoration: none;">
                <button class="btn btn-danger">Login</button>
            </a>
            <a href="register.php" class="d-flex nav-item" style="text-decoration: none;">
                <button class="btn btn-success">Register</button>
            </a>
        </div>
    </div>
</nav>