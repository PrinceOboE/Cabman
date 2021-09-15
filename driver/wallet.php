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
            <span>Wallet</span>
            <a href="#">
                <span class="float-right menu-open closed">
                    <img src="../icons/menu.svg" alt="Menu Hamburger Icon">
                </span>
            </a>
        </div>
        <!--Page Title & Icons End-->

        <div class="rest-container">
            <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
                <div class="profile-picture-container">
                    <img src="https://via.placeholder.com/181x150" alt="Wallet">
                </div>
            </div>
            <div class="address-title">Wallet</div>

            <!--Wallet Options Container Start-->
            <div class="sign-up-form-container">
                <div class="width-100">
                    <!--Option Container Start-->
                    <div class="border-bottom-primary">
                        <a href="withdraw-history.php" class="home-options-list href-decoration-none">
                            Withdraw History
                            <span class="icon choose float-right">
                                <img src="../icons/angle-right.svg" alt="Angle Right Icon">
                            </span>
                        </a>
                    </div>
                    <!--Option Container End-->

                    <!--Option Container Start-->
                    <div class="border-bottom-primary">
                        <a href="sales-history.php" class="home-options-list href-decoration-none">
                            Trip History
                            <span class="icon choose float-right">
                                <img src="../icons/angle-right.svg" alt="Angle Right Icon">
                            </span>
                        </a>
                    </div>
                    <!--Option Container End-->

                    <!--Option Container Start-->
                    <div class="border-bottom-primary">
                        <a href="payment-method.php" class="home-options-list href-decoration-none">
                            Add Payout Methods
                            <span class="icon choose float-right">
                                <img src="../icons/angle-right.svg" alt="Angle Right Icon">
                            </span>
                        </a>
                    </div>
                    <!--Option Container End-->

                </div>
            </div>
            <!--Wallet Options Container End-->

        </div>
    </div>

    <?php include 'includes/sidebar.php'; ?>
        <?php include 'includes/bottom.php'; ?>