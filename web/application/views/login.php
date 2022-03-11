<?php include './layout/header.php' ?>
<?php include './layout/navbar.php' ?>

<?php

session_start();

if (isset($_SESSION['username'])) {
    header('Location: home.php');
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $server = 'localhost';
    $username = 'root';
    $pass = '';
    $db = 'nsbm';



    /*$server = 'localhost';
    $username = 'u644581451_ravindu';
    $pass = 'ravinduD1234';
    $db = 'u644581451_ravindu';*/

    // Create Connection
    $conn = mysqli_connect($server, $username, $pass, $db);

    $id = $_POST['student_id'];
    $password = $_POST['password'];

    if ($id == 23136 && $password == 'RAVIndu751') {

        $_SESSION['username'] = $id;
        header('Location: admin/admin.php');

    } else {
        $login = "SELECT * FROM students WHERE student_id = \"$id\" and password = \"$password\"";

        $rs = mysqli_query($conn, $login);

        if ($rs->num_rows > 0) {

            // Set username session variable
            $_SESSION['username'] = $id;

            // Jump to secured page
            header('Location: home.php');
        } else {

            // Jump to login page
            header('Location: login.php');
        }
    }


}


?>

<div class="container-fluid pt-5"
     style="background: url('../../public/images/Rectangle 34.png') no-repeat; background-size: cover; padding-bottom: 210px">
    <div class="row">
        <div class="col-lg-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 vertical-align">
                        <img src="../../public/images/Group%201.png" width="500px" alt="">
                    </div>

                    <div class="col-lg-6 reg-form mt-lg-5">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content rounded-5 shadow">
                                <div class="modal-header p-5 pb-4 border-bottom-0">
                                    <h2 class="fw-bold mb-0">Login</h2>
                                </div>
                                <div class="modal-body p-5 pt-0">

                                    <form name="login" id="login" method="post" action="login.php">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="student_id" class="form-control rounded-4"
                                                   id="student_id"
                                                   placeholder="name@example.com" maxlength="5" autofocus required>
                                            <label for="student_id">Student id</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" name="password" class="form-control rounded-4"
                                                   id="password"
                                                   placeholder="Password" required>
                                            <label for="password">Password</label>
                                        </div>
                                        <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit"
                                                onclick="validate()">
                                            Login
                                        </button>
                                        <small class="text-muted"><a href="#">Forgot Password?</a></small>
                                        <hr class="my-4">
                                    </form>
                                    <form action="register.php">
                                        <h2 class="fs-4 fw-bold mb-3">Join NSBM Sports Club</h2>
                                        <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-4"
                                                type="submit">
                                            <svg class="bi me-1 text-center" width="16" height="16">
                                            </svg>
                                            Sign Up
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function validate() {
        if (!document.getElementById('student_id').value) {
            window.alert("Enter your Student id");
        }

        if (isNaN(document.getElementById('student_id').value)) {
            window.alert("The Student id should be numeric");
        }

        if (!document.getElementById('password').value) {
            window.alert("Enter your Password");
        }
    }
</script>

<?php include './layout/footer.php' ?>
