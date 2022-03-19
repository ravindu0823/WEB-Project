<?php if (isset($_SESSION['form_validation']['errors'])) { ?>
    <div class="alert bg-danger text-center text-white">
        <?php foreach ($_SESSION['form_validation']['errors'] as $error) { ?>
            <p><?php echo $error; ?></p>
        <?php } ?>
    </div>
<?php } ?>

<?php if (isset($_SESSION['form_validation']['success'])) { ?>
    <div class="alert bg-success text-center text-white">
        <?php foreach ($_SESSION['form_validation']['success'] as $success) { ?>
            <p><?php echo $success; ?></p>
        <?php } ?>
    </div>
<?php } ?>