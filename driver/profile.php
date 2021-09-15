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
                <a href="index.php">
                    <span class="float-left">
                        <img src="../icons/back.svg" alt="Back Icon">
                    </span>
                </a>
                <span>Profile</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="../icons/menu.svg" alt="Menu Hamburger Icon">
                    </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">

                <!--Profile Information Container Start-->
                <div class="text-center header-icon-logo-margin">
                    <div class="profile-picture-container">
                    <img style="height: 200px; width: 200px; object-fit: cover; border-radius: 50%;" src="..\images\avatar\<?php echo $_SESSION['profileimg'] ?>" alt="Profile Picture">
                    <span class="fas fa-camera">
                            <input class="file-prompt" type="file" accept="image/*">
                        </span>
                    </div>
                    <div class="display-flex flex-column">
                        <h4 class="profile-name"><?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['lastname'] ?></h4>
                        <h6 class="profile-email font-weight-light"><?php echo $_SESSION['email_address'] ?></h6>
                        <h4 class="profile-email font-weight-light"><b>Wallet ID:</b> 234-556778</h4>
                    </div>

                    <div style="text-align: center;" class="address-title">
                        <h4>Personal Information</h4>
                    </div>
                    <br>
                    <span><img src="../icons/circle.svg" alt="Avatar Icon"></span><a style="color: black;" class="col-12" name="" href="">Edit Profile</a>
                    <span><img src="../icons/circle.svg" alt="Avatar Icon"></span><a style="color: black;" class="col-12" name="" href="">Change Password</a>

                </div>
                <!--Profile Information Container End-->

                <!--Profile Information Fields Container Start-->
                <div class="sign-up-form-container text-center">
                    <form class="width-100">

                        <!--Profile Field Container Start-->
                        <div class="form-group">
                            <h6 style="text-align: left;">First Name</h6>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="../icons/avatar-light.svg" alt="Avatar Icon">
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="full-name" placeholder="<?php echo $_SESSION['firstname'] ?>">
                            </div>
                        </div>
                        <!--Profile Field Container End-->

                        <!--Sign Up Input Field Start-->
                        <div class="form-group">
                            <h6 style="text-align: left;">Last Name</h6>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="../icons/avatar-light.svg" alt="Avatar Icon">
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="username" placeholder="<?php echo $_SESSION['lastname'] ?>">
                            </div>
                        </div>
                        <!--Sign Up Input Field End-->

                        <!--Profile Field Container Start-->
                        <div class="form-group">
                            <h6 style="text-align: left;">Email Address</h6>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="../icons/envelope.svg" alt="Envelope Icon">
                                    </span>
                                </div>
                                <input class="form-control" type="email" name="email" placeholder="<?php echo $_SESSION['email_address'] ?>">
                            </div>
                        </div>
                        <!--Profile Field Container End-->

                        <!--Profile Field Container Start-->
                        <div class="form-group">
                            <h6 style="text-align: left;">Phone Number</h5>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span><img src="../icons/phone.svg" alt="Phone Number"></span>
                                    </div>
                                    <input class="form-control" type="tel" name="phone" placeholder="<?php echo $_SESSION['pnumber'] ?>">
                                </div>
                        </div>
                        <!--Profile Field Container End-->

                        <!--Profile Field Container Start-->
                        <div class="form-group">
                            <h6 style="text-align: left;">Home Address</h6>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="../icons/marker.svg" alt="Marker Icon">
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="address" placeholder="<?php echo $_SESSION['user_address'] ?>">
                            </div>
                        </div>
                        <!--Profile Field Container End-->

                        <!--Profile Field Container Start-->
                        <div class="form-group">
                            <h6 style="text-align: left;">Gender</h6>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="../icons/marker.svg" alt="Marker Icon">
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="gender" placeholder="<?php echo $_SESSION['gender'] ?>">
                            </div>
                        </div>
                        <!--Profile Field Container End-->

                        <!--Profile Field Container Start-->
                        <!-- <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                    <img src="../icons/marker.svg"  alt="Marker Icon">
                                </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="country" placeholder="Country">
                            </div>
                        </div> -->
                        <!--Profile Field Container End-->

                        <!--Profile Field Container Start-->
                        <!-- <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                    <img src="../icons/marker.svg"  alt="Marker Icon">
                                </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="city" placeholder="City">
                            </div>
                        </div> -->
                        <!--Profile Field Container End-->

                        <!--Profile Field Container Start-->
                        <!-- <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                    <img src="../icons/marker.svg"  alt="Marker Icon">
                                </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="zip" placeholder="Zip Code">
                            </div>
                        </div> -->
                        <!--Profile Field Container End-->

                        <!--Profile Field Container Start-->
                        <!-- <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                    <img src="../icons/lock.svg" alt="Lock Icon">
                                </span>
                                </div>
                                <input class="form-control" type="password" name="password" placeholder="Password">
                                <div class="input-group-append password-visibility">
                                    <span>
                                    <img src="../icons/eye.svg" alt="Password Visibility Icon">
                                </span>
                                </div>
                            </div>
                        </div> -->
                        <!--Profile Field Container End-->

                        <!--Profile Field Container Start-->
                        <!-- <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                    <img src="../icons/lock.svg" alt="Lock Icon">
                                </span>
                                </div>
                                <input class="form-control" type="password" name="password" placeholder="Confirm Password">
                                <div class="input-group-append password-visibility">
                                    <span>
                                    <img src="../icons/eye.svg" alt="Password Visibility Icon">
                                </span>
                                </div>
                            </div>
                        </div> -->
                        <!--Profile Field Container End-->

                        <div class="form-submit-button">
                            <a style="background: green;" href="index.php" class="btn btn-dark text-uppercase ">Save Updates <span class="far fa-save margin-left-10"></span></a>
                        </div>
                    </form>
                </div>
                <!--Profile Information Fields Container End-->

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

        <?php include 'includes/sidebar.php'; ?>
        <?php include 'includes/bottom.php'; ?>