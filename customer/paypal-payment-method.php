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
            <a href="payment-method.php">
                <span class="float-left">
                    <img src="../icons/back.svg" alt="Back Icon">
                </span>
            </a>
            <span>PayPal</span>
            <a href="#">
                <span class="float-right menu-open closed">
                    <img src="../icons/menu.svg" alt="Menu Hamburger Icon">
                </span>
            </a>
        </div>
        <!--Page Title & Icons End-->

        <div class="rest-container paypal">
            <div class="text-center header-icon-logo-margin">
                <div class="profile-picture-container">
                    <img src="../icons/paypal.svg"  class="paypal-icon" alt="Paypal Logo">
                </div>
            </div>
            <div class="text-center margin-top-25">Add your Paypal  Email<br/>Address</div>

            <!--Paypal Email Address Info Start-->
            <div class="sign-up-form-container">
                <form class="width-100">

                    <!--Email Address Field Start-->
                    <div class="form-group text-center">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="../icons/envelope.svg" alt="Envelope Icon">
                                </span>
                            </div>
                            <input class="form-control" type="email" name="email" placeholder="Paypal Email Address">
                        </div>
                    </div>
                    <!--Email Address Field End-->

                    <div class="form-submit-button small-padding text-center">
                        <a href="payment-method.php" class="btn btn-dark text-uppercase">Add New Account</a>
                    </div>
                    <div class="form-group">

                        <!--Email Option Start-->
                        <label class="font-weight-light width-100">
                            <input type="radio" name="email" class="margin-right-15"> sale@web-technology.cc
                            <span class="float-right remove-email-paypal">
                                <img src="../icons/cross.svg" alt="Close Icon">
                            </span>
                        </label>
                        <!--Email Option End-->

                        <!--Email Option Start-->
                        <label class="font-weight-light width-100">
                            <input type="radio" name="email" class="margin-right-15" checked> sale@your-domain.com
                            <span class="float-right remove-email-paypal">
                                <img src="../icons/cross.svg" alt="Close Icon">
                            </span>
                        </label>
                        <!--Email Option End-->
                    </div>
                </form>
            </div>
            <!--Paypal Email Address Info End-->
        </div>
    </div>

    <?php include 'includes/sidebar.php'; ?>
<?php include 'includes/bottom.php'; ?>