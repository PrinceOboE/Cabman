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
                <span>Payment Method</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                    <img src="../icons/menu.svg" alt="Menu Hamburger Icon">
                </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
              
            <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
                    <img style="max-width: 39%;" src="..\images\Cabman Logo 2.png" alt="Main Logo">
                </div>
                <div class="text-center add-payment-method">
                   <h5> Add Payment Methods <br/> You Like</h5>
                </div>

                <!--Payment Method Item Start-->
                <div>
                    <a class="text-center payment-options-list href-decoration-none">
                        <span class="far fa-money-bill-alt icon font-22"></span> Cash (<span class="font-weight-light font-11">Default Payment Method</span>)
                        <span class="icon chosen"><img src="../icons/check.svg"  alt="Check Icon"></span>
                        <span class="icon choose float-right hidden">
                        <img class="visible-icon" src="../icons/angle-right.svg" alt="Angle Right Icon">
                        <img class="hover-icon" src="../icons/angle-right-white.svg" alt="Angle Right Icon">
                    </span>
                    </a>
                </div>
                <!--Payment Method Item End-->

                <!--Payment Method Item Start-->
                <div>
                    <a class="payment-options-list disabled href-decoration-none" href="paypal-payment-method.php">
                        <span class="icon"><img src="../icons/paypal.svg"  alt="Paypal Icon"></span> Wallet
                        <span class="fas fa-check icon chosen hidden"></span>
                        <span class="icon choose float-right">
                        <img class="visible-icon" src="../icons/angle-right.svg" alt="Angle Right Icon">
                        <img class="hover-icon" src="../icons/angle-right-white.svg" alt="Angle Right Icon">
                    </span>
                    </a>
                </div>
                <!--Payment Method Item End-->

                <!--Payment Method Item Start-->
                <div>
                    <a href="credit-cards.php" class="payment-options-list dark disabled href-decoration-none">
                        <span class="fab fa-cc-visa icon font-22"></span> Credit Card
                        <span class="fas fa-check icon chosen hidden"></span>
                        <span class="icon choose float-right">
                        <img class="visible-icon" src="../icons/angle-right.svg" alt="Angle Right Icon">
                        <img class="hover-icon" src="../icons/angle-right-white.svg" alt="Angle Right Icon">
                    </span>
                    </a>
                </div>
                <!--Payment Method Item End-->

                <!--Payment Method Item Start-->
                <div>
                    <a class="payment-options-list disabled href-decoration-none" href="paypal-payment-method.php">
                        <span class="icon"><img src="../icons/paypal.svg"  alt="Paypal Icon"></span> Paypal
                        <span class="fas fa-check icon chosen hidden"></span>
                        <span class="icon choose float-right">
                        <img class="visible-icon" src="../icons/angle-right.svg" alt="Angle Right Icon">
                        <img class="hover-icon" src="../icons/angle-right-white.svg" alt="Angle Right Icon">
                    </span>
                    </a>
                </div>
                <!--Payment Method Item End-->
            </div>
        </div>

        <?php include 'includes/sidebar.php'; ?>
        <?php include 'includes/bottom.php'; ?>