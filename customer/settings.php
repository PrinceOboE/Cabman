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
                <span>Settings</span>
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
                <div style="text-align: center;" class="address-title">Settings</div>

                <!--Settings Container Start-->
                <div class="settings-container">

                    <!--Setting Item Start-->
                    <div class="setting-wrapper">
                        <span>Traffic On the Map</span>
                        <label class="switch float-right">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                        <span class="clearfix"></span>
                    </div>
                    <!--Setting Item End-->

                    <!--Setting Item Start-->
                    <div class="setting-wrapper-1">
                        <span>Clear Cache</span>
                    </div>
                    <!--Setting Item End-->

                    <!--Setting Item Start-->
                    <div class="setting-wrapper-2">
                        <span>Do not Call</span>
                        <label class="switch float-right">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                        <span class="clearfix"></span>
                    </div>
                    <!--Setting Item End-->

                    <!--Setting Item Start-->
                    <div class="setting-wrapper-primary">
                        <span>Show my Location</span>
                        <label class="switch float-right">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>
                        <span class="clearfix"></span>
                    </div>
                    <!--Setting Item End-->

                </div>
                <!--Settings Container End-->

            </div>
        </div>

        <?php include 'includes/sidebar.php'; ?>
        <?php include 'includes/bottom.php'; ?>