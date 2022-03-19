<?php include './layout/header.php' ?>
<?php include './layout/navbar.php' ?>

<?php
// Redirect to home page if user already logged in
if (isset($_SESSION['logged_in'])) {
    header('Location: home.php');
}
?>

<?php
/**
 * Controller
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    unset($_SESSION['form_validation']['errors']);
    unset($_SESSION['form_validation']['success']);
    $errors = [];

    // PHP form validation
    $student_id = $_POST['student_id'];
    $password = $_POST['password'];

    if (!$student_id) {
        array_push($errors, 'Enter your Student ID');
    }

    if (!$password) {
        array_push($errors, 'Enter a password');
    }

    // Validate form
    if (sizeof($errors) > 0) {
        // Validation unsuccessful
        $_SESSION['form_validation']['errors'] = $errors;
        header('Location: login.php');
    } else {
        // Validation successful
        unset($_SESSION['form_validation']['errors']);
        unset($_SESSION['form_validation']['success']);

        // Create DB connection
        $conn = new mysqli(REMOTE_HOST, REMOTE_USERNAME, REMOTE_PASSWORD, REMOTE_DATABASE);

        // Check connection
        if (mysqli_connect_error()) {
            error_log(mysqli_connect_error());
            array_push($errors, 'DB connection error! Please contact the admin');
            $_SESSION['form_validation']['errors'] = $errors;
        } else {
            $sql = 'SELECT `id`, `student_id`, `name`, `faculty`, `batch` FROM `students` WHERE `student_id` = "' . $student_id . '" AND `password` = "' . sha1($password) . '" AND `deleted_at` IS NULL';
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $result = mysqli_fetch_array($result);

                // Set user session variables
                unset($_SESSION['user_data']);
                $_SESSION['user_data']['id'] = $result['id'];
                $_SESSION['user_data']['student_id'] = $result['student_id'];
                $_SESSION['user_data']['name'] = $result['name'];
                $_SESSION['user_data']['faculty'] = $result['faculty'];
                $_SESSION['user_data']['batch'] = $result['batch'];
                $_SESSION['logged_in'] = 1;

                // Get all enrolments of student
                $result = get_student_enrolments($student_id);

                if ($result) {
                    // Add all enrolments to the session
                    $_SESSION['user_data']['enrolments'] = $result;
                }

                // Redirect to home page
                $conn->close();
                header('Location: home.php');
            } else {
                array_push($errors, 'Student not found!');
                $_SESSION['form_validation']['errors'] = $errors;
            }
        }

        $conn->close();
    }
}
?>

    <div class="container-fluid pt-5" style="background: url('../../public/images/Rectangle 34.png') no-repeat; background-size: cover; padding-bottom: 210px">
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 vertical-align">
                            <img src="../../public/images/Group%201.png" width="500px">
                        </div>
                        <div class="col-lg-6">

                            <?php include './layout/alerts.php'; ?>

                            <div class="modal-dialog">
                                <div class="modal-content rounded-5 shadow">
                                    <div class="modal-header p-5 pb-4 border-bottom-0">
                                        <h2 class="fw-bold mb-0">Login</h2>
                                    </div>

                                    <div class="modal-body p-5 pt-0">

                                        <form name="login" id="login" method="POST" action="login.php" onsubmit="return formValidation();">

                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control rounded-4" placeholder="Student id" name="student_id" id="student_id" aria-label="student_id" min="5" minlength="5" max="5" maxlength="5" required autofocus>
                                                <label for="student_id">Student id</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control rounded-4" name="password" id="password" placeholder="Enter your Password" aria-label="Password" min="8" max="100" maxlength="100" required>
                                                <label for="password">Password</label>
                                            </div>

                                            <button class="w-100 mb-2 mt-2 btn btn-lg rounded-4 btn-primary" type="submit">
                                                Login
                                            </button>
                                            <small class="text-muted"><a href="#">Forgot Password?</a></small>
                                            <hr class="my-4">
                                        </form>

                                        <form action="register.php">
                                            <h2 class="fs-5 fw-bold mb-3">Join NSBM Sports Club</h2>
                                            <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-4" type="submit">
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
        function formValidation() {
            let errors = [];
            let errors_string = '';

            if (!document.getElementById('student_id').value) {
                errors.push('Enter your Student ID');
            }

            if (!document.getElementById('password').value) {
                errors.push('Enter your password');
            }

            // Loop through all errors
            for (let i = 0; i < errors.length; i++) {
                errors_string += errors[i];

                // Add a new line while it's not the last iteration
                if (i !== errors.length) {
                    errors_string += '\n';
                }
            }

            // Stop form submission if there're errors
            if (errors.length > 0) {
                window.alert(errors_string);
                return false;
            }

            return true;
        }
    </script>

<?php include './layout/footer.php' ?>