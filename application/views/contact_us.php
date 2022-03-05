<?php include './layout/header.php' ?>
<?php include './layout/navbar.php' ?>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $firstname = $_REQUEST['fname'];
    $lastname = $_REQUEST['lname'];
    $contact_no = $_REQUEST['contact_no'];
    $email = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $comments = $_REQUEST['comments'];

//    echo $firstname . '<br>';
//    echo $lastname . '<br>';
//    echo $contact_no . '<br>';
//    echo $email . '<br>';
//    echo $address . '<br>';
//    echo $comments . '<br>';

    if (empty($firstname) || empty($lastname) || empty($contact_no) || empty($email) || empty($subject) || empty($comments)) {
        echo '<script> window.alert("Please fill the all fields"); </script>';
    } else {

        $to = 'assshka@gmail.com';

        if (mail($to, $subject, $comments)) {
            echo '<script> window.alert("Message sent successfully"); </script>';
        } else {
            echo '<script> window.alert("ERRORRRR!!!!!"); </script>';
        }


    }

}


?>

<div class="container-fluid"
     style="background: url('../../public/images/contact_us.jpg') no-repeat; background-size: cover;">
    <div class="container rounded-3 p-3 pt-1 mb-3 text-light" style="background-color: rgba(0, 0, 0, 0.3)">
        <section class="mb-4">

            <!--Section heading-->
            <h2 class="h1-responsive fw-bold fs-1 font-weight-bold text-center my-4">Contact us</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5 fw-bolder fs-3 font-monospace">Let's Start a
                Conversation</p>

            <form class="row g-3" name="contact_us" action="contact_us.php" method="post">
                <div class="col-md-6">
                    <label for="name" class="form-label">First Name</label>
                    <input name="fname" type="text" class="form-control" id="name" placeholder="First Name" autofocus>
                </div>
                <div class="col-md-6">
                    <label for="lname" class="form-label">Last Name</label>
                    <input name="lname" type="text" class="form-control" id="lname" placeholder="Last Name">
                </div>
                <div class="col-md-6">
                    <label for="contact" class="form-label">Contact No</label>
                    <input name="contact_no" type="text" class="form-control" id="contact" placeholder="Mobile Number"
                           maxlength="10">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="col-12">
                    <label for="Subject" class="form-label">Subject</label>
                    <input name="subject" type="text" class="form-control" id="Subject" placeholder="The reason">
                </div>
                <div class="col-12">
                    <label for="comments" class="form-label">Comments</label>
                    <textarea name="comments" class="form-control" placeholder="Leave a comment here" id="comments"
                              style="height: 100px"></textarea>
                </div>
                <div class="col-12 pt-3">
                    <button type="submit" class="btn btn-primary w-100">Send</button>
                </div>
            </form>
    </div>
</div>

<?php include './layout/footer.php' ?>
