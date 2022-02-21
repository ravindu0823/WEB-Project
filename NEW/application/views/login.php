<?php include './layout/header.php' ?>
<?php include './layout/navbar.php' ?>

<div class="container-fluid pt-5"
     style="background: url('../../public/images/Rectangle 34.png') no-repeat; background-size: cover; padding-bottom: 210px">
    <div class="row">
        <div class="col-lg-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 vertical-align">
                        <img src="../../public/images/Group%201.png" width="500px">
                    </div>
                    <div class="col-lg-6 reg-form mt-lg-5">

                        <form name="login" id="login" method="#" action="https://www.google.com">

                                <div class="modal-dialog" role="document">
                                    <div class="modal-content rounded-5 shadow">
                                        <div class="modal-header p-5 pb-4 border-bottom-0">
                                            <h2 class="fw-bold mb-0">Login</h2>
                                        </div>

                                        <div class="modal-body p-5 pt-0">
                                            <form>
                                                <div class="form-floating mb-3">
                                                    <input type="email" class="form-control rounded-4" id="floatingInput"
                                                           placeholder="name@example.com">
                                                    <label for="floatingInput">Student id</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="password" class="form-control rounded-4" id="floatingPassword"
                                                           placeholder="Password">
                                                    <label for="floatingPassword">Password</label>
                                                </div>
                                                <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Login</button>
                                                <small class="text-muted"><a href="#">Forgot Password?</a></small>
                                                <hr class="my-4">
                                            </form>
                                            <form action="register.php">
                                                <h2 class="fs-4 fw-bold mb-3">Join NSBM Sports Club</h2>
                                                <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-4" type="submit">
                                                    <svg class="bi me-1 text-center" width="16" height="16">
                                                    </svg> Sign Up
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include './layout/footer.php' ?>
