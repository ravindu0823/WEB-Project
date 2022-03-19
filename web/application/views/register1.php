<?php include './layout/header.php' ?>
<?php include './layout/navbar.php' ?>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    /*$server = 'localhost';
    $username = 'root';
    $pass = '';
    $db = 'nsbm';*/

    $server = 'localhost';
    $username = 'u644581451_ravindu';
    $pass = 'ravinduD1234';
    $db = 'u644581451_ravindu';

    // PHP form validation
    $student_id = $_POST['student_id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $age = $_POST['age'];
    $faculty = $_POST['faculty'];
    $batch = $_POST['batch'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Create DB connection
    $conn = new mysqli($server, $username, $pass, $db);

    // Check Connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "Connection Successful <br>";
    }

    $sql = "INSERT INTO students (student_id, name, age, password, faculty, batch, email, phone, address) VALUES ($student_id, '$name', $age, '$password', '$faculty', '$batch', '$email', $phone, '$address')";

    if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>
                window.alert('Inserted Successfully');
              </script>";
        header('Location: login.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}


?>


<?php
// Form meta data
$faculties = [
    [
        'id' => 'FOB',
        'name' => 'Faculty of Business (FOB)'
    ],
    [
        'id' => 'FOC',
        'name' => 'Faculty of Computing (FOC)'
    ],
    [
        'id' => 'FOE',
        'name' => 'Faculty of Engineering (FOE)'
    ],
    [
        'id' => 'FOS',
        'name' => 'Faculty of Science (FOS)'
    ]
];

$batches = [
    [
        'id' => '20.1',
        'name' => '20.1'
    ],

    [
        'id' => '20.2',
        'name' => '20.2'
    ],

    [
        'id' => '20.3',
        'name' => '20.3'
    ],

    [
        'id' => '21.1',
        'name' => '21.1'
    ],

    [
        'id' => '21.2',
        'name' => '21.2'
    ],

    [
        'id' => '21.3',
        'name' => '21.3'
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
                            <img src="../../public/images/Group%201.png" width="500px">
                        </div>
                        <div class="col-lg-6">

                            <?php if (isset($_SESSION['form_validation']['errors'])) { ?>
                                <div class="alert bg-danger">
                                    <?php foreach ($_SESSION['form_validation']['errors'] as $error) { ?>
                                        <p><?php echo $error; ?></p>
                                    <?php } ?>
                                </div>
                            <?php } ?>

                            <?php if (isset($_SESSION['form_validation']['success'])) { ?>
                                <div class="alert bg-success">
                                    <?php foreach ($_SESSION['form_validation']['success'] as $success) { ?>
                                        <p><?php echo $success; ?></p>
                                    <?php } ?>
                                </div>
                            <?php } ?>

                            <div class="modal-dialog">
                                <div class="modal-content rounded-5 shadow">
                                    <div class="modal-header p-5 pb-4 border-bottom-0">
                                        <h2 class="fw-bold mb-0">Sign Up</h2>
                                    </div>

                                    <div class="modal-body p-5 pt-0">

                                        <form name="register" id="register" method="POST" action="register1.php"
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
                                                    <?php for ($i = 0; $i < sizeof($faculties); $i++) { ?>
                                                        <option value="<?php echo $faculties[$i]['id']; ?>"><?php echo $faculties[$i]['name']; ?></option>
                                                    <?php } ?>
                                                    <label for="faculty">Faculty</label>
                                                </select>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <select name="batch" id="batch" class="form-control rounded-4 pt-2"
                                                        title="Batch" required>
                                                    <option value="">Select your Batch</option>
                                                    <?php for ($i = 0; $i < sizeof($batches); $i++) { ?>
                                                        <option value="<?php echo $batches[$i]['id']; ?>">
                                                            <?php echo $batches[$i]['name']; ?>
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
                                                <input type="text" class="form-control rounded-4"
                                                       name="address"
                                                       id="address"
                                                       placeholder="Home Address" aria-label="Address" required min="10"
                                                       max="100"
                                                       maxlength="100">
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