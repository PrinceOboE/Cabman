<?php include "includes/top.php"; ?>
<?php

if (isset($_POST['create_vehicle'])) {
    $liscencenumber            = $_POST['liscencenumber'];
    $userid                    = $_SESSION['unique_id'];
    $front                  = $_FILES['front']['name'];
    $front_tmp              = $_FILES['front']['tmp_name'];
    move_uploaded_file($front_tmp, "../images/liscence/front/" . $front);
    $back                      = $_FILES['back']['name'];
    $back_tmp                  = $_FILES['back']['tmp_name'];
    move_uploaded_file($back_tmp, "../images/liscence/back/" . $back);
    $user_email      = $_SESSION['email_address'];
    $user_role       = $_SESSION['user_role'];
    $user_password   = $_SESSION['user_password'];
    $profileimg      = $_SESSION['profileimg'];
    $gender          = $_SESSION['gender'];
    $firstname       = $_SESSION['firstname'];
    $user_address    = $_SESSION['user_address'];
    $ran_id          = $_SESSION['unique_id'];
    $lastname        = $_SESSION['lastname'];
    $phone           = $_SESSION['pnumber'];
    $query = "INSERT INTO driverdetails(liscencenumber, driverid, front, back) ";
    $query .= "VALUES('{$liscencenumber}','{$userid}','{$front}','{$back}') ";
    $create_post_query = mysqli_query($connection, $query);
    confirmQuery($create_post_query);
    if ($create_post_query) {
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
        $user_email      = $_SESSION['email_address'];
        $user_role       = $_SESSION['user_role'];
        $user_password   = $_SESSION['user_password'];
        $profileimg      = $_SESSION['profileimg'];
        $gender          = $_SESSION['gender'];
        $firstname       = $_SESSION['firstname'];
        $user_address    = $_SESSION['user_address'];
        $pnumber         = $_SESSION['pnumber'];
        $ran_id          = $_SESSION['unique_id'];
        $query2 = "INSERT INTO userd(unique_id, fname, profileimg, user_date, user_type, user_password, email_address, gender, user_address, lname, pnumber) VALUES({$ran_id},'{$firstname}','{$profileimg}',now(),'{$user_role}','{$user_password}','{$user_email}','{$gender}','{$user_address}','{$lastname}','{$phone}') ";
        $create_post_query2 = mysqli_query($connection, $query2);
        confirmQuery($create_post_query2);
        if ($create_post_query2) {
            // Setting a cookie
            setcookie("username", "$lastname", time() + 3600 * 24 * 7 * 4 * 12, "/");
            header("Location: successful-register.php");
        }
    } else {
        header("Location: sign-up-page-error.php");
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
                <a href="sign-up-page-1.php">
                    <span class="float-left">
                        <img src="../icons/back.svg" alt="Back Icon">
                    </span>
                </a>
                <span>Driver's License</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="../icons/menu.svg" alt="Menu Hamburger Icon">
                    </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="address-title">Driver's License</div>

                <form class="width-100" action="" method="post" enctype="multipart/form-data">
                    <!--Driver's License Fields Container Start-->
                    <div class="all-container all-container-with-classes">
                        <form class="width-100">

                            <!--Input Field Container Start-->
                            <div class="form-group form-control-margin">
                                <label class="label-title">Driver's License Number</label>
                                <div class="input-group">
                                    <input class="form-control form-control-with-padding" type="text" name="liscencenumber" required autocomplete="off" placeholder="Driver License Number">
                                    <div class="input-group-append">
                                        <span class="fas fa-id-card icon-inherited-color"></span>
                                    </div>
                                </div>
                            </div>
                            <!--Input Field Container End-->

                            <!--Input Field Container Start-->
                            <div class="form-group form-control-margin">
                                <label class="label-title">Driver's License Expiration Date</label>
                                <div class="input-group">
                                    <input class="form-control form-control-with-padding" type="date" name="liscencenumber" required autocomplete="off" placeholder="Driver License Number">
                                </div>
                            </div>
                            <!--Input Field Container End-->

                            <!--Upload Front Start-->
                            <div class="display-flex justify-content-between">
                                <span class="text-uppercase">FRONT</span>
                                <span class="delete-btn">
                                    <img src="../icons/delete.svg" alt="Delete Icon">
                                </span>
                            </div>
                            <div class="scan-your-card-prompt margin-top-5">
                                <div class="position-relative">
                                    <div class="upload-picture-container">
                                        <div class="upload-camera-container text-center">
                                            <span class="camera">
                                                <img src="../icons/photocamera.svg" alt="Camera Icon">
                                            </span>
                                        </div>
                                    </div>
                                    <input class="scan-prompt" name="front" type="file" accept="image/*" required>
                                </div>
                            </div>
                            <!--Upload Front End-->

                            <!--Upload Back Start-->
                            <div class="display-flex justify-content-between">
                                <span class="text-uppercase">BACK</span>
                                <span class="delete-btn">
                                    <img src="../icons/delete.svg" alt="Delete Icon">
                                </span>
                            </div>
                            <div class="scan-your-card-prompt margin-top-5">
                                <div class="position-relative">
                                    <div class="upload-picture-container">
                                        <div class="upload-camera-container text-center">
                                            <span class="camera">
                                                <img src="../icons/photocamera.svg" alt="Camera Icon">
                                            </span>
                                        </div>
                                    </div>
                                    <input class="scan-prompt" name="back" type="file" accept="image/*" required>
                                </div>
                            </div>
                            <!--Upload Front End-->

                        </form>
                        <div class="form-submit-button text-center">
                            <input type="submit" class="btn btn-primary text-uppercase col-12" name="create_vehicle" value="Continue" required>

                            <!-- <a href="personal-id-card.php" class="btn btn-dark text-uppercase ">Save</a> -->
                        </div>
                    </div>
                    <!--Driver's License Fields Container End-->
            </div>
        </div>

        <?php include 'includes/bottom.php'; ?>