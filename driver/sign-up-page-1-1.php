<?php include "includes/top2.php"; ?>
<?php

if (isset($_POST['create_user'])) {
    $phone             = $_POST['phone'];
    $username          = $_SESSION['username'];
    $username          = mysqli_real_escape_string($connection, $username);
    $phone             = mysqli_real_escape_string($connection, $phone);

    if ($user_password == $passwordconirmaion) {

        $query = "SELECT pnumber FROM userd WHERE username = $username ";

        $query .= "UPDATE userd SET pnumber = '{$phone}' ";
        $create_post_query = mysqli_query($connection, $query);
        confirmQuery($create_post_query);

        if ($create_post_query) {
            $_SESSION['phone'] = $phone;
            header("Location: sign-up-page-2.php");
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
                <span>Sign Up</span>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
                    <img style="max-width: 300px;" src="..\images\Cabman-logo.png" alt="Main Logo">
                </div>

                <!--Sign Up Container Start-->
                <div class="sign-up-form-container text-center">
                    <form class="width-100">
                        <div class="form-group">
                            <div class="input-group">
                                <input class="col-12 form-control h-100" id="phone-input" type="tel" name="phone" autocomplete="off" data-intl-tel-input-id="0" placeholder="(201) 555-0123">
                            </div>
                        </div>
                        <div class="form-submit-button small-padding">
                            <a href="sign-up-page-2.php" class="btn btn-primary text-uppercase">Continue</a>
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