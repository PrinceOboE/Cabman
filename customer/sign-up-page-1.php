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
                <div class="text-center header-icon-logo-margin">
                    <img style="max-width: 300px;" src="..\images\Cabman-logo.png" alt="Main Logo">
                </div>
                <?php
                if (isset($_POST['create_user'])) {
                    $user_password        = $_POST['password'];
                    $passwordconirmaion   = $_POST['passwordconirmaion'];

                    $user_password        = mysqli_real_escape_string($connection, $user_password);
                    $passwordconirmaion   = mysqli_real_escape_string($connection, $passwordconirmaion);

                    $user_email           = $_POST['email'];
                    $gender               = $_POST['gender'];
                    $user_address         = $_POST['address'];

                    $firstname            = $_POST['first-name'];
                    $lastname             = $_POST['last-name'];

                    $profileimg           = $_FILES['image']['name'];
                    $profileimg_tmp       = $_FILES['image']['tmp_name'];
                    move_uploaded_file($profileimg_tmp, "../images/avatar/" . $profileimg);

                    $user_date            = date('d-m-y');
                    $ran_id               = rand(time(), 100000000);
                    $phone                = $_SESSION['phone'];
                    $user_role            = "rider";

                    if ($user_password == $passwordconirmaion) {
                        $select = mysqli_query($connection, "SELECT `email_address` FROM `users` WHERE `email_address` = '" . $_POST['email'] . "'") or exit(mysqli_error($connection));
                        if (mysqli_num_rows($select)) {
                ?>

                            <h5 style="margin-bottom: 0; margin-top: 5%; font-weight: 100px; color: red; text-align: center;">Email already exists</h5>;

                        <?php
                        } elseif (count($errors) == 0) {

                            $query = "INSERT INTO users(unique_id,fname, profileimg, user_date, user_type, user_password, email_address, gender, user_address, lname, pnumber, status) ";
                            $query .= "VALUES({$ran_id},'{$firstname}','{$profileimg}',now(),'{$user_role}','{$user_password}','{$user_email}','{$gender}','{$user_address}','{$lastname}','{$phone}','{$status}') ";
                            $create_post_query = mysqli_query($connection, $query);
                            confirmQuery($create_post_query);

                            if ($create_post_query) {

                                // Setting a cookie
                                setcookie("username", "$lastname", time() + 3600 * 24 * 7 * 4 * 12, "/");

                                $_SESSION['email_address'] = $user_email;
                                $_SESSION['unique_id']     = $ran_id;
                                $_SESSION['user_role']     = $user_role;
                                $_SESSION['user_password'] = $user_password;
                                $_SESSION['profileimg']    = $profileimg;
                                $_SESSION['gender']        = $gender;
                                $_SESSION['firstname']     = $firstname;
                                $_SESSION['lastname']      = $lastname;
                                $_SESSION['user_address']  = $user_address;
                                $_SESSION['pnumber']       = $phone;
                                header("Location: index.php");
                            }
                        } else {
                            header("Location: sign-up-page-error.php");
                        }
                    } else {
                        ?>

                        <h5 style="margin-bottom: 0; margin-top: 5%; font-weight: 100px; color: red; text-align: center;">Passwords do not match</h5>";

                <?php
                    }
                }
                ?>
                <!--Sign Up Container Start-->
                <div style="margin-top: 0;" class="sign-up-form-container text-center">
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

                        <!--Profile Field Container Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="../icons/avatar-light.svg" alt="Avatar Icon">
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="first-name" placeholder="First Name" required>
                            </div>
                        </div>
                        <!--Profile Field Container End-->

                        <!--Profile Field Container Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="../icons/avatar-light.svg" alt="Avatar Icon">
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="last-name" placeholder="Last Name" required>
                            </div>
                        </div>
                        <!--Profile Field Container End-->

                        <!--Sign Up Input Field Start-->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span><img src="../icons/envelope.svg" alt="Envelope Icon"></span>
                                </div>
                                <input class="form-control" type="email" autocomplete="off" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <!--Sign Up Input Field End-->

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
                        <!-- <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span>
                                        <img src="../icons/avatar-light.svg" alt="Avatar Icon">
                                    </span>
                                </div>
                                <input class="form-control" type="text" autocomplete="off" name="username" placeholder="Username" required>
                            </div>
                        </div> -->
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
                            <input type="submit" class="btn btn-primary text-uppercase col-12" name="create_user" value="Continue">
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