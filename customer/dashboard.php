<?php include 'includes/top.php'; ?>

<body>

    <!--Loading Container Start-->
    <div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>
    <!--Loading Container End-->

    <div class="row h-100">
        <div class="col-xs-12 col-sm-12 remaining-height">

            <!--Page Title & Icons Start-->
            <div class="header-icons-container text-center">
                <a href="index.php">
                    <span class="float-left">
                        <img src="../icons/back.svg" alt="Back Icon">
                    </span>
                </a>
                <span class="title">Dashboard</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="../icons/menu.svg" alt="Menu Hamburger Icon">
                    </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="all-wide-container trip-history-driver-container">

                    <!--Profile Information Container Start-->
                    <div class="text-center header-icon-logo-margin">
                        <div class="profile-picture-container">
                    <img style="height: 200px; width: 200px; object-fit: cover; border-radius: 50%;" src="..\images\avatar\<?php echo $_SESSION['profileimg'] ?>" alt="Profile Picture">
                        </div>
                        <div class="display-flex flex-column">
                        <h4 class="profile-name"><?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['lastname'] ?></h4>
                        <h6 class="profile-email font-weight-light"><?php echo $_SESSION['email_address'] ?></h6>
                        <h4 class="profile-email font-weight-light"><b>Wallet ID: </b><?php echo $_SESSION['unique_id']?></h4>
                        </div>

                    </div>
                    <!--Profile Information Container End-->

                    <!--Search Container Start-->
                    <!--<div class="form-group search-history">-->
                    <!--    <div class="input-group light-field">-->
                    <!--        <input class="form-control" type="text" autocomplete="off" name="search" placeholder="Search">-->
                    <!--        <div class="input-group-append">-->
                    <!--            <span class="fas fa-search"></span>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--Search Container End-->

                    <div class="all-sales-history-items">

                        <!--Sale History Item Start-->
                        <a href="wallet.php" class="href-decoration-none">
                            <div class="display-flex align-items-center sales-history-item">
                                <div class="width-100">
                                    <div>Wallet Balance</div>
                                </div>
                                <div class="float-right">
                                    <div class="text-right"><h5><b>N54,244.30</b></h5></div>
                                </div>
                            </div>
                        </a>
                        <!--Sale History Item End-->

                        <!--Sale History Item Start-->
                        <a href="wallet.php" class="href-decoration-none">
                            <div class="display-flex align-items-center sales-history-item">
                                <div class="width-100">
                                    <div>Amount Funded</div>
                                </div>
                                <div class="float-right">
                                    <div class="text-right"><h5><b>N54,244.30</b></h5></div>
                                </div>
                            </div>
                        </a>
                        <!--Sale History Item End-->

                        <!--Sale History Item Start-->
                        <a href="trip-description.php" class="href-decoration-none">
                            <div class="display-flex align-items-center sales-history-item">
                                <div class="width-100">
                                    <div>Discounts Earned</div>
                                </div>
                                <div class="float-right">
                                    <div class="text-right"><h5><b>N544.30</b></h5></div>
                                </div>
                            </div>
                        </a>
                        <!--Sale History Item End-->

                        <!--Sale History Item Start-->
                        <a href="wallet.php" class="href-decoration-none">
                            <div class="display-flex align-items-center sales-history-item">
                                <div class="width-100">
                                    <div>Amount Spent</div>
                                </div>
                                <div class="float-right">
                                    <div class="text-right"><h5><b>N54,244.30</b></h5></div>
                                </div>
                            </div>
                        </a>
                        <!--Sale History Item End-->

                        <!--Sale History Item Start-->
                        <a href="history.php" class="href-decoration-none">
                            <div class="display-flex align-items-center  sales-history-item">
                                <div class="width-100">
                                    <div>Number of Rides</div>
                                </div>
                                <div class="float-right">
                                    <div class="text-right"><h5><b>30</b></h5></div>
                                </div>
                            </div>
                        </a>
                        <!--Sale History Item End-->

                        <!--Load More Button Start-->
                        <div class="">
                            <button style="background: green;" type="button" class="btn btn-dark text-uppercase">Fund your Wallet</button>
                        </div>
                        <!--Load More Button End-->

                    </div>
                </div>
            </div>
        </div>

        <?php include 'includes/sidebar.php'; ?>
        <?php include 'includes/bottom.php'; ?>