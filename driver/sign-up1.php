<?php include 'includes/top.php'; ?>

<body>

    <!--Loading Container Start-->
    <div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>
    <!--Loading Container End-->

    <div class="row h-100 align-items-center">
        <div class="col-xs-12 col-sm-12 margin-bottom-up">
            <div class="text-center mb-5">
                <img style="max-width: 300px;" src="..\images\Cabman-logo.png" alt="Main Logo">
            </div>

            <!--Sign Up Buttons Container Start-->
            <div class="sign-up-btn-container">
                <a class="btn btn-center width-100 display-block btn-secondary text-uppercase btn-padding-1">Sign Up With Facebook</a>
                <a href="sign-up-page-2.php" class="btn btn-center width-100 display-block btn-primary text-uppercase margin-top-10">Sign up with Email</a>
            </div>
            <!--Sign Up Buttons Container End-->

            <div class="have-an-account text-center">
                <a href="sign-in.php" class="regular-link">Already have an account?</a>
            </div>
        </div>
    </div>
        <?php include 'includes/bottom.php'; ?>