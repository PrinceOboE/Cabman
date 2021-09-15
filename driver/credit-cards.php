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
            <a href="payment-method.php">
                <span class="float-left">
                    <img src="../icons/back.svg" alt="Back Icon">
                </span>
            </a>
            <span>Credit Cards</span>
            <a href="#">
                <span class="float-right menu-open closed">
                    <img src="../icons/menu.svg" alt="Menu Hamburger Icon">
                </span>
            </a>
        </div>
        <!--Page Title & Icons End-->

        <div class="rest-container">
            <div class="all-credit-cards">

                <!--Credit Card Container Start-->
                <div class="credit-card-container">
                    <label class="display-flex align-items-center font-weight-light">
                        <input type="radio" class="radio-grey" name="card"> <span class="text-uppercase set-primary-card">Set as Primary</span>
                    </label>
                    <div>
                        <img class="img-responsive width-100" src="../images/credit-card-1.png" alt="Credit Card">
                    </div>
                </div>
                <!--Credit Card Container End-->

                <!--Credit Card Container Start-->
                <div class="credit-card-container">
                    <label class="display-flex align-items-center font-weight-light">
                        <input type="radio" class="radio-grey" name="card"> <span class="text-uppercase set-primary-card">Set as Primary</span>
                    </label>
                    <div>
                        <img src="../images/credit-card-2.svg" class="img-responsive width-100" alt="Credit Card">
                    </div>
                </div>
                <!--Credit Card Container End-->

                <a href="add-new-card.php" class="btn btn-dark shadow">Add New Card <img class="plus-icon" src="../icons/plus.svg" alt="Add Icon"></a>
            </div>

            <!--Note Text Start-->
            <div class="container-sms-rate-text width-100 font-11 text-center margin-top-5">
                <span class="light-gray font-weight-light">Paying by card is safe and convenient. <br/>The money will be charged after each trip automatically. </span>
            </div>
            <!--Note Text End-->

        </div>
    </div>


    <?php include 'includes/sidebar.php'; ?>
        <?php include 'includes/bottom.php'; ?>