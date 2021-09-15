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
                <span>Addresses</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                    <img src="../icons/menu.svg" alt="Menu Hamburger Icon">
                </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="text-center header-icon-logo-margin">
                <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
                    <img style="max-width: 39%;" src="..\images\Cabman Logo 2.png" alt="Main Logo">
                </div>
                </div>
                <div style="text-align: center;" class="address-title">My Addresses</div>

                <!--Address Page Links Container Start-->
                <div class="sign-up-form-container">
                    <div class="width-100">

                        <!--Address Page Link Start-->
                        <div class="border-bottom-primary">
                            <a href="home-address.php" class="href-decoration-none home-options-list">
                                <span class="icon">
                                <img src="../icons/home.svg" alt="Home Icon">
                            </span> Home
                                <span class="fas fa-check icon chosen hidden"></span>
                                <span class="icon choose float-right">
                                <img src="../icons/angle-right.svg" alt="Angle Right Icon">
                            </span>
                            </a>
                        </div>
                        <!--Address Page Link End-->

                        <!--Address Page Link Start-->
                        <div class="border-bottom-primary">
                            <a href="office-address.php" class="href-decoration-none home-options-list">
                                <span class="far fa-building icon"></span> Office
                                <span class="fas fa-check icon chosen hidden"></span>
                                <span class="icon choose float-right">
                                <img src="../icons/angle-right.svg" alt="Angle Right Icon">
                            </span>
                            </a>
                        </div>
                        <!--Address Page Link End-->

                        <!--Address Page Link Start-->
                        <div class="border-bottom-primary">
                            <a href="friend-address.php" class="href-decoration-none home-options-list">
                                <span class="icon">
                                <img src="../icons/avatar-dark.svg" alt="Avatar Darker Icon">
                            </span> My Friend Laura
                                <span class="fas fa-check icon chosen hidden"></span>
                                <span class="icon choose float-right">
                                <img src="../icons/angle-right.svg" alt="Angle Right Icon">
                            </span>
                            </a>
                        </div>
                        <!--Address Page Link End-->

                        <!--Add Address Button Start-->
                        <div class="add-new-address">
                            <a href="add-new-address.php" class="btn btn-dark w-100 text-center">Add New Address <img class="plus-icon" src="../icons/plus.svg" alt="Add Icon"></a>
                        </div>
                        <!--Add Address Button End-->
                    </div>
                </div>
                <!--Address Page Links Container End-->
            </div>
        </div>


        <?php include 'includes/sidebar.php'; ?>
        <?php include 'includes/bottom.php'; ?>