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
            <span>Report Driver</span>
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
                        <img style="max-width: 39%;" src="..\images\Cabman Logo 2.png" alt="Main Logo">
                    </div>
                </div>
                <div style="text-align: center;" class="address-title">Report Driver</div>

            <!--Information Container Start-->
            <div class="border-bottom-primary">
                <div class="support-description-text font-weight-light">
                Just as we hold our Drivers to the highest standard of service and safety, so we also expect our Riders to behave within certain limits. Our Drivers are prohibited from smoking, drinking or using drugs during the course of the ride. They are also prohibited from driving if they have consumed excessive amounts of alcohol. Consequently, should you observe any uncomplimentary behavior, please send us a message on details of the behavior with the Driver’s details
                </div>
            </div>
            <!--Information Container End-->

            <!--Comment Container Start-->
            <div class="comment-info comment-info-margin">
                <span class="comment-label"> * </span> Comments
                <textarea class="w-100"></textarea>
                <a href="online-support.php" class="btn btn-primary text-uppercase">Send Message <span class="fas fa-paper-plane plus-icon"></span></a>
            </div>
            <!--Comment Container Start-->

        </div>
    </div>
    
    <?php include 'includes/sidebar.php'; ?>
        <?php include 'includes/bottom.php'; ?>