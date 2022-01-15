<?php include './layout/header.php' ?>
<?php include './layout/navbar.php' ?>

<?php
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

    <div class="container-fluid pt-5 pb-5"
         style="background: url('../../public/images/Rectangle 9.png') no-repeat; background-size: cover;">
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 vertical-align">
                            <img src="../../public/images/Group%201.png" width="400px">
                        </div>
                        <div class="col-lg-6 reg-form">

                            <form name="register" id="register" method="POST" action="register.php">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Student ID</span>
                                    <input type="text" name="student_id" id="student_id" class="form-control"
                                           placeholder="NSBM Student ID Number"
                                           aria-label="Username"
                                           aria-describedby="basic-addon1" min="5" minlength="5" max="5" maxlength="5"
                                           required autofocus>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Name</span>
                                    <input type="text" class="form-control" placeholder="Full Name"
                                           aria-label="Name" name="name" id="name"
                                           aria-describedby="basic-addon1" max="100" min="5" maxlength="100" required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Age</span>
                                    <input type="text" class="form-control" placeholder="Age" aria-label="Age"
                                           name="age" id="age"
                                           aria-describedby="basic-addon1" min="1" max="2" maxlength="2" required>
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
                                    <input type="text" class="form-control" placeholder="Student Email Address"
                                           aria-label="Recipient's username" name="email" id="email"
                                           aria-describedby="basic-addon2" min="5"
                                           max="80" required>
                                    <span class="input-group-text" id="basic-addon2">@students.nsbm.ac.lk</span>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Phone Number</span>
                                    <input type="text" name="phone_number" id="phone_number" class="form-control"
                                           placeholder="Phone Number"
                                           aria-label="Username"
                                           aria-describedby="basic-addon1" min="10" max="10" maxlength="10">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Address</span>
                                    <input type="text" name="address" id="address" class="form-control"
                                           placeholder="Home Address"
                                           aria-label="Address"
                                           aria-describedby="basic-addon1" required min="10" max="100" maxlength="100">
                                </div>

                                <button type="submit" class="btn btn-primary d-block w-100"
                                        onclick="ValidateRegister()">Register
                                </button>

                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        let errors = [];

        function ValidateRegister() {
            if (!document.getElementById('student_id').value) {
                errors.push("Enter the Student ID");
            }

            if (document.getElementById('student_id').value < 5) {
                errors.push("Student ID must have 5 digits");
            }

            if (!document.getElementById('name').value) {
                errors.push("Enter your name");
            }

            if (!document.getElementById('age').value) {
                errors.push("Enter your age");
            }

            if (isNaN(document.getElementById('age').value)) {
                errors.push("Age must be a numeric value");
            }

            if (!document.getElementById('faculty').value) {
                errors.push("Please select your faculty");
            }

            if (!document.getElementById('email').value) {
                errors.push("Enter your student email address");
            }

            let a = document.getElementById('email').value.indexOf('@');
            let b = document.getElementById('email').value.lastIndexOf('.');

            if (a < 1 || b - a < 2 || b + 2 >= document.getElementById('email').value.length) {
                errors.push("Provide a Valid E-mail Address");
            }

            if (document.getElementById('phone_number').value.length < 10) {
                errors.push("Enter a valid Phone number");
            }

            if (!document.getElementById('address').value) {
                errors.push("Enter your address");
            }

            let errors_string = '';

            // Loop through all errors
            for (let i = 0; i < errors.length; i++) {
                errors_string += errors[i];

                // Add a new line while it's not the last iteration
                if (i !== errors.length) {
                    errors_string += '\n';
                }
            }

            window.alert(errors_string);
        }
    </script>

<?php include './layout/footer.php' ?>