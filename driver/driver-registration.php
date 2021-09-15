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
                <a href="index.php">
                    <span class="float-left">
                        <img src="../icons/back.svg" alt="Back Icon">
                    </span>
                </a>
                <span>Upload Documents</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="../icons/menu.svg" alt="Menu Hamburger Icon">
                    </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
               
                <div class="address-title">Upload Your Documents</div>

                <!--Driver Registration Information Links Container Start-->
                <div class="sign-up-form-container">
                    <div class="width-100">
                        <!--Driver Registration Item Start-->
                        <div class="border-bottom-primary ">
                            <a href="add-new-car.php" class="home-options-list href-decoration-none">
                                Vehicle Registration
                                <span class="fas fa-check icon chosen hidden"></span>
                                <span class="icon choose float-right">
                                    <img src="../icons/angle-right.svg" alt="Angle Right Icon">
                                </span>
                            </a>
                        </div>
                        <!--Driver Registration Item End-->

                        <!--Driver Registration Item Start-->
                        <div class="border-bottom-primary">
                            <a href="personal-id-card.php" class="home-options-list href-decoration-none">
                                Personal ID Card
                                <span class="fas fa-check icon chosen hidden"></span>
                                <span class="icon choose float-right">
                                    <img src="../icons/angle-right.svg" alt="Angle Right Icon">
                                </span>
                            </a>
                        </div>
                        <!--Driver Registration Item End-->
                    </div>
                </div>
                <!--Driver Registration Information Links Container End-->

            </div>
        </div>

        <?php include 'includes/sidebar.php'; ?>
        <?php include 'includes/bottom.php'; ?>