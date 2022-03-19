<?php include './layout/header.php' ?>
<?php include './layout/navbar.php' ?>

<?php
// Redirect to home page if user already logged in
if (isset($_SESSION['logged_in'])) {
    if ($_SESSION['logged_in'] == 1) {
        header('Location: home.php');
    }
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
    $messages = [];

    // PHP form validation
    $student_id = trim($_POST['student_id']);
    $name = trim($_POST['name']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    $age = trim($_POST['age']);
    $faculty = trim($_POST['faculty']);
    $batch = trim($_POST['batch']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);

    if (!$student_id) {
        array_push($errors, 'Enter your Student ID');
    }

    if (!filter_var($student_id, FILTER_VALIDATE_INT)) {
        array_push($errors, "$student_id is not a valid Student ID");
    }

    if ($student_id < 5) {
        array_push($errors, 'Student ID must have 5 digits');
    }

    if (!$name) {
        array_push($errors, 'Enter your Name');
    }

    if (!preg_match('/^[a-zA-Z ]+$/i', $name)) {
        array_push($errors, 'Provide a valid Name');
    }

    if (!$password) {
        array_push($errors, 'Enter a password');
    }

//    if ($password < 6) {
//        array_push($errors, 'The password must contain at least 6 characters');
//    }

    if (!$confirm_password) {
        array_push($errors, 'Please confirm your password');
    }

    if ($confirm_password != $password) {
        array_push($errors, 'Conform password is not valid');
    }

    if (!$age) {
        array_push($errors, 'Please enter your age');
    }

    if (!filter_var($age, FILTER_VALIDATE_INT)) {
        array_push($errors, 'Age should be a numeric value');
    }

    if ((int)$age < 18) {
        array_push($errors, 'Enter a valid age');
    }

    if (!$faculty) {
        array_push($errors, 'Please select your faculty');
    }

    if (!$batch) {
        array_push($errors, 'Please select your batch');
    }

    if (!$email) {
        array_push($errors, 'Enter your student Email address');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "$email is not a valid Email address");
    }

    // Validate form
    if (sizeof($errors) > 0) {
        // Validation unsuccessful
        $_SESSION['form_validation']['errors'] = $errors;
        header('Location: register.php');
    } else {
        // Validation successful
        unset($_SESSION['form_validation']['errors']);

        // Create DB connection
        $conn = new mysqli(REMOTE_HOST, REMOTE_USERNAME, REMOTE_PASSWORD, REMOTE_DATABASE);

        // Check connection
        if (mysqli_connect_error()) {
            error_log(mysqli_connect_error());
            array_push($errors, 'DB connection error! Please contact the admin');
            $_SESSION['form_validation']['errors'] = $errors;
        } else {
            $sql = 'INSERT INTO `students` (`student_id`, `name`, `age`, `password`, `faculty`, `batch`, `email`, `phone`, `address`) VALUES ("' . $student_id . '", "' . $name . '", "' . $age . '", "' . sha1($password) . '", "' . $faculty . '", "' . $batch . '", "' . $email . '", "' . $phone . '", "' . $address . '")';

            if ($conn->query($sql) === true) {
                array_push($messages, 'Registration successful! Please login');
                $_SESSION['form_validation']['success'] = $messages;
            } else {
                error_log($sql . ': ' . $conn->error);
                array_push($errors, 'Registration unsuccessful! Please contact the admin');
                $_SESSION['form_validation']['errors'] = $errors;
            }
        }

        $conn->close();
        header('Location: login.php');
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
                            <img src="../../public/images/Group%201.png" width="500px">
                        </div>
                        <div class="col-lg-6">

                            <?php include './layout/alerts.php' ?>

                            <div class="modal-dialog">
                                <div class="modal-content rounded-5 shadow">
                                    <div class="modal-header p-5 pb-4 border-bottom-0">
                                        <h2 class="fw-bold mb-0">Sign Up</h2>
                                    </div>

                                    <div class="modal-body p-5 pt-0">

                                        <form name="register" id="register" method="POST" action="register.php"
                                              onsubmit="return formValidation();">

                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control rounded-4"
                                                       placeholder="Student id" name="student_id" id="student_id"
                                                       aria-label="student_id" min="5"
                                                       minlength="5" max="5" maxlength="5" required autofocus>
                                                <label for="student_id">Student id</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="text" name="name" class="form-control rounded-4"
                                                       id="name"
                                                       placeholder="Full Name" aria-label="Name" min="5" max="100"
                                                       maxlength="100"
                                                       required>
                                                <label for="name">Name</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control rounded-4"
                                                       name="password" id="password"
                                                       placeholder="Enter your Password" aria-label="Password" min="8"
                                                       max="100"
                                                       maxlength="100"
                                                       required>
                                                <label for="password">Password</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control rounded-4"
                                                       name="confirm_password"
                                                       id="confirm_password"
                                                       placeholder="Confirm Password" aria-label="Confirm password"
                                                       min="5"
                                                       max="100" maxlength="100"
                                                       required>
                                                <label for="confirm_password">Confirm Password</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control rounded-4"
                                                       id="age" name="age"
                                                       placeholder="Age" aria-label="Age" min="1" max="2" maxlength="2"
                                                       required>
                                                <label for="age">Age</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <select name="faculty" id="faculty" class="form-control rounded-4 pt-2"
                                                        title="Faculty" required>
                                                    <option value="">Select Your Faculty</option>
                                                    <?php for ($i = 0; $i < sizeof(FACULTIES); $i++) { ?>
                                                        <option value="<?php echo FACULTIES[$i]['id']; ?>"><?php echo FACULTIES[$i]['name']; ?></option>
                                                    <?php } ?>
                                                    <label for="faculty">Faculty</label>
                                                </select>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <select name="batch" id="batch" class="form-control rounded-4 pt-2"
                                                        title="Batch" required>
                                                    <option value="">Select your Batch</option>
                                                    <?php for ($i = 0; $i < sizeof(BATCHES); $i++) { ?>
                                                        <option value="<?php echo BATCHES[$i]['id']; ?>">
                                                            <?php echo BATCHES[$i]['name']; ?>
                                                        </option>
                                                    <?php } ?>

                                                </select>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="email" name="email" class="form-control rounded-4"
                                                       id="email"
                                                       placeholder="Student Email Address"
                                                       aria-label="Recipient's username" min="5"
                                                       max="80" required>
                                                <label for="email">Email</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control rounded-4"
                                                       id="phone" name="phone"
                                                       placeholder="Phone Number" aria-label="Username" min="10"
                                                       max="10"
                                                       maxlength="10">
                                                <label for="phone">Phone Number</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <textarea class="form-control rounded-4"
                                                          id="address" name="address" rows="3"
                                                          placeholder="Home Address" aria-label="Address" required maxlength="100"
                                                          style="height:100%;"></textarea>
                                                <label for="address">Address</label>
                                            </div>

                                            <button class="w-100 mb-2 mt-2 btn btn-lg rounded-4 btn-primary"
                                                    type="submit">Sign Up
                                            </button>
                                            <hr class="my-4">
                                        </form>

                                        <form action="login.php">
                                            <h2 class="fs-5 fw-bold mb-3">Already member of NSBM Sports Club</h2>
                                            <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-4"
                                                    type="submit">
                                                <svg class="bi me-1 text-center" width="16" height="16">
                                                </svg>
                                                Login
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

            if (document.getElementById('student_id').value < 5) {
                errors.push('Student ID must have 5 digits');
            }

            if (!document.getElementById('name').value) {
                errors.push('Enter your Name');
            }

            if (!document.getElementById('password').value) {
                errors.push('Enter your password');
            }

            if (document.getElementById('password').value < 6) {
                errors.push('The password should contain at least 6 characters');
            }

            if (document.getElementById('password').value !== document.getElementById('confirm_password').value) {
                errors.push('Confirm password is not valid!');
            }

            if (!document.getElementById('age').value) {
                errors.push('Enter your Age');
            }

            if (isNaN(document.getElementById('age').value)) {
                errors.push('Age must be a numeric value');
            }

            if (!document.getElementById('faculty').value) {
                errors.push('Select your Faculty');
            }

            if (!document.getElementById('batch').value) {
                errors.push('Select your batch');
            }

            if (!document.getElementById('email').value) {
                errors.push('Enter your student Email address');
            }

            let a = document.getElementById('email').value.indexOf('@');
            let b = document.getElementById('email').value.lastIndexOf('.');

            if (a < 1 || b - a < 2 || b + 2 >= document.getElementById('email').value.length) {
                errors.push('Provide a valid Email Address');
            }

            if (document.getElementById('phone').value.length < 10) {
                errors.push('Enter your Phone number');
            }

            if (!document.getElementById('address').value) {
                errors.push('Enter your Address');
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