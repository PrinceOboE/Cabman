<?php include "includes/top.php"; ?>
<?php

if (isset($_POST['create_user'])) {
    $username             = $_POST['username'];
    $user_password        = $_POST['password'];
    $passwordconirmaion   = $_POST['passwordconirmaion'];

    $username             = mysqli_real_escape_string($connection, $username);
    $user_password        = mysqli_real_escape_string($connection, $user_password);
    $passwordconirmaion   = mysqli_real_escape_string($connection, $passwordconirmaion);

    $user_email           = $_POST['email'];
    $gender               = $_POST['gender'];
    $user_address         = $_POST['address'];
    $pnumber              = $_POST['phone'];
    $fullname             = $_POST['full-name'];
    $profileimg         = $_FILES['image']['name'];
    move_uploaded_file($profileimg, "../images/avatar/$profileimg" );
       
    $user_date            = date('d-m-y');
    $user_role            = "rider";

    if ($user_password == $passwordconirmaion) {

        // Check if email already exists
        $sql = "SELECT * FROM users WHERE email_address='$user_email' LIMIT 1";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            header("Location: sign-up-page-error.php");
        } elseif (count($errors) === 0) {

            $query = "INSERT INTO users(username, profileimg, user_date, user_type, user_password, email_address, gender, user_address, fullname, pnumber) ";
            $query .= "VALUES('{$username}','{$profileimg}',now(),'{$user_role}','{$user_password}','{$user_email}','{$gender}','{$user_address}','{$fullname}','{$pnumber}') ";
            $create_post_query = mysqli_query($connection, $query);
            confirmQuery($create_post_query);

            if ($create_post_query) {
                $_SESSION['username']      = $username;
                $_SESSION['email_address'] = $user_email;
                $_SESSION['user_role']     = $user_role;
                $_SESSION['user_password'] = $user_password;
                $_SESSION['profileimg']    = $profileimg;
                $_SESSION['gender']        = $gender;
                $_SESSION['fullname']      = $fullname;
                $_SESSION['user_address']  = $user_address;
                $_SESSION['pnumber']       = $pnumber;
                header("Location: index.php");
            }
        } else {
            header("Location: sign-up-page-error.php");
        }
    }
}
?>

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
                <div class="text-center header-icon-logo-margin">
                    <img style="max-width: 300px;" src="..\images\Cabman-logo.png" alt="Main Logo">
                </div>

                <!--Sign Up Container Start-->
                <div class="sign-up-form-container text-center">
                    <form class="width-100" action="" method="post" enctype="multipart/form-data">

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

                        <!--Profile Information Container Start-->
                        <!-- <div class="text-center header-icon-logo-margin">
                            <div class="profile-picture-container">
                                <img src="../images/avatar.svg" alt="Profile Picture">
                                <span class="">
                                    <input class="file-prompt" type="file" name="image" accept="image/*" required>
                                </span>
                            </div>
                        </div> -->
                        <!--Profile Information Container End-->

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

                        <!--Sign Up Input Field Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span><img src="../icons/envelope.svg" alt="Envelope Icon"></span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <!--Sign Up Input Field End-->

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

                        <!--Sign Up Input Field Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="../icons/avatar-light.svg" alt="Avatar Icon">
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="username" placeholder="Username" required>
                            </div>
                        </div>
                        <!--Sign Up Input Field End-->

                        <!--Sign Up Input Field Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span><img src="../icons/lock.svg" alt="Lock Icon"></span>
                                </div>
                                <input class="form-control" type="password" name="password" placeholder="Password" required>
                                <div class="input-group-append password-visibility">
                                    <span>
                                        <img src="../icons/eye.svg" alt="Password Visibility Icon">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--Sign Up Input Field End-->

                        <!--Sign Up Input Field Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span><img src="../icons/lock.svg" alt="Lock Icon"></span>
                                </div>
                                <input class="form-control" type="password" name="passwordconirmaion" placeholder="Confirm Password" required>
                                <div class="input-group-append password-visibility">
                                    <span>
                                        <img src="../icons/eye.svg" alt="Password Visibility Icon">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--Sign Up Input Field End-->

                        <div class="form-submit-button">
                            <input type="submit" class="btn btn-primary text-uppercase col-12" name="create_user" value="Sign Up">

                            <!-- <a href="sign-up-page-2.php" class="btn btn-primary text-uppercase"></a> -->
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