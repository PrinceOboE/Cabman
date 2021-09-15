<?php include 'includes/top.php'; ?>

<body>

    <!--Loading Container Start-->
    <div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>
    <!--Loading Container End-->

    <div class="row h-100">
        <div class="col-xs-12 col-sm-12">

            <!--Page Title & Icons Start-->
            <div class="header-icons-container text-center">
                <a href="sign-up.php">
                    <span class="float-left">
                        <img src="../icons/back.svg" alt="Back Icon">
                    </span>
                </a>
                <span>Sign In</span>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
                    <img style="max-width: 300px;" src="..\images\Cabman-logo.png" alt="Main Logo">
                </div>

                <!--Sign Up Container Start-->
                <div class="sign-up-form-container text-center">
                    <form action="includes/login.php" method="post" class="width-100">

                        <span style="color: red;">Incorrect Password or Username. Please verify login details</span>
                         <!--Sign Up Form Field Start-->
                         <div class="form-group">
                            <div class="input-group">
                                <div class="input-group">
                                    <input class="col-12 form-control h-100" id="phone-input" type="tel" name="phone" autocomplete="off" data-intl-tel-input-id="0" placeholder="(201) 555-0123" required>
                                </div>
                            </div>
                        </div>
                        <!--Sign Up Form Field End-->

                        <!--Sign Up Form Field Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="../icons/lock.svg" alt="Lock Icon">
                                    </span>
                                </div>
                                <input class="form-control" type="password" name="password" placeholder="Password" required>
                                <div class="input-group-append password-visibility">
                                    <span>
                                        <img src="../icons/eye.svg" alt="Password Visibility Icon">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--Sign Up Form Field End-->

                        <div class="form-submit-button">
                            <!-- <a href="index.php" class="btn btn-primary text-uppercase font-weight-normal">Sign In</a> -->
                            <button class="btn btn-primary text-uppercase font-weight-normal col-12" name="login" type="submit">Login</button>
                        </div>
                    </form>
                </div>
                <!--Sign Up Container Start-->

            </div>
        </div>

        <!--Terms And Conditions Agreement Container Start-->
        <div class="col-xs-12 col-sm-12 text-center sms-rate-text font-roboto flex-end margin-bottom-30">
            <div class="container-sms-rate-text width-100 font-11">
                <span class="light-gray font-weight-light">By signing up you have agreed to our </span>
                <br />
                <a href="#" class="dark-link">
                    <span class="font-weight-light">Terms of Use & Privacy Policy</span>
                </a>
            </div>
        </div>
        <!--Terms And Conditions Agreement Container End-->

    </div>


    <?php include 'includes/bottom.php'; ?>