<?php include "includes/top.php"; ?>

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
                <span>Sign Up</span>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
                    <img style="max-width: 300px;" src="..\images\Cabman-logo.png" alt="Main Logo">
                </div>

                <!--Sign Up Container Start-->
                <div class="sign-up-form-container text-center">
                    <form class="width-100" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="text-center sms-rate-text">
                                <h6 style="margin-top: 15px;">Select Country and enter <br>your Phone Number to continue</h6>
                            </div>
                            <?php

                            if (isset($_POST['create_user'])) {
                                $select = mysqli_query($connection, "SELECT `pnumber` FROM `users` WHERE `pnumber` = '" . $_POST['phone'] . "'") or exit(mysqli_error($connection));
                                if (mysqli_num_rows($select)) {

                            ?>
                                    <h5 style="margin-bottom: 0; margin-top: 5%; font-weight: 100px; color: red; text-align: center;">Phone Number already exists</h5>;
                            <?php
                                } elseif (count($errors) == 0) {

                                    $vercode = mt_rand(1001, 9999);
                                    $_SESSION['vercode']   = $vercode;

                                    $phone                   = $_POST['phone'];
                                    $_SESSION['phone']       = $phone;
                                    header("Location: sign-up-page-3.php");
                                }
                            }
                            ?>
                            <div class="input-group">
                                <input class="col-12 form-control h-100" id="phone-input" type="tel" name="phone" autocomplete="off" data-intl-tel-input-id="0" placeholder="(201) 555-0123" required>
                            </div>
                        </div>
                        <div class="form-submit-button small-padding">
                            <input type="submit" class="btn btn-primary text-uppercase col-12" name="create_user" value="Continue">
                            <!-- <a href="" class="btn btn-primary text-uppercase">Continue</a> -->
                        </div>
                    </form>

                    <!--Rate Text Constainer Start-->
                    <div class="text-center sms-rate-text">
                        <span>You should receive an SMS for verification. Message and data <br /> rates may apply</span>
                    </div>
                    <!--Rate Text Constainer Start-->
                </div>
                <!--Sign Up Container End-->
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