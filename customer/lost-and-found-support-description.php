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
                <a href="online-support.php">
                    <span class="float-left">
                        <img src="../icons/back.svg" alt="Back Icon">
                    </span>
                </a>
                <span>Lost Item</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="../icons/menu.svg" alt="Menu Hamburger Icon">
                    </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <div style="text-align: center;" class="rest-container">
                <div class="text-center header-icon-logo-margin">
                    <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
                        <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
                            <img style="max-width: 39%;" src="..\images\Cabman Logo 2.png" alt="Main Logo">
                        </div>
                    </div>
                </div>
                <div class="address-title">Lost Item</div>

                <!--Information Container Start-->
                <div class="border-bottom-primary">
                    <div class="support-description-text font-weight-light">
                        In event of loss of an item on your trip, please send us a message as quickly as possible. Though we cannot guarantee the return of any lost item and assume no liability for any such item, we will do our best to recover the item. It is very important you call the Driver without delay.
                    </div>
                </div>
                <!--Information Container End-->

                <!--Comment Container Start-->
                <div class="comment-info comment-info-margin">
                    <span class="comment-label"> * </span> Comments
                    <textarea class="w-100"></textarea>
                    <a href="online-support.php" class="btn btn-primary text-uppercase">Send Message <span class="plus-icon fas fa-paper-plane"></span></a>
                </div>
                <!--Comment Container End-->

            </div>
        </div>

        <?php include 'includes/sidebar.php'; ?>
        <?php include 'includes/bottom.php'; ?>