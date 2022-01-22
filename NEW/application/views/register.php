<?php include './layout/header.php' ?>
<?php include './layout/navbar.php' ?>

<?php
/**
 * Controller
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    // PHP form validation
    $student_id = trim($_POST['student_id']);
    $name = trim($_POST['name']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    $age = trim($_POST['age']);
    $faculty = trim($_POST['faculty']);
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

    if ($password < 6) {
        array_push($errors, 'The password must contain at least 6 characters');
    }

    if (!$confirm_password) {
        array_push($errors, 'Please confirm your password');
    }

    if ($confirm_password != $password) {
        array_push($errors, 'Conform password is not valid');
    }

    if (!$age) {
        array_push($errors, 'Please enter your age');
    }

    if (filter_var($age, FILTER_VALIDATE_INT)) {
        array_push($errors, 'Age should be a numeric value');
    }

    if ($age > 2) {
        array_push($errors, 'Enter a valid age');
    }

    if (!$faculty) {
        array_push($errors, 'Please select your faculty');
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

        // TODO: DB connection

        $server = 'localhost';
        $username = 'u644581451_ravindu';
        $pass = 'u644581451_ravindu';
        $db = 'u644581451_ravindu';

        // Create Connection
        $conn = new mysqli($server, $username, $pass, $db);


        // Check Connection
        if ($conn->connect_error) {
            die("Connection failed!!" . $conn->connect_error);
        } else {
            echo("Connection Established");
        }

        // $sql = "INSERT INTO students (student_id, name, age, password, faculty, batch, email, phone, address)";



        $conn->close();

    }
}
?>

<?php
// Form meta data
$faculties = [
    [
        'id' => '1',
        'name' => 'Faculty of Business (FOB)'
    ],
    [
        'id' => '2',
        'name' => 'Faculty of Computing (FOC)'
    ],
    [
        'id' => '3',
        'name' => 'Faculty of Engineering (FOE)',
    ],
    [
        'id' => '4',
        'name' => 'Faculty of Science (FOS)',
    ]
];
?>

    <div class="container-fluid pt-5"
         style="background: url('../../public/images/Rectangle 34.png') no-repeat; background-size: cover; padding-bottom: 210px">
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 vertical-align">
                            <img src="../../public/images/Group%201.png" width="400px">
                        </div>
                        <div class="col-lg-6 reg-form">

                            <?php if ($_SESSION['form_validation']['errors']) { ?>
                                <div class="alert bg-danger">
                                    <?php foreach ($_SESSION['form_validation']['errors'] as $error) { ?>
                                        <p><?php echo $error; ?></p>
                                    <?php } ?>
                                </div>
                            <?php } ?>

                            <form name="register" id="register" method="POST" action="register.php"
                                  onsubmit="return formValidation();">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Student ID</span>
                                    <input type="text" name="student_id" id="student_id" class="form-control"
                                           placeholder="NSBM Student ID Number" aria-label="Username" min="5"
                                           minlength="5" max="5" maxlength="5" required autofocus>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Name</span>
                                    <input type="text" name="name" id="name" class="form-control"
                                           placeholder="Full Name" aria-label="Name" min="5" max="100" maxlength="100"
                                           required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Password</span>
                                    <input type="password" name="password" id="password" class="form-control"
                                           placeholder="Enter a strong password" aria-label="Password" min="8" max="100" maxlength="100"
                                           required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Confirm Password</span>
                                    <input type="password" name="confirm_password" id="confirm_password" class="form-control"
                                           placeholder="Confirm your password" aria-label="Confirm password" min="5" max="100" maxlength="100"
                                           required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Age</span>
                                    <input type="text" name="age" id="age" class="form-control" placeholder="Age"
                                           aria-label="Age" min="1" max="2" maxlength="2" required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Faculty</span>
                                    <select name="faculty" id="faculty" class="form-control" title="Faculty" required>
                                        <option value="">Please select...</option>
                                        <?php for ($i = 0; $i < sizeof($faculties); $i++) { ?>
                                            <option value="<?php echo $faculties[$i]['id']; ?>"><?php echo $faculties[$i]['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Email</span>
                                    <input type="text" name="email" id="email" class="form-control"
                                           placeholder="Student Email Address" aria-label="Recipient's username" min="5"
                                           max="80" required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Phone Number</span>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                           placeholder="Phone Number" aria-label="Username" min="10" max="10"
                                           maxlength="10">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Address</span>
                                    <input type="text" name="address" id="address" class="form-control"
                                           placeholder="Home Address" aria-label="Address" required min="10" max="100"
                                           maxlength="100">
                                </div>

                                <button type="submit" class="btn btn-primary d-block w-100">Register</button>

                            </form>

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