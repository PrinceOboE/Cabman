<?php include 'includes/top.php'; ?>

<body>

    <!--Loading Container Start-->
    <div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>
    <!--Loading Container End-->

    <div class="row h-100">
        <div class="col-xs-12 col-sm-12">
            <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
                <img style="max-width: 300px;" src="..\images\Cabman-logo.png" alt="Main Logo">
            </div>

            <!--Sign In/Login Container Start-->
            <div class="address-title text-center">
                <div class="display-flex justify-content-center">
                    <div class="float-left sign-in-item border-bottom-primary-100" data-class="login">Login</div>
                    <div class="float-left sign-in-item border-bottom-light-grey" data-class="sign-up">Sign Up</div>
                </div>
            </div>
            <!--Sign In/Login Container End-->

            <!--Sign In Container Start-->
            <div class="sign-up-form-container login text-center">
                <form action="includes/login.php" method="post" class="width-100">

                    <!--Sign In Field Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="../icons/avatar-light.svg" alt="Avatar Icon">
                                </span>
                            </div>
                            <input class="form-control" type="text" autocomplete="off" name="username" placeholder="Username">
                        </div>
                    </div>
                    <!--Sign In Field End-->

                    <!--Sign In Field Start-->
                    <div class="form-group">
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
                    </div>
                    <!--Sign In Field End-->

                    <div class="form-submit-button">
                        <button class="btn btn-primary text-uppercase font-weight-normal col-12" name="login" type="submit">Login</button>
                    </div>
                </form>
            </div>
            <!--Sign In Container End-->

            <!--Sign Up Container Start-->
            <div class="sign-up-form-container sign-up text-center hidden">
                <form class="width-100" action="includes/createrider.php" method="post" enctype="multipart/form-data">

                    <!--Car Registration Field End-->

                    <div class="form-group">
                        <div class="input-group">
                            <div style="padding-top: 15px" class="input-group-prepend col-12">
                                <p for="image">Profile Image: </p>
                                <input style="margin-left: 15px;" type="file" name="image" accept="image/*" required>
                            </div>
                        </div>
                    </div>
                    <br>

                    <!--Profile Field Container Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="../icons/avatar-light.svg" alt="Avatar Icon">
                                </span>
                            </div>
                            <input class="form-control" type="text" autocomplete="off" name="full-name" placeholder="Full Name" required>
                        </div>
                    </div>
                    <!--Profile Field Container End-->

                    <!--Sign Up Field Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="../icons/envelope.svg" alt="Envelope Icon">
                                </span>
                            </div>
                            <input class="form-control" type="text" autocomplete="off" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <!--Sign Up Field End-->

                    <!--Sign Up Container Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <input class="col-12 form-control h-100" id="phone-input" type="tel" name="phone" autocomplete="off" data-intl-tel-input-id="0" placeholder="(201) 555-0123" required>
                        </div>
                    </div>
                    <!--Sign Up Container End-->

                    <!--Profile Field Container Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="../icons/marker.svg" alt="Marker Icon">
                                </span>
                            </div>
                            <input class="form-control" type="text" autocomplete="off" name="address" placeholder="Address" required>
                        </div>
                    </div>
                    <!--Profile Field Container End-->

                    <!--Car Registration Field Start-->
                    <div class="form-group">
                        <label class="width-100">
                            <span class="car-info-wrap display-block">
                                <select class="custom-select font-weight-light car-info" name="gender" required>
                                    <option value="">Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </span>
                        </label>
                    </div>

                    <!--Sign Up Field Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="../icons/avatar-light.svg" alt="Avatar Icon">
                                </span>
                            </div>
                            <input class="form-control" type="text" autocomplete="off" name="username" placeholder="Username">
                        </div>
                    </div>
                    <!--Sign Up Field End-->

                    <!--Sign Up Field Start-->
                    <div class="form-group">
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
                    </div>
                    <!--Sign Up Field End-->

                    <!--Sign Up Field Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="../icons/lock.svg" alt="Lock Icon">
                                </span>
                            </div>
                            <input class="form-control" type="password" name="passwordconirmaion" placeholder="Confirm Password">
                            <div class="input-group-append password-visibility">
                                <span>
                                    <img src="../icons/eye.svg" alt="Password Visibility Icon">
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--Sign Up Field End-->

                    <div class="form-submit-button">
                        <input type="submit" class="btn btn-primary text-uppercase col-12" name="create_user" value="Submit">
                    </div>
                </form>
            </div>
            <!--Sign Up Container End-->

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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.4.1.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!--International Telephone input JS-->
    <script src="../js/intlTelInput.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>