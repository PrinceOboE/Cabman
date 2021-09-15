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
                <span>Account successfully created</span>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">

                <!--Successful Verification Information Start-->
                <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra ">
                    <img src="../icons/verified.svg" alt="Verification Successful">
                </div>
                <div class="verification-text">
                    Account successfully created!
                </div>
                <div class="all-container text-center font-weight-light">
                    <h5>Congratulations <?php echo $_SESSION['lastname'] ?>! Your account has been successfully created. However, your account has not yet been approved as a Driver. You are required to complete your documentation via the "Upload Documents" section in the Menu.Thank you.</h5>
                </div>
                <!--Successful Verification Information End-->

                <!--Login Button Start-->
                <div class="sign-up-form-container text-center">
                    <form class="width-100">
                        <div class="form-submit-button">
                            <a style="background: green; color: white;  border: 1px solid green;" href="index.php" class="btn btn-primary font-weight-light text-uppercase">Proceed to account</a>
                        </div>
                    </form>
                </div>
                <!--Login Button End-->

            </div>
        </div>

        <!--Terms And Conditions Agreement Container Start-->
        <div class="col-xs-12 col-sm-12 text-center sms-rate-text font-roboto flex-end margin-bottom-30">
            <div class="container-sms-rate-text width-100 font-11">
                <span class="light-gray font-weight-light">By signing up you have agreed to our </span>
                <br/>
                <a href="#" class="dark-link">
                    <span class="font-weight-light">Terms of Use & Privacy Policy</span>
                </a>
            </div>
        </div>
        <!--Terms And Conditions Agreement Container End-->

    </div>
    
    <?php include 'includes/bottom.php'; ?>