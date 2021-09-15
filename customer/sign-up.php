<?php include 'includes/top.php'; ?>

<body>

    <!--Loading Container Start-->
    <div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>
    <!--Loading Container End-->

    <div class="row h-100 align-items-center">
        <div class="col-xs-12 col-sm-12 margin-bottom-up">
            
            <!--Page Title & Icons Start-->
            <div class="header-icons-container text-center">
                <a href="../index.php">
                    <span class="float-left">
                    <img src="../icons/back.svg" alt="Back Icon">
                </span>
                </a>
                <span>Sign Up</span>
            </div>
            <!--Page Title & Icons End-->

            <div class="text-center mb-5">
                <img style="max-width: 300px;" src="..\images\Cabman-logo.png" alt="Main Logo">
            </div>

            <!--Sign Up Buttons Container Start-->
            <div class="sign-up-btn-container">
                <a class="btn btn-center width-100 display-block btn-secondary text-uppercase btn-padding-1">Sign Up With Facebook</a>
                <a href="sign-up-page-2.php" class="btn btn-center width-100 display-block btn-primary text-uppercase margin-top-10">Sign up with Email</a>
                <div class="have-an-account text-center">
                    <br>
                    <p class="regular-link">Already have an account?</p>
                    <a style="background: green; color: white; border: 1px solid green;" href="sign-in.php" class="btn btn-center btn-primary width-100 display-block text-uppercase margin-top-10">Sign in</a>
                </div>
            </div>
            <!--Sign Up Buttons Container End-->

        </div>
    </div>
<?php include 'includes/bottom.php'; ?>
